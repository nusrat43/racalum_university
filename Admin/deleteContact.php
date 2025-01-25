<?php
include '../config.php';

$id = $_GET['id'];

$del = mysqli_query($conn, "DELETE FROM `cantact` WHERE id='$id'");

if ($del) {
    mysqli_close($conn);

    echo "<script> alert('Record deleted successfully!'); window.location='viewContact.php'; </script>";
    // exit;	
} else {
    echo "Error deleting image";
}
