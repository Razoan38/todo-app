{{-- <!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body> --}}

    @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Task</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value="{{ $task->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description">{{ $task->description }}</textarea>
            </div>
            <div class="form-group" style="padding-bottom: 15px">
                <label for="status">Status:</label>
                <select class="form-control" name="status">
                    <option value="0" {{ !$task->status ? 'selected' : '' }}>Incomplete</option>
                    <option value="1" {{ $task->status ? 'selected' : '' }}>Completed</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    @endsection

{{-- </body>
</html> --}}
