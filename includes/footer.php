		<footer>
			<div class="row">
				<div class="large-12 columns">
					<p>Copyright © 2015 Al Jazeera Media Network.</p>
				</div>	
			</div>
		</footer>

		<script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
		<script src="js/smooth-scroll.min.js"></script>
    <script src="js/app.js"></script>
    <script>

    	//This is for smooth-scroll.min.js
			smoothScroll.init({
			  speed: 500, // Integer. How fast to complete the scroll in milliseconds
			  easing: 'easeInOutCubic', // Easing pattern to use
			  updateURL: true, // Boolean. Whether or not to update the URL with the anchor hash on scroll
			  offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
			  callbackBefore: function ( toggle, anchor ) {}, // Function to run before scrolling
			  callbackAfter: function ( toggle, anchor ) {} // Function to run after scrolling
			});
    </script>
  </body>
</html>