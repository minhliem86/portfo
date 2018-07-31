<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $table = 'projects';

    protected $guarded = ['id'];

    public function project_types()
    {
        return $this->hasMany(\App\Models\ProjectType::class, 'project_type_id');
    }
}
