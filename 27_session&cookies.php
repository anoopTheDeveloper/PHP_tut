<?php
//  setcookie

    $cookie_name = "user";
    $cookie_value = "anoop";
    setcookie($cookie_name , $cookie_value , time() + 86400 * 30 , "/");

?>

<?php
// modify cookie value

    $cookie_name = "user";
    $cookie_value = "panda";
    setcookie($cookie_name , $cookie_value , time() + 86400*30 , "/");

?>

<?php
//  to delete cookie

    setcookie($cookie_name , "" , time() - 3600);

?>

    <?php
    //  show cookie data

        if(!isset($_COOKIE[$cookie_name])){
            echo "cookie is not set" . $cookie_name;
        }
        else{
            echo "cookie is set " . $cookie_name ."<br>";
            echo "cookie value is " . $cookie_value;
        }
    
    ?>


