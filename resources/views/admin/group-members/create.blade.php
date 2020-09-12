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
    <li class="active">Group Member Create</li>
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
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<form role="form" action="{{ route('storeGroup-member') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
              <div class="box-body">
              	<h2>Member Create Form</h2>
              	<hr>
                <div class="form-group">
                  <label for="member-image">Member Image</label>
                  <input name="member_image" type="file" id="member-image" required>

                  <p class="help-block text-red">Size: 688px width and 655px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
                </div>
                <div class="form-group">
                  <label for="member-name">Member Name</label>
                  <input name="member_name" type="text" class="form-control" id="member-name" placeholder="Member Name" required>
                </div>
                <div class="form-group">
                  <label for="member-designation">Member Designation</label>
                  <input name="member_designation" type="text" class="form-control" id="member-designation" placeholder="Member Designation" required>
                </div>
                <div class="form-group">
                  <label for="member-email">Member Email</label>
                  <input name="member_email" type="email" class="form-control" id="member-email" placeholder="Member Email ex: example@email.com" required>
                </div>
                <div class="form-group">
                  <label for="member-position">Member Position</label>
                  <input name="member_position" type="number" class="form-control" id="member-position" placeholder="1" value="1" required>
                </div>
                <div class="form-group">
                  <label for="group-name">Group Name</label>
                  <select name="member_group" class="form-control" id="group-name" required>
                    <option>Select Group</option>
                    <option value="working-group">Working Group</option>
                    <option value="advisory-group">Advisory Group</option>
                    <option value="thematic-group">Thematic Group</option>
                    <option value="secretariat-group">Secretariat Group</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="member-detail">Member Detail</label>
                  <textarea name="member_detail" class="form-control" rows="5" placeholder="Details ..." id="member-detail"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Member Create</button>
              </div>
            </form>
		</div>
	</div>
</section>



@endsection