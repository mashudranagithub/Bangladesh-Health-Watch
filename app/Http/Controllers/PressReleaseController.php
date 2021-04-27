<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use DB;
use Session;
use App\PressRelease;

class PressReleaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $press_releases = PressRelease::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.media.press-release.index', compact(
            'press_releases',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.media.press-release.create');
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
            'title'=>'required',
            'press_file'=>'required|mimes:pdf',
        ]);

        $press = new PressRelease();

        $file = $request->file('press_file');

        if($file){
            $name = $file->getClientOriginalName();
            $path = public_path("front/assets/files/media/press-releases/");
            $file->move($path, $name);
            $press->press_file = $name;
        }

        $press->title = $request->input('title');

        $press->save();

        return redirect()->route('pressReleases')->with('msg','Press Release Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $press = PressRelease::find($id);
        return view('admin.media.press-release.show', compact(
            'press'
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
        $press = PressRelease::find($id);
        return view('admin.media.press-release.edit', compact(
            'press'
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
            'title'=>'required',
            'press_file'=>'mimes:pdf',
        ]);

        $press = PressRelease::find($id);

        $file = $request->file('press_file');

        if($file){
            $name = $file->getClientOriginalName();
            $path = public_path("front/assets/files/media/press-releases/");
            $file->move($path, $name);
            $press->press_file = $name;
        }

        $press->title = $request->input('title');

        $press->save();

        return redirect()->route('pressReleases')->with('msg','Press Release Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file_name = DB::table("press_releases")->where('id',$id)->value('press_file');
        unlink(public_path("front/assets/files/media/press-releases/".$file_name));       
        DB::table("press_releases")->where('id',$id)->delete();
        return redirect()->route('pressReleases')->with('msg','Press Release deleted successfully with the pdf file');
    }
}
