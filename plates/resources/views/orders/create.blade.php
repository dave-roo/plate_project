
@extends('layouts.orders_layout')

@section('content')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/svg.js/2.6.4/svg.min.js"></script>



<title>SmartServe | Order Create</title>
<h1>Create an Order</h1>

<form method="post" action="/orders/store" enctype="multipart/form-data">
	{{ csrf_field() }}
	<table class="table table-striped table-bordered">
	<thead>
			<tr>
				<td>Category</td>
				<td>Meal</td>
				<td>Quantity</td>
				<td>Price $</td>
				<td>Table</td>
				<td>Seat</td>
				<td>Comments</td>
			</tr>
		</thead>

	<tbody>
	
	<?php 
	for ($x = 1; $x < 6; $x++) {
	echo
	'<tr>
		<td><div class="form-group"><select name="category_' .$x. '" class="form-control" id="category_' .$x. '"></select></div></td>
		<td style="width:140px;"><div style="width:140px;" class="form-group"><select name="title_' .$x. '" class="form-control" id="meal_' .$x. '"></select></div></td>
		<td style="width:40px;"><input name="quantity_' .$x. '" id="quantity_' .$x. '" class="form-control" size="2"></td>
		<td><input name="price_' .$x. '" id="price_' .$x. '" class="form-control" size="4" readonly></td>
		<td><input name="table_' .$x. '" id="table_' .$x. '" size="2" class="form-control"></td>
		<td><input name="seat_' .$x. '" id="seat_' .$x. '" size="2" class="form-control"></td>
		<td><textarea name="comments_' .$x. '" id="comments_' .$x. '" class="form-control" placeholder=""></textarea></td>
	</tr>';
	}
	?>
	
	</tbody>
	</table>

	<input id="submit" type="submit" value="Submit" class="btn btn-primary">
	</form>


	<?php
	
	echo '<script>';
	
	for ($x = 1; $x < 6; $x++) {
		
echo 
'document.onload = started_' .$x. '();

	$( "#category_' .$x. '" ).val("Entree");
	
function started_' .$x. '(){
	
	$("#category_' .$x. '").append("<option value='."Entree".'>Entree</option>");
	$("#category_' .$x. '").append("<option value='."Main".'>Main</option>");
	$("#category_' .$x. '").append("<option value='."Dessert".'>Dessert</option>");
	
	$("#meal_' .$x. '").append("<option value='."Soup".'>Soup</option>");
	$("#meal_' .$x. '").append("<option value='."Salad".'>Salad</option>");
	
	$("#price_' .$x. '").val("4");
}

$("#meal_' .$x. '").change(function() {
	get_price' .$x. '();
});

$( "#category_' .$x. '" ).change(function() {
	
	if($( "#category_' .$x. '" ).val() == "Main"){
		get_mains' .$x. '();
		get_price' .$x. '();
	}
	else if($( "#category_' .$x. '" ).val() == "Entree"){
		get_entree' .$x. '();
	    get_price' .$x. '();
	}
	else if($( "#category_' .$x. '" ).val() == "Dessert"){
		get_dessert' .$x. '();
		get_price' .$x. '();
	}
	
});

	function clearoptions' .$x. '(){
		var select = document.getElementById("meal_' .$x. '");
		var length = select.options.length;
		$( "#meal_' .$x. '" ).empty();
		
		for (i = 0; i < length; i++) {
		  select.options[i] = null;
		}
	}

	function get_mains' .$x. '(){
		
		clearoptions' .$x. '();
		$.ajax({url: "/getmains", success: function(result){
			i=0;
			while (i<100) {
				if(result[i] != null){
					console.log(result[i]);
					$("#meal_' .$x. '").append("<option value='.'"'.' + result[i] + '.'"'.'>'.'"'.' + result[i] + '.'"'.'</option>'.'"'.');
				}
				i++;
			}
		}});
	};
	
	function get_entree' .$x. '(){
		clearoptions' .$x. '();
		$.ajax({url: "/getentrees", success: function(result){
			i=0;
			while (i<100) {
				if(result[i] != null){
					$("#meal_' .$x. '").append("<option value='.'"'.' + result[i] + '.'"'.'>'.'"'.' + result[i] + '.'"'.'</option>'.'"'.');
				}
				i++;
			}
		}});
	};

	function get_dessert' .$x. '(){
		clearoptions' .$x. '();
		$.ajax({url: "/getdesserts", success: function(result){
			i=0;
			while (i<100) {
				if(result[i] != null){
					$("#meal_' .$x. '").append("<option value='.'"'.' + result[i] + '.'"'.'>'.'"'.' + result[i] + '.'"'.'</option>'.'"'.');
				}
				i++;
			}
		}});
	};

	function get_price' .$x. '(){

		$.ajax({url: "/getprice", success: function(result){
			$( "#price_' .$x. '" ).val(result[$("#meal_' .$x. '").val()]);
			
		}});
	};
	';
	}
	?>

</script>
@endsection