<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bulletin;
use App\Http\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use DB;

class BulletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $bulletins = Bulletin::all();
        return view('admin.bulletin.index', compact(
            'bulletins',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bulletin.create');
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
            'bulletin_title'=>'required',
            'bulletin_image'=>'required',
            'bulletin_month_year'=>'required',
            'bulletin_file'=>'required|mimes:pdf',
        ]);

        $bulletin = new Bulletin();

        $img = $request->file('bulletin_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/bulletin/");
            $img->move($path, $name);
            $bulletin->bulletin_image = $name;
        }

        $file = $request->file('bulletin_file');

        if($file){
            $name = $file->getClientOriginalName();
            $path = public_path("front/assets/files/bulletin/");
            $file->move($path, $name);
            $bulletin->bulletin_file = $name;
        }

        $bulletin->bulletin_title = $request->input('bulletin_title');
        $bulletin->bulletin_month_year = $request->input('bulletin_month_year');

        $bulletin->save();

        return redirect()->route('bulletins')->with('msg','Bulletin Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bulletin = Bulletin::find($id);
        return view('admin.bulletin.show', compact(
            'bulletin',
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
        $bulletin = Bulletin::find($id);
        return view('admin.bulletin.edit', compact(
            'bulletin',
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
            'bulletin_title'=>'required',
            'bulletin_month_year'=>'required',
        ]);

        $bulletin = Bulletin::find($id);

        $img = $request->file('bulletin_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/bulletin/");
            $img->move($path, $name);
            $bulletin->bulletin_image = $name;
        }

        $file = $request->file('bulletin_file');

        if($file){
            $name = $file->getClientOriginalName();
            $path = public_path("front/assets/files/bulletin/");
            $file->move($path, $name);
            $bulletin->bulletin_file = $name;
        }

        $bulletin->bulletin_title = $request->input('bulletin_title');
        $bulletin->bulletin_month_year = $request->input('bulletin_month_year');

        $bulletin->save();

        return redirect()->route('bulletins')->with('msg','Bulletin Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $file_name = DB::table("bulletins")->where('id',$id)->value('bulletin_file');
        unlink(public_path("front/assets/files/bulletin/".$file_name));       
        DB::table("bulletins")->where('id',$id)->delete();
        return redirect()->route('bulletins')->with('msg','Bulletin deleted successfully with the pdf file');
    }
}
