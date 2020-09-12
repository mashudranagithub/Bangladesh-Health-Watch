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
    <li class="active">Project Create</li>
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
      <button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('all-project') }}">All Projects</a></button>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-xs-12">
      <form role="form" action="{{ route('updateProject', $project->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="box-body">
          <h2>Project Edit Form</h2>
          <hr>
          <div class="form-group">
            @if($project->project_image)
            <img style="margin-bottom:20px;max-width: 300px;" src="{{ url('front/assets/images/project/'.$project->project_image) }}" alt="Project Image"> <br>
            @endif
            <label for="project-image">Project Image</label>
            <input name="project_image" type="file" class="form-control" id="project-image" placeholder="Project Image" accept=".jpg, .jpeg">
            <p class="help-block text-red">Size: 1110px width and 625px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
          </div>
          <div class="form-group">
            <label for="project_title">Project Title</label>
            <input value="{{ $project->project_title }}" name="project_title" type="text" class="form-control" id="project_title" required>
          </div>
          <div class="form-group">
            <label for="bhw-ckeditor">Project Detail</label>
            <textarea name="project_detail" id="bhw-ckeditor" class="form-control" cols="30" rows="10">
              {!! $project->project_detail !!}
            </textarea>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Project Update</button>
        </div>
      </form>
    </div>
  </div>
</section>

@endsection