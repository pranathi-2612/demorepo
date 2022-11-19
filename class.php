<?php
/*class sample
{
  var $r="hellooo";
  function display()
  {
    echo "sample class";
    echo "<br>";
    echo $this->r;
  }
}
$obj=new sample();
$obj->display();*/
class sample
{
  protected $r="hellooo";
}
class samp extends sample
{
  function display()
  {
    echo $this->r;
  }
}$obj=new samp();
$obj->display();
?>