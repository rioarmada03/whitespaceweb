<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
    $tasks = Task::where('user_id', auth()->id())->get();
    return view('tasks.index', compact('tasks'));
    }


    public function create()
    {
        return view('tasks.create');
    }

        public function show(Task $task)
    {
        // Ensure the task belongs to the authenticated user
        if ($task->user_id != auth()->id()) {
            abort(403);
        }

        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        // Ensure the task belongs to the authenticated user
        if ($task->user_id != auth()->id()) {
            abort(403);
        }

        return view('tasks.edit', compact('task'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->user()->id; // tambahkan user_id dari pengguna yang sedang login
    
        Task::create($data);

        return redirect()->route('tasks.index')->with('success', 'Data berhasil disimpan!');
    }

    public function update(Request $request, Task $task)
    {
        // Ensure the task belongs to the authenticated user
        if ($task->user_id != auth()->id()) {
            abort(403);
        }

        // Validate incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
        ]);

        // Update the task with the validated data
        $task->update($request->all());

        // Redirect to the tasks index page with a success message
        return redirect()->route('tasks.index')
                        ->with('success', 'Task updated successfully.');
    }

    public function destroy(Task $task)
    {
        // Ensure the task belongs to the authenticated user
        if ($task->user_id != auth()->id()) {
            abort(403);
        }

        // Delete the specified task
        $task->delete();

        // Redirect to the tasks index page with a success message
        return redirect()->route('tasks.index')
                        ->with('success', 'Task deleted successfully.');
    }

}

