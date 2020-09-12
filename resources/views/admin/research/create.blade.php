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
    <li class="active">Research Create</li>
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
      <button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('all-research') }}">All Research</a></button>
    </div>
  </div>
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<form role="form" action="{{ route('storeResearch') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="box-body">
        	<h2>Research Create Form</h2>
        	<hr>
          <div class="form-group">
            <label for="research_image">Research Image</label>
            <input name="research_image" type="file" class="form-control" id="research_image" placeholder="Research Image" accept=".jpg, .jpeg" required>
            <p class="help-block text-red">Size: 1110px width and 625px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
          </div>
          <div class="form-group">
            <label for="research_title">Research Title</label>
            <input name="research_title" type="text" class="form-control" id="research_title" placeholder="Research Title" required>
          </div>
          <div class="form-group">
            <label for="research_report">Research Report (If available)</label>
            <input name="research_report" type="file" accept=".pdf" class="form-control" id="research_report" placeholder="Attach Research File if available">
          </div>
          <div class="form-group">
            <label for="bhw-ckeditor">Research Detail</label>
            <textarea name="research_detail" id="bhw-ckeditor" class="form-control" cols="30" rows="10" required></textarea>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Research Create</button>
        </div>
      </form>
		</div>
	</div>
</section>

@endsection