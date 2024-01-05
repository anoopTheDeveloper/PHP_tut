<?php
//  create table

    $servername = "localhost";
    $usernamer = "root";
    $password = "";
    $dbname = "exampledemo";
    $con = mysqli_connect($servername , $usernamer , $password ,$dbname);

    if(!$con){
        die("connection failed" . mysqli_connect_error());
    }

    $sql = "create table example (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50));";

    $result = mysqli_query($con , $sql);
    if($result){
        echo "table created succesfully";
    }
    else{
        echo "error" , mysqli_error($con);
    }

    mysqli_close($con);

?>