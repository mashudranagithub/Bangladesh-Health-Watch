<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use DB;
use Session;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('created_at', 'desc')->get();
        return view('admin.course.index', compact(
            'courses',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
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
            'course_image'=>'required',
            'course_title'=>'required',
            'course_detail'=>'required',
        ]);

        $course = new Course();

        $img = $request->file('course_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/course/");
            $img->move($path, $name);
            $course->course_image = $name;
        }

        $course->course_title = $request->input('course_title');
        $course->course_detail = $request->input('course_detail');

        $course->save();

        return redirect()->route('all-courses')->with('msg','Course Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('admin.course.show', compact(
            'course',
        ));
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
        return view('admin.course.edit', compact(
            'course',
        ));
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
            'course_title'=>'required',
            'course_detail'=>'required',
        ]);

        $course = Course::find($id);

        $img = $request->file('course_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/course/");
            $img->move($path, $name);
            $course->course_image = $name;
        }

        $course->course_title = $request->input('course_title');
        $course->course_detail = $request->input('course_detail');

        $course->save();

        return redirect()->route('all-courses')->with('msg','Course Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("courses")->where('id',$id)->delete();
        return redirect()->route('all-courses')->with('msg','Course deleted successfully.');
    }
}
