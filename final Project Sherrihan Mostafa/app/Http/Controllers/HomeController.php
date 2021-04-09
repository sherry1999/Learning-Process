<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\course;
use App\Models\user;
use App\Models\dashboard;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $id = Auth::id(); 
        $row = DB::table('courses')
        ->select()
        ->get();

        $dboardrow = DB::table('dashboards')
        ->select()
        ->get();
         
        
        $user =user::find($id);
        $courses = $user->courses;  //user courses

        $users = user::select('name')->get();
        $allcourses = course::select('title', 'duration')->get();

    

        $users = user::select('name')->get();
        $allcourses = course::select('title', 'duration')->get();

        return view('home',compact('id','row','courses','dboardrow'));
    }
    public function writepost(request $request)
    { 
        $dashboard = new dashboard();
        $dashboard->body=$request->body;
        $dashboard->save();
        return redirect('home');    
    }
    
}
