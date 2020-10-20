<!-- Footer start here -->
<footer id="Footer">
	<div class="footer-top">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-4">
					<div class="footer-column">
						<h3>Address</h3>

						<div class="address">
							<p>Bangladesh Health Watch Secretariat,<br>
							James P Grant School of Public Health,<br>
							BRAC University,<br>
							68, Shaheed Tajuddin Ahmen Sharani,<br>
							5th Floor (Level 6), icddr,b Building,<br>
							Mohakhali, Dhaka 1212, Bangladesh</p>
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

  <div class="mt-3">
    <p>The number of visitors is : <span id="cntr">0</span></p>
  </div>

  <script>
    function counter_fn() {
      var counter = document.getElementById("cntr");
      var count = 0;
      count = parseInt(counter.innerHTML);
      count = count + 1;
      counter.innerHTML = count;
    }
    window.onload = counter_fn;
  </script>

					</div>
				</div>
				<div class="col-md-4">
					<div class="footer-column">
						<h3>Recent Posts</h3>
						
						@foreach($latest_blogs as $latest_blog)
						<p><a href="{{ route('single-blog', $latest_blog->id) }}">{{ $latest_blog->blog_title }}</a></p>
						@endforeach
						<div class="hit-counter">

						<style>
							.hit-counter {
							position: absolute;
							bottom: 20px;
							left: 15px;
							}

							.hit-counter p {
							margin-bottom: 0;
							}

							.hit-counter a br {
							display: none;
							}
						</style>
							<p>Total Visit</p>
							<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/756789/t/5"></script>
						</div>
					</div>
				</div>
				<div class="col-md-4">
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
