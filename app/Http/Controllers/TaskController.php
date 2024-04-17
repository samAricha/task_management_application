<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
      $tasks = Task::all();
      return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
      $request->validate([
        'task_name' => 'required|max:255',
        'priority' => 'required|max:255',
        'status' => 'required|max:255',
        'date' => 'required|max:255',
      ]);
      Task::create($request->all());
      return redirect()->route('tasks.index')
        ->with('success', 'Task created successfully.');
    }
   
    public function update(Request $request, $id)
    {
      $request->validate([
        'task_name' => 'required|max:255',
        'priority' => 'required|max:255',
        'status' => 'required|max:255',
        'date' => 'required|max:255',
      ]);
      $task = Task::find($id);
      $task->update($request->all());
      return redirect()->route('tasks.index')
        ->with('success', 'Task updated successfully.');
    }

    public function destroy($id)
    {
      $task = Task::find($id);
      $task->delete();
      return redirect()->route('tasks.index')
        ->with('success', 'Task deleted successfully');
    }

    public function create()
    {
      return view('tasks.create');
    }

    public function show($id)
    {
      $task = Task::find($id);
      return view('tasks.show', compact('task'));
    }

    public function edit($id)
    {
      $task = Task::find($id);
      return view('tasks.edit', compact('task'));
    }
}
