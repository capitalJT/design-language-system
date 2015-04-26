<?php 
  $page_title = "Article Template";
  $style_sheet_uri = "css/app.css";
  include 'includes/head.php';
  include 'includes/masthead.php';
?>
		<section id="brand-bar" class="section">
			<div class="row">
				<div class="large-12 columns brand-bar ">
					<article class="medium-4  large-3 columns">
						<h2>Main Title - 1</h2>
						<h3>Description Text</h3>
						<a href="#">Read More</a>
					</article>
					<article class="medium-4  large-3 columns show-for-medium-up">
						<h2>Main Title - 2</h2>
						<h3>Description Text</h3>
						<a href="#">Read More</a>
					</article>
					<article class="medium-4  large-3 columns show-for-medium-up">
						<h2>Main Title - 3</h2>
						<h3>Description Text</h3>
						<a href="#">Read More</a>
					</article>
					<article class="large-3 columns show-for-large-up">
						<h2>Main Title - 4</h2>
						<h3>Description Text</h3>
						<a href="#">Read More</a>
					</article>
				</div>
			</div>	
		</section>
		<div class="row stories-wrapper">
			<section class="large-12 columns">
				<div class="medium-8 columns content">
					<h3 class="header-category">War &amp; Conflict</h3>
					<?php include 'includes/stories/story-5.php'; ?>
					<section class="split-stories">
						<h3 class="header-category">Two Medium Stories</h3>
						<div class="medium-6 columns split-stories-left">
							<?php include 'includes/stories/story-1.php'; ?>
						</div>
						<div class="medium-6 columns split-stories-right">
							<?php include 'includes/stories/story-2.php'; ?>
						</div>
					</section>
				</div>
				<div class="medium-4 columns sidebar">
					<h3 class="header-category">Related</h3>
					<?php include 'includes/stories/story-1.php'; ?>

					<section>
						<h3 class="header-category">Opinions</h3>
						<div class="avatar-list">
							<script id="template" type="text/x-handlebars-template">
								{{#each this}}
									<article class="large-12 columns story">
										<a href="#"><img src="{{imgUrl}}"></a>
										<a href="#"><h3>{{title}}</h3></a>
										<a href="#"><p>{{author}}</p></a>
									</article>	
								{{/each}}
							</script>
						</div>
					</section>
				
					<section>
						<h3 class="header-category">Most Viewed</h3>
						<?php include 'includes/stories/anchor-list.php'; ?>	
					</section>
				</div>
			</section>
		</div>

		<div id="footer" class="footer section">
      <div class="row medium-uncollapse large-collapse">
        <div class="large-12 columns footer-logo-wrapper">
          <img src="../images/logos/ajmn-logo.svg">
          <ul class="social">
            <li>
              <a href="#"><span class="icon icon-ajmn-facebook"></span></a>
            </li>
            <li>
              <a href="#"><span class="icon icon-ajmn-twitter"></span></a>
            </li>
            <li>
              <a href="#"><span class="icon icon-ajmn-google-plus"></span></a>
            </li>
            <li>
              <a href="#"><span class="icon icon-ajmn-youtube"></span></a>
            </li>
          </ul><!-- end .social -->
        </div>

        <div class="large-12 columns footer-links">
          <div class="small-6 medium-4 large-2 columns">
            <h3>Column 1</h3>
            <ul>
              <li><a href="#">Link 1</a></li> 
              <li><a href="#">Link 2</a></li> 
              <li><a href="#">Link 3</a></li> 
              <li><a href="#">Link 4</a></li> 
            </ul>
          </div>
          <div class="small-6 medium-4 large-2 columns">
            <h3>Column 2</h3>
            <ul>
              <li><a href="#">Link 1</a></li> 
              <li><a href="#">Link 2</a></li> 
              <li><a href="#">Link 3</a></li> 
              <li><a href="#">Link 4</a></li> 
            </ul>
          </div>
          <div class="small-6 medium-4 large-2 columns">
            <h3>Column 3</h3>
            <ul>
              <li><a href="#">Link 1</a></li> 
              <li><a href="#">Link 2</a></li> 
              <li><a href="#">Link 3</a></li> 
              <li><a href="#">Link 4</a></li> 
            </ul>
          </div>
          <div class="small-6 medium-4 large-2 columns">
            <h3>Column 4</h3>
            <ul>
              <li><a href="#">Link 1</a></li> 
              <li><a href="#">Link 2</a></li> 
              <li><a href="#">Link 3</a></li> 
              <li><a href="#">Link 4</a></li> 
            </ul>
          </div>
          <div class="small-6 medium-4 large-2 columns">
            <h3>Column 5</h3>
            <ul>
              <li><a href="#">Link 1</a></li> 
              <li><a href="#">Link 2</a></li> 
              <li><a href="#">Link 3</a></li> 
              <li><a href="#">Link 4</a></li> 
            </ul>
          </div>
          <div class="small-6 medium-4 large-2 columns">
            <h3>Column 6</h3>
            <ul>
              <li><a href="#">Link 1</a></li> 
              <li><a href="#">Link 2</a></li> 
              <li><a href="#">Link 3</a></li> 
              <li><a href="#">Link 4</a></li> 
            </ul>
          </div>
        </div><!-- end .large-12 -->
      </div><!-- end .row -->
    </div>
    <div class="row copyright">
      <div class="large-12 columns">
        <p>&copy; 2015 Al Jazeera Media Network. All rights reserved.</p>
      </div>
    </div>

		<script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/handlebars-v3.0.1.js"></script>
    <script src="js/min/slick.min.js"></script>
    <script src="js/app.js"></script>
		<script>
			(function() {

				var opinionList = [
					{
						imgUrl: 'http://placehold.it/100x100',
						title: 'Euphrates: River of hope or hate?',
						author: 'James Denselow'
					},
					{
						imgUrl: 'http://placehold.it/100x100',
						title: 'Has India lost Afghanistan to Pakistan?',
						author: 'Aimal Faizi'
					},
					{
						imgUrl: 'http://placehold.it/100x100',
						title: 'Humanitarian crisis of immense magnitude looms in Yemen',
						author: 'Mohamed Elmontassir'
					},
					{
						imgUrl: 'http://placehold.it/100x100',
						title: 'How the Armenians came to live among Arabs',
						author: 'Lana Asfour'
					}
				];

				var template = Handlebars.compile( $('#template').html() );

				var temp = template(opinionList);
				
				$('.avatar-list').append( template(opinionList) );

			})();
		</script>
  </body>
</html>