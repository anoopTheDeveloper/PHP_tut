<?php
// filters

    foreach(filter_list() as $ls => $value){
        echo $ls . " => " . $value . "<br>";
    }

?>

<?php
//  sanitize string

    $str = "<h1> heloo world !";
    $newstr = filter_var($str , FILTER_SANITIZE_STRING);
    echo $newstr;

?>

<?php
// validate an integer

    $num = 19;
    if(filter_var($num , FILTER_VALIDATE_INT)){
        echo "<br> number validate";
    }
    else{
        echo "number is not validate";
    }

?>

<?php
// problem with 0

$num = 0;
if(filter_var($num , FILTER_VALIDATE_INT) == 0 || filter_var($num , FILTER_VALIDATE_INT)){
    echo "<br>number is validate";
}
else{
    echo "<br>number is not validate";
}

?>

<?php
// validate ip address

    $ip = "127.0.0.1";
    if(filter_var($ip , FILTER_VALIDATE_IP)){
        echo "<br>valid ip";
    }
    else{
        echo "invalid ip<br>";
    }

?>

<?php
// sanitize and validate email address

$email = "demo@gmail.com";
$newgmail = filter_var($email , FILTER_SANITIZE_EMAIL);
if(filter_var($newgmail , FILTER_VALIDATE_EMAIL)){
    echo "<br>valid gmail";
}
else{
    echo "invalid gmail<br>";
}

?>

<?php
// sanitize and validate url

    $url = "https://www.demo.com";
    $newurl = filter_var($url , FILTER_SANITIZE_URL);
    if(filter_var($newurl , FILTER_VALIDATE_URL)){
        echo "valid url";
    }
    else{
        echo "invalid url";
    }

?>