<?php
class dem
{
  public function display(){
    echo "string";
  }
}
class dem1 extends dem {
  function viw(){
    echo "ssssss";
  }
}
$obj= new dem1();
$obj->viw();
$obj->display();
 ?>
