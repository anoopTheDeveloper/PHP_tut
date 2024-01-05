<?php
// insert into table

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "exampledemo";

    $con = mysqli_connect($servername , $username , $password , $dbname);

    if(!$con){
        die("connect to failked" . mysqli_connect_error());
    }

    $sql = "insert into example (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com');";
    $sql = "insert into example (firstname, lastname, email)
    VALUES ('Mary', 'Moe', 'mary@example.com');";
    $sql = "insert into example (firstname, lastname, email)
    VALUES ('Julie', 'Dooley', 'julie@example.com')";


    $result = mysqli_multi_query($con , $sql);

    if($result){
        echo "insert into table succesfully";
    }
    else{
        echo "error" . mysqli_error();
    }
    mysqli_close($con);

?>