<?php
namespace App\Repositories;

use App\Repositories\Contract\RestfulInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\Skill;

class SkillRepository extends BaseRepository implements RestfulInterface{

    public function getModel()
    {
        return Skill::class;
    }
    // END

}