<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>php session one</title>
   </head>
   <body>
     <?php
     $_SESSION["USER"]="Animesh kumar";
     echo "session created.<br/>";
     ?>
     <a href="session2.php">visite next page</a>
   </body>
 </html>
