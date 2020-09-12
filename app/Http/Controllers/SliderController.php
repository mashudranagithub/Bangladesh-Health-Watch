<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Http\Input;
use DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slider::orderBy('created_at', 'desc')->paginate(5);
        return view ('admin.sliders.index', compact(
            'slides'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.sliders.create');
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
            'slide_image'=>'required',
            'slide_position'=>'required',
        ]);

        $slide = new Slider();

        $img = $request->file('slide_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/sliders/");
            $img->move($path, $name);
            $slide->slide_image = $name;
        }


        $slide->slide_big_title = $request->input('slide_big_title');
        $slide->slide_small_title = $request->input('slide_small_title');
        $slide->slide_position = $request->input('slide_position');

        $slide->save();

        return redirect()->route('sliders')->with('msg','Slide added Successfully');
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
        $slide = Slider::find($id);
        return view ('admin.sliders.edit', compact(
            'slide'
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
            'slide_position'=>'required',
        ]);

        $slide = Slider::find($id);

        $img = $request->file('slide_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/sliders/");
            $img->move($path, $name);
            $slide->slide_image = $name;
        }


        $slide->slide_big_title = $request->input('slide_big_title');
        $slide->slide_small_title = $request->input('slide_small_title');
        $slide->slide_position = $request->input('slide_position');

        $slide->save();

        return redirect()->route('sliders')->with('msg','Slide Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img_name = DB::table("sliders")->where('id',$id)->value('slide_image');
        unlink(public_path("front/assets/images/sliders/".$img_name));       
        DB::table("sliders")->where('id',$id)->delete();
        return redirect()->route('sliders')->with('msg','Slide deleted successfully with the Image');
    }
}
