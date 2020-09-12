<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Ngo;
use DB;
use Session;

class NgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ngos = Ngo::all();
        $regions = Region::all();
        return view('admin.ngo.index', compact(
            'regions',
            'ngos',
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
        return view('admin.ngo.create', compact(
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
            'ngo_image'=>'required',
            'ngo_name'=>'required',
            'region_id'=>'required',
            'focal_person_name'=>'required',
            'focal_person_phone'=>'required',
            'focal_person_email'=>'unique:ngos',
            'ngo_detail'=>'required',
        ]);

        $ngo = new Ngo();

        $img = $request->file('ngo_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/ngo/");
            $img->move($path, $name);
            $ngo->ngo_image = $name;
        }

        $ngo->ngo_name = $request->input('ngo_name');
        $ngo->focal_person_name = $request->input('focal_person_name');
        $ngo->focal_person_phone = $request->input('focal_person_phone');
        $ngo->focal_person_email = $request->input('focal_person_email');
        $ngo->region_id = $request->input('region_id');
        $ngo->ngo_detail = $request->input('ngo_detail');

        $ngo->save();

        return redirect()->route('all-ngo')->with('msg','Ngo Created Successfully');
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
        $ngo = Ngo::find($id);
        $regions = Region::all();
        return view('admin.ngo.edit', compact(
            'ngo',
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
            'ngo_name'=>'required',
            'region_id'=>'required',
            'focal_person_name'=>'required',
            'focal_person_phone'=>'required',
            'ngo_detail'=>'required',
        ]);

        $ngo = Ngo::find($id);

        $img = $request->file('ngo_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/ngo/");
            $img->move($path, $name);
            $ngo->ngo_image = $name;
        }

        $ngo->ngo_name = $request->input('ngo_name');
        $ngo->focal_person_name = $request->input('focal_person_name');
        $ngo->focal_person_phone = $request->input('focal_person_phone');
        $ngo->focal_person_email = $request->input('focal_person_email');
        $ngo->region_id = $request->input('region_id');
        $ngo->ngo_detail = $request->input('ngo_detail');

        $ngo->save();

        return redirect()->route('all-ngo')->with('msg','Ngo Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("ngos")->where('id',$id)->delete();
        return redirect()->route('all-ngo')->with('msg','Ngo deleted successfully');
    }
}
