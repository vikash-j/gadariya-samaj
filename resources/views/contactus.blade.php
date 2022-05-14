@extends('layout.master')
@section('title', 'Contact Us')
@section('content')
<!--======= HOME MAIN SLIDER =========-->
<section class="sub-bnr sub-event" data-stellar-background-ratio="0.3">
  <div class="overlay-gr">
	<div class="container">
	  <h2>संपर्क करें</h2>
	  <p></p>
	</div>
  </div>
</section>

<!-- Breadcrumb -->
<ol class="breadcrumb">
  <li><a href="{{url('/')}}">मुख्य पृष्ठ</a></li>
  <li class="active">संपर्क करें<li>
</ol>

<!-- CONTENT START -->
<div class="content">
  <section class="sec-100px contact-us">
	<div class="container">
	  <div class="row">
		<!--======= Contact =========-->
		<div class="col-md-7">
		  <div class="contact-form">

			<!--======= Success Msg =========-->
			<div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
			<!--======= FORM  =========-->
			<form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
			  <ul class="row">
				<li class="col-sm-6">
				  <label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Name">
				  </label>
				</li>
				<li class="col-sm-6">
				  <label>
					<input type="text" class="form-control" name="email" id="email" placeholder="Email">
				  </label>
				</li>
				<li class="col-sm-6">
				  <label>
					<input type="text" class="form-control" name="company" id="company" placeholder="Phone">
				  </label>
				</li>
				<li class="col-sm-6">
				  <label>
					<input type="text" class="form-control" name="website" id="website" placeholder="Website">
				  </label>
				</li>
				<li class="col-sm-12">
				  <label>
					<textarea class="form-control" name="message" id="message" rows="5" placeholder="Your Need & Description"></textarea>
				  </label>
				</li>
				<li class="col-sm-12">
				  <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">Submit</button>
				</li>
			  </ul>
			</form>
		  </div>
		</div>

		<!-- TIMING -->
		<div class="col-md-5 about">
		  <div class="hrs">
			<h3><i class="ion-ios-clock-outline"></i> Hours of visiting</h3>
			<ul>
			  <li class="col-md-5 no-padding">
				<h5>Mon - Wed</h5>
				<p>8:00 Am to 7:00 Pm</p>
			  </li>
			  <li class="col-md-7 no-padding"> <span class="appoiment">School  appoinments</span> </li>
			</ul>
			<ul>
			  <li class="col-md-5 no-padding">
				<h5>Thu -  Sun</h5>
				<p>8:00 Am to 7:00 Pm</p>
			  </li>
			  <li class="col-md-7 no-padding"> <span class="appoiment">Tourists  appoinments</span> </li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <!-- Map -->
  <div id="map"></div>
</div>
@endsection
