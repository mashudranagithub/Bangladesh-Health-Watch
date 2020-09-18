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
    <li class="active">All Subscribers</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="row">
		<div class="col-md-12 col-lg-12 col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title text-aqua">Subscribers Emails</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
				<thead>
					<tr>
						<th>SI</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
				@foreach($subscribers as $subscriber)
					<tr>
						<td width="100px">
							{{ $subscriber->id }}
						</td>
						<td width="500px">
							{{ $subscriber->sub_email }}
						</td>
						<td>
							{!! Form::open(['method' => 'DELETE','route' => ['deleteSlider', $subscriber->id],'style'=>'display:inline']) !!}
							{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
				{{ $subscribers->links() }}
            </div>
          </div>
          <!-- /.box -->
        </div>

	</div>

</section>

@endsection