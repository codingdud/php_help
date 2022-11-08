<?php
$web=$_POST['site'];
$email=$_POST['email'];
if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z()-9+&@#\/%?=~_|!:,.;]*[-a-z()-9+&@#\/%=~_|]/i",$web)){
  echo "invalid url<br>";
}else {

  echo "valid url<br>";
}
if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
  echo "NOT VALID EMAIL";
}else {
  echo "valid email";
}
 ?>
