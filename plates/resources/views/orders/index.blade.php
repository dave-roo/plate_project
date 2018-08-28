@extends('layouts.orders_layout')

@section('content')

<title>SmartServe | Menu</title>
<h1>All the Orders</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Order ID</td>
            <td>Category</td>
            <td>Title</td>
            <td>Comments</td>
            <td>Quantity</td>
            <td>Price $</td>
            <td>Table</td>
            <td>Seat</td>
        </tr>
    </thead>
    <tbody>
    @foreach($orders as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->orderid }}</td>
            <td>{{ $value->category }}</td> 
            <td>{{ $value->title }}</td>
            <td>{{ $value->comments }}</td>
            <td>{{ $value->quantity }}</td>
            <td>{{ $value->price }}</td>
            <td>{{ $value->table }}</td>
            <td>{{ $value->seat }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'orders/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Item', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('orders/' . $value->id) }}">Show this Item</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('orders/' . $value->id . '/edit') }}">Edit this Item</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection