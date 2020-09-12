<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use DB;
use Session;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.publication.index', compact(
            'publications',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publication.create');
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
            'publication_title'=>'required',
            'publication_writter'=>'required',
            'newspaper_name'=>'required',
            'publication_link'=>'required',
        ]);

        $publication = new Publication();

        $publication->publication_title = $request->input('publication_title');
        $publication->publication_writter = $request->input('publication_writter');
        $publication->newspaper_name = $request->input('newspaper_name');
        $publication->publication_link = $request->input('publication_link');

        $publication->save();

        return redirect()->route('all-publications')->with('msg','Publication added Successfully');
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
        $publication = Publication::find($id);
        return view('admin.publication.edit', compact(
            'publication',
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
            'publication_title'=>'required',
            'publication_writter'=>'required',
            'newspaper_name'=>'required',
            'publication_link'=>'required',
        ]);

        $publication = Publication::find($id);

        $publication->publication_title = $request->input('publication_title');
        $publication->publication_writter = $request->input('publication_writter');
        $publication->newspaper_name = $request->input('newspaper_name');
        $publication->publication_link = $request->input('publication_link');

        $publication->save();

        return redirect()->route('all-publications')->with('msg','Publication Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("publications")->where('id',$id)->delete();
        return redirect()->route('all-publications')->with('msg','Publication post deleted successfully.');
    }
}
