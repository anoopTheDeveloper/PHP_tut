<?php
// file Handling

    echo readfile("abc.txt");

?>


<?php
//  fread  , fopen , fclose


    $myfile = fopen("abc.txt"  , "r") or die("file is not available");
    echo fread($myfile , filesize("abc.txt"));
    fclose($myfile);

?>

<?php
//  fets function is used for read a single line

    $myfile = fopen("abc.txt" , "r") or die("file is not availlable");
    echo fgets($myfile);
    fclose($myfile);

?>

<?php
//  feof function is used to check the end of file

    $myfile = fopen("abc.txt" , "r") or die("file is not available");
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
    }

    fclose($myfile);

?>


<?php
// fgetc  function is used to read character of file 

    $myfile = fopen("abc.txt" , "r") or die("file is not available");
    while(!feof($myfile)){
        echo fgetc($myfile) . "<br>";
    }
    fclose($myfile);

?>

<?php
// fopen is also use to create a file

    $newfile = fopen("newfile.txt" , "w") or die("unable to find fiile");
    $txt = "anoop kumar \n";
    fwrite($newfile , $txt);
    $txt = "anoop dhiman \n";
    fwrite($newfile , $txt);
    fclose($newfile);

?>

<?php
// fwrite function overwrite the data

    $newfile = fopen("newfile.txt" , "w") or die("unable to open the file");
    $txt = "jony\n";
    fwrite($newfile , $txt);
    $txt = "jony baba\n";
    fwrite($newfile , $txt);
    fclose($newfile);

?>


<?php
//  a => it means append , it is used for writing a text into the end of the file 


    $newfile = fopen("newfile.txt" , "a") or die("unable to open the file");
    $txt = "jony\n";
    fwrite($newfile , $txt);
    $txt = "jony baba\n";
    fwrite($newfile , $txt);
    fclose($newfile);


?>

<?php

$myfile = fopen("newfile.txt" , "r") or die("file is not available");
echo fread($myfile , filesize("newfile.txt"));

?>