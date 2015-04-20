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
			<?php include 'includes/components/story-5.php'; ?>
			<section>
				<h3 class="header-category">Two Medium Stories</h3>
				<div class="medium-6 columns pl-0">
					<?php include 'includes/components/story-1.php'; ?>
				</div>
				<div class="medium-6 columns pr-0">
					<?php include 'includes/components/story-2.php'; ?>
				</div>
			</section>
		</div>
		<div class="medium-4 columns sidebar">
			<h3 class="header-category">Related</h3>
			<?php include 'includes/components/story-1.php'; ?>	
			<section>
				<h3 class="header-category">Opinions</h3>
				<?php include 'includes/components/avatar-list.php'; ?>
			</section>
		
			<section>
				<h3 class="header-category">Most Viewed</h3>
				<?php include 'includes/components/anchor-list.php'; ?>	
			</section>
		</div>
	</section>
</div>

<?php
  include 'includes/footer.php';
?>