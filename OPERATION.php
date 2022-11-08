<?php
//globle variable
$a=10;
echo "string:$a <br/>";
function mytest(){
  $y=20;
  static $x=0;
  echo "S,C,H,$x,$x,l<br/>";
  echo "print y:$y";
}
  $y=9;
  echo "print y:$y";
mytest();
?>
