<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use DB;
use Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $blogs = Blog::all();
        return view('admin.blog.index', compact(
            'blogs',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
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
            'blog_image'=>'required',
            'blog_title'=>'required',
            'blog_admin'=>'required',
            'blog_detail'=>'required',
        ]);

        $blog = new Blog();

        $img = $request->file('blog_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/blog/");
            $img->move($path, $name);
            $blog->blog_image = $name;
        }

        $blog->blog_title = $request->input('blog_title');
        $blog->blog_admin = $request->input('blog_admin');
        $blog->blog_detail = $request->input('blog_detail');

        $blog->save();

        return redirect()->route('all-blogs')->with('msg','Blog Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.show', compact(
            'blog',
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
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact(
            'blog',
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
            'blog_title'=>'required',
            'blog_admin'=>'required',
            'blog_detail'=>'required',
        ]);

        $blog = Blog::find($id);

        $img = $request->file('blog_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("front/assets/images/blog/");
            $img->move($path, $name);
            $blog->blog_image = $name;
        }

        $blog->blog_title = $request->input('blog_title');
        $blog->blog_admin = $request->input('blog_admin');
        $blog->blog_detail = $request->input('blog_detail');

        $blog->save();

        return redirect()->route('all-blogs')->with('msg','Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img_name = DB::table("blogs")->where('id',$id)->value('blog_image');
        unlink(public_path("front/assets/images/blog/".$img_name));       
        DB::table("blogs")->where('id',$id)->delete();
        return redirect()->route('all-blogs')->with('msg','Blog post deleted successfully with the featured image.');
    }
}
