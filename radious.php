<!DOCTYPE html>
<?php
class radious
{

  function cal($rad)
  {
    $pi=3.14;
    $are = $pi*$rad*$rad;
    echo "string".$are;
    // code...
  }
}
if (isset($_POST['submit'])) {
  $r=$_POST['rad'];
  $obj=new radious();
  $obj->cal($r);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="radious.php" method="post">
      <table>
        <input type="number" name="rad" value="">
        <input type="submit" name="submit" value="sub">
      </table>
    </form>
  </body>
</html>
