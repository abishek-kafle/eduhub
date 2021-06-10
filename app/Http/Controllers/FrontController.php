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
}
