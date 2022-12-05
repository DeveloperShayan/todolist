@extends('layouts.app')


    @section('content')

        <a href="/" class="btn btn-secondary">Go Back</a>
        <h1>{{ $todo->title }}</h1>
        <div class="badge bg-dark">{{ $todo->due }}</div>
        <hr>
        <p>{{ $todo->content }}</p>
        <a href="/todos/{{ $todo->id }}/edit" class="btn btn-primary mt-2">Edit</a>
        <form action="/todos/{{ $todo->id }}" method="post">
            @csrf
            @method('DELETE')

            <button class="btn btn-danger" type="submit">Delete</button>
        </form>

    @endsection