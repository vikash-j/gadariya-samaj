@extends('layout.master')
@section('title', 'Gallery')
@section('content')
<!--======= HOME MAIN SLIDER =========-->
<section class="sub-bnr sub-event" data-stellar-background-ratio="0.3">
  <div class="overlay-gr">
	<div class="container">
	  <h2>गैलेरी</h2>
	  <p></p>
	</div>
  </div>
</section>

<!-- Breadcrumb -->
<ol class="breadcrumb">
  <li><a href="{{url('/')}}">मुख्य पृष्ठ</a></li>
  <li class="active">गैलेरी</li>
</ol>
  <!-- CONTENT START -->
  <div class="content">

    <!--======= Gallery =========-->
    <section class="sec-100px gallery bg-white">
      <div class="container">
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

          <!-- Item 4 -->
          <li class="col-sm-4">
            <div class="inn-sec"> <span class="tag">religion</span>

              <!-- Hover Info -->
              <div class="hover-info">
                <div class="position-center-center"> <a href="{{ URL::asset('public/app-assets/images/img-4.jpg')}}" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-image"></i></a> </div>
              </div>
              <img class="img-responsive" src="{{ URL::asset('public/app-assets/images/img-4.jpg')}}" alt="">
              <div class="detail"> <a href="#.">religion histories</a>
                <p><span>orgin</span>:  Jerusalm, Israel</p>
              </div>
            </div>
          </li>

          <!-- Item 5 -->
          <li class="col-sm-4">
            <div class="inn-sec"> <span class="tag">Eastern</span>

              <!-- Hover Info -->
              <div class="hover-info">
                <div class="position-center-center"> <a href="{{ URL::asset('public/app-assets/images/img-5.jpg')}}" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-image"></i></a> </div>
              </div>
              <img class="img-responsive" src="{{ URL::asset('public/app-assets/images/img-5.jpg')}}" alt="">
              <div class="detail"> <a href="#.">Eastern Asia Parts</a>
                <p><span>orgin</span>:  Dubai, UAE</p>
              </div>
            </div>
          </li>

          <!-- Item 6 -->
          <li class="col-sm-4">
            <div class="inn-sec"> <span class="tag">armor</span>

              <!-- Hover Info -->
              <div class="hover-info">
                <div class="position-center-center"> <a href="{{ URL::asset('public/app-assets/images/img-6.jpg')}}" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-image"></i></a> </div>
              </div>
              <img class="img-responsive" src="{{ URL::asset('public/app-assets/images/img-6.jpg')}}" alt="">
              <div class="detail"> <a href="#.">Roman armor</a>
                <p><span>orgin</span>:  Rome, Italy</p>
              </div>
            </div>
          </li>

          <!-- Item 7 -->
          <li class="col-sm-4">
            <div class="inn-sec"> <span class="tag">sword</span>

              <!-- Hover Info -->
              <div class="hover-info">
                <div class="position-center-center"> <a href="{{ URL::asset('public/app-assets/images/img-7.jpg')}}" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-image"></i></a> </div>
              </div>
              <img class="img-responsive" src="{{ URL::asset('public/app-assets/images/img-7.jpg')}}" alt="">
              <div class="detail"> <a href="#.">France King sword</a>
                <p><span>orgin</span>:  Paris, France</p>
              </div>
            </div>
          </li>

          <!-- Item 8 -->
          <li class="col-sm-4">
            <div class="inn-sec"> <span class="tag">coin age</span>

              <!-- Hover Info -->
              <div class="hover-info">
                <div class="position-center-center"> <a href="{{ URL::asset('public/app-assets/images/img-8.jpg')}}" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-image"></i></a> </div>
              </div>
              <img class="img-responsive" src="{{ URL::asset('public/app-assets/images/img-8.jpg')}}" alt="">
              <div class="detail"> <a href="#.">modern art collections</a>
                <p><span>orgin</span>:  New York, USA</p>
              </div>
            </div>
          </li>

          <!-- Item 9 -->
          <li class="col-sm-4">
            <div class="inn-sec"> <span class="tag">King’s crown</span>

              <!-- Hover Info -->
              <div class="hover-info">
                <div class="position-center-center"> <a href="{{ URL::asset('public/app-assets/images/img-9.jpg')}}" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-image"></i></a> </div>
              </div>
              <img class="img-responsive" src="{{ URL::asset('public/app-assets/images/img-9.jpg')}}" alt="">
              <div class="detail"> <a href="#.">King’s crown</a>
                <p><span>orgin</span>:  London, UK</p>
              </div>
            </div>
          </li>
        </ul>
        <ul class="pagination">
          <li><a href="#.">1</a></li>
          <li><a href="#.">2</a></li>
          <li><a href="#.">3</a></li>
          <li><a href="#.">4</a></li>
          <li><a href="#.">Next</a></li>
        </ul>
      </div>
    </section>
  </div>
@endsection
