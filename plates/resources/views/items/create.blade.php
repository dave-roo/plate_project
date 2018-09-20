@extends('layouts.items_layout')

@section('content')

<title>SmartServe | Menu Create</title>
<h1>Create an Item</h1>

<!-- if there are creation errors, they will show here -->
<!--{ HTML::ul($errors->all()) } -->

{!! Form::open(['action' => 'ItemsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<div style="width:180px">

<div class="form-group">
    {{Form::label('category', "Category")}}
    {{ Form::select('category', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'), null, ['class' => 'form-control'])}}
    
</div>

<div class="form-group">
    {{ Form::label('title', 'Name') }}
    {{Form::text('title', null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{Form::text('description', null, ['id' => 'article-ckeditor', 'class' => 'form-control'])}}
</div>
</div>

<div style="width:80px" class="form-group">
    {{Form::label('price', "Price")}}
    {!!Form::number('price', null, ['class' => 'form-control', 'step' => '0.5'])!!}
</div>

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}  

{!! Form::close() !!}

@endsection