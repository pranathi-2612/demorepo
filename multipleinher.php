<?php

// declare a class

class Bird {

    public function display() {

        echo "I am a bird,";

    }

}

// declare a trait

trait Pet {

    public function show() {

        echo " a pet";

    }

}

// declare a derived class

class Parrot extends Bird {

    // keyword "use" to use the trait

    use Pet;

    public function msg() {

        echo ", and a parrot.";

    }

} 

// declare object of the derived class

$test = new Parrot();

$test->display();

$test->show();

$test->msg();

?>