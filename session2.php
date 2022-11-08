<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>session2</title>
  </head>
  <body>
    <?php echo "user is ".$_SESSION["USER"]; ?>
  </body>
</html>
