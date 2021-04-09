<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\View;

use App\Models\event;
use App\Models\post;
use App\Models\board;
use App\Models\strategy;
use App\Models\policy;
use App\Models\course;
use App\Models\user;





use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class conn extends Controller 
{
    public  function base(){
        $row = DB::table('events')
        ->select()
        ->get();

        $postsrow=DB::table('posts')
        ->select()
        ->get();
        return view('base',compact('row','postsrow'));
    }

    public  function contact() {
        return view('contact');
    }
    public  function services() {
        return view('services');
    }

    public  function admin() {
        return view('admin');
    }
    public  function blog() {
        return view('blog');
    }
    public  function about() {
        $boardrow = DB::table('boards')
        ->select()
        ->get();

        $strategyrow = DB::table('strategies')
        ->select()
        ->get();

        $row = DB::table('policies')
        ->select()
        ->get();
        // return View::make('about', compact('boardrow','strategyrow','row'));
        return view('about',compact('boardrow'),compact('row'));
    }
    public  function adminevent(Request $request) {
         $event = new event();
        $img=$request->event_img;

        $imgname=$img->getClientOriginalName();
        $event->event_title=$request->event_tilte;
        $event->event_body=$request->event_body;
        $event->event_location=$request->event_location;
        $event->event_fees=$request->event_fees;
        $event->event_req=$request->event_req;
        $event->event_img=$imgname;
        $img->move("eventsimg",$imgname);
        $event->save();
        return redirect('insertevent');
    }

    public  function adminposts(Request $request) {
        $post = new post();
        $img=$request->post_img;
        // if($request->hasFile('img')){
        //     $img = $request->file('post_img');
        //     $imgname = $img->getClientOriginalName();
        // }
        $postimg=$img->getClientOriginalName();
        $post->post_title=$request->post_tilte;
        $post->post_body=$request->post_body;
        $post->post_img=$postimg;
        $img->move("postsimg",$imgname);
        $post->save();
        return redirect('insertevent');
    }

    public  function adminboard(Request $request) {
            $board = new board();
            $img=$request->img;
            $imgname=$img->getClientOriginalName();
            $board->name=$request->name;
            $board->position=$request->position;
            $board->img=$imgname;
            $img->move("boardsimg",$imgname);
            $board->save();
            return redirect('insertevent');
    }

    public  function adminstrategy(Request $request) {
        $strategy = new strategy();
        $strategy->body=$request->body;
        $strategy->save();
        return redirect('insertevent');
    }

    public  function adminpolicy(Request $request) {
        $policy = new policy();
        $policy->title=$request->title;
        $policy->body=$request->body;
        $policy->save();
        return redirect('insertevent');
    }
    public  function student() {
        return view('student');
    }
    public  function admincourses(Request $request) {
        $course = new course();
        $img=$request->img;
        $imgname=$img->getClientOriginalName();
        $course->title=$request->title;
        $course->duration=$request->duration;
        $course->img=$imgname;
        $img->move("coursesimg",$imgname);
        $course->save();
        return redirect('admin');
    }
 

    public  function projects() {
        return view('projects');
    }
}
