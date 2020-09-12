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
    <li class="active">Publication Create</li>
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
      <button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('all-publications') }}">All Publications</a></button>
    </div>
  </div>
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<form role="form" action="{{ route('storePublication') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="box-body">
        	<h2>Publication Create Form</h2>
        	<hr>
          <div class="form-group">
            <label for="publication_title">Publication Title</label>
            <input name="publication_title" type="text" class="form-control" id="publication_title" placeholder="Publication Title" required>
          </div>
          <div class="form-group">
            <label for="publication_writter">Publication By/Writter</label>
            <input name="publication_writter" type="text" class="form-control" id="publication_writter" placeholder="Writter Name" required>
          </div>
          <div class="form-group">
            <label for="newspaper_name">Newspaper Name</label>
            <input name="newspaper_name" type="text" class="form-control" id="newspaper_name" placeholder="Newspaper Name" required>
          </div>
          <div class="form-group">
            <label for="publication_link">Newspaper Link</label>
            <input name="publication_link" type="text" class="form-control" id="publication_link" placeholder="Newspaper Name" required>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Publication Add</button>
        </div>
      </form>
		</div>
	</div>
</section>

@endsection