<?php $section = 3 ?>

<!-- Element HTML Layout-->
<nav>
  <ul>
    <?php
    foreach ($QUESTIONS[$section] as $key => $value) {
      echo "<li>
          <a class='sense_deco' href='{$key}.php?key={$section}&subkey={$key}'>
          {$section}.{$key}
          </a></li>";
    }
    ?>
  </ul>
</nav>

<body>