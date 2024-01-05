<!-- $GLOBALS is a PHP super global variable which is used to access
global variables from anywhere in the PHP script (also from within functions or methods). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php
// $_GLOBALS variable

    $x = 9;
    $y = 10;

    function addition(){
        $GLOBALS['sum'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo $sum;
?>



<form action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <input type="text" name = "fname">
    <input type="text" name ="lname">
    <input type="submit" name ="submit" valuue ="submit">
</form>


<?php
    echo $_POST["fname"] . "<br>";
    echo $_POST["lname"] . "<br>";
    echo htmlspecialchars($_POST["lname"]);
?>
</body>
</html>
