<?php 
  $page_title = "Style"; 
  include 'includes/head.php';
  include 'includes/masthead.php';
?>

<section class="row">
  <div class="large-12 columns toc">
    <h3>Contents</h3>
    <nav>
      <li><a data-scroll href="#colors">Brand Colors</a></li>
      <li><a data-scroll href="#typography">Typography</a></li>
      <li><a data-scroll href="#icons">Icons</a></li>
    </nav>
  </div>
</section>

<?php
  include 'includes/colors.php';
  include 'includes/typography.php';
  include 'includes/icons.php';
  include 'includes/footer.php';
?>
