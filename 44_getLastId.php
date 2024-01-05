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

    $sql = "insert into example (firstname , lastname , email) values ('shiv' , 'dhiman' , 'demo@gmail.com');";

    $result = mysqli_query($con , $sql);

    if($result){
        $lastId = mysqli_insert_id($con);
        echo "insert into table succesfully and lst id is" . $lastId;
    }
    else{
        echo "error" . mysqli_error();
    }
    mysqli_close($con);

?>