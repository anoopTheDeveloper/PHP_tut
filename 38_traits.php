<?php
// traits

    trait message1{
        public function msg(){
            echo "hello by me";
        }
    }

    trait message2{
        public function msg1(){
            echo "hello by you";
        }
    }

    class wlcm {
        use message1;
    }

    class welcome {
        use message1 , message2;
    }

    $wlcm1 =  new wlcm();
    $wlcm1 -> msg();

    $obj = new welcome();
    $obj -> msg();
    $obj -> msg1();

?>