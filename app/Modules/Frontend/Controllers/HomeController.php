<?php

namespace App\Modules\Frontend\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $services = DB::table('services')->select('name','img','description')->where('status',1)->get();
        $skills = DB::table('skills')->select('name','power')->where('status',1)->get();

        dd($services);
        return view('Frontend::pages.home', compact('skills'));
    }
}
