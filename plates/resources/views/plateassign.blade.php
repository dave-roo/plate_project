<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <title>SmartServe</title>
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

	<img class="rounded mx-auto d-block img-thumbnail" src="{{ asset('img/logo_smartserve.png') }}">


	<h1>Plate Assign</h1>

    <table class="table table-striped table-dark">
    <thead>
        <tr>
            <th style="width: 5%">ID</th>
            <th style="width: 5%">Order</th>
            <th style="width: 15%">Description</th>
            <th style="width: 5%">Table</th>
            <th style="width: 10%">Time of arrival</th>
            <th style="width: 25%">Plate ID</th>
			<th style="width: 20%">Status</th>
        </tr>
    </thead>
    <tbody>
         @foreach($orders as $order)
          <tr>
			  <td> {{$order->id}}</td>
			  <td> {{$order->orderid}}</td>
			  <td> {{$order->description}}</td>
			  <td> {{$order->tableno}}</td>
              <td> {{$order->timeofarrival}}</td>
				@if ($order->status == '999999999999')
					<td></td>
					<td><button class="setplate btn btn-primary" value={{$order->id}} >Assign</button></td>
				@else
				    <td> {{$order->status}}</td>
					<td><button class="btn btn-success" value={{$order->id}} >Active</button>  <button class="deactiveplate btn btn-danger" value={{$order->id}} >Unassign</button></td>
				@endif
          </tr>
         @endforeach
   </tbody>
  </table>
  </div>

  </body>
</html>

<script type="text/javascript">
$(document).ready(function(){

    $(".setplate").click(function(){

		var dataOrder = {
			id: $(this).attr('value')
        }

		$.ajax({
			url: "http://localhost:8000/setplate",
			method: "POST",
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			dataType: 'json',
			data: dataOrder,
			success: function(){
			},
			error: function(){
				window.location=self.location;
			}
		});


    });

    $(".deactiveplate").click(function(){

		var deactiveOrder = {
			id: $(this).attr('value')
        }


		$.ajax({
			url: "http://localhost:8000/deactiveplate",
			method: "POST",
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			dataType: 'json',
			data: deactiveOrder,
			success: function(){
			},
			error: function(){
				window.location=self.location;
			}
		});

    });

});
</script>
