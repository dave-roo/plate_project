<!-- app/views/nerds/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('') }}">Home</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('orders') }}">View All Orders</a></li>
        <li><a href="{{ URL::to('orders/create') }}">Create an Order</a>
    </ul>
</nav>

@include('inc.messages')
@yield('content')

</div>
</body>
</html>