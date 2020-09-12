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
    <li class="active">All Committee Members</li>
  </ol>
</section>

<!-- Main content -->
<section class="content group-members">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('editCommittee-member', $c_member->id) }}">Edit Committee Member</a></button>
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
            	<h3 class="box-title text-aqua">{{ $c_member->committee_member_name }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<div class="row">
            		<div class="col-md-4">
            			<img style="max-width: 100%;" src="{{ url ('front/assets/images/committee-members/'.$c_member->committee_member_image)}}" alt="committee Member Image">
            		</div>
            		<div class="col-md-8">
            			<p>{{ $c_member->committee_member_detail }}</p>
            			<p><b>Phone: </b>{{ $c_member->committee_member_phone }}</p>
            			<p><b>Email: </b>{{ $c_member->committee_member_email }}</p>
            			<p><b>Region: </b>{{ $c_member_region }}</p>
            		</div>
            	</div>
            </div>
          </div>
          <!-- /.box -->
        </div>


	</div>
</section>

@endsection