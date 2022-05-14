<!-- Header -->
<header>
  <!-- Top Bar -->
  <div class="container">
	<div class="top-bar">
	  <div class="open-time">
		  <p>भाषा बदले</p>
	  </div>
	  <div class="open-time" style="padding-left: 1% !important;">
		 <div id="google_translate_element"></div>
	 </div>
	  	<div class="call">
			<p><a style="color:white;" href="#" data-target="#login" data-toggle="modal">लॉग इन करें</a>&nbsp; &#47; &nbsp;<a style="color:white;" href="#"data-target="#register" data-toggle="modal">रजिस्टर करें</a></p>
		</div><!--{{url('/')}}/login-->
	</div>
  </div>
  <!-- Logo -->
  <div class="container">
	<div class="logo">
		<a style="color:ORANGE;" href="{{url('/')}}"><img src="{{ URL::asset('public/app-assets/images/cg_js_183x45.png') }}" alt="CHHATTISGARH GADARIYA SAMAJ"></a></div>
	<!-- Nav -->
	<nav>
	  <ul id="ownmenu" class="ownmenu">
		<li class="active"><a href="{{url('/')}}">मुख्य पृष्ठ</a></li>
		<li><a href="{{url('/')}}/history">इतिहास</a></li>
		<li><a href="javascript:void(0);">सेवाएं</a>
		  <ul class="dropdown">
			<li><a href="{{url('/')}}/metromonial">वैवाहिक सेवा</a></li>
			{{--<li><a href="{{url('/')}}/jobservices">नौकरी सेवा</a></li>--}}
		  </ul>
		</li>
		<li><a href="javascript:void(0);">सामाजिक सुचना</a>
		  <ul class="dropdown">
			<li><a href="{{url('/')}}/assemblychief">महासभा प्रमुख</a></li>
			<li><a href="{{url('/')}}/rajchief">२४ राज प्रमुख</a></li>
			<li><a href="{{url('/')}}/listofevents">कार्यक्रमों की सूची</a></li>
			<li><a href="{{url('/')}}/membershiplist">महासभा की सदस्यता सूची</a></li>
		  </ul>
		</li>
		<li><a href="{{url('/')}}/gallery">गैलेरी</a></li>
		<li><a href="{{url('/')}}/blogs">ब्लॉग</a></li>
		<li><a href="{{url('/')}}/contactus">संपर्क करें</a></li>
	  </ul>
	</nav>
  </div>
</header>
<!-- Header End -->
<!--login page -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button data-dismiss="modal" class="close">&times;</button>
        <h4>Login</h4>
        <form action="{{url('/')}}/varifylogin" method="post">
          <input type="text" name="username" class="username form-control" placeholder="Username"/>
          <input type="password" name="password" class="password form-control" placeholder="password"/>
          <input class="btn login" type="submit" value="Login" />
        </form>
      </div>
    </div>
  </div>
</div>
<!--register page -->
<div id="register" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button data-dismiss="modal" class="close">&times;</button>
        <h4>Login</h4>
        <form action="{{url('/')}}/" method="post">
          <input type="text" name="first_name" class="username form-control" placeholder="First Name"/>
          <input type="text" name="last_name" class="username form-control" placeholder="Last Name"/>
	    <select>
			<option value="Select">Gender</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			<option value="transgender">Transgender</option>
		</select>
          <input type="number" name="age" class="username form-control" placeholder="Age"/>
          <input type="email" name="email" class="username form-control" placeholder="Email"/>
          <input type="password" name="password" class="password form-control" placeholder="Password"/>
          <input type="password" name="confirmpassword" class="password form-control" placeholder="Confirm Password"/>
		<select name="city_id">
			<option value="">Select City</option>
		</select>
		<select name="district_id">
			<option value="">Select District</option>
		</select>
		<select name="state_id">
			<option value="">Select State</option>
		</select>
		<select name="country_id">
			<option value="">Select Country</option>
		</select>
		  <input type="tel" name="mob_number" class="username form-control" placeholder="Mobile Number"/>
          <input class="btn login" type="submit" value="Regiter" />
        </form>
      </div>
    </div>
  </div>
</div>