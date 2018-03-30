@extends('layouts.mainlayout')

@section('content')

<div class="container">

<form action="{{ route('lingo') }}" method="post">
	{{ csrf_field() }}
<select name="language">
	<option value="en">English</option>
	<option value="de">Deutsch</option>
</select>
<input type="submit" value="Choose">
</form>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
				<div class="form-group row">
					<div class="col-md-4">
					<label for="departing" class="control-label">Departing</label>
					<input id="departing" type="text" class="form-control">
					</div>
					
					<div class="col-md-4">
					<label for="destination" class="control-label">Destination</label>
					<input id="destination" type="text" class="form-control">
					</div>
					
					<div class="col-md-3">
					<label for="date" class="control-label">Date</label>
					<input id="date" type="text" class="form-control">
					</div>
				</div>			
            </div>
        </div>
    </div>
</div>

@endsection