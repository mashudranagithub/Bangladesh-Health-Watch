@extends('admin.layouts.master')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Blog Edit</li>
  </ol>
</section>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

<!-- Main content -->
<section class="content">
  <div class="row" style="margin-bottom:30px;">
    <div class="col-md-12 text-right">
      <button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('blogs') }}">All Blogs</a></button>
    </div>
  </div>
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<form role="form" action="{{ route('updateBlog', $blog->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="box-body">
        	<h2>Blog Edit Form</h2>
        	<hr>
          <div class="form-group">
            @if($blog->blog_image)
            <img style="width:500px;margin:25px 0;"  src="{{ url('front/assets/images/blog/'.$blog->blog_image) }}" alt="Blog Image"> <br>
            @endif
            <label for="blog-image">Blog Image</label>
            <input name="blog_image" type="file" class="form-control" id="blog-image" placeholder="Bulletin Image" accept=".jpg, .jpeg">
            <p class="help-block text-red">Size: 1110px width and 625px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
          </div>
          <div class="form-group">
            <label for="blog_title">Blog Title</label>
            <input value="{{ $blog->blog_title }}" name="blog_title" type="text" class="form-control" id="blog_title" required>
          </div>
          <div class="form-group">
            <label for="blog_admin">Blog Admin</label>
            <input value="{{ $blog->blog_admin }}" name="blog_admin" type="text" class="form-control" id="blog_admin" required>
          </div>
          <div class="form-group">
            <label for="bhw-ckeditor">Blog Detail</label>
            <textarea name="blog_detail" id="bhw-ckeditor" class="form-control" cols="30" rows="10">{!! $blog->blog_detail !!}</textarea>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Blog Post Update</button>
        </div>
      </form>
		</div>
	</div>
</section>

@endsection