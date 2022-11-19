<?php
class con
{
    private $count;
    function __Construct()
    {
         $this->count++;

    }
    function __destruct()
    {
        echo $this->count;

    }
    public function show()
    {
        echo $this->count;
    }
}
$obj=new con();
$obj1=new con();
$obj->show();
?>