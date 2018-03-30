<section class="jumbotron text-center">
		<div class="container">
			<div class="album text-muted">
			  <div class="container">
				<div class="row">
					<div class="dropdown">
					  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						@if(App::getLocale()=='en')
							English
						@elseif(App::getLocale()=='fr')
							French
						@elseif(App::getLocale()=='de')
							Deutsch
						@else
							-
						@endif
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="/setlanguage/en">English</a>
						<a class="dropdown-item" href="/setlanguage/fr">French</a>
						<a class="dropdown-item" href="/setlanguage/de">German</a>
					  </div>
					</div>
				</div>
			  </div>
			</div>
		</div>
	</section>
	
<style>
$(document).ready(function() {
    $('#submit').on('submit', function (e) {
        e.preventDefault();
        var title = $('#title').val();
        var body = $('#body').val();
        var published_at = $('#published_at').val();
        $.ajax({
            type: "POST",
            url: host + '/articles/create',
            data: {title: title, body: body, published_at: published_at},
            success: function( msg ) {
                $("#ajaxResponse").append("<div>"+msg+"</div>");
            }
        });
    });
});

</style>