<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Activity;
use DB;
use Session;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::all();
        $activities = Activity::all();
        return view('admin.activity.index', compact(
            'regions',
            'activities',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();
        return view('admin.activity.create', compact(
            'regions',
        ));
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
            'activity_title'=>'required',
            'activity_image'=>'required',
            'region_id'=>'required',
        ]);

        $activitiy = new Activity();

        $img = $request->file('activity_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/activities/");
            $img->move($path, $name);
            $activitiy->activity_image = $name;
        }

        $activitiy->activity_title = $request->input('activity_title');
        $activitiy->activity_detail = $request->input('activity_detail');
        $activitiy->region_id = $request->input('region_id');

        $activitiy->save();

        return redirect()->route('all-activity')->with('msg','Activity Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::find($id);
        $region_name = DB::table('regions')->where('id', $activity->region_id)->value('region_name');
        return view('admin.activity.show', compact(
            'activity',
            'region_name',
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
        $activity = Activity::find($id);
        $regions = Region::all();
        return view('admin.activity.edit', compact(
            'activity',
            'regions',
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
            'activity_title'=>'required',
            'region_id'=>'required',
        ]);

        $activitiy = Activity::find($id);

        $img = $request->file('activity_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/activities/");
            $img->move($path, $name);
            $activitiy->activity_image = $name;
        }

        $activitiy->activity_title = $request->input('activity_title');
        $activitiy->activity_detail = $request->input('activity_detail');
        $activitiy->region_id = $request->input('region_id');

        $activitiy->save();

        return redirect()->route('all-activity')->with('msg','Activity Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("activities")->where('id',$id)->delete();
        return redirect()->route('all-activity')->with('msg','Activity deleted successfully');
    }
}
