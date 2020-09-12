<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Committee_member;
use App\Region;
use App\Http\Input;
use DB;

class Committee_memberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::all();
        $c_members = Committee_member::all();

        // dd($c_members);
        return view('admin.committee-members.index', compact(
            'c_members',
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
        $regions = Region::all();
        return view('admin.committee-members.create', compact(
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
            'committee_member_image'=>'required',
            'committee_member_name'=>'required',
            'region_id'=>'required',
            'committee_member_position'=>'required',
            'committee_member_phone'=>'unique:committee_members',
            'committee_member_email'=>'unique:committee_members',
        ]);

        $c_member = new Committee_member();

        $img = $request->file('committee_member_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/committee-members/");
            $img->move($path, $name);
            $c_member->committee_member_image = $name;
        }

        $c_member->committee_member_name = $request->input('committee_member_name');
        $c_member->committee_member_phone = $request->input('committee_member_phone');
        $c_member->committee_member_email = $request->input('committee_member_email');
        $c_member->committee_member_detail = $request->input('committee_member_detail');
        $c_member->region_id = $request->input('region_id');
        $c_member->committee_member_position = $request->input('committee_member_position');

        $c_member->save();

        return redirect()->route('committee-members')->with('msg','Committee Member Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $c_member = Committee_member::find($id);
        $c_member_region = DB::table('regions')->where('id', $c_member->region_id)->value('region_name');
        return view('admin.committee-members.show', compact(
            'c_member',
            'c_member_region',
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
        $regions = Region::all();
        $c_member = Committee_member::find($id);
        return view('admin.committee-members.edit', compact(
            'c_member',
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
            'committee_member_name'=>'required',
            'region_id'=>'required',
            'committee_member_position'=>'required',
        ]);

        $c_member = Committee_member::find($id);

        $img = $request->file('committee_member_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/committee-members/");
            $img->move($path, $name);
            $c_member->committee_member_image = $name;
        }

        $c_member->committee_member_name = $request->input('committee_member_name');
        $c_member->committee_member_phone = $request->input('committee_member_phone');
        $c_member->committee_member_email = $request->input('committee_member_email');
        $c_member->committee_member_detail = $request->input('committee_member_detail');
        $c_member->region_id = $request->input('region_id');
        $c_member->committee_member_position = $request->input('committee_member_position');

        $c_member->save();

        return redirect()->route('committee-members')->with('msg','Committee Member Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("committee_members")->where('id',$id)->delete();
        return redirect()->route('committee-members')
            ->with('msg','Member deleted successfully');
    }
}
