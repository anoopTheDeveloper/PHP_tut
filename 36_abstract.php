<?php
// abstract class

    abstract class vehicle {
        public $name;
        public function __construct($name){
            $this->name = $name;
        }
        abstract public function intro() ;
    }

    class volvo extends vehicle{
        function intro(){
            echo "car is $this->name";
        }
    }

    $obj = new volvo("volvo");
    $obj -> intro();
?>