<?php
include '../config.php';

$id = $_GET['id'];

$del = mysqli_query($conn, "DELETE FROM `annual_pics` WHERE id='$id'");

if ($del) {
    mysqli_close($conn);

    echo "<script> alert('Record deleted successfully!'); window.location='viewAnnualPics.php'; </script>";
    // exit;	
} else {
    echo "Error deleting image";
}
