<?php
include '../config.php';

$id = $_GET['id'];

$del = mysqli_query($conn, "DELETE FROM `counsellingtable1` WHERE id='$id'");

if ($del) {
    mysqli_close($conn);

    echo "<script> alert('Record deleted successfully!'); window.location='viewCounselorList.php'; </script>";
    // exit;	
} else {
    echo "Error deleting image";
}
