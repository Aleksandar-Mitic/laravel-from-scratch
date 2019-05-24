<?php

namespace BasicLaravel\Http\Controllers;

use BasicLaravel\Task;
use BasicLaravel\Project;
use Illuminate\Http\Request;


class ProjectTasksController extends Controller
{


    public function store(Project $project)
    {
        $task = request()->validate([
            'title' => 'required|string|min:3|max:255',
        ]);

        $project->addTask($task);

        return back();
    }


    public function update(Task $task)
    {
        $task->update([
            'completed' => request()->has('completed')
        ]);

        return back();
    }
}
