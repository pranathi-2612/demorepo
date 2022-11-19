<?php

  class Jewellery {    //final -child class may not inherit from final class 

   function printMessage() {  //Cannot override final method 

         echo "I am the function of  the class Jewellery.";

      }

   }

   class testClass extends Jewellery {      

      function printMessage() {

         echo "I am the function of the class testClass.";

      }

   }  

   $ob = new testClass;
   $ob1= new Jewellery;
   $ob1->printMessage();
   $ob->printMessage();

?>

