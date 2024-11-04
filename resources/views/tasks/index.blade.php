@extends('layouts.app')
<!-- Include Navbar -->
@include('components.navbar')

@section('title', 'Tasks')

@section('content')

    <body>
        <form class="form-inline my-2 my-lg-0">
                    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create New Task</a>
                </form>
    <h1>Task List</h1>

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Due Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->due_date ? $task->due_date : 'N/A' }}</td>
                <td>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    
</table>

    </body>
    
    
@endsection

