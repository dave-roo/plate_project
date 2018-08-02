<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> SmartServe </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
	  
	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
	  <a class="navbar-brand" href="./">Home</a>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			- Add Menu Item
		</ul>
	  </div>
	</nav>
	  
      <form method="post" action="{{url('menu')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Descripton">Description</label>
              <input type="text" class="form-control" name="description">
            </div>
        </div>
		  
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Descripton">Category</label>
				<div class="dropdown">
				  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select </button>
				  <ul class="dropdown-menu">
					<li><a href="#">Entree</a></li>
					<li><a href="#">Main</a></li>
					<li><a href="#">Dessert</a></li>
				  </ul>
				</div>
            </div>
        </div>
		  
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Price">Price</label>
              <input style="width:80px;" type="text" class="form-control" name="price">
            </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
		
      </form>
    </div>

  </body>
</html>