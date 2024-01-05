<?php
// select query

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "exampledemo";

    $con = mysqli_connect($servername , $username , $password , $dbname);

    if(!$con){
        die("connection failed" . mysqli_connect_error());
    }

    $sql = "select * from example";

    $result = mysqli_query($con , $sql);

    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>";
            echo $row["id"] . " ";
            echo "</td>";
            echo "<td>";
            echo $row["firstname"] . " " .$row["lastname"] . "  ";
            echo "<td/>";
            echo "<td>";
            echo $row['email'] . "<br>";
            echo "<td/>";
            echo "<tr/>";
        }
        echo "<table/>";
    }
    else{
        echo "0 results";
    }

    mysqli_close($con);

?>