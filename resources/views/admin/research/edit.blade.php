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
      <form role="form" action="{{ route('updateResearch', $research->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="box-body">
          <h2>Research Edit Form</h2>
          <hr>
          <div class="form-group">
            @if($research->research_image)
            <img style="width:300px;margin-bottom:20px;" src="{{ url('front/assets/images/what-we-do/research/'.$research->research_image) }}" alt="Research Image"> <br>
            @endif
            <label for="research_image">Research Image</label>
            <input name="research_image" type="file" class="form-control" id="research_image" placeholder="Research Image" accept=".jpg, .jpeg">
            <p class="help-block text-red">Size: 1110px width and 625px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
          </div>
          <div class="form-group">
            <label for="research_title">Research Title</label>
            <input value="{{ $research->research_title }}" name="research_title" type="text" class="form-control" id="research_title" required>
          </div>
          <div class="form-group">
            <label for="research_report">Research Report (If available)</label>
            <input value="{{ $research->research_report }}" name="research_report" type="file" class="form-control" id="research_report"  accept=".pdf" placeholder="Attach Research File if available">
          </div>
          <div class="form-group">
            <label for="bhw-ckeditor">Research Detail</label>
            <textarea name="research_detail" id="bhw-ckeditor" class="form-control" cols="30" rows="10" required>
               {!! $research->research_detail !!}
            </textarea>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Research Update</button>
        </div>
      </form>
    </div>
  </div>
</section>

@endsection