<?php
class checkdate
{
    var $s;
    public function add($n1,$n2)
    {
       $this->s=$n1+$n2;
       echo $this->s;
    }
}
$obj=new checkdate();
$obj->add(1,2);