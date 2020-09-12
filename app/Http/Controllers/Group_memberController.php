<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group_member;
use App\Http\Input;
use DB;

class Group_memberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $members = DB::table('group_members')->orderBy('id')->get();

        return view('admin.group-members.index', compact(
            'members',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.group-members.create');
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
            'member_image'=>'required',
            'member_name'=>'required',
            'member_designation'=>'required',
            'member_email'=>'required',
            'member_group'=>'required',
            'member_detail'=>'required',
            'member_position'=>'required'
        ]);

        $member = new Group_member();

        $img = $request->file('member_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/who-we-are/".$request->input('member_group'));
            $img->move($path, $name);
            $member->member_image = $name;
        }

        $member->member_name = $request->input('member_name');
        $member->member_designation = $request->input('member_designation');
        $member->member_email = $request->input('member_email');
        $member->member_group = $request->input('member_group');
        $member->member_detail = $request->input('member_detail');
        $member->member_position = $request->input('member_position');

        $member->save();

        return redirect()->route('group-members')->with('msg','Group Member Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single_member = Group_member::find($id);

        return view('admin.group-members.show', compact(
            'single_member',
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
        $single_member = Group_member::find($id);
        
        return view('admin.group-members.edit', compact(
            'single_member',
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
            'member_name'=>'required',
            'member_designation'=>'required',
            'member_email'=>'required',
            'member_group'=>'required',
            'member_detail'=>'required',
            'member_position'=>'required'
        ]);

        $member = Group_member::find($id);

        // dd($member);

        $img = $request->file('member_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/who-we-are/".$request->input('member_group'));
            $img->move($path, $name);
            $member->member_image = $name;
        }

        $member->member_name = $request->input('member_name');
        $member->member_designation = $request->input('member_designation');
        $member->member_email = $request->input('member_email');
        $member->member_group = $request->input('member_group');
        $member->member_detail = $request->input('member_detail');
        $member->member_position = $request->input('member_position');

        $member->save();

        return redirect()->route('group-members')->with('msg','Group Member Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("group_members")->where('id',$id)->delete();
        return redirect()->route('group-members')
            ->with('msg','Member deleted successfully');
    }
}
