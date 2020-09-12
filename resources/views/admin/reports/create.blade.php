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
    <li class="active">Report Create</li>
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
      <button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('reports') }}">All Reports</a></button>
    </div>
  </div>
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<form id="report" role="form" action="{{ route('storeReport') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="box-body">
        	<h2>Report Create Form</h2>
        	<hr>
          <div class="form-group">
            <label for="report-title">Report Title</label>
            <input name="report_title" type="text" class="form-control" id="report-title" placeholder="Activity Title" required>
          </div>
          <div class="form-group">
            <label for="report-file">Report File (Only PDF)</label>
            <input name="report_file" type="file" id="report-file" accept=".pdf" required>
            <div>
                <h3 class="uploading-text alert-danger" style="display: none; padding: 8px 15px;">File uploading, please don't refresh this page and wait to redirect to all reports.</h3>
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
          <button type="submit" class="btn btn-primary">Report Add</button>
        </div>
      </form>
		</div>
	</div>
</section>






@endsection