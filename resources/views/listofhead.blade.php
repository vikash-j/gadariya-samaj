@extends('layout.master')
@section('title', 'List of Events')
@section('content')
<!--======= HOME MAIN SLIDER =========-->
<section class="sub-bnr sub-event" data-stellar-background-ratio="0.3">
  <div class="overlay-gr">
	<div class="container">
	  <h2>कार्यक्रमों की सूची</h2>
	  <p></p>
	</div>
  </div>
</section>

<!-- Breadcrumb -->
<ol class="breadcrumb">
  <li><a href="{{url('/')}}">मुख्य पृष्ठ</a></li>
  <li class="active">कार्यक्रमों की सूची</li>
</ol>


</section>
<!-- CONTENT START -->
<div class="content">
  <div class="container">

	<!--======= Event =========-->
	<section class="sec-100px event event-page">
	  <div class="container">

		<!-- Event -->
		<div class="row">
		  <div class="col-md-8">

			<!-- Event 1 -->
			<ul>
			  <!-- Image -->
			  <li class="col-sm-5 no-padding eve-img"> <img class="img-responsive" src="{{ URL::asset('public/app-assets/images/event-img-1.jpg')}}" alt="">
				<div class="date">09
				  <p>JUL, 15</p>
				</div>
			  </li>

			  <!-- Detail -->
			  <li class="col-sm-7 no-padding">
				<div class="event-detail">
				  <h4> Let’s Celebrate 25th Museum Day </h4>
				  <span><i class="ion-ios-location-outline"></i> Melbourne, Australia </span> <span><i class="ion-ios-clock-outline"></i> Wed 10AM - 12PM</span>
				  <p>I have always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. <br>
					<br>
					The helpless. The powerless in a world of criminals who operate above the law. And if you threw a party - invited everyone you knew. </p>
				  <!-- BOOK NOW -->
				  <a href="#." class="btn">BOOK NOW</a> </div>
			  </li>
			</ul>

			<!-- Event 2 -->
			<ul>
			  <!-- Image -->
			  <li class="col-sm-5 no-padding eve-img"> <img class="img-responsive" src="{{ URL::asset('public/app-assets/images/event-img-2.jpg')}}" alt="">
				<div class="date">18
				  <p>JUL, 15</p>
				</div>
			  </li>

			  <!-- Detail -->
			  <li class="col-sm-7 no-padding">
				<div class="event-detail">
				  <h4> ancient statues case study </h4>
				  <span><i class="ion-ios-location-outline"></i> Melbourne, Australia </span> <span><i class="ion-ios-clock-outline"></i> Fri 5PM - 10PM</span>
				  <p>A shadowy flight into the dangerous world of a man who does not exist. Well the first thing you know ol' millionaire. <br>
					<br>
					These days are all Happy and Free. These days are all share them with me oh baby. They were four men living all together yet they were all alone. </p>
				  <!-- BOOK NOW -->
				  <a href="#." class="btn">Know More</a> </div>
			  </li>
			</ul>

			<!-- Event 3 -->
			<ul>
			  <!-- Image -->
			  <li class="col-sm-5 no-padding eve-img"> <img class="img-responsive" src="{{ URL::asset('public/app-assets/images/event-img-3.jpg')}}" alt="">
				<div class="date">05
				  <p>JUL, 15</p>
				</div>
			  </li>

			  <!-- Detail -->
			  <li class="col-sm-7 no-padding">
				<div class="event-detail">
				  <h4> dinosaurs Skeleton</h4>
				  <span><i class="ion-ios-location-outline"></i> Melbourne, Australia </span> <span><i class="ion-ios-clock-outline"></i> Fri 5PM - 10PM</span>
				  <p>A shadowy flight into the dangerous world of a man who does not exist. Well the first thing you know ol' millionaire. <br>
					<br>
					These days are all Happy and Free. These days are all share them with me oh baby. They were four men living all together yet they were all alone. </p>
				  <!-- BOOK NOW -->
				  <a href="#." class="btn">BOOK NOW</a> </div>
			  </li>
			</ul>

			<!-- Event 4 -->
			<ul>
			  <!-- Image -->
			  <li class="col-sm-5 no-padding eve-img"> <img class="img-responsive" src="{{ URL::asset('public/app-assets/images/event-img-4.jpg')}}" alt="">
				<div class="date">27
				  <p>JUL, 15</p>
				</div>
			  </li>

			  <!-- Detail -->
			  <li class="col-sm-7 no-padding">
				<div class="event-detail">
				  <h4> ancient building structures </h4>
				  <span><i class="ion-ios-location-outline"></i> Melbourne, Australia </span> <span><i class="ion-ios-clock-outline"></i> Fri 5PM - 10PM</span>
				  <p>A shadowy flight into the dangerous world of a man who does not exist. Well the first thing you know ol' millionaire. <br>
					<br>
					These days are all Happy and Free. These days are all share them with me oh baby. They were four men living all together yet they were all alone. </p>
				  <!-- BOOK NOW -->
				  <a href="#." class="btn">BOOK NOW</a> </div>
			  </li>
			</ul>

			<!-- Pagination -->
			<ul class="pagination">
			  <li><a href="#.">1</a></li>
			  <li><a href="#.">2</a></li>
			  <li><a href="#.">3</a></li>
			  <li><a href="#.">4</a></li>
			  <li><a href="#.">Next</a></li>
			</ul>
		  </div>

		  <!-- Sidebar -->
		  <div class="col-md-4">
			<div class="side-bar">

			  <!-- Search -->
			  <div class="search">
				<form>
				  <input type="text" placeholder="SEARCH">
				  <button type="submit"> <i class="fa fa-search"></i></button>
				</form>
			  </div>
			  <h5> </h5>
			

				
				

			  <!-- Upcoming Events -->
			  <h5>Upcoming Events</h5>
			  <div class="coming-event">
				<ul>
				  <li> <a href=".#"> <img src="{{ URL::asset('public/app-assets/images/com-img-1.jpg')}}" alt=" "> </a> </li>
				  <li> <a href=".#"> <img src="{{ URL::asset('public/app-assets/images/com-img-2.jpg')}}" alt=" "> </a> </li>
				  <li> <a href=".#"> <img src="{{ URL::asset('public/app-assets/images/com-img-3.jpg')}}" alt=" "> </a> </li>
				  <li> <a href=".#"> <img src="{{ URL::asset('public/app-assets/images/com-img-4.jpg')}}" alt=" "> </a> </li>
				  <li> <a href=".#"> <img src="{{ URL::asset('public/app-assets/images/com-img-5.jpg')}}" alt=" "> </a> </li>
				  <li> <a href=".#"> <img src="{{ URL::asset('public/app-assets/images/com-img-6.jpg')}}" alt=" "> </a> </li>
				</ul>
			  </div>

			  <!-- Upcoming Events -->
			  <h5>Connect With Us</h5>
			  <div class="conct-with">
				<ul>
				  <li> <a class="fb" href="#."><i class="fa fa-facebook"></i> <span>5169</span> </a> </li>
				  <li> <a class="tw" href="#."><i class="fa fa-twitter"></i> <span>5169</span> </a> </li>
				  <li> <a class="g-plus" href="#."><i class="fa fa-google-plus"></i> <span>5169</span> </a> </li>
				</ul>
			  </div>

			  <!-- Popular Tags -->
			  <h5>Categories</h5>
			  <ul class="cate">
				<li><a href="#."> American Art  (23)</a></li>
				<li><a href="#."> Gardens  (16)</a></li>
				<li><a href="#."> War History  (09)</a></li>
				<li><a href="#."> Kings of History  (05)</a></li>
				<li><a href="#."> Eastern Asia  (15)</a></li>
				<li><a href="#."> Skelton  (11)</a></li>
			  </ul>

			 
			</div>
		  </div>
		</div>
	  </div>
	</section>
  </div>
</div>
@endsection