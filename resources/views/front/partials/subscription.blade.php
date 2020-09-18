<!-- Subscribsion section start here -->
<section id="Subscribtion">
	<div class="notification-area">
		@if ($errors->any())
		<span class="alert alert-danger">
		@foreach ($errors->all() as $error)
		<span>{{ $error }}</span>
		@endforeach
		</span>
		@endif
		@if ($msg = Session::get('msg'))
		<span class="alert alert-success">{{ $msg }}</span>
		@endif
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6">
				<h2>Subscribe to receive bhw updates</h2>
			</div>
			<div class="col-md-6">	
				<form action="{{ route('subscribe') }}" method="post" class="subscription-form d-flex justify-content-end">
					@csrf
					<input name="sub_email" type="email" placeholder="Type your email to subscribe" required>
					<a href="javascript:void(0);" class="optional-btn btn-subscribe">Subscribe</a>
					<button type="submit" class="main-btn btn-subscribe">Subscribe</button>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- Subscribsion section end here -->