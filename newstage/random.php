<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    srand(microtime()*1000000);
    $num=rand(1,6);
    switch ($num) {
      case 1:
        print_r($num);
        break;
      case 2:
        print_r($num);
        break;
      case 3:
        print_r($num);
        break;
      case 4:
        print_r($num);
        break;
      case 5:
        print_r($num);
        break;
      case 6:
        print_r($num);
        break;

      default:
        // code...
        break;
    }
     ?>

  </body>
</html>
