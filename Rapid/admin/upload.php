<?php
include('includes/config.php');
$targetfolder = "upload/";
 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
$file_type=$_FILES['file']['type'];

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
 {
 echo "File Berhasil di Upload  file ". basename( $_FILES['file']['name']). " is uploaded";
    $name = $_POST['dataname'];
    $content = $targetfolder;

    $query = mysqli_query($con, "INSERT INTO tblu2pk(tab,tag,content) VALUES('$name','','$content')");
    if ($query) {
        $msg = "Data successfully Added ";
        header('location:up2k.php');
    } else {
        $error = "Something went wrong . Please try again.";
    }
 }
 else {
 echo "File Gagal di Upload";
 }

?>