{{-- <!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
   
</body>
</html> --}}


@extends('layouts.app')

@section('content')

<div class="container">
    <h1>To-Do List</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->status ? 'Completed' : 'Incomplete' }}</td>
                <td>
                    <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection
