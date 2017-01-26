<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
		<link href="/css/app.css" rel="stylesheet">
		
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script>
			jQuery(document).ready(function() {
			  
                  
				$('table tr th:nth-child(6) button').css('display','none');	
				$('table tr th:nth-child(6) span').css('display','block');	
				$('tr td:nth-child(6)').on('mousedown',function(){
					// name attribute contains id of product
					
					$(this).on('mouseup',function(){
						if($('table tr td:contains("Yes")').length > 0)	{
							$('table tr th:nth-child(6) button').css('display','block');
							$('table tr th:nth-child(6) span').css('display','none');
							
						}
						if($('table tr td:contains("Yes")').length == 0){
								$('table tr th:nth-child(6) span').css('display','block').text('Want to Edit?');
								$('table tr th:nth-child(6) button').css('display','none');
						}
					});
					
					
					if($(this).text() == 'No, but Click for Yes')				
						$(this).text('Yes, but Click for No');
					else if($(this).text() == 'Yes, but Click for No')
						$(this).text('No, but Click for Yes');
			
				});
				$('form#edits button').on('click',function(){				        
                        $('table tr td:contains("Yes, but Click")').each(function(){
							 var id = $(this).attr("name");
							 $('form#edits')
							   .append('<input type="hidden" name="id[]" value="'+ id +'">');
						 });
						 
						 $('form#edits').submit();
					
					});
					
				$('form#deleteItem button').on('click',function(){				        
                         var name = $('form input#name').val()
						 $('form#deleteItem')
						   .append('<input type="hidden" name="name" value="'+ name +'">');
					
						 
						 $('form#deleteItem').submit();
					
					});	
			
			});
		</script>
        <style>
		</style>
    </head>

    <body>      

		<h2 style="position:relative;width:auto;margin-left:45%">Laravel Test</h2>
	   
        <div id="mainContainer" class="content">
				 @if($edit == 'false')
					<div class="container">
						<form action="/submit" method="post">
							{!! csrf_field() !!}
							<div class="form-group">
								<label for="title">Product Name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
							<div class="form-group">
								<label for="title">Quantity in Stock</label>
								<input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
							</div>
							<div class="form-group">
								<label for="title">Price per Item</label>
								<input type="number" step="any" class="form-control" id="price" name="price" placeholder="Price">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					 </div>	
					 <br><br>
				@endif
		        @if($edit == 'true')
					<div class="container">
						<form action="/update" method="post">
							{!! csrf_field() !!}
							<div class="form-group">
								<label for="title">Edit Product Name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$edProd->name}}"}">
							</div>
							<div class="form-group">
								<label for="title">Edit Quantity in Stock</label>
								<input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" value="{{$edProd->quantityInStock}}">
							</div>
							<div class="form-group">
								<label for="title">Edit Price per Item</label>
								<input type="number" step="any" class="form-control" id="price" name="price" placeholder="Price" value="{{$edProd->pricePerItem}}">
								<input type="hidden" name="pId" value="{{$edProd->id}}">
							</div>
							<button type="submit" class="btn btn-default">Submit Edit</button>
							
						</form>
						
						<form id="deleteItem" style="position:relative;float:left;margin-top:-2.55em;margin-left:10em" id="delInput" action="/delete" method="post">
								{!! csrf_field() !!}
								<button class="btn btn-default">Delete this Item</button>
						</form>
						<br>
						<form id="moreInput" action="/" method="get">
								{!! csrf_field() !!}
								<button type="submit" class="btn btn-default">Back to More Input</button>
						</form>
					 </div>	
					 <br><br>
				@endif
				@if (count($products) > 0)
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="panel panel-success">
								<div class="panel-heading">Product Data</div>						
									<!-- Table -->
									<table class="table table-bordered table-striped">
										<tr>
											<th>Product Name</th>
											<th>Quantity In Stock</th>								
											<th>Price per Item</th>								
											<th>Datetime Submitted</th>								
											<th>Total Value</th>
											<th>
												<form id="edits" action="/edit" method="post">
													{!! csrf_field() !!}
													<button>Click Here to Edit!</button>
													<span>Want to Edit?</span></th>
												</form>
										</tr>
									@foreach($products as $product)
										<tr>
											<td>{{ $product->name}}</td>
											<td>{{ $product->quantityInStock }}</td>
											<td>{{ $product->pricePerItem }}</td>
											<td>{{ $product->updated_at }}</td>
											<td>{{ $product->totalValue }}</td>
											<td id ="td".{{ $product->id}} name="{{ $product->id }}">No, but Click for Yes</td>
										</tr>
									@endforeach
						</table>				
								</div>
							</div>
						</div>
					</div>
				@endif
			
        </div>
		
	<!--<meta name="_token" content="{!! csrf_token() !!}" /> -->
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    </body>
</html>

