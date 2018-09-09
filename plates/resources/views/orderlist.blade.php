<!DOCTYPE html>
<html>
    <head>
		@include('layouts.partials.head')
	
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="./">Home</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		</nav>
		
		<div class="row">
			<div class="col-12">
				<table class="table table-striped">
				<thead>
				  <tr>
					<th>ID</th>
					<th>Order</th>
					<th>Item</th>
					<th>Table</th>
					<th>Category</th>
					<th>Description</th>
					<th>Special</th>
					<th>Comments</th>
				  </tr>
				</thead>
				<tbody>
				  @foreach($orderlist->sortByDesc('id') as $order)
				  <tr>
					<td>{{$order['id']}}</td>
					<td>{{$order['orderid']}}</td>
					<td>{{$order['itemid']}}</td>
					<td>{{$order['table']}}</td>
					<td>{{$order['category']}}</td>
					<td>{{$order['description']}}</td>
					<td>{{$order['special']}}</td>
					<td>{{$order['comments']}}</td>
				  </tr>
				  @endforeach
				</tbody>
			  </table>
			</div>
		</div>
		</div>
		
</html>

<script type="text/javascript">
    setTimeout(function () { 
      location.reload();
    }, 3000);
</script>
