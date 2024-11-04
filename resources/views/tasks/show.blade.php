@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Task Details</h1>
        <div class="mb-4">
            <h3>Title: {{ $task->title }}</h3>
            <p>Description: {{ $task->description }}</p>
            <p>Due Date: {{ $task->due_date ? $task->due_date->format('Y-m-d') : 'N/A' }}</p>
        </div>
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
