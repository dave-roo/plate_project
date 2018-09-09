<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
  		@include('layouts.partials.head')
    <meta charset="utf-8">
    <title>Customer Activity</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  </head>
  <body>
		
    <div class="container">
	 
	
	 
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="./">Home</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item">
			<a class="nav-link" href="./cusactivity">Customer Activities</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="./performancemain">Performance</a>
		  </li>
		</ul>
	  </div>
	</nav>
	
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Guests</th>
        <th>Table</th>
        <th>Duration</th>
        <th>Arrival</th>
        <th>Departure</th>
      </tr>
    </thead>
    <tbody>
      @foreach($customeractivity as $cusactive)
      <tr>
        <td>{{$cusactive['guests']}}</td>
        <td>{{$cusactive['table']}}</td>
        <td>{{$cusactive['duration']}}</td>
        <td>{{$cusactive['arrival']}}</td>
        <td>{{$cusactive['departure']}}</td>
	  </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
  
<script>
var ctx = document.getElementById("myChart").getContext('2d');

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        datasets: [{
            data: [400, 200, 240, 430, 530, 350, 400, 200, 340, 430, 530, 543],
			label: "Customers - 2018",
			borderColor: "#c45850",
			fill: false
        }],
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    },
});
</script>
  
</html>