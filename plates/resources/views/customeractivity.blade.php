<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Customer Activity</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
	 
	<canvas style="width:%25; height:%25" id="myChart"></canvas>
	 
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Guests</th>
        <th>Table</th>
        <th>Duration</th>
        <th>Arrival</th>
        <th>Departure</th>
        <th>Day of the week</th>
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
        <td>{{$cusactive['dayoftheweek']}}</td>
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