<?php
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Route;
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



Route::get('/cinp', function () {
    return view('courseViewer');
});



Route::post('/course','CourseController@addCourse');

Route::post('/report','CourseController@reportCard');

Route::post('/createPDF','CourseController@createPDF');

Route::post('/storeJSF','CourseController@storeJSON');

Route::post('/checkStudent','CourseController@checkStudent');

Route::post('/getStudent','CourseController@getStudent');

Route::post('/renewDatabase', 'CourseController@renewDatabase');

Route::post('/clearDatabase', 'CourseController@clearDatabase');





Route::get('/', function () {
	$products = App\Product::all();
	$edit = "false";
	return view('productSubmit',compact('products'),['edit' => $edit]);	
	//return view('welcome');
});

Route::get('/bootstrap', function () {
	
	return view('learnBootStrap');
});

Route::get('/bootstrap2', function () {
	
	return view('learnBootStrap2');
});


Route::get('/scrollSpy', function () {
	
	return view('scrollSpy');
});

Route::get('/scrollSpyVert', function () {
	
	return view('scrollSpyVert');
});

Route::get('/affixEx', function () {
	
	return view('affixEx');
});

Route::get('/company', function () {
	
	return view('companyTheme');
});

Route::get('/angularJS', function () {
	
	return view('angularJSEx');
});


Route::get('/affixVertEx', function () {
	
	return view('affixVertEx');
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
	$aProduct = array();
	$aProduct = App\Product::where('name',$pname)->get()->toArray();
	//print_r($aProduct[0]);
	$pId = $aProduct[0]['id'];
	$pTv = $pQty*$pPpi;
	App\Product::where('id',$pId)->update(array('quantityInStock' => $pQty));
	App\Product::where('id',$pId)->update(array('pricePerItem' => $pPpi));
	App\Product::where('id',$pId)->update(array('name' => $pname));
	App\Product::where('id',$pId)->update(array('totalValue' => $pTv));
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
	App\Product::where('name',$pname)->delete();
	
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
	$name = $request->input("name");
	$edProds = array();
	$edProd = array();
	$edit = "false";
				$edProds = App\Product::where('name',$name)->get();
				//print_r($edProd);
				App\Product::where('name',$name)
							->update(array('editing' => 'Yes'));
					
				$products = App\Product::all();
				foreach($edProds as $edProd){
					$edit = "true";
					return view('productSubmit',compact('products','edProd'),['edit' => $edit]);	
			    }
});



