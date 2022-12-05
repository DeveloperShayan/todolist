@extends('layouts.app')

@section('content')

    <h1 align="center">Todo List</h1>

    @if (count($todos) > 0)
    
        @foreach ($todos as $todo)
            <div class="card p-2">
                <h2><a href="todos/{{ $todo->id }}">{{ $todo->title }}</a></h2>
                <span class="badge bg-dark">{{ $todo->due }}</span>
            </div>
        @endforeach
    
    @endif

@endsection

