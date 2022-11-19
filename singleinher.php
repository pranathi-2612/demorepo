<?php
class A
{
 function display()
 {
    echo "welcome";
 }
}
class B extends A
{
  function show()
  {
    echo "helloo";
  }
}
$obj1=new B();
$obj1->show();
$obj1->display();
 ?>

