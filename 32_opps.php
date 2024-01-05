<?php
// oops -> stand for object oriented object

    class fruits{
        private $name;
        private $price;
        public function set_name($name){
            $this->name = $name;
        }
        public function get_name(){
            return $this->name;
        }
        public function set_price($price){
            $this->price = $price;
        }
        public function get_price(){
            return $this->price;
        }
    }

    $obj = new fruits();
    $obj->set_name("apple");
    echo $obj -> get_name() . "<br>";
    $obj -> set_price(200);
    echo $obj -> get_price() . "<br>";

    var_dump($obj instanceof fruits);
?>