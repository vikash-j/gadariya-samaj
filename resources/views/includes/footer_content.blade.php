<!--======= Footer =========-->
<footer>
  <div class="container">

	<!-- Footer Link -->

	<ul class="foot-link">
	  <li><a href="{{url('/')}}">मुख्य पृष्ठ</a></li>
	  <li><a href="{{url('/')}}/history">इतिहास</a></li>
	  <li><a href="{{url('/')}}/gallery">गैलेरी</a></li>
	  <li><a href="{{url('/')}}/blog">ब्लॉग</a></li>
	  <li><a href="{{url('/')}}/contactus">संपर्क करें</a></li>
	</ul>
	<!-- Footer Logo -->
	<div style="color:ORANGE;" class="foot-logo"> <img src="{{ URL::asset('public/app-assets/images/cg_js.png') }}" alt="CHHATTISGARH GADARIYA SAMAJ"> </div>

	<!-- Footer Logo -->
	<div class="under-footer">

		<ul class="con-info social-link">
	  		<li>
	  		  <p>© 2019-{{date_format(now(),'Y')}}
			 All rights reserved || Powered By <a href="https://www.ddatum.com" target="_blank">DDatum IT Solutions</a></p>
	  		</li>
	  	</ul>
	  {{--<ul class="con-info">
		<li>
		  <p> <i class="fa fa-map-marker"></i>Address</p>
		</li>
		<li>
		  <p> <i class="fa fa-phone"></i>Phone No</p>
		</li>
		<li>
		  <p> <i class="fa fa-envelope"></i>Mail ID</p>
		</li>
	</ul>--}}
	  <ul class="social-link" style="float:left;">
		<li><a href="#.">Facebook </a></li>
		<li><a href="#."> Linkedin </a></li>
		<li><a href="#."> Instagram </a></li>
	  </ul>
	</div>
  </div>
</footer>
