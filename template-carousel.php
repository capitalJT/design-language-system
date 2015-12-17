<?php 
  $page_title = "Contact Us";
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

<div class="carousel">
	<div class="carousel-wrapper">
		<div class="carousel-slide">
			<img src="http://placehold.it/3200x1000">
			<div class="blurb ">
				<div class="row">
					<div class="large-12 columns">
						<h1>This is text wrapped in an h1 tag</h1>
						<p class="show-for-medium-up">This is a blurb that will show-for-medium-up</p>
						<button class="show-for-medium-up">Medium UP CTA</button>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-slide">
			<img src="http://placehold.it/3200x1000">
			<div class="blurb ">
				<div class="row">
					<div class="large-12 columns">
						<h1>This is text wrapped in an h1 tag</h1>
						<p class="show-for-medium-up">This is a blurb that will show-for-medium-up</p>
						<button class="show-for-medium-up">Medium UP CTA</button>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-slide">
			<img src="http://placehold.it/3200x1000">
			<div class="blurb ">
				<div class="row">
					<div class="large-12 columns">
						<h1>This is text wrapped in an h1 tag</h1>
						<p class="show-for-medium-up">This is a blurb that will show-for-medium-up</p>
						<button class="show-for-medium-up">Medium UP CTA</button>
					</div>
				</div>
			</div>
		</div>
	</div>		
</div><!-- end .carousel-->

<?php
  include 'includes/bottom-cta.php';
  include 'includes/footer.php';
?>