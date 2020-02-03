<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
    header("location: index.php");
    exit;
}


$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["filetoUpload"]["name"]);
$uploadOk = 1;
if(isset($_POST["submit"])){
    if(file_exists($target_file)){
        $uploadOk = 0;
        echo 'File is already exists.';
    }

    if($_FILES["filetoUpload"]["size"]>1000000){
        $uploadOk = 0;
        echo 'Sorry. File is too large.';
    }
    if (0 == $uploadOk) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["filetoUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["filetoUpload"]["name"]). " has been uploaded.";
            header("location: fileHandling.php");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}



?>


<!DOCTYPE html>
<html>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="filetoUpload" id="filetoUpload">
    <input type="submit" value="Upload File" name="submit">
</form>
<a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
</body>
</html>
