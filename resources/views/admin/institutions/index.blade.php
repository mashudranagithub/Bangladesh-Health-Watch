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
    <li class="active">All Institutions</li>
  </ol>
</section>

<!-- Main content -->
<section class="content group-members">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('createInstitution') }}">Add A New Institution</a></button>
		</div>
	</div>

	@if ($msg = Session::get('msg'))
	    <div class="alert alert-success">
	        <p>{{ $msg }}</p>
	    </div>
	@endif
	<div class="row">
	@foreach($regions as $region)
		<div class="col-md-12 col-lg-12 col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title text-aqua">{{ $region->region_name }} Region</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
				<thead>
					<tr>
						<th>Institution Image</th>
						<th>Institution Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
			@foreach($institutions as $institution)
				@if($region->id == $institution->region_id)
					<tr>
						<td>
							<img src="{{ url ('front/assets/images/institutions/'.$institution->institution_image)}}" style="width:100px;" alt="Institution Image">
						</td>
						<td>{{ $institution->institution_name }}</td>
						<td>
					         <a class="btn btn-primary" href="{{ route('showInstitution', $institution->id) }}">Show</a>
					         <a class="btn btn-primary" href="{{ route('editInstitution', $institution->id) }}">Edit</a>
					          {!! Form::open(['method' => 'DELETE','route' => ['deleteInstitution', $institution->id],'style'=>'display:inline']) !!}
					              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
					          {!! Form::close() !!}
						</td>
					</tr>
				@endif
			@endforeach


				</tbody>
			</table>
            </div>
          </div>
          <!-- /.box -->
        </div>
@endforeach

	</div>
</section>

@endsection