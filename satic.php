<?php
class a
{
  static $my="hello";
  public function display(){
    return self::$my;
  }

}
class b extends a
{
  function show()
  {
    return parent::$my;

  }
}
echo a::$my
echo b::$my
 ?>
