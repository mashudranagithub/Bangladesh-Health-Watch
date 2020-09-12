<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Http\Input;
use DB;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::all();
        return view('admin.region.index', compact(
            'regions',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.region.create');
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
            'region_image'=>'required',
            'region_name'=>'required',
        ]);

        $region = new Region();

        $img = $request->file('region_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/region/");
            $img->move($path, $name);
            $region->region_image = $name;
        }

        $region->region_name = $request->input('region_name');

        $region->save();

        return redirect()->route('all-regions')->with('msg','Region Created Successfully');
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
        $region = Region::find($id);
        return view('admin.region.edit', compact(
            'region',
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
            'region_name'=>'required',
        ]);

        $region = Region::find($id);

        $img = $request->file('region_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/region/");
            $img->move($path, $name);
            $region->region_image = $name;
        }

        $region->region_name = $request->input('region_name');

        $region->save();

        return redirect()->route('all-regions')->with('msg','Region Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("regions")->where('id',$id)->delete();
        return redirect()->route('all-regions')->with('msg','Region deleted successfully');
    }
}
