<?php
//  date 

    echo date("D/m/y") . "<br>";
    echo date("Y/m/d") . "<br>";
    echo date("M/y/d") . "<br>";
    echo date("Y") . "<br>";
    echo date("H.i.s") . "<br>";
    echo date("H.i.sa") . "<br>";


    date_default_timezone_set("America/New_York");
    echo date("h.i.sa") . "<br>";

    $d = mktime(10 , 30 , 12 , 12 , 30 , 2023);
    echo date("Y-m-d h:i:sa" , $d);

    

?>