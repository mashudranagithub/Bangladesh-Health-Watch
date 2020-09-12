<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use DB;
use Session;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.photo.index', compact(
            'photos',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photo.create');
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
            'photo_type'=>'required',
            'photo'=>'required',
        ]);

        $photo = new Photo();

        $img = $request->file('photo');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/photo/");
            $img->move($path, $name);
            $photo->photo = $name;
        }


        $photo->photo_type = $request->input('photo_type');

        $photo->save();

        return redirect()->route('all-photos')->with('msg','Publication added Successfully');
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
        $photo = Photo::find($id);
        return view('admin.photo.edit', compact(
            'photo',
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
            'photo_type'=>'required',
        ]);

        $photo = Photo::find($id);

        $img = $request->file('photo');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/photo/");
            $img->move($path, $name);
            $photo->photo = $name;
        }


        $photo->photo_type = $request->input('photo_type');

        $photo->save();

        return redirect()->route('all-photos')->with('msg','Photo Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("photos")->where('id',$id)->delete();
        return redirect()->route('all-photos')->with('msg','Photo deleted successfully');
    }
}
