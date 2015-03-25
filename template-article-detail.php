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
			<h3 class="heading-section">War &amp; Conflict</h3>
			<?php include 'includes/components/story-5.php'; ?>
			<section>
				<h3 class="heading-section">Two Medium Stories</h3>
				<div class="medium-6 columns pl-0">
					<?php include 'includes/components/story-1.php'; ?>
				</div>
				<div class="medium-6 columns pr-0">
					<?php include 'includes/components/story-2.php'; ?>
				</div>
			</section>
		</div>
		<div class="medium-4 columns sidebar">
			<h3 class="heading-section">Related</h3>
			<?php include 'includes/components/story-1.php'; ?>	
			<section>
				<h3 class="heading-section">Opinions</h3>
				<?php include 'includes/components/avatar-list.php'; ?>
			</section>
		
			<section>
				<h3 class="heading-section">Most Viewed</h3>
				<?php include 'includes/components/anchor-list.php'; ?>	
			</section>
		</div>
	</section>
</div>

<?php
  include 'includes/footer.php';
?>