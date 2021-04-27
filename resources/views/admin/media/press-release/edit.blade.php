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
    <li class="active">Press Release Create</li>
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
      <button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('pressReleases') }}">All Press Releases</a></button>
    </div>
  </div>
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<form id="bulletin" role="form" action="{{ route('updatePressRelease', $press->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="box-body">
        	<h2>Press Release Edit Form</h2>
        	<hr>
          <div class="form-group">
            <label for="title">Press Release Title</label>
            <input name="title" type="text" class="form-control" id="title" value="{{ $press->title }}" required>
          </div>
          <div class="form-group">
            <label for="press_file">Press Release File (Only PDF)</label>
            <embed src="{{ asset('front/assets/files/media/press-releases/'.$press->press_file ) }}" type="" width="100%" height="300px;"> <br>
            <input name="press_file" type="file" id="press_file" accept=".pdf">
            <div>
                <h3 class="uploading-text alert-danger" style="display: none; padding: 8px 15px;">File uploading, please don't refresh this page and wait to redirect to all press releases.</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow=""
                    aria-valuemin="0" aria-valuemax="100" style="width: 0%;background: #00a65a;">
                    0%
                    </div>
                </div>
                <br />
                <div id="success"></div>
            </div>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Press Release Update</button>
        </div>
      </form>
		</div>
	</div>
</section>


@endsection