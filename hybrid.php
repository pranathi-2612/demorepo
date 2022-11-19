<?php
class A
{
 var $h;
 var $b;
 var $r;
 protected $cir,$rec;
}
class B extends A
{
  var $h=10;
  var $b=5;
  var $r=2;
}
class C extends B
{
    public function circle()
    {
    $this->cir=3.14*$this->r*$this->r;
    echo "area of circle is:".$this->cir;
    }
}
class D extends B
{
    public function rectangle()
    {
    $this->rec=$this->b*$this->h;
    echo "area of rectangle  is:".$this->rec;
    }
}
$obj1=new C();
$obj1->circle();
$obj2=new D();
$obj2->rectangle();
 ?>

