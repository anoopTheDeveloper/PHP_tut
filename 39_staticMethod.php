<?php
// static method

    class greeting{
        public static function welcome(){
            echo "Hello world!";
        }
    }

    greeting :: welcome();

?>


<?php
// self 

class a{
    public static function welcome(){
        echo "hyy!";
    }

    function __construct(){
        self :: welcome();
    }
}

new a();

?>

<?php

    class b {
        public static function welcome(){
            echo "welcome to krachi";
        }

    }

    class c {
        public function greeting(){
            b :: welcome();
        }
    }

    $obj = new c();
    $obj -> greeting();

?>

<?php
// static properties

    class d{
        public static $value = 3.14;
    }
    echo d :: $value;

?>

<?php

class e {
    public static $a = 10;
    public static $b = 10;
    public function sum(){
        echo self::$a + self::$b;
    }
}
$obj = new e();
$obj -> sum();

?>

<?php

class f {
    public static $num1 = 10;
}
class g extends f{
    private $num2 = 20 ;
    function sumoftwo(){
        echo parent :: $num1 + $this->num2;
    }
}
$sum = new g();
$sum -> sumoftwo();
?>