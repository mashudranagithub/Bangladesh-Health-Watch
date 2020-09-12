<!-- Footer start here -->
<footer id="Footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="footer-column">
						<h3>About Us</h3>
						<p>A Working Group consisting of researchers and activists from different organizations</p>

						<div class="address">
							<p>Address: icddr,b Bhaban, 5th Floor, Dhaka <br>
							Telephone: +88 123 456 789 <br>
							Email: info@bhw.org</p>
						</div>

						<ul class="footer-social-menu">
							<li>
								<a target="_blank" href="https://www.facebook.com/Bangladesh-Health-Watch-BHW-109403770656047">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
							<li>
								<a target="_blank" href="https://www.youtube.com/channel/UC0Uf5r2je-CQG-506n0l5_g">
									<i class="fa fa-youtube"></i>
								</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-column">
						<h3>Recent Posts</h3>
						<p><a href="javascript:void(0);">Perspiciatis unde omnis iste natus.</a></p>
						<p><a href="javascript:void(0);">Sit voluptatem accusantium dolore.</a></p>
						<p><a href="javascript:void(0);">Laudantium, totam rem aperiam, eaque ipsa quae ab illo.</a></p>
						<p><a href="javascript:void(0);">Quasi architecto beatae vitae dicta.</a></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-column">
						<h3>Latest Tweets</h3>
						<p>Check out this great <a href="javascript:void(0);">#bhw</a> Research Responsive and Clean WordPress <a href="javascript:void(0);">http://themebhw.net/item/beauty</a>
						<br>
						<span class="tweet-time">about 12 hours ago</span></p>
						<p>Check out this great <a href="javascript:void(0);">#bhw</a> Research Responsive and Clean WordPress <a href="javascript:void(0);">http://themebhw.net/item/beauty</a>
						<br>
						<span class="tweet-time">about 12 hours ago</span></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-column">
						<h3>Photo Gallery</h3>
						<div class="footer-gallery gallery">

							@foreach($photos as $photo)
							<a class="big" href="{{ url('front/assets/images/photo/'.$photo->photo) }}">
								<img src="{{ url('front/assets/images/photo/'.$photo->photo) }}" alt="Gallery Image">
							</a>
							@endforeach

						</div>
					</div>
					<a href="{{ route('photo-gallery') }}" class="view-all">View all</a>
				</div>	
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p class="copyright-text">Copyright &copy; 2020 BHW. All rights reserved.</p>
				</div>
				<div class="col-md-6">
					<ul class="footer-menu">
						<li><a href="javascript:void(0);">Career</a></li>
						<li><a href="javascript:void(0);">Terms of use</a></li>
						<li><a href="javascript:void(0);">Privacy policy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer end here -->
