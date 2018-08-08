<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
  		@include('layouts.partials.head')
    <meta charset="utf-8">
    <title>Customer Activity</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
	<script src="http://www.chartjs.org/dist/2.7.2/Chart.bundle.js"></script>
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
			<a class="nav-link" href="/cusactivity">Customer Activities</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link active" href="/performancemain">Performance</a>
		  </li>
		</ul>
	  </div>
	</nav>
	
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Guests</th>
        <th>Table</th>
        <th>Duration (In-Out)</th>
        <th>Duration (Out-Table)</th>
        <th>Duration (In-Table)</th>
        <th>In Time</th>
        <th>Out Time</th>
        <th>Arrival Time</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach($performancemain as $cusactive)
      <tr>
        <td>{{$cusactive['guests']}}</td>
        <td>{{$cusactive['table']}}</td>
        <td>00:20</td>
        <td>00:05</td>
        <td>01:25</td>
        <td>15:00</td>
        <td>15:20</td>
        <td>15:25</td>
        <td>07-08-2018</td>
	  </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
  
<script>
var ctx = document.getElementById("myChart").getContext('2d');

'use strict';

window.chartColors = {
	red: 'rgb(255, 99, 132)',
	orange: 'rgb(255, 159, 64)',
	yellow: 'rgb(255, 205, 86)',
	green: 'rgb(75, 192, 192)',
	blue: 'rgb(54, 162, 235)',
	purple: 'rgb(153, 102, 255)',
	grey: 'rgb(201, 203, 207)'
};

(function(global) {
	var Months = [
		'January',
		'February',
		'March',
		'April',
		'May',
		'June',
		'July',
		'August',
		'September',
		'October',
		'November',
		'December'
	];

	var COLORS = [
		'#4dc9f6',
		'#f67019',
		'#f53794',
		'#537bc4',
		'#acc236',
		'#166a8f',
		'#00a950',
		'#58595b',
		'#8549ba'
	];

	var Samples = global.Samples || (global.Samples = {});
	var Color = global.Color;

	Samples.utils = {
		srand: function(seed) {
			this._seed = seed;
		},

		rand: function(min, max) {
			var seed = this._seed;
			min = min === undefined ? 0 : min;
			max = max === undefined ? 1 : max;
			this._seed = (seed * 9301 + 49297) % 233280;
			return min + (this._seed / 233280) * (max - min);
		},

		numbers: function(config) {
			var cfg = config || {};
			var min = cfg.min || 0;
			var max = cfg.max || 1;
			var from = cfg.from || [];
			var count = cfg.count || 8;
			var decimals = cfg.decimals || 8;
			var continuity = cfg.continuity || 1;
			var dfactor = Math.pow(10, decimals) || 0;
			var data = [];
			var i, value;

			for (i = 0; i < count; ++i) {
				value = (from[i] || 0) + this.rand(min, max);
				if (this.rand() <= continuity) {
					data.push(Math.round(dfactor * value) / dfactor);
				} else {
					data.push(null);
				}
			}

			return data;
		},

		labels: function(config) {
			var cfg = config || {};
			var min = cfg.min || 0;
			var max = cfg.max || 100;
			var count = cfg.count || 8;
			var step = (max - min) / count;
			var decimals = cfg.decimals || 8;
			var dfactor = Math.pow(10, decimals) || 0;
			var prefix = cfg.prefix || '';
			var values = [];
			var i;

			for (i = min; i < max; i += step) {
				values.push(prefix + Math.round(dfactor * i) / dfactor);
			}

			return values;
		},

		months: function(config) {
			var cfg = config || {};
			var count = cfg.count || 12;
			var section = cfg.section;
			var values = [];
			var i, value;

			for (i = 0; i < count; ++i) {
				value = Months[Math.ceil(i) % 12];
				values.push(value.substring(0, section));
			}

			return values;
		},

		color: function(index) {
			return COLORS[index % COLORS.length];
		},

		transparentize: function(color, opacity) {
			var alpha = opacity === undefined ? 0.5 : 1 - opacity;
			return Color(color).alpha(alpha).rgbString();
		}
	};

	// DEPRECATED
	window.randomScalingFactor = function() {
		return Math.round(Samples.utils.rand(-100, 100));
	};

	// INITIALIZATION

	Samples.utils.srand(Date.now());

}(this));

var leData = {
    labels: [
        "ME",
        "SE"
    ],
    datasets: [{
        label: false,
        data: [100, 75],
        backgroundColor: ["#669911", "#119966"],
        hoverBackgroundColor: ["#66A2EB", "#FCCE56"]
    }]
};

var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: leData,
    options: {
		legend: {
			display: false
		},
        scales: {
            xAxes: [{
                ticks: {
            		beginAtZero: true
                }
            }],
            yAxes: [{
            	stacked: true
            }]
        }

    }
});

</script>
  
</html>