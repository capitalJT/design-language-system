<?php $page = $_SERVER['SCRIPT_NAME']; ?>
<nav class="right">
  <li <?php if ($page == "/style.php"){ echo "class='active'";} ?>>
  	<a href="style.php" >STYLE</a>
  </li>
  <li <?php if ($page == "/components.php"){ echo "class='active'";} ?>>
  	<a href="components.php" >COMPONENTS</a>
  </li>
  <li <?php if ($page == "/resources.php"){ echo "class='active'";} ?>>
  	<a href="resources.php" >RESOURCES</a>
  </li>
</nav>