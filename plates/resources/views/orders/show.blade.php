@extends('layouts.orders_layout')

@section('content')

<title>SmartServe | Menu Show</title>
<h1>Showing {{ $order->title }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $order->title }}</h2>
        <p>
            <strong>ID:</strong> {{ $order->id }}<br>
            <strong>Order ID:</strong> {{ $order->orderid }}<br>
            <strong>Category:</strong> {{ $order->category }}<br>
            <strong>Title:</strong> {{ $order->title }}<br>
            <strong>Comments:</strong> {{ $order->comments }}<br>
            <strong>Quantity:</strong> {{ $order->quantity }}<br>
            <strong>Price:</strong> $ {{ $order->price }}<br>
            <strong>Table:</strong> {{ $order->table }}<br>
            <strong>Seat:</strong> {{ $order->seat }}<br>
        </p>
    </div>

    @endsection