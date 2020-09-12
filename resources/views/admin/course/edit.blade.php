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
    <li class="active">Course Edit</li>
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
      <button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('all-courses') }}">All Courses</a></button>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-xs-12">
      <form role="form" action="{{ route('updateCourse', $course->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="box-body">
          <h2>Course Edit Form</h2>
          <hr>
          <div class="form-group">
            @if($course->course_image)
            <img style="width:300px;margin-bottom: 20px;" src="{{ url('front/assets/images/course/'.$course->course_image) }}" alt="Course Image"> <br>
            @endif
            <label for="course_image">Course Image</label>
            <input name="course_image" type="file" class="form-control" id="course_image" placeholder="Course Image" accept=".jpg, .jpeg">
            <p class="help-block text-red">Size: 1110px width and 625px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
          </div>
          <div class="form-group">
            <label for="course_title">Course Title</label>
            <input value="{{ $course->course_title }}" name="course_title" type="text" class="form-control" id="course_title" required>
          </div>
          <div class="form-group">
            <label for="bhw-ckeditor">Course Detail</label>
            <textarea name="course_detail" id="bhw-ckeditor" class="form-control" cols="30" rows="10">
              {!! $course->course_detail !!}
            </textarea>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Course Update</button>
        </div>
      </form>
    </div>
  </div>
</section>

@endsection