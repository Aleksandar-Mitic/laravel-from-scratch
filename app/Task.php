<?php

namespace BasicLaravel;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'completed', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
