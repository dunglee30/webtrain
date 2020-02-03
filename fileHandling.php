<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>File Gallery</title>
    <style type="text/css">
        .file-box{
            display: inline-block;
            text-align: center;
            margin: 0 15px;
        }
    </style>
</head>

<body>
    <?php
    $dir = "uploads/";
    if (is_dir($dir)){
        if ($dh = opendir($dir)){
          while (($file = readdir($dh)) !== false){
            if(time()-filectime($dir.$file)>60){
                unlink($dir.$file);
            }
            echo "filename:" . $file . "<br>";
          }
          closedir($dh);
         }
     }
        
    ?>
    <a href = "fileupload.php">Upload File</a></br>
    <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>


</body>

</html>
