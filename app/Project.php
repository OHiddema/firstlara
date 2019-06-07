<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    // Define relationship between project and tasks
    public function tasks() {
        return $this->hasMany(Task::class);
    }
}