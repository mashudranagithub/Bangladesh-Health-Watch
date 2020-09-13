<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Http\Input;
use Illuminate\Support\Facades\File;
use DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.reports.index', compact(
            'reports',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reports.create');
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
            'report_title'=>'required',
            'type'=>'required',
            'report_file'=>'required|mimes:pdf',
        ]);

        $report = new Report();

        $file = $request->file('report_file');

        if($file){
            $name = $file->getClientOriginalName();
            $path = public_path("front/assets/files/report/");
            $file->move($path, $name);
            $report->report_file = $name;
        }

        $report->report_title = $request->input('report_title');
        $report->type = $request->input('type');

        $report->save();

        return redirect()->route('reports')->with('msg','Report Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = Report::find($id);
        return view('admin.reports.show', compact(
            'report',
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
        $report = Report::find($id);
        return view('admin.reports.edit', compact(
            'report',
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
            'report_title'=>'required',
        ]);

        $report = Report::find($id);

        $file = $request->file('report_file');

        if($file){
            $file_name = DB::table("reports")->where('id',$id)->value('report_file');
            unlink(public_path("front/assets/files/report/".$file_name));

            $name = $file->getClientOriginalName();
            $path = public_path("front/assets/files/report/");
            $file->move($path, $name);
            $report->report_file = $name;
        }

        $report->report_title = $request->input('report_title');
        $report->type = $request->input('type');

        $report->save();

        return redirect()->route('reports')->with('msg','Report Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file_name = DB::table("reports")->where('id',$id)->value('report_file');
        unlink(public_path("front/assets/files/report/".$file_name));       
        DB::table("reports")->where('id',$id)->delete();
        return redirect()->route('reports')->with('msg','Report deleted successfully with the pdf file');
    }
}
