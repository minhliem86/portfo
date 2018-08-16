<?php
/**
 * Created by PhpStorm.
 * User: liemphan
 * Date: 15/08/2018
 * Time: 10:57 AM
 */
namespace App\Modules\Api\Transformers;

use App\Models\Skill;
use League\Fractal\TransformerAbstract;

class SkillTransformer extends TransformerAbstract
{
    public function transform(Skill $skill)
    {
        return [
            'id' => (int) $skill->id,
            'name' => ucfirst($skill->name),
            'power' => (int) $skill->power,
            'img_url' => $skill->img_url,
        ];
    }
}