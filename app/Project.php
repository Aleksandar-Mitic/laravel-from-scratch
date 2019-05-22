<?php

namespace BasicLaravel;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description'];
}
