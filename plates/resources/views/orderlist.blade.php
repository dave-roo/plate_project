<!DOCTYPE html>
<html>
    <head>
		@include('layouts.partials.head')
	
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
					<th>id</th>
					<th>orderid</th>
					<th>tableno</th>
					<th>itemid</th>
					<th>special</th>
					<th>description</th>
				  </tr>
				</thead>
				<tbody>
				  @foreach($orderlist as $order)
				  <tr>
					<td>{{$order['id']}}</td>
					<td>{{$order['orderid']}}</td>
					<td>{{$order['tableno']}}</td>
					<td>{{$order['itemid']}}</td>
					<td>{{$order['special']}}</td>
					<td>{{$order['description']}}</td>
				  </tr>
				  @endforeach
				</tbody>
			  </table>
			</div>
		</div>
		</div>
		
</html>
