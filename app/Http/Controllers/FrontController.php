<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Course;
use App\Models\About;
use App\Models\Event;
use App\Models\Member;
use App\Models\Standard;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        $about = About::orderBy('id','desc')->first();
        //dd($about);
        return view('about')->with('about',$about);
    }

    public function course(){
        return view('courses');
    }

    public function blog(){
        return view('blogs');
    }

    public function event(){
        return view('events');
    }

    public function standard(){
        return view('standard');
    }

    public function contact(){
        return view('contact');
    }

    public function registration(){
        return view('register');
    }

    public function register_member(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:members,email'
        ]);

        $member = new Member();
        $member->name = $request->input('name');
        $member->email = $request->input('email');
        $member->save();

        return redirect('/')->with('status','Thank you for Registering.');
    }
}
