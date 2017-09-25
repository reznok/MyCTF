<?php
/**
 * Created by PhpStorm.
 * User: bforbes
 * Date: 9/25/17
 * Time: 1:22 PM
 */

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
        $uploadOk = 1;
    }
    else {
        echo "Welcome To Reznok's Archive Storage\n\n\n\n";
        $uploadOk = 0;
    }

//// Check if file already exists (Screw it, allow overwrites)
//if (file_exists($target_file)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
//}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "rar" && $imageFileType != "tar" && $imageFileType != "zip"
    && $imageFileType != "tar.gz" && $imageFileType != "gz") {
    echo "Sorry, only common archive formats are allowed!\n\n";
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.\n\n";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.\n\n";
    }
}

?>

<br><br><br><br><br>
<!DOCTYPE html>
<html>
<body>

<form action="#" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<br><br>

<form action="viewfile.php" method="get" enctype="multipart/form-data">
    Select a file to view:
    <input type="text" name="file" id="fileToUpload">
    <input type="submit" value="View File" name="submit">
</form>


</body>
</html>

