<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Selected_institution;
use App\Http\Input;
use DB;

class Selected_institutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::all();
        $institutions = Selected_institution::all();
        return view('admin.institutions.index', compact(
            'regions',
            'institutions',
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
        return view('admin.institutions.create', compact(
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
            'institution_image'=>'required',
            'institution_name'=>'required',
            'institution_detail'=>'required',
            'region_id'=>'required',
        ]);

        $institution = new Selected_institution();

        $img = $request->file('institution_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/institutions/");
            $img->move($path, $name);
            $institution->institution_image = $name;
        }

        $institution->institution_name = $request->input('institution_name');
        $institution->institution_detail = $request->input('institution_detail');
        $institution->region_id = $request->input('region_id');

        $institution->save();

        return redirect()->route('all-institution')->with('msg','Institution Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $institution = Selected_institution::find($id);
        $region_name = DB::table('regions')->where('id', $institution->region_id)->value('region_name');
        return view('admin.institutions.show', compact(
            'institution',
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
        $institution = Selected_institution::find($id);
        $regions = Region::all();
        return view('admin.institutions.edit', compact(
            'institution',
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
            'institution_name'=>'required',
            'region_id'=>'required',
        ]);

        $institution = Selected_institution::find($id);

        $img = $request->file('institution_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/institutions/");
            $img->move($path, $name);
            $institution->institution_image = $name;
        }

        $institution->institution_name = $request->input('institution_name');
        $institution->institution_detail = $request->input('institution_detail');
        $institution->region_id = $request->input('region_id');

        $institution->save();

        return redirect()->route('all-institution')->with('msg','Institution Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("selected_institutions")->where('id',$id)->delete();
        return redirect()->route('all-institution')->with('msg','Institution deleted successfully');
    }
}
