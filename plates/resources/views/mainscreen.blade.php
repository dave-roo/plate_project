<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
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
			<div style="padding:20px;" class="col-2"><button type="button" class="btn btn-success btn-lg">Edit Menu</button></div>
			<div style="padding:20px;" class="col-2"><button type="button" class="btn btn-primary btn-lg">Order List</button></div>
		</div>
		
		<div class="row">
			<div class="col-4"></div>
			<div style="padding:20px;" class="col-2"><button type="button" class="btn btn-warning btn-lg">Analysis</button></div>
			<div style="padding:20px;" class="col-2"><button type="button" class="btn btn-danger btn-lg">Assign Plate</button></div>
		</div>
		
		<div class="row">
			<div class="col-4"></div>
			<div style="padding:20px;" class="col-2"><button type="button" class="btn btn-info btn-lg">Table Map</button></div>
			<div style="padding:20px;" class="col-2"><button type="button" class="btn btn-secondary btn-lg">Order Screen</button></div>
		</div>
		
		</div>
		
</html>
