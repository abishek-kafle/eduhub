<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Standard;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        $standards = Standard::all();
        return view('admin.course.list')->with(['courses'=>$courses,'standards'=>$standards]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'file' => 'required',
            'class' => 'required'
        ]);

        // if($request -> hasFile('file')){
        //     $filenamewithext = $request->file('file')->getClientOriginalName();
        //     $filename = pathinfo($filenamewithext,PATHINFO_FILENAME);
        //     $extension = $request->file('file')->getClientOriginalExtension();
        //     $filenametostore = $filename.'.'.$extension;
        //     $path = $request->file('file')->storeAs('public/file',$filenametostore);
        // }else{
        //     $filenametostore = 'noimage.jpg';
        // }

        $course = new Course();
        $course->name = $request->input('name');
        $course->description = $request->input('description');
        $course->link = $request->input('file');
        $course->class = $request->input('class');
        $course->save();
        return redirect('course')->with('status','Record added Successfully !!');
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
        $course = Course::find($id);
        $standards = Standard::all();
        return view('admin.course.edit')->with(['course'=>$course,'standards'=>$standards]);
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
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'file' => 'nullable',
            'class' => 'required'
        ]);

        // if($request -> hasFile('file')){
        //     $filenamewithext = $request->file('file')->getClientOriginalName();
        //     $filename = pathinfo($filenamewithext,PATHINFO_FILENAME);
        //     $extension = $request->file('file')->getClientOriginalExtension();
        //     $filenametostore = $filename.'.'.$extension;
        //     $path = $request->file('file')->storeAs('public/file',$filenametostore);
        // }else{
        //     $filenametostore = $request->input('oldfile');
        // }

        $course = Course::find($id);
        $course->name = $request->input('name');
        $course->description = $request->input('description');
        $course->link = $request->input('file');
        $course->class = $request->input('class');
        $course->save();
        return redirect('course')->with('status','Record updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        return redirect('course')->with('status','Record deleted successfully !!');
    }
}
