<?php
//  create db

    $servername = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($servername , $username , $password);
    if(!$con){
        die("faiiled to connect" . mysqli_connect_error());
    }
    echo "connect successfully";

    $query = "create database exampledemo";
    $result = mysqli_query($con , $query);
    if($result){
        echo "database created succesfully";
    }
    else{
        echo "error" . mysqli_error($con);
    }

    mysqli_close($con);

?>