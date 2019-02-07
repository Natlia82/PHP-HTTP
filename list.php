<?php

  $directory = __DIR__ .'/temp/';
  
  $scandir = scandir($directory, 1);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Обработка форм</title>
  <meta charset="utf-8">
  <link type="text/css" href="css/style.css" rel="stylesheet">
</head>
  <body>
    <ul>
      <?php
        $ra = null;
        foreach ($scandir as $value) {
          $ra = substr($value, -4);
          if ($ra === 'JSON' or $ra === 'json') {
            if ($value != '.' and $value != '..') {
            ?>
            <li><a href="test.php?test=<?php echo $value; ?>" ><?php echo $value; ?></a></li>
            <?php
            }
          }
        } ?>
    </ul>
  </body>
</html>
