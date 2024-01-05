<?php
// interface

    interface animal {
        public function makeSound();
    }

    class cat implements animal{
        public function makeSound(){
            echo "meow";
        }
    }

    class dog implements animal{
        public function makeSound(){
            echo "bho bho";
        }
    }


    $cat = new cat();
    $cat -> makeSound();
    $dog = new dog();
    $dog -> makeSound();

?>