<?php

namespace App\Modules\Frontend\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $homestay = DB::table('companies')->first();
        $projects = DB::table('projects')->select('name','img_url')->where('status',1)->get();
        $services = DB::table('services')->select('name','img_url','description')->where('status',1)->get();
        $skills = DB::table('skills')->select('name','power')->where('status',1)->get();
        return view('Frontend::pages.home', compact('skills', 'services', 'projects', 'homestay'));
    }
}
