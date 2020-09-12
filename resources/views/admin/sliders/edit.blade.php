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
    <li class="active">Slider Edit</li>
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
      <button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('sliders') }}">All Slides</a></button>
    </div>
  </div>
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<form role="form" action="{{ route('updateSlider', $slide->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="box-body">
        	<h2>Slide Create Form</h2>
        	<hr>
          <div class="form-group">
            <img style="width: 200px;" src="{{ url('front/assets/images/sliders/'.$slide->slide_image) }}" alt="Slide Image"> <br>
            <label for="slide_image">Slide Image</label>
            <input name="slide_image" type="file" class="form-control" id="slide_image" placeholder="Slide Image" accept=".jpg, .jpeg">
            <p class="help-block text-red">Size: 1920px width and 900px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
          </div>

          <div class="form-group">
            <label for="slide_big_title">Slider Big Title</label>
            <input name="slide_big_title" type="text" class="form-control" id="slide_big_title" value="{{ $slide->slide_big_title }}">
          </div>

          <div class="form-group">
            <label for="slide_small_title">Slider Small Title</label>
            <input name="slide_small_title" type="text" class="form-control" id="slide_small_title" value="{{ $slide->slide_small_title }}">
          </div>

          <div class="form-group">
            <label for="slide_position">Slide Position (Default Position - 1st)</label>
            <input name="slide_position" value="{{ $slide->slide_position }}" type="number" class="form-control" id="slide_position">
          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Slider Update</button>
          </div>

        </div>
        <!-- /.box-body -->

        
      </form>
		</div>
	</div>
</section>

@endsection