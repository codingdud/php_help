<?php
session_start();
if (isset($_SESSION['counter'])) {
  $_SESSION['counter']+=1;
  // code...
}else {
  $_SESSION['counter']=1;
  // code...
}
$msg="you have visite tis page ".$_SESSION['counter']." in this session"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cuntter</title>
  </head>
  <body>
    <?php echo($msg);
    session_destroy(); ?>
  </body>
</html>
