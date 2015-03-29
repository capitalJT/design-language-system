<?php 
  $page_title = "Article Template";
  $style_sheet_uri = "css/app.css";
  include 'includes/head.php';
  include 'includes/masthead.php';
  include 'includes/brand-bar.php';
?>
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
			<?php include 'includes/ad-med-rec.php'; ?>
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