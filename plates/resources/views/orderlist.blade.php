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
		
		</br>
		<div class="row">
			<div class="col-10">
			
			<table class="table">
			  <thead class="thead-dark">
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Order No#</th>
				  <th scope="col">Description</th>
				  <th scope="col">(Special)</th>
				  <th scope="col">Table No#</th>
				  <th scope="col">Order Taken</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <th scope="row">1</th>
				  <td>84731</td>
				  <td>Smashed Avo</td>
				  <td>None</td>
				  <td>2.1</td>
				  <td>11:32 - 31/03/18</td>
				</tr>
				<tr>
				  <th scope="row">2</th>
				  <td>84732</td>
				  <td>Toast with Jam</td>
				  <td>None</td>
				  <td>4.2</td>
				  <td>10:11 - 31/03/18</td>
				</tr>
				<tr>
				  <th scope="row">3</th>
				  <td>84733</td>
				  <td>Pancakes</td>
				  <td>with Bacon</td>
				  <td>3.1</td>
				  <td>09:45 - 31/03/18</td>
				</tr>
				<tr>
				  <th scope="row">4</th>
				  <td>84734</td>
				  <td>Fruit Salad</td>
				  <td>No grapes</td>
				  <td>1.2</td>
				  <td>11:10 - 31/03/18</td>
				</tr>
			  </tbody>
			</table>		
			</div>
			<div class="col-2"></div>
		</div>

</html>