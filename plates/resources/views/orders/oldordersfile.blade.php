@extends('layouts.orders_layout')

@section('content')

<title>SmartServe | Order Create</title>
<h1>Create an Order</h1>

<!-- if there are creation errors, they will show here -->
<!--{ HTML::ul($errors->all()) } -->

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

<tbody>
<tr>
    <td>
        {{Form::label('orderid', "Order_ID")}}
        {{ Form::select('orderid', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
    </td>
    <td>
        {{Form::label('orderid', "Order_ID")}}
        {{ Form::select('orderid', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
    </td>
    <td>
        {{Form::label('orderid', "Order_ID")}}
        {{ Form::select('orderid', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
    </td>
    <td>
        {{Form::label('orderid', "Order_ID")}}
        {{ Form::select('orderid', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
    </td>
    <td>
        {{Form::label('orderid', "Order_ID")}}
        {{ Form::select('orderid', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
    </td>
    <td>
        {{Form::label('orderid', "Order_ID")}}
        {{ Form::select('orderid', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
    </td>
    <td>
        {{Form::label('orderid', "Order_ID")}}
        {{ Form::select('orderid', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
    </td>
    <td>
        {{Form::label('orderid', "Order_ID")}}
        {{ Form::select('orderid', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
    </td>
    <td>
        {{Form::label('orderid', "Order_ID")}}
        {{ Form::select('orderid', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
    </td>
</tr>
</tbody>





<!-- End Trial Area -->




<div class="form-group">
    {{Form::label('orderid', "Order_ID")}}
    {{ Form::select('orderid', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
</div>

<div class="form-group">
    {{Form::label('category', "Category")}}
    {{ Form::select('category', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
</div>

<div class="form-group">
    {{Form::label('title', "Title")}}
    {{ Form::select('title', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}
</div>

<div class="form-group">
    {{ Form::label('comments', 'Comments') }}
    {{Form::textarea('comments', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
</div>

<div class="form-group">
    {{Form::label('quantity', "Quantity")}}
    {{ Form::select('quantity', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'))}}
</div>

<div class="form-group">
    {{Form::label('price', "Price")}}
    {!!Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Price', 'step' => '0.01'])!!}
</div>

<div class="form-group">
    {{Form::label('table', "Table")}}
    {{ Form::select('quantity', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'))}}
</div>

<div class="form-group">
    {{Form::label('seat', "Seat")}}
    {{ Form::select('quantity', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'))}}
</div>

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}  

{!! Form::close() !!}

@endsection