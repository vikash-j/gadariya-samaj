<!-- //footer -->
<!-- menu js aim -->
	<script src="{{ URL::asset('public/wed-assets/js/jquery.menu-aim.js') }}"> </script>
	<script src="{{ URL::asset('public/wed-assets/js/main.js') }}"></script> <!-- Resource jQuery -->
	<!-- //menu js aim -->
	<!-- for bootstrap working -->
		<script src="{{ URL::asset('public/wed-assets/js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
	 		};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- for smooth scrolling -->
	<script type="text/javascript" src="{{ URL::asset('public/wed-assets/js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('public/wed-assets/js/easing.js')}}"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
	</script>
	<!-- //for smooth scrolling -->

</body>
<!-- //body -->
</html>
<!-- //html -->
