<?php
// scope resolution operator (::)

class abc{
    const msg = "thank you for visiting here";
}

echo abc ::  msg;
?>

<?php
// scope resolution used in inside the class

    class xyz{
        const msg = "hyy!! how are you";

        public function info(){
            echo self :: msg;
        }
    }
    $obj = new xyz();
    $obj -> info();
?>