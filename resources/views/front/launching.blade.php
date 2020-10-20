@extends('front.layouts.master')

	@section('content')
	
	<style>

		#Header, #Footer, section#Subscribtion {
			display: none;
		}
		#launch {
			height: 100vh;
			width:100%;
			position: absolute;
			background: url('front/assets/images/page-banners/launching-banner.jpg');
			background-position: top center;
			background-size: contain;
			position:relative;
		}

		section#launch::before {
		    content: '';
		    position: absolute;
		    top: 0;
		    left: 0;
		    height: 100%;
		    width: 100%;
		    background: rgb(0 56 125 / 0.7);
		}

		h2, a{
			color: #fff;
		}

		h2 {
			letter-spacing: 2px;
		}

		a {
			font-size: 20px;
			text-transform: capitalize;
			text-decoration: none;
			padding: 10px 0;
		}

		a:hover {
			color: #ff0;
		}
	</style>
	
	<section id="launch" class="d-flex justify-content-center align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>We are ready to launching our website</h2>
					<br>
					<a href="{{ route('homepage') }}" class="btn-bhw">Click to launch now</a>
				</div>
			</div>
		</div>
	</section>
	
	@endsection