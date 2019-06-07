<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class Task extends Model
{
    // Get the project a task belongs to
    public function project() {
        return $this->belongsTo(Project::class);
    }
}
