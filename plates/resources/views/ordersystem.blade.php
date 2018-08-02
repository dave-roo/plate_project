<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Order list</title>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
      	<script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div class="row">
			<div class="col-6">

			<table class="table">
			  <thead class="thead-dark">
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Category</th>
				  <th scope="col">Description</th>
				  <th scope="col">Quantity</th>
				  <th scope="col">Table</th>
				  <th scope="col">Seat</th>
				  <th scope="col">Special</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <th scope="row">1</th>
				  <td>Entree</td>
				  <td>Sliders (Pulled Pork)</td>
				  <td><input size="2"></input></td>
				  <td><input size="2"></input></td>
				  <td><input size="2"></input></td>
				  <td><input size="10"></input></td>
				</tr>
			  </tbody>
			</table>
			</div>
			<div class="col-2"></div>
		</div>
		</body>
</html>
