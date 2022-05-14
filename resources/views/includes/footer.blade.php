		</div>
		<!-- Wrap End -->

		<script src="{{ URL::asset('public/app-assets/js/jquery-1.11.0.min.js') }}"></script>
		<script src="{{ URL::asset('public/app-assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('public/app-assets/js/own-menu.js') }}"></script>
		<script src="{{ URL::asset('public/app-assets/js/owl.carousel.min.js') }}"></script>
		<script src="{{ URL::asset('public/app-assets/js/jquery.stellar.min.js') }}"></script>
		<script src="{{ URL::asset('public/app-assets/js/smooth-scroll.js') }}"></script>
		<script src="{{ URL::asset('public/app-assets/js/jquery.prettyPhoto.js') }}"></script>

		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
		<script type="text/javascript" src="{{ URL::asset('public/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('public/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
		<script src="{{ URL::asset('public/app-assets/js/main.js') }}"></script>
		<script type="text/javascript">
			/*-----------------------------------------------------------------------------------*/
			/*  SLIDER REVOLUTION
			/*-----------------------------------------------------------------------------------*/
			jQuery('.tp-banner').show().revolution({
			  dottedOverlay:"none",
			  delay:10000,
			  startwidth:1170,
			  startheight:630,
			  navigationType:"bullet",
			  navigationArrows:"solo",
			  navigationStyle:"preview4",
			  parallax:"mouse",
			  parallaxBgFreeze:"on",
			  parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
			  keyboardNavigation:"on",
			  shadow:0,
			  fullWidth:"on",
			  fullScreen:"off",
			  shuffle:"off",
			  autoHeight:"off",
			  forceFullWidth:"off",
			  fullScreenOffsetContainer:""
			});
		</script>
		<!-- begin map script-->
		<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
		<script type="text/javascript">
			/*==========  Map  ==========*/
			var map;
			function initialize_map() {
			if ($('#map').length) {
			  var myLatLng = new google.maps.LatLng(-37.814199, 144.961560);
			  var mapOptions = {
			    zoom: 17,
			    center: myLatLng,
			    scrollwheel: false,
			    panControl: false,
			    zoomControl: true,
			    scaleControl: false,
			    mapTypeControl: false,
			    streetViewControl: false
			  };
			  map = new google.maps.Map(document.getElementById('map'), mapOptions);
			  var marker = new google.maps.Marker({
			    position: myLatLng,
			    map: map,
			    tittle: 'Envato',
			    icon: './images/map-locator.png'
			  });
			} else {
			  return false;
			}}
			google.maps.event.addDomListener(window, 'load', initialize_map);
		</script>
		<script type="text/javascript">
			function googleTranslateElementInit() {
			  new google.translate.TranslateElement({pageLanguage: 'hi',includedLanguages: 'bn,en,gu,hi,kn,ml,mr,pa,ta,te', multilanguagePage: true}, 'google_translate_element');
			}
		</script>
	</body>
</html>
