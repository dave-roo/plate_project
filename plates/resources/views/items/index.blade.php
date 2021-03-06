@extends('layouts.items_layout')

@section('content')

<title>SmartServe | Menu</title>
<h1>All the Items</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Category</td>
            <td>Name</td>
            <td>Description</td>
            <td>Price</td>
        </tr>
    </thead>
    <tbody>
    @foreach($items as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->category }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->price }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'items/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Item', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('items/' . $value->id . '/edit') }}">Edit this Item</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection