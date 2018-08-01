<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function getInformation( Request $request)
    {
      if($request->isMethod('put')){
        $id = \App\Models\Company::first()->id;
        $data = [
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'map' => $request->input('map'),
        ];
        $rs = \DB::table('companies')->update($data, $id);
        if(!$rs){
            return redirect()->back()->with('error', 'Fail to save !');
        }
        return redirect()->back()->with('success', 'Saved !');
      }
      if($request->isMethod('post')){
        $data = [
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'map' => $request->input('map'),
        ];
        $rs = \App\Models\Company::create($data);
        if(!$rs){
            return redirect()->back()->with('error', 'Fail to save !');
        }
        return redirect()->back()->with('success', 'Saved !');
      }
      $inst = \App\Models\Company::first();
      // dd($inst);
      return view('Admin::pages.company.index', compact('inst'));
    }
}
