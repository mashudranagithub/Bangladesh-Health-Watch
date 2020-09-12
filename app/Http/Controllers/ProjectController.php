<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use DB;
use Session;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.project.index', compact(
            'projects',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
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
            'project_image'=>'required',
            'project_title'=>'required',
            'project_detail'=>'required',
        ]);

        $project = new Project();

        $img = $request->file('project_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/project/");
            $img->move($path, $name);
            $project->project_image = $name;
        }

        $project->project_title = $request->input('project_title');
        $project->project_detail = $request->input('project_detail');

        $project->save();

        return redirect()->route('all-project')->with('msg','Project Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('admin.project.show', compact(
            'project',
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
        $project = Project::find($id);
        return view('admin.project.edit', compact(
            'project',
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
            'project_title'=>'required',
            'project_detail'=>'required',
        ]);

        $project = Project::find($id);

        $img = $request->file('project_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/project/");
            $img->move($path, $name);
            $project->project_image = $name;
        }

        $project->project_title = $request->input('project_title');
        $project->project_detail = $request->input('project_detail');

        $project->save();

        return redirect()->route('all-project')->with('msg','Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
