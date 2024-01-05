<?php
//  delete

    $servername = "localhost";
    $username = "root";
    $password  = "";
    $dbname = "exampledemo";
    
    $con = mysqli_connect($servername , $username , $password , $dbname);

    if(!$con){
        die("connection failed" . mysqli_connect_error());
    }

    $sql = "delete from example where id = 3";

    $result = mysqli_query($con , $sql);

    if($result){
        echo "record deleted";
    }
    else{
        echo "error" . mysqli_error();
    }

    mysqli_close($con);

?>