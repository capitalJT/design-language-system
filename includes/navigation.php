<?php $page = $_SERVER['SCRIPT_NAME']; ?>
<div class="icon nav ajmn-menu"></div>
<nav class="navigation site-navigation">
  <li>
  	<a href="style.php" <?php if ($page == "/style.php"){ echo "class='active'";} ?>>Style</a>
  </li>
  <li>
  	<a href="elements.php" <?php if ($page == "/elements.php"){ echo "class='active'";} ?>>Elements</a>
  </li>
  <li>
  	<a href="components.php" <?php if ($page == "/components.php"){ echo "class='active'";} ?>>Components</a>
  </li>
  <li>
  	<a href="templates.php" <?php if ($page == "/templates.php"){ echo "class='active'";} ?>>Templates</a>
  </li>
  <li>
  	<a href="https://github.com/capitalJT/AJ-DLS/wiki" target="_blank">Resources</a>
  </li>
</nav>
