<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Course;
use App\Models\About;
use App\Models\Event;
use App\Models\Member;
use App\Models\Standard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{
    public function index(){
        $blogs = Blog::orderBy('id','desc')->get();
        $courses = Course::orderBy('id','desc')->get();
        $standards = Standard::orderBy('id','desc')->get();
        $about = About::orderBy('id','desc')->first();
        $events = Event::orderBy('id','desc')->get();
        return view('welcome')->with([
            'blogs'=>$blogs,
            'courses'=>$courses,
            'standards'=>$standards,
            'about'=>$about,
            'events'=>$events
        ]);
    }

    public function about(){
        $about = About::orderBy('id','desc')->first();
        //dd($about);
        return view('about')->with('about',$about);
    }

    public function course($name){
        $courses = Course::orderBy('id','desc')->where('class','=', $name)->get();
        //dd($courses);
        return view('courses')->with('courses', $courses);
    }

    // public function downloadpdf(Request $request,$name){
    //     $url = Storage::path($name);
    //     //dd($url);
    //     return response()->download($url,$name);
    // }

    public function blog(){
        $blogs = Blog::orderBy('id','desc')->get();
        return view('blogs')->with('blogs',$blogs);
    }

    public function viewblog($id){
        $blog = Blog::find($id);
        return view('blogdetail')->with('blog',$blog);
    }

    public function event(){
        $events = Event::orderBy('id','desc')->get();
        return view('events')->with('events', $events);
    }

    public function viewevent($id){
        $event = Event::find($id);
        return view('eventdetail')->with('event',$event);
    }

    public function standard(){
        $standards = Standard::all();
        return view('standards')->with('standards',$standards);
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
