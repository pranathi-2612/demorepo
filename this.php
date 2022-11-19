<?php
class A
{
    private $name;
    private $rno;
 public function setname($n)
 {
   $this->name=$n;
 }
   public function setrno($r)
   {
     $this->rno=$r;
   }
   public function getname()
   {
     echo $this->name;
   }
   public function getrno()
   {
     echo $this->rno;
   }

}
$obj1=new A();
$obj1->setname("Manu");
$obj1->setrno("13");
$obj1->getname();
echo "<br>";
$obj1->getrno();
 ?>

