@extends('layouts.items_layout')

@section('content')

<title>SmartServe | Menu Create</title>
<h1>Create an Item</h1>

<!-- if there are creation errors, they will show here -->
<!--{ HTML::ul($errors->all()) } -->

{!! Form::open(['action' => 'ItemsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<div class="form-group">
    {{Form::label('category', "Category")}}
    {{Form::text('category', '', ['class' => 'form-control', 'placeholder' => 'Entree Main Dessert'])}}
</div>

<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Name Of Item'])}}
</div>

<div class="form-group">
    {{ Form::label('body', 'Body') }}
    {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
</div>

<div class="form-group">
    {{Form::label('price', "Price")}}
    {!!Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Price', 'step' => '0.01'])!!}
</div>

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}  

{!! Form::close() !!}

@endsection