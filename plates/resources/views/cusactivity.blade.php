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
			<a class="nav-link active" href="/cusactivity">Customer Activities</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="/performancemain">Performance</a>
		  </li>
		</ul>
	  </div>
	</nav>
	<canvas id="myChart"></canvas>

  </body>
  
<script>
var ctx = document.getElementById("myChart").getContext('2d');

window.chartColors = {
	red: 'rgb(255, 99, 132)',
	orange: 'rgb(255, 159, 64)',
	yellow: 'rgb(255, 205, 86)',
	green: 'rgb(75, 192, 192)',
	blue: 'rgb(54, 162, 235)',
	purple: 'rgb(153, 102, 255)',
	grey: 'rgb(201, 203, 207)'
};

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
		labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            data: [{{ $customeractivity2018 }}],
			label: "Customers - 2018",
			borderColor: window.chartColors.red,
			fill: false
        },
        {
            data: [300, 200, 210, 230, 530, 350, 422, 200, 140, 430, 530, 543],
			label: "Customers - 2017",
			borderColor: window.chartColors.green,
			fill: false
		},
        {
            data: [324, 30, 240, 30, 130, 150, 222, 101, 140, 210, 100, 43],
			label: "Customers - 2016",
			borderColor: window.chartColors.purple,
			fill: false
		}],
    },
});
</script>
  
</html>