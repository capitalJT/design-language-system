<?php 
  $page_title = "Elements";
  $style_sheet_uri = "css/app.css";
  include 'includes/head.php';
  include 'includes/masthead.php';
  include 'includes/site-hero.php';
?>
<div class="row container">
  <div class="large-2 columns show-for-large-up page-nav">
    <ul>
      <li><a href="#imagery">Imagery</a></li>
      <li><a href="#buttons">Buttons</a></li>
      <li><a href="#lists">Lists</a></li>
      <li><a href="#labels">Labels</a></li>
      <li><a href="#inputs">Inputs</a></li>
      <li><a href="#alerts">Alerts</a></li>
      <li><a href="#panels">Panels</a></li>
    </ul>
  </div><!-- end page-nav-->  
  <div class="medium-12 large-10 columns">
    <?php
      include 'includes/imagery.php';
      include 'includes/buttons.php';
      include 'includes/lists.php';
      include 'includes/labels.php';
      include 'includes/inputs.php';
      include 'includes/alerts.php';
      include 'includes/panels.php';
    ?>
  </div>
</div>
<?php
  include 'includes/footer.php';
?>
