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
    <li class="active">Committee Member Create</li>
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
			<form role="form" action="{{ route('storeCommittee-member') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
              <div class="box-body">
              	<h2>Committee Member Create Form</h2>
              	<hr>
                <div class="form-group">
                  <label for="region-id">Select Region</label>
                  <select name="region_id" class="form-control" id="region-id" required>
                    <option>Select Region</option>
                    @foreach($regions as $region)
                    <option value="{{ $region->id }}">{{ $region->region_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="member-image">Committee Member Image</label>
                  <input name="committee_member_image" type="file" id="member-image" required>

                  <p class="help-block text-red">Size: 400px width and 350px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
                </div>
                <div class="form-group">
                  <label for="member-name">Member Name</label>
                  <input name="committee_member_name" type="text" class="form-control" id="member-name" placeholder="Member Name" required>
                </div>
                <div class="form-group">
                  <label for="member-phone">Member Phone</label>
                  <input name="committee_member_phone" type="text" class="form-control" id="member-phone" placeholder="Member Phone">
                </div>
                <div class="form-group">
                  <label for="member-email">Member Email</label>
                  <input name="committee_member_email" type="email" class="form-control" id="member-email" placeholder="Committee Member Email ex: example@email.com">
                </div>
                <div class="form-group">
                  <label for="member-position">Member Position/Serial</label>
                  <input name="committee_member_position" type="number" class="form-control" id="member-position" placeholder="1" value="1" required>
                </div>
                <div class="form-group">
                  <label for="member-detail">Member Detail</label>
                  <textarea name="committee_member_detail" class="form-control" rows="5" placeholder="Details ..." id="member-detail"></textarea>
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