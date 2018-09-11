@include('layouts.partials.head')

<title>SmartServe | Order Create</title>
<h1>Create an Order</h1>

<table class="table table-striped table-bordered">
<thead>
        <tr>
            <td>Order ID</td>
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
<tr>
    <td>
		<input id="orderid" class="form-control" placeholder="Order ID">
        </td>
    <td>
		<div class="form-group">
		  <select class="form-control" id="category">
			<option>Entree</option>
			<option>Main</option>
			<option>Dessert</option>
		  </select>
		</div>
    </td>
    <td>
		<div style="width:140px;" class="form-group">
		  <select class="form-control" id="meal">
			<option></option>
		  </select>
		</div>
    </td>
    <td>
        <input id="amount" class="form-control" size="2">
    </td>
    <td>
        <input id="price" class="form-control" size="4" readonly>
    </td>
    <td>
		<input id="table" size="2" class="form-control">
    </td>
    <td>
	    <input id="seat" size="2" class="form-control">
    </td>
    <td>
        <textarea id="comments" class="form-control" placeholder=""></textarea>
    </td>
</tr>
</tbody>

</table>


<script>
document.onload = started();

function started(){
	get_entree();
	get_price();
}

$("#meal").change(function() {
	get_price();
});

$( "#category" ).change(function() {
	
	if($( "#category" ).val() == "Main"){
		get_mains();
		get_price();
	}
	else if($( "#category" ).val() == "Entree"){
		get_entree();
	    get_price();
	}
	else if($( "#category" ).val() == "Dessert"){
		get_dessert();
		get_price();
	}
	
});

	function clearoptions(){
		var select = document.getElementById("meal");
		var length = select.options.length;
		$( "#meal" ).empty();
		
		for (i = 0; i < length; i++) {
		  select.options[i] = null;
		}
	}

	function get_mains(){
		
		clearoptions();
		$.ajax({url: "/getmains", success: function(result){
			i=0;
			while (i<100) {
				if(result[i] != null){
					$("#meal").append('<option value="' + result[i] + '">' + result[i] + '</option>');
				}
				i++;
			}
		}});
	};
	
	function get_entree(){
		clearoptions();
		$.ajax({url: "/getentrees", success: function(result){
			i=0;
			while (i<100) {
				if(result[i] != null){
					$("#meal").append('<option value="' + result[i] + '">' + result[i] + '</option>');
				}
				i++;
			}
		}});
	};

	function get_dessert(){
		clearoptions();
		$.ajax({url: "/getdesserts", success: function(result){
			i=0;
			while (i<100) {
				if(result[i] != null){
					$("#meal").append('<option value="' + result[i] + '">' + result[i] + '</option>');
				}
				i++;
			}
		}});
	};

	function get_price(){

		$.ajax({url: "/getprice", success: function(result){
			$( "#price" ).val(result[$("#meal").val()]);
			
		}});
	};
	
	
</script>