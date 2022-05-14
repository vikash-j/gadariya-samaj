@extends('layout.master')
@section('title', 'Home')
@section('content')
@include('slider')
<!-- CONTENT START -->
<div class="content">

  <!--======= ABOUT US =========-->
  <section class="sec-90px about">
	<div class="container">
	  <div class="row">

		<!-- INTRO -->
		<div class="col-md-7">
		  <h4 style="color:#0b074d;padding-top:20px;">परिचय</h4>
		  <hr>
		  <p>प्रस्तुत लेख गड़रिया जाति की ऐतिहासिक पृष्ठभूमि पर आधारित है, जिसके अंतर्गत गड़रिया जाति उत्पत्ति, उनकी पहले की सामाजिक, आर्थिक व राजनितिक स्थिति पर प्रकाश डाला गया है।
		  </p><p>भारतीय समाज में जाति को एक प्रमुख आधार माना जाता है। प्राचीन समय से ही समस्त व्यक्तियों को उनके कार्यो के आधार पर विभाजित किया गया,
			  जिसने सम्पूर्ण मानव जाति को अनेक जाति बंधनो में जकड़ते हुए उन्हें एक-दूसरे से अलग कर दिया। समाज में  जाति की रचना आनुवंशिकता के आधार पर होती है।
		  </p><p>भारतीय जाति व्यवस्था हिन्दू सामाजिक व्यवस्था की एक प्रमुख व अत्यंत ही जटिल संस्था है। भारतीय समाज में जाति पर आधारित व्यावसायिक विभाजन का एक सामान्य स्वरूप देखने को मिलता है, जिसके अंतर्गत पूर्व में प्रत्येक जाति अपने एक निश्चित व्यवसाय के अनुसार ही कार्य करते थे। पूर्ववर्ती समाज में जो व्यक्ति जिस कर्म को करता था, वह उसका जातिगत पेशा बन जाता था।
		  </p><p>शिक्षा व पुरोहित का कार्य करने वाले ब्राह्मण, रक्षा का कार्य करने वाले क्षत्रिय, व्यापार करने वाले वैश्य तथा सभी की सेवा करने वाले शूद्र कहलाने लगे। समस्त जातियों ने इस प्रकार कर्मो के आधार पर ही अपने पेशे का भी निर्धारण कर लिया था, इसी क्रम में जिन जातियों ने पशुपालन का कार्य किया उसे "गड़रिया" कहकर संबोधित किया जाने लगा।
		  </p><p>सामान्यतः गड़रिया जाति उत्तर-भारत तथा मध्य-भारत में पायी जाने वाली एक व्यावसायिक जाति है, जो पशुओं से संबंधित कार्यो में संलग्न है। इन्हे पशुओं से संबंधित कार्यो में संलग्न होने के...
		  </p>
		  <a href="{{url('/')}}/history">Know More</a>
		</div>

		<!-- TIMING -->
		<div class="col-md-5">
		  <div class="hrs">
			<img class="img-responsive" src="{{ URL::asset('public/app-assets/images/shiv.jpg')}}" alt="">
		  </div>
		</div>
	  </div>
	</div>
  </section>

  <!--======= HISTORY =========-->
  <section class="history">
	<div class="row">
	  <!-- IMAGE -->
	  <!-- History Content -->
	  <div class="col-md-12 no-padding">
		<div class="history-detail">
		  <ul class="row">
			<li class="col-md-3">
			  <h4>गड़रिया जाति की आर्थिक पृष्ठभूमि</h4>
			  <hr>
			</li>
			<li class="col-md-9">
			<p>
				गड़रिया जाति को, जाति स्तरीकरण में पहले से ही निम्न स्थिति में माना है। कुछ अनुभवी व्यक्तियों से एवं जाति से संबंधित लोक पुस्तकों के अध्ययन से यह ज्ञात हुआ है कि इस जाति की आर्थिक क्रिया-कलाप केवल पशुपालन तक ही सिमित थे।
			</p>
			<p>
				इस जाति के लोग पहले अधिकतर भेंड़-बकरी चराया करते थे तथा प्रारम्भ में यह एक घुमक्कड़ जाति थी जिनका कोई निश्चित निवास स्थान नहीं होता था। ये मौसम के अनुरूप अपने भेंड़-बकरियों को लेकर जगह-जगह जाया करते थे, परन्तु बाद में ये लोग एक निश्चित स्थान पर रहने लगे, जिसके कारण इन्होने अपनी आर्थिक क्रिया-कलापों को स्थायित्व प्रदान किया एवं भेंड़ व बकरियों के साथ-साथ यह जाति अधिक दूध देने वाले पशुओं जैसे गाय,भैंस, आदि भी पालने लगे । इनका मुख्य व्यवसाय दुग्ध उत्पादन ही नहीं था बल्कि ये भेंड़ों के बालो (ऊन​) से ... <a style="color:orange;" href="{{url('/')}}/history">Know More</a>
			</p>

			</li>
		  </ul>

		  <!-- On View -->
		  <ul class="row on-view">
			<li class="col-md-3">
			  <h4>२४  राज</h4>
			  <hr>
			</li>
			<li class="col-md-9">
			  <ul class="row">
				<li class="col-xs-4">
				  <p> Arts of Global Africa</p>
				  <p> American Art</p>
				  <p> Arts of Canada Arts of Asia</p>
				  <p> Classical Art</p>
				</li>
				<li class="col-xs-4">
				  <p> Decorative Art</p>
				  <p> Gardens</p>
				  <p> War History </p>
				  <p> Kings of History</p>
				  <p> German Arts</p>
				</li>
				<li class="col-xs-4">
				  <p> Decorative Art</p>
				  <p> Gardens</p>
				  <p> War History </p>
				  <p> Kings of History</p>
				  <p> German Arts</p>
				</li>
			  </ul>
			</li>
		  </ul>
		</div>
	  </div>
	</div>
  </section>

  <!--======= Gallery =========-->
  <section class="sec-100px gallery">
	<div class="container">

	  <!-- Tittle -->
	  <div class="tittle">
		<h2>गैलेरी</h2>
		<hr>
	  </div>
	  <ul class="row">

		<!-- Item 1 -->
		<li class="col-sm-4">
		  <div class="inn-sec"> <span class="tag">Statues</span>

			<!-- Hover Info -->
			<div class="hover-info">
			  <div class="position-center-center"> <a href="{{ URL::asset('public/app-assets/images/img-1.jpg')}}" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-image"></i></a> </div>
			</div>
			<img class="img-responsive" src="{{ URL::asset('public/app-assets/images/img-1.jpg')}}" alt="">
			<div class="detail"> <a href="#.">ancient statues collections</a>
			  <p><span>orgin</span>:  Naples, Italy</p>
			</div>
		  </div>
		</li>

		<!-- Item 2 -->
		<li class="col-sm-4">
		  <div class="inn-sec"> <span class="tag">modern arts</span>

			<!-- Hover Info -->
			<div class="hover-info">
			  <div class="position-center-center"> <a href="{{ URL::asset('public/app-assets/images/img-2.jpg')}}" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-image"></i></a> </div>
			</div>
			<img class="img-responsive" src="{{ URL::asset('public/app-assets/images/img-2.jpg')}}" alt="">
			<div class="detail"> <a href="#.">modern art collections</a>
			  <p><span>orgin</span>:  New York, USA</p>
			</div>
		  </div>
		</li>

		<!-- Item 3 -->
		<li class="col-sm-4">
		  <div class="inn-sec"> <span class="tag">skeleton</span>

			<!-- Hover Info -->
			<div class="hover-info">
			  <div class="position-center-center"> <a href="{{ URL::asset('public/app-assets/images/img-3.jpg')}}" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-image"></i></a> </div>
			</div>
			<img class="img-responsive" src="{{ URL::asset('public/app-assets/images/img-3.jpg')}}" alt="">
			<div class="detail"> <a href="#.">dinosaurs Skeleton</a>
			  <p><span>orgin</span>:  South Africa, Africa</p>
			</div>
		  </div>
		</li>

	  </ul>
	</div>
  </section>

  <!--======= Event =========-->
  <section class="sec-100px event">
	<div class="container">

	  <!-- Tittle -->
	  <div class="tittle">
		<h2>कार्यक्रम</h2>
		<hr>
		<p>The movie star the professor and Mary Ann here on Gilligans Isle. Just sit right back and you'll hear.</p>
	  </div>

	  <!-- Event -->
	  <div class="row">

		<!-- Event 1 -->
		<div class="col-md-6">
		  <ul>

			<!-- Image -->
			<li class="col-sm-6 no-padding"> <img class="img-responsive" src="{{ URL::asset('public/app-assets/images/event-img-1.jpg')}}" alt="">
			  <div class="date">09
				<p>JUL, 15</p>
			  </div>
			</li>

			<!-- Detail -->
			<li class="col-sm-6 no-padding">
			  <div class="event-detail">
				<h4> Let’s Celebrate 25th Museum Day </h4>
				<span><i class="ion-ios-location-outline"></i> Melbourne, Australia </span> <span><i class="ion-ios-clock-outline"></i> Wed 10AM - 12PM</span>
				<p>I have always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </p>
				<!-- BOOK NOW -->
				<a href="#." class="btn">अधिक जानिए</a> </div>
			</li>
		  </ul>
		</div>

		<!-- Event 2 -->
		<div class="col-md-6">
		  <ul>

			<!-- Image -->
			<li class="col-sm-6 no-padding"> <img class="img-responsive" src="{{ URL::asset('public/app-assets/images/event-img-2.jpg')}}" alt="">
			  <div class="date">18
				<p>JUL, 15</p>
			  </div>
			</li>

			<!-- Detail -->
			<li class="col-sm-6 no-padding">
			  <div class="event-detail">
				<h4> ancient statues case study </h4>
				<span><i class="ion-ios-location-outline"></i> Melbourne, Australia </span> <span><i class="ion-ios-clock-outline"></i> Fri 5PM - 10PM</span>
				<p>I have always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </p>
				<!-- BOOK NOW -->
				<a href="#." class="btn">अधिक जानिए</a> </div>
			</li>
		  </ul>
		</div>
	  </div>
	</div>
  </section>

  <!--======= sponsors =========-->
  {{--<section class="sponsors" data-stellar-background-ratio="0.5">
	<div class="overlay">
	  <div class="container">
		<div class="client-slide">
		  <div><img src="{{ URL::asset('public/app-assets/images/client-img-1.png')}}" alt=""></div>
		  <div><img src="{{ URL::asset('public/app-assets/images/client-img-2.png')}}" alt=""></div>
		  <div><img src="{{ URL::asset('public/app-assets/images/client-img-3.png')}}" alt=""></div>
		  <div><img src="{{ URL::asset('public/app-assets/images/client-img-4.png')}}" alt=""></div>
		  <div><img src="{{ URL::asset('public/app-assets/images/client-img-5.png')}}" alt=""></div>
		</div>
	  </div>
	</div>
</section>--}}

  <!-- Map -->
  {{--<div id="map"></div>--}}
</div>
@endsection
