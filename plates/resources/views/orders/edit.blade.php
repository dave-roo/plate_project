@extends('layouts.orders_layout')

@section('content')

<title>SmartServe | Menu Edit</title>
<h1>Edit Order ID: {{ $order->id }}</h1>

{!! Form::open(['action' => ['OrdersController@update', $order->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<!-- Trial Area -->
<table class="table table-striped table-bordered">
<thead>
        <tr>
            <td>Order ID</td>
            <td>Category</td>
            <td>Description</td>
            <td>Quantity</td>
            <td>Price</td>
            <td>Table</td>
            <td>Seat</td>
            <td>Comments</td>
        </tr>
    </thead>

    <!-- PHP Area For Title Info -->
        <!-- Set Title-->
            @php $i = 1; $setTitle = 'not set';
			
			@endphp
                @foreach($select as $key2 => $value2)
                    @if($order->title == $i)
                        @php $setTitle = $value2; @endphp
                    @endif
                @php $i = $i + 1; @endphp
            @endforeach


    <!-- End PHP Area -->



    @php

    // This is the section where the ID of the whole thing is made and then the order id should seperate the different orders
    // Not sure how to get this to work yet
    
    @endphp
    
    <tbody>
    <tr>
        <td>
            {{ Form::number('orderid', $order->orderid, ['class' => 'form-control'])}}
        </td>
        <td>
            {{ Form::select('category', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'), null, ['class' => 'form-control'])}}
        </td>
        <td>
            {{ Form::select('title', $select, null, ['class' => 'form-control'])}}
        </td>
        <td>
            {{ Form::number('quantity', $order->quantity, ['class' => 'form-control', 'placeholder' => 'Quantity'])}}
        </td>
        <td>
			{{ Form::number('price', $order->price, ['class' => 'form-control'])}}
        </td>
        <td>
            {{ Form::number('table', $order->table, ['class' => 'form-control', 'placeholder' => 'Table NO.'])}}
        </td>
        <td>
            {{ Form::number('seat', $order->seat, ['class' => 'form-control', 'placeholder' => 'Seat NO.'])}}
        </td>
        <td>
            {{Form::text('comments', $order->comments, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </td>
    </tr>
    </tbody>
    
    
    </table>
    
    
    <!-- End Trial Area -->
    {{Form::hidden('_method','PUT')}}    
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}  
    
    {!! Form::close() !!}
    

@endsection