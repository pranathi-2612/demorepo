<?php
/*class testclass{
   static $name="test";
}
echo testclass::$name;      //use static property
$var="testclass";
echo $var::$name;*/
class testclass{
   static $name="test";
   public function test(){
      echo self::$name;            //static propery inside any method of the same class, use self keyword instead of -> operator that is used for accessing instance properties.
   }
}
class myclass extends testclass{
    public function mytest(){
       echo parent::$name;           // static property declared in parent class can be referred to inside a child class method, by using parent keyword along with scope resolution operator
    }
 }
$obj=new myclass();
$obj->test();
$obj->mytest();
?>