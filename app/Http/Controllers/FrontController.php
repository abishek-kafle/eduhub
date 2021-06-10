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
        return view('about');
    }

    public function course(){
        return view('course');
    }

    public function blog(){
        return view('blog');
    }

    public function event(){
        return view('event');
    }

    public function standard(){
        return view('standard');
    }

    public function contact(){
        return view('contact');
    }
}
