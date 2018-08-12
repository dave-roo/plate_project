@extends('layouts.items_layout')

@section('content')

<title>SmartServe | Menu Edit</title>
<h1>Edit {{ $item->title }}</h1>

<!-- if there are creation errors, they will show here -->


{!! Form::open(['action' => ['ItemsController@update', $item->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<div class="form-group">
    {{Form::label('category', "Category")}}
    {{Form::text('category', $item->category, ['class' => 'form-control', 'placeholder' => 'Entree Main Dessert'])}}
</div>

<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{Form::text('title', $item->title, ['class' => 'form-control', 'placeholder' => 'Name Of Item'])}}
</div>

<div class="form-group">
    {{ Form::label('body', 'Body') }}
    {{Form::textarea('body', $item->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
</div>

<div class="form-group">
    {{Form::label('price', "Price")}}
    {!!Form::number('price', $item->price, ['class' => 'form-control', 'placeholder' => 'Price', 'step' => '0.01'])!!}
</div>

{{Form::hidden('_method','PUT')}}
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}  

{!! Form::close() !!}


@endsection