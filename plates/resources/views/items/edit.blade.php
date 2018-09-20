@extends('layouts.items_layout')

@section('content')

<title>SmartServe | Menu Edit</title>
<h1>Edit {{ $item->title }}</h1>

{!! Form::open(['action' => ['ItemsController@update', $item->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<div style="width:180px">

<div class="form-group">
    {{Form::label('category', "Category")}}
    <!--Form::text('category', $item->category, ['class' => 'form-control', 'placeholder' => 'Entree Main Dessert'])}}-->
    
    {{ Form::select('category', array('Entree' => 'Entree', 'Main' => 'Main', 'Dessert' => 'Dessert'), null, ['class' => 'form-control'])}}
    
</div>

<div class="form-group">
    {{ Form::label('title', 'Name') }}
    {{Form::text('title', $item->title, ['class' => 'form-control', 'placeholder' => 'Name Of Item'])}}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{Form::text('description', $item->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
</div>
</div>

<div style="width:80px" class="form-group">
    {{Form::label('price', "Price")}}
    {!!Form::number('price', $item->price, ['class' => 'form-control', 'placeholder' => 'Price', 'step' => '0.5'])!!}
</div>

{{Form::hidden('_method','PUT')}}
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}  

{!! Form::close() !!}


@endsection