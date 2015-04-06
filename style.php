<?php 
  $page_title = "Style";
  $style_sheet_uri = "css/app.css";
  include 'includes/head.php';
  include 'includes/masthead.php';
  include 'includes/site-hero.php';
?>

<div class="row container">
  <div class="large-2 columns show-for-large-up page-nav">
    <ul>
      <li><a href="#colors">Color</a></li>
      <li><a href="#typography">Typography</a></li>
      <li><a href="#icons">Icons</a></li>
    </ul>
  </div><!-- end page-nav-->	
	<div class="medium-12 large-10 columns">
		<?php
		  include 'includes/colors.php';
		  include 'includes/typography.php';
		  include 'includes/icons.php';
		?>		
	</div>
</div>

<?php
  include 'includes/footer.php';
?>
