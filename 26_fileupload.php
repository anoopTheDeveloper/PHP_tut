<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="FileToUpload" id="FileToUpload">
        <input type="submit" name="submit">
    </form>

    <?php
    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["FileToUpload"]["name"]);
    // // $path = "uploads/images/abc.php";
    // // echo basename($path);
    // // echo basename($path , ".php" );

    // $uploadok = 1;
    // $filetype = pathinfo($target_file , PATHINFO_EXTENSION);

    // if(isset($_POST["submit"])){
    //     $check = getimagesize($_FILES["FileToUpload"]["tmp_name"]);
    //     if($check !== false){
    //         echo "file is an image" . $check["mime"] . ".";
    //         $uploadok = 1;
    //     }
    //     else{
    //         echo "file is not an image";
    //         $uploadok = 0;
    //     }
    // }

//     if(file_exists($target_file)){
//         echo "sorry file already exists";
//         $uploadok = 0;
//     }
//     if($_FILES["FileToUpload"]["size"] > 500000000){
//         echo "file is too large";
//         $uploadok = 0;
//     }
//     if($filetype != "jpg" && $filetype != "png" && $filetype != "img" && $filetype != "jpeg" && $filetype != "gif"){
//         echo "sorry , your file is not uploaded";
//         $uploadok = 0;
//     } 
//     if($uploadok == 0){
//         echo "sorry , file is not uploaded";
//     }
//     else{
//         if(move_uploaded_file($_FILES["FileToUpload"]["tmp_name"] , $target_file)){
//             echo "file" . htmlspecialchars(basename($_FILES["FileToUpload"]["name"])) . "has been uploaded";
//         }
//         else{
//             echo "sorry , there was an error to uploading the file";
//         }
//     }
// }


if(isset($_POST["submit"])){
    $file_name = $_FILES["FileToUpload"]["name"];
    $temp_name = $_FILES["FileToUpload"]["tmp_name"];
    $folder = "uploads/";
    if(is_uploaded_file($_FILES["FileToUpload"]["tmp_name"])){
        move_uploaded_file($_FILES["FileToUpload"]["tmp_name"] , $folder . $_FILES["FileToUpload"]["name"]);
        echo "file uploaded successfully";
    }
    else{
        echo "file is not succesfully uploaded";
    }
}

    ?>
</body>
</html>