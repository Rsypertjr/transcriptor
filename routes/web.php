<?php
namespace \Routes;
use Illuminate\Http\Request;
use \App\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
	$products = \App\Product::all();
	$edit = "false";
	//return view('productSubmit',compact('products'),['edit' => $edit]);	
	return view('welcome');
});


Route::post('/submit', function(Request $request){
/*	$validator = Validator::make($request->all(),[
		'name' => 'required',
		'quantityInStock' => 'required',
		'pricePerItem' => 'required',
	]);
	
	if($validator->fails()){
		return back()
			->withInput()
			->withErrors($validator);
	}  */
		
	$product = new App\Product;
    $product->name = $request->input('name');
    $qt = $product->quantityInStock = $request->input('quantity');
    $ppI = $product->pricePerItem = $request->input('price');	
	$product->totalValue = $qt * $ppI;	
	$product->editing = 'No';
	$checkForName = App\Product::where('name',$product->name)->get();
	
	if(count($checkForName) > 0)
		App\Product::where('name',$product->name)->update(array('name' => $product->name));
    else		
		$product->save();
	
	$products =  App\Product::all();
	$productsJS = $products->toJson();
	file_put_contents('JSONfile', json_encode($productsJS,TRUE));
	
	$edit = "false";
    return view('productSubmit',compact('products'),['edit' => $edit]);
		
});

Route::post('/update',function(Request $request){
	$pname = $request->input('name');
	$pQty = $request->input('quantity');
	$pPpi = $request->input('price');
	$pId = $request->input('pId');
	App\Product::where('id',$pId)->update(array('quantityInStock' => $pQty));
	App\Product::where('id',$pId)->update(array('pricePerItem' => $pPpi));
	App\Product::where('id',$pId)->update(array('name' => $pname));
	//App\Product::where('id',$pId)->update(array('editing' => 'No'));
	
	$edit = "true";
	$products = App\Product::all();
	$edProds = App\Product::where('editing','Yes')->get();
	foreach($edProds as $edProd){
			$edit = "true";	
			return view('productSubmit',compact('products','edProd'),['edit' => $edit]);	
	    }
});

Route::post('/delete',function(Request $request){
	$pname = $request->input('name');
	//$pQty = $request->input('quantity');
	//$pPpi = $request->input('price');
	//$pId = $request->input('pId');
	//App\Product::where('id',$pId)->update(array('quantityInStock' => $pQty));
	//App\Product::where('id',$pId)->update(array('pricePerItem' => $pPpi));
	App\Product::where('name',$pname)->delete();
	//App\Product::where('id',$pId)->update(array('editing' => 'No'));
	
	$edit = "true";
	$products = App\Product::all();
	$edProds = App\Product::where('editing','Yes')->get();
	if(count($edProds ) > 0){
					foreach($edProds as $edProd){
							$edit = "true";	
							return view('productSubmit',compact('products','edProd'),['edit' => $edit]);	
						}
					}
	else{
		$edit = "false";
		return view('productSubmit',compact('products'),['edit' => $edit]);
	}
});

Route::post('/edit', function(Request $request){
	$productIds = $request->input("id");

	$edit = "false";
	foreach($productIds as $key=>$value){				
				$edProds = App\Product::where('id',$value)->get();
				
				App\Product::where('id',$value)
							->update(array('editing' => 'Yes'));
					
				$products = App\Product::all();
				foreach($edProds as $edProd){
					    $edit = "true";	
						return view('productSubmit',compact('products','edProd'),['edit' => $edit]);	
				}
			}
	   
	
});
