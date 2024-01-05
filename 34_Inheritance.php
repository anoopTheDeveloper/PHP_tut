<?php
// inheritance -> it is used to inherit the property of parent class into the child class

    class fruits {
        protected $name;
        protected $color;
        function __construct($name , $color){
            $this->name = $name;
            $this->color = $color;
        }
        public function intro(){
            echo "this is a $this->name and color is $this->color ";
        } 
    }

    class apple extends fruits {
        public function msg(){
            echo "is it fruit or vegetable ? <br>";
        }
    }

    $obj = new apple("apple" , "red");
    echo $obj -> msg();
    echo $obj -> intro();

?>



<?php
// inheritance -> it is used to inherit the property of parent class into the child class

    class car {
        protected $name;
        protected $color;
        function __construct($name , $color){
            $this->name = $name;
            $this->color = $color;
        }
        protected function intro(){
            echo "this is a $this->name and color is $this->color ";
        } 
    }

    class volvo extends car {
        public function msg(){
            echo "is it fruit or vegetable ? <br>";
            $this->intro();
        }
    }

    $obj = new volvo("volvo" , "red");
    echo $obj -> msg();
    // echo $obj -> intro();

?>

<?php
// overriding inherited methods

    class vehicle {
        protected $name;
        protected $color;

        function __construct($name , $color){
            $this->name = $name;
            $this->color = $color;
        }
        public function info(){
            echo "vehicle id $this->name and color of vehicle is $this->color ";
        }
    }
    class bmw extends vehicle {
        private $avg;
        function __construct($name , $color , $avg){
            $this->name = $name;
            $this->color = $color;
            $this->avg = $avg;
        }
        public function info(){
            echo "vehicle is $this->name , color is $this->color and average is $this->avg";
        }
    }

    $obj = new bmw("BMW" , "black" , 12);
    $obj -> info();

?>


<?php
// final -> it is used for to prevent class inheritance , or used to prevent class method for inheritance

    final class abc {

    }

    class xyz extends abc{

    }

    $obj = new xyz(); 

?>