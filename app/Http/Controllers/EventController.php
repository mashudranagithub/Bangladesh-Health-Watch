<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use DB;
use Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('created_at', 'desc')->get();
        return view('admin.event.index', compact(
            'events',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
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
            'event_image'=>'required',
            'event_title'=>'required',
            'event_detail'=>'required',
            'event_start_time'=>'required',
            'event_end_time'=>'required',
            'event_place'=>'required',
            'event_date'=>'required',
            'event_status'=>'required',
        ]);

        $event = new Event();

        $img = $request->file('event_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/event/");
            $img->move($path, $name);
            $event->event_image = $name;
        }

        $event->event_title = $request->input('event_title');
        $event->event_detail = $request->input('event_detail');
        $event->event_start_time = $request->input('event_start_time');
        $event->event_end_time = $request->input('event_end_time');
        $event->event_place = $request->input('event_place');
        $event->event_date = $request->input('event_date');
        $event->event_status = $request->input('event_status');

        $event->save();

        return redirect()->route('all-events')->with('msg','Event Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('admin.event.show', compact(
            'event',
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
        $event = Event::find($id);
        return view('admin.event.edit', compact(
            'event',
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
            'event_title'=>'required',
            'event_detail'=>'required',
            'event_start_time'=>'required',
            'event_end_time'=>'required',
            'event_place'=>'required',
            'event_date'=>'required',
            'event_status'=>'required',
        ]);

        $event = Event::find($id);

        $img = $request->file('event_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/event/");
            $img->move($path, $name);
            $event->event_image = $name;
        }

        $event->event_title = $request->input('event_title');
        $event->event_detail = $request->input('event_detail');
        $event->event_start_time = $request->input('event_start_time');
        $event->event_end_time = $request->input('event_end_time');
        $event->event_place = $request->input('event_place');
        $event->event_date = $request->input('event_date');
        $event->event_status = $request->input('event_status');

        $event->save();

        return redirect()->route('all-events')->with('msg','Event Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img_name = DB::table("events")->where('id',$id)->value('event_image');
        unlink(public_path("front/assets/images/event/".$img_name));       
        DB::table("events")->where('id',$id)->delete();
        return redirect()->route('all-events')->with('msg','Event post deleted successfully with the featured image.');
    }
}
