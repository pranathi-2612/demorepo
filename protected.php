<?php
class sample
{
    public $val;
    public function display()//protected function display
    {
        echo "welcome to php";
        
    }
}
class simple extends sample
{
    public function show()
    {
       //$this->display();
       // echo PHP_EOL;
        echo "Hello";
    }
}
$obj=new simple();
$obj->display();
$obj->show();
?>