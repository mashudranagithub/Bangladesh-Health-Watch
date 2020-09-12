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
    <li class="active">Show Research</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('editResearch', $research->id) }}">Edit This Research</a></button>
		</div>
	</div>

	@if ($msg = Session::get('msg'))
	    <div class="alert alert-success">
	        <p>{{ $msg }}</p>
	    </div>
	@endif
	<div class="row">
		<div class="col-md-12 col-lg-12 col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h2 class="box-title text-aqua" style="padding:10px 15px; font-size: 25px;">{{ $research->research_title }}</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="padding:15px 20px;">
             	<div class="blog-image">
             		<img style="width:100%;margin-bottom:25px;" src="{{ url('front/assets/images/what-we-do/research/'.$research->research_image) }}" alt="Research Image">
             	</div>
              <div style="margin-bottom: 10px;min-height: 30px;border-bottom: 1px solid #ddd;">
                <span style="float:left;">{{ $research->created_at->format('D') }}, {{ $research->created_at->format('d M') }} {{ $research->created_at->format('Y') }}</span>
                @if(!empty($research->research_report))
                <span style="float:right;"><a target="_blank" href="{{ url('front/assets/files/research/'.$research->research_report) }}">Click to see the Research File</a></span>
                @endif
              </div>
             	<div class="blog-detail">
             		{!! $research->research_detail !!}
             	</div>
            </div>
          </div>
          <!-- /.box -->
        </div>

	</div>
</section>

@endsection