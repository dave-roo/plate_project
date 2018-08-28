@extends('layouts.orders_layout')

@section('content')

<title>SmartServe | Order Create</title>
<h1>Create an Order</h1>

<!-- if there are creation errors, they will show here -->
<!--{ HTML::ul($errors->all()) } -->

{{Form::label('amount', "Amount")}}
{{ Form::select('amount', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'))}}

@if (5 > 3)
    <h1>5 > 3, did work</h1>
@else
    <h1> 5 < 3, didnt work</h1>
@endif

{!! Form::open(['action' => 'OrdersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<!-- Trial Area -->
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

@for ($i = 0;   $i <= 4;    $i++)

@php

// This is the section where the ID of the whole thing is made and then the order id should seperate the different orders
// Not sure how to get this to work yet

@endphp

<tbody>
<tr>
    <td>
        {{Form::label('orderid', "Order_ID")}}
        {{ Form::select('orderid', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'))}}
    </td>
    <td>
        {{Form::label('category', "Category")}}
        {{ Form::select('category', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
    </td>
    <td>
        {{Form::label('title', "Title")}}
        {{ Form::select('title', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
    </td>
    <td>
        {{Form::label('orderid', "Order_ID")}}
        {{ Form::select('orderid', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
    </td>
    <td>
        {{ Form::label('comments', 'Comments') }}
        {{Form::text('comments', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
    </td>
    <td>
            {{Form::label('quantity', "Quantity")}}
            {{ Form::select('quantity', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'))}}
    </td>
    <td>
        {{Form::label('price', "Price")}}
        {{ Form::select('price', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
    </td>
    <td>
            {{Form::label('table', "Table")}}
            {{ Form::select('table', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'))}}
    </td>
    <td>
            {{Form::label('seat', "Seat")}}
            {{ Form::select('seat', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'))}}
    </td>
</tr>
</tbody>

@endfor

</table>

<!-- End Trial Area -->

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}  

{!! Form::close() !!}

@endsection