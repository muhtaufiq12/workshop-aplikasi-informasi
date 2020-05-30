<?php
// include database connection file
include('includes/config.php');

// Get id from URL to delete that user
$id = $_GET['pid'];

// Delete user row from table based on given id
$result = mysqli_query($con, "delete from tbldata where id=$id");
if ($result) {
    $msg = "Data deleted ";
} else {
    $error = "Something went wrong . Please try again.";
}

// After delete redirect to Home, so that latest user list will be displayed.
// header('Location:data-kelurahan.php');
header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;
?>