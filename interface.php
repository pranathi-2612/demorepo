<?php

// define a class

class Bird {

     public function insideBird() {

          echo "I am bird, ";

     }

}

// declare an interface

interface Pet {

     public function insidePet();

}

 // define a derived class

// inherited from Bird class

// and implementing Pet interface

class Parrot extends Bird implements Pet {

     function insidePet() {

          echo "and a pet, ";

     }

     public function insideParrot() {

     echo "and a parrot.";

     }

}

// create object of the derived class

$obj = new Parrot();

$obj->insideBird();

$obj->insidePet();

$obj->insideParrot();

?>

