<?php 
  $page_title = "Components"; 
  include 'includes/head.php';
  include 'includes/masthead.php';
?>

<section class="row">
  <div class="large-12 columns toc">
    <h3>Contents</h3>
    <nav>
      <li><a data-scroll href="#imagery">Imagery</a></li>
      <li><a data-scroll href="#buttons">Buttons</a></li>
      <li><a data-scroll href="#labels">Labels</a></li>
      <li><a data-scroll href="#inputs">Inputs</a></li>
      <li><a data-scroll href="#alerts">Alerts</a></li>
      <li><a data-scroll href="#panels">Panels</a></li>
    </nav>
  </div>
</section>

<?php
  include 'includes/imagery.php';
  include 'includes/buttons.php';
  include 'includes/lists.php';
  include 'includes/labels.php';
  include 'includes/inputs.php';
  include 'includes/alerts.php';
  include 'includes/panels.php';
  
  include 'includes/footer.php';
?>
