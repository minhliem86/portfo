<?php
namespace App\Repositories;

use App\Repositories\Contract\RestfulInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\ProjectTypes;

class ProjectTypesRepository extends BaseRepository implements RestfulInterface{

    public function getModel()
    {
        return ProjectTypes::class;
    }
    // END

}