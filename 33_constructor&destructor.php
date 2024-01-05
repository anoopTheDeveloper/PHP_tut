<?php
// constructor -> it is used define the values of variable at the time of class declaration

    class fruits {
        private $name ;
        private $price;
        function __construct($name , $price){
            $this->name = $name;
            $this->price = $price;
        }
        public function get_name(){
            return $this-> name;
        }
        public function get_price(){
            return $this->price;
        }

        function __destruct(){
            echo '<br> memory freed';
        }
    }

    $obj = new fruits("apple" , 200);
    echo $obj -> get_name();
    echo $obj -> get_price();


?>