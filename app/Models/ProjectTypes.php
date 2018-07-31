<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTypes extends Model
{
    public $table = 'project_types';

    protected $guarded = ['id'];

    public function projects()
    {
        return $this->hasMany(\App\Models\Project::class, 'project_type_id');
    }
}
