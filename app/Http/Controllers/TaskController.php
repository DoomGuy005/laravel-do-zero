<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        if (count($tasks) <= 0) {
            return response()->json(['macaco' => 'tem nada aqui não fi.'], 404);
        }
        return $tasks;
    }

    public function store(Request $request)
    {
        Task::create($request->all());
        return;
    }

    public function show(Task $task, $id)
    {
        $task = Task::findOrFail($id);
        return $task;
    }

    public function update(Request $request, Task $task, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return $task;
    }

    public function destroy(Task $task, $id)
    {
        $task = Task::destroy($id);
        return $task;
    }
}
