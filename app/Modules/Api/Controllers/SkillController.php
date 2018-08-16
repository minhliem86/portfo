<?php

namespace App\Modules\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use App\Modules\Api\Transformers\SkillTransformer;
use App\Repositories\SkillRepository;

class SkillController extends Controller
{
    use Helpers;

    protected $skill;

    public function __construct(SkillRepository $skill)
    {
        $this->skill = $skill;
    }

    public function index()
    {
        $skills = $this->skill->all();
        return $this->collection($skills, new SkillTransformer);
    }
}
