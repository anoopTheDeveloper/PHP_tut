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

    $sql = "insert into example (firstname , lastname , email) values ('anoop' , 'dhiman' , 'demo@gmail.com');";

    $result = mysqli_query($con , $sql);

    if($result){
        echo "insert into table succesfully";
    }
    else{
        echo "error" . mysqli_error();
    }
    mysqli_close($con);

?>