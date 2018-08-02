<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
	  	@include('layouts.partials.head')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Main Screen</title>
		<meta name="csrf-token" content="{{ csrf_token() }}" />

		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>

		<link rel="stylesheet" href="{{ asset('css/app.css') }}">

		<div style="padding-top:250px;">

		<div class="row">
			<div class="col-4"></div>
			<div style="padding:20px;" class="col-2"><a href="./menucreate" class="btn btn-success btn-lg">Edit Menu</a></div>
			<div style="padding:20px;" class="col-2"><a href="./orderlist" class="btn btn-primary btn-lg">Order List</a></div>
		</div>

		<div class="row">
			<div class="col-4"></div>
			<div style="padding:20px;" class="col-2"><a href="./analytics" class="btn btn-warning btn-lg">Analysis</a></div>
			<div style="padding:20px;" class="col-2"><a href="./plateassign" class="btn btn-danger btn-lg">Assign Plate</a></div>
		</div>

		<div class="row">
			<div class="col-4"></div>
			<div style="padding:20px;" class="col-2"><a href="./tablemap" class="btn btn-info btn-lg">Table Map</a></div>
			<div style="padding:20px;" class="col-2"><a href="./ordersystem" class="btn btn-secondary btn-lg">Order Screen</a></div>
		</div>

		</div>

</html>
