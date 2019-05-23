<?php

namespace BasicLaravel\Http\Controllers;

use Illuminate\Http\Request;
use \BasicLaravel\Task;


class ProjectTasksController extends Controller
{
    public function update(Task $task)
    {
        $task->update([
            'completed' => request()->has('completed')
        ]);

        return back();
    }
}
