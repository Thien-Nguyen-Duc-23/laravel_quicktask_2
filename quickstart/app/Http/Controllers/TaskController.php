<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks', compact('tasks'));
    }

    public function store(StoreTask $request)
    {
        $task = $request->only('name');
        Task::create($task);

        return redirect()->route('tasks'); 
    }

    public function destroy($task)
    {
        $task->delete();

        return redirect('tasks');    
    }
}
