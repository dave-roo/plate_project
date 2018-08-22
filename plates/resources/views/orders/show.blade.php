@extends('layouts.items_layout')

@section('content')

<title>SmartServe | Menu Show</title>
<h1>Showing {{ $item->title }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $item->title }}</h2>
        <p>
            <strong>Category:</strong> {{ $item->category }}<br>
            <strong>Title:</strong> {{ $item->title }}<br>
            <strong>Description:</strong> {{ $item->body }}<br>
            <strong>Price:</strong> $ {{ $item->price }}
        </p>
    </div>

    @endsection