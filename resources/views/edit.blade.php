@extends('layouts.app')


@section('content')
    <h1>Edit {{ $todo->title }}</h1>

    <div class="card shadow-lg p-3 mb-5 bg-secondary rounded">
        <form method="post" action="/todos/{{ $todo->id }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{ $todo->title }}">
            </div>
    
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" id="content" name="content" placeholder="Enter Content" value="{{ $todo->content }}">
            </div>
        
            <div class="form-group">
                <label for="due">Due</label>
                <input type="text" class="form-control" id="due" name="due" value="{{ $todo->due }}" placeholder="Enter Day">
            </div>        
            
            <button type="submit" class="btn btn-primary">Submit</button>
        
        </form>        
    </div>

@endsection