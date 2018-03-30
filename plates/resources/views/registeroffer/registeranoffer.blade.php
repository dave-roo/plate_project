@extends('layouts.mainlayout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('registeranofferdetailspost') }}">
                        {{ csrf_field() }}

                        <div>
                            <label for="drivingfrom" class="col-md-8 control-label">@lang('messages.targetdrivinglocation')</label>

                            <div class="col-md-6">
                                <input id="drivingfrom" type="text" class="form-control" >
                            </div>
                        </div>
						
                        <div>
                            <label for="drivingto" class="col-md-8 control-label">Where are you driving to?</label>

                            <div class="col-md-6">
                                <input id="drivingto" type="text" class="form-control">
                            </div>
                        </div>
						
						<label for="depatureDate" class="col-md-8 control-label">Departure Date & Time</label>
						<div class="col-md-6">
							<input id="depatureDate" type="text" class="form-control">
						</div>
						
						<label for="arrivalDate" class="col-md-8 control-label">Arrival Date & Time</label>
						<div class="col-md-6">
							<input id="arrivalDate" type="text" class="form-control">
						</div>
						</br>
						
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
								@if(App::getLocale()=='en')
									<button type="submit" class="btn btn-primary">Next</button>
								@elseif(App::getLocale()=='fr')
									<button type="submit" class="btn btn-primary">Next</button>
								@elseif(App::getLocale()=='de')
									<button type="submit" class="btn btn-primary">Next</button>
								@endif
                            </div>
                        </div>
						
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection