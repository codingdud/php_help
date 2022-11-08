<?php
  $myfile=fopen("test.txt","r");
  //while (!feof($myfile)) {
    //echo fgetc($myfile);
    // code...}
  $k=fread($myfile,filesize("test.txt"));
  echo ("$k"."<br>");

?>
