<?php $page = $_SERVER['SCRIPT_NAME']; ?>
<nav>
  <li class="has-submenu">
  	<a href="style.php" <?php if ($page == "/style.php"){ echo "class='active'";} ?>>Style</a>
  	<ul class="submenu-wrapper">
			<li><a href="style.php#brand-colors">Brand Colors</a></li>
			<li><a href="style.php#typography">Typography</a></li>
			<li><a href="style.php#icons">Icons</a></li>
    </ul>
  </li>
  <li class="has-submenu">
  	<a href="elements.php" <?php if ($page == "/elements.php"){ echo "class='active'";} ?>>Elements</a>
    <ul class="submenu-wrapper">
      <li><a href="elements.php#imagery">Imagery</a></li>
      <li><a href="elements.php#buttons">Buttons</a></li>
      <li><a href="elements.php#labels">Labels</a></li>
      <li><a href="elements.php#inputs">Inputs</a></li>
      <li><a href="elements.php#alerts">Alerts</a></li>
      <li><a href="elements.php#panels">Panels</a></li>
    </ul>
  </li>
  <li class="has-submenu">
  	<a href="components.php" <?php if ($page == "/components.php"){ echo "class='active'";} ?>>Components</a>
  </li>
  <li <?php if ($page == "/templates.php"){ echo "class='active'";} ?>>
  	<a href="templates.php" >Templates</a>
  </li>
  <li <?php if ($page == "/resources.php"){ echo "class='active'";} ?>>
  	<a href="resources.php" >Resources</a>
  </li>
</nav>
