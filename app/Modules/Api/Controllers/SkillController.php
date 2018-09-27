<?php

namespace App\Modules\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use App\Modules\Api\Transformers\SkillTransformer;
use App\Repositories\SkillRepository;
use Validator;

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

    /*CREATE*/
    public function createSkill(Request $request){
        $rules = [
            'name' => required,
            'percent' => required|numeric,
        ];
        $valid = Validator::make($request->all(), $rules);
        if($valid->fails()){
            return Dingo\Api\Exception\StoreResourceFailedException('Could not create skill.', $valid->errors());
        }
        $order = $this->skill->getOrder();

        $skill = $this->skill->create([
            'name' => $request->get('name'),
            'slug' => \LP_lib::unicode($request->get('name')),
            'percent' => $request->get('power'),
            'order' => $order,
        ]);
        return $this->response->item($skill, new SkillTransformer);
    }

    /*EDIT*/
    public function editSkill(Request $request, $id)
    {
        $rules = [
            'name' => required,
            'percent' => required|numeric,
        ];
        $valid = Validator::make($request->all(), $rules);
        if($valid->fails()){
            return Dingo\Api\Exception\UpdateResourceFailedException('Could not update skill.', $valid->errors());
        }

        $skill = $this->skill->update([
            'name' => $request->get('name'),
            'slug' => \LP_lib::unicode($request->get('name')),
            'percent' => $request->get('power'),
            'order' => $request->get('order'),
        ], $id);
        return $this->response->noContent();

    }

    /*REMOVE*/
    public function removeSkill($id)
    {
        $this->skill->delete($id);
        return $this->response->noContent();
    }
}
