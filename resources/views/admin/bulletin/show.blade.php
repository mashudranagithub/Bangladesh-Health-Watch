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
    <li class="active">All Bulletins</li>
  </ol>
</section>

<!-- Main content -->
<section class="content group-members">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('editBulletin', $bulletin->id) }}">Edit Bulletin</a></button>
		</div>
	</div>

	@if ($msg = Session::get('msg'))
	    <div class="alert alert-success">
	        <p>{{ $msg }}</p>
	    </div>
	@endif
	<div class="row">

		<div class="col-md-12 col-lg-12 col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border">
            	<h3 class="box-title text-aqua">{{ $bulletin->bulletin_title }} of {{ $bulletin->bulletin_month_year }}</p></h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<div class="row mb-4">
            		<div class="col-md-12">
            			<embed src="{{ url('front/assets/files/bulletin/'.$bulletin->bulletin_file) }}" style="width:100%;min-height: 90vh; margin-bottom:30px;">
            		</div>
            	</div>
              <div class="row mt-4">
                <div class="col-md-4">
                  <img width="100%;" src="{{ url('front/assets/images/bulletin/'.$bulletin->bulletin_image) }}" alt="BHW Bulletin Image">
                </div>
              </div>
            </div>
          </div>
          <!-- /.box -->
        </div>


	</div>
</section>

@endsection