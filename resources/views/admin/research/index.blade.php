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
    <li class="active">All Research</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('createResearch') }}">Add New Research</a></button>
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
              <h3 class="box-title text-aqua">Research</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
				<thead>
					<tr>
						<th>Research Title</th>
						<th>Publishing Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
			@foreach($research as $single_research)
					<tr>
						<td width="350px">{{ $single_research->research_title }}</td>
						<td>{{ $single_research->created_at->format('D') }}, {{ $single_research->created_at->format('d M') }} {{ $single_research->created_at->format('Y') }}</td>
						<td>
					         <a class="btn btn-primary" href="{{ route('showResearch', $single_research->id) }}">Show</a>
					         <a class="btn btn-primary" href="{{ route('editResearch', $single_research->id) }}">Edit</a>
					          {!! Form::open(['method' => 'DELETE','route' => ['deleteResearch', $single_research->id],'style'=>'display:inline']) !!}
					              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
					          {!! Form::close() !!}
						</td>
					</tr>
			@endforeach


				</tbody>
			</table>
			{{ $research->links() }}
            </div>
          </div>
          <!-- /.box -->
        </div>

	</div>
</section>

@endsection