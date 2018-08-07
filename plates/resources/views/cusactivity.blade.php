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
	<canvas id="myChart"></canvas>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="./">Home</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item">
			<a class="nav-link active" href="/cusactivity">Customer Activities</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="/performancemain">Performance</a>
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
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cusactivity as $cusactive)
      <tr>
        <td>{{$cusactive['guests']}}</td>
        <td>{{$cusactive['table']}}</td>
        <td>01:20</td>
        <td>15:00</td>
        <td>16:20</td>
        <td>07-08-2018</td>
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
		labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            data: [400, 200, 240, 430, 530, 353, 400, 200, 340, 430, 530, 543],
			label: "Customers - 2018",
			borderColor: "#c45850",
			fill: false
        },
        {
            data: [300, 200, 240, 230, 530, 350, 422, 200, 140, 430, 530, 543],
			label: "Customers - 2017",
			borderColor: "#b25453",
			fill: false
		}],
    },
});
</script>
  
</html>