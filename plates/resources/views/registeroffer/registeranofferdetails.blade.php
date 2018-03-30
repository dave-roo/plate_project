@extends('layouts.mainlayout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
				Summary:
				
					@if (Route::has('login'))
						@auth
						
						@else
						<a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#Register">Register</a>
						<a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#Login">@lang('messages.login')</a>
						@endauth
					@endif
				
                </div>
            </div>
        </div>
    </div>
</div>
@endsection