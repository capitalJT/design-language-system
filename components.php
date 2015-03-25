<?php 
  $page_title = "Components"; 
  $style_sheet_uri = "css/app.css";
  include 'includes/head.php';
  include 'includes/masthead.php';
  include 'includes/site-hero.php';
  include 'includes/forms.php';
  include 'includes/accordian.php';
  include 'includes/social-icons.php';
  include 'includes/hero.php';
  include 'includes/comments.php';
  ?>
<section id="brand-bar" class="row item-title">
  <div class="large-12 columns">
    <h1>Brand Bar</h1>
  </div>
</section>
<?php
  include 'includes/brand-bar.php';
?>
<section id="stories" class="row item-title">
  <div class="large-12 columns">
    <h1>Stories</h1>
  </div>
</section>
<?php
  include 'includes/stories.php';
  include 'includes/pagination.php';
  include 'includes/navigation-component.php';
  include 'includes/cards.php';
?>
<section id="footer" class="row item-title">
  <div class="large-12 columns">
    <h1>Footer</h1>
  </div>
</section>
<?php
  include 'includes/footer.php';
?>
