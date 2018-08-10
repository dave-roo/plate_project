<!doctype html>
<html>
    <head>
		@include('layouts.partials.head')
	
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<div class="row">
			<div class="col-10">
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
</html>
