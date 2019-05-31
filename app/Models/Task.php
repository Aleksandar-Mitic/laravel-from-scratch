<?php

namespace BasicLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'completed', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function updateStatus($task)
    {
        $task->update([
            'completed' => request()->has('completed')
        ]);
    }

}
