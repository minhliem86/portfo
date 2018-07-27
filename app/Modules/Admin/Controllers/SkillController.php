<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\SkillRepository;
use App\Repositories\Eloquent\CommonRepository;
use Datatables;
use DB;

class SkillController extends Controller
{
    public $skill;

    public function __construct(SkillRepository $skill)
    {
        $this->skill = $skill;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
        if($request->ajax()){
            $skill = $this->skill->query(['id', 'name', 'img_url', 'order', 'status']);
            return Datatables::of($skill)
                ->addColumn('action', function($skill){
                    return '<a href="'.route('admin.skill.edit', $skill->id).'" class="btn btn-success btn-sm d-inline-block"><i class="fa fa-edit"></i> </a>
                <form method="POST" action=" '.route('admin.skill.destroy', $skill->id).' " accept-charset="UTF-8" class="d-inline-block">
                    <input name="_method" type="hidden" value="DELETE">
                    <input name="_token" type="hidden" value="'.csrf_token().'">
                               <button class="btn  btn-danger btn-sm" type="button" attrid=" '.route('admin.skill.destroy', $skill->id).' " onclick="confirm_remove(this);" > <i class="fa fa-trash"></i></button>
               </form>' ;
                })->editColumn('order', function($skill){
                    return "<input type='text' name='order' class='form-control' data-id= '".$skill->id."' value= '".$skill->order."' />";
                })->editColumn('status', function($skill){
                    $status = $skill->status ? 'checked' : '';
                    $skill_id =$skill->id;
                    return '
                  <label class="switch switch-icon switch-success-outline">
                    <input type="checkbox" class="switch-input" name="status" '.$status.' data-id="'.$skill_id.'">
                    <span class="switch-label" data-on="" data-off=""></span>
                    <span class="switch-handle"></span>
                </label>
              ';
                })->editColumn('img_url',function($skill){
                    return '<img src="'.asset('public/uploads/'.$skill->img_url).'" width="60" class="img-fluid">';
                })->filter(function($query) use ($request){
                    if (request()->has('name')) {
                        $query->where('name', 'like', "%{$request->input('name')}%");
                    }
                })->setRowId('id')->make(true);
        }

        return view('Admin::pages.skill.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::pages.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('img_url')){
            $img_url = $this->common->getPath($request->input('img_url'));
        }else{
            $img_url = '';
        }
        $order = $this->skill->getOrder();

        $data = [
            'name' => $request->input('name'),
            'img_url' => $img_url,
            'order' => $order,
        ];
        $skill = $this->skill->create($data);

        if($request->has('seo_checking')){
            if($request->has('meta_img')){
                $img_meta = $this->common->getPath($request->input('meta_img'));
            }else{
                $img_meta = '';
            }
            $data_seo = [
                'meta_keyword' => $request->input('keywords'),
                'meta_description' => $request->input('description'),
                'meta_img' => $img_meta,
            ];
            $skill->metas()->save(new \App\Models\Meta($data_seo));
        }
        return redirect()->route('admin.skill.index')->with('success','Created !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inst = $this->skill->find($id);
        return view('Admin::pages.skill.edit', compact('inst'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $img_url = $this->common->getPath($request->input('img_url'));
        $data = [
            'name' => $request->input('name'),
            'img_url' => $img_url,
            'order' => $request->input('order'),
            'status' => $request->input('status'),
        ];
        $skill = $this->skill->update($data, $id);

        if($request->has('seo_checking')){
            $img_meta = $this->common->getPath($request->input('meta_img'));
            $data_seo = [
                'meta_keyword' => $request->input('keywords'),
                'meta_description' => $request->input('description'),
                'meta_img' => $img_meta,
            ];
            if(!$request->has('meta_id')){
                $skill->metas()->save(new \App\Models\Meta($data_seo));
            }else{
                \DB::table('metables')->where('id',$request->input('meta_id'))->update($data_seo);
            }
        }

        return redirect()->route('admin.skill.index')->with('success', 'Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->skill->delete($id);
        return redirect()->route('admin.skill.index')->with('success','Deleted !');
    }

    /*DELETE ALL*/
    public function deleteAll(Request $request)
    {
        if(!$request->ajax()){
            abort(404);
        }else{
            $data = $request->arr;
            $response = $this->skill->deleteAll($data);
            return response()->json(['msg' => 'ok']);
        }
    }

    /*UPDATE ORDER*/
    public function postAjaxUpdateOrder(Request $request)
    {
        if(!$request->ajax())
        {
            abort('404', 'Not Access');
        }else{
            $data = $request->input('data');
            foreach($data as $k => $v){
                $upt  =  [
                    'order' => $v,
                ];
                $obj = $this->skill->find($k);
                $obj->update($upt);
            }
            return response()->json(['msg' =>'ok', 'code'=>200], 200);
        }
    }

    /*CHANGE STATUS*/
    public function updateStatus(Request $request)
    {
        if(!$request->ajax()){
            abort('404', 'Not Access');
        }else{
            $value = $request->input('value');
            $id = $request->input('id');
            $skill = $this->skill->find($id);
            $skill->status = $value;
            $skill->save();
            return response()->json([
                'mes' => 'Updated',
                'error'=> false,
            ], 200);
        }
    }
}
