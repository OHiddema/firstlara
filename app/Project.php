<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    // Get the tasks belonging to a cetrain project
    public function tasks() {
        return $this->hasMany(Task::class);
    }
}