<?php 
  $page_title = "Components"; 
  $style_sheet_uri = "css/app.css";
  include 'includes/head.php';
  include 'includes/masthead.php';
  include 'includes/site-hero.php';
?>

<div class="row container">
  <div class="large-2 columns show-for-large-up item-nav">
    <ul>
      <li><a href="#forms">Forms</a></li>
      <li><a href="#accordian">Accordian</a></li>
      <li><a href="#social-icons">Social Icons</a></li>
      <li><a href="#hero">Hero</a></li>
      <li><a href="#comments">Comments</a></li>
      <li><a href="#brand-bar">Brand Bar</a></li>
      <li><a href="#stories">Stories</a></li>
      <li><a href="#pagination">Pagination</a></li>
      <li><a href="#navigation-component">Navigation</a></li>
      <li><a href="#cards">Cards</a></li>
      <li><a href="#footer">Footer</a></li>
    </ul>
  </div><!-- end item-nav-->
  <div class="medium-12 large-10 columns">
    <?php
      include 'includes/forms.php';
      include 'includes/accordian.php';
      include 'includes/social-icons.php';
      include 'includes/hero.php';
      include 'includes/comments.php';
      include 'includes/brand-bar.php';
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
  </div><!-- end content-->
</div>

<?php
  include 'includes/footer.php';
?>
