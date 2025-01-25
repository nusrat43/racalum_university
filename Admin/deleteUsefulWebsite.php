<?php
include '../config.php';

$id = $_GET['id'];

$del = mysqli_query($conn, "DELETE FROM `useful_website` WHERE id='$id'");

if ($del) {
    mysqli_close($conn);

    echo "<script> alert('Record deleted successfully!'); window.location='viewUsefulWebsite.php'; </script>";
    // exit;	
} else {
    echo "Error deleting image";
}
