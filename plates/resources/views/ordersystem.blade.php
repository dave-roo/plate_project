<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Order list</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/svg.js/2.6.4/svg.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
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
				  <th scope="col">Seat</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <th scope="row">1</th>
				  <td>Entree</td>
				  <td>Sliders (Pulled Pork)</td>
				  <td><input size="2"></input></td>
				  <td><input size="2"></input></td>
				</tr>
			  </tbody>
			</table>		
			</div>
			<div class="col-2"></div>
		</div>
		</body>
</html>
