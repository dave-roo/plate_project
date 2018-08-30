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

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Category</td>
            <td>Title</td>
            <td>Description</td>
            <td>Price $</td>
        </tr>
    </thead>
    <tbody>
       <!-- foreach($items as $key => $value)
        <tr>
            <td>{ $value->id }}</td>
            <td>
                
                { $value->category }}
                if ($value->category == 'Entree')
                    <p>This is an Entree</p>
                elseif ($value->category == 'Main')
                    <p>This is a Main</p>
                elseif ($value->category == 'Dessert')
                    <p>This is a Dessert</p>
                endif
            
            </td>
            <td>{ $value->title }}</td>
            <td>{ $value->body }}</td>
            <td>{ $value->price }}</td>
        </tr>
        endforeach -->
    </tbody>
</table>

{!! Form::open(['action' => 'OrdersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<!-- Trial Area -->
<table class="table table-striped table-bordered">
<thead>
        <tr>
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

@for ($i = 0;   $i <= 1;    $i++)

@php

// This is the section where the ID of the whole thing is made and then the order id should seperate the different orders
// Not sure how to get this to work yet

@endphp

<tbody>
<tr>
    <td>
        {{Form::label('orderid', "Order_ID")}}
        {{ Form::number('orderid', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        <!--select('orderid', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'))}}
        -->
        </td>
    <td>
        {{Form::label('category', "Category")}}
        {{ Form::select('category', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}}

    @if ('category' == 'Entree')
        <p>Did Work</p>
    @elseif ('category' != 'Entree')
        <p>Didn't Work</p>
    @elseif (1 > 5)

    @endif

    </td>
    <td>
        {{Form::label('title', "Title")}}
        {{ Form::select('title', $select, null, ['class' => 'form-control'])}}
    </td>
    <td>
        {!! Form::label('comments', 'Comments') !!}
        {!!Form::text('comments', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])!!}
    </td>
    <td>
            {{Form::label('quantity', "Quantity")}}
            {{ Form::select('quantity', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'))}}
    </td>
    <td>
       <!-- {Form::label('price', "Price")}}
        { Form::select('price', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'))}} -->

        <p>Display Price</p>

        @if ($select == 'ChickenParma')
        <p>parma</p>
        @else
        <p>not parma</p>
        @endif


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

@if ('category' == 'Entree')
<p>Did Work</p>
@elseif ('category' != 'Entree')
<p>Didn't Work</p>
@elseif (1 > 5)

@endif

<!-- End Trial Area -->

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}  

{!! Form::close() !!}

@endsection