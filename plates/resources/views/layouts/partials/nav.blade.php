	<div class="navbar navbar-inverse bg-inverse">
      <div class="container d-flex justify-content-between">
			<a href="/hoponin" class="navbar-brand">Hop On In</a>

		@if (Route::has('login'))
			@auth
			<div class="top-right">
				<div class="btn-group">
					<a href="{{ route('registeranoffer') }}" class="btn btn-secondary">Offer a Ride</a>
					<div class="btn-group" role="group">
					<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						{{ Auth::user()->name }}
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
					</ul>
					</div>
					
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</div>
				@else
				<div class="btn-group">
						<a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
						<a href="{{ route('login') }}" class="btn btn-secondary">@lang('messages.login')</a>
					@endauth
				</div>
			@endif
			</div>
		</div>
    </div>
</head>
<body>
