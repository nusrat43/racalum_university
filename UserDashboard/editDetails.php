<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <?Php include "userHeader.php" ?>
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <!-- <li><a href="#">Notice</a></li> -->
                                <li class="active">Change Password</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">


            <div class="row">
                <div class="col-lg-2">


                </div><!--/.col-->

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Change Password</strong>
                        </div>
                        <div class="card-body">
                            <!-- Credit Card -->
                            <div id="pay-invoice">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center">Edit Your Profile</h3>
                                    </div>
                                    <hr>
                                    <form action="#" method="post" novalidate="novalidate" enctype="multipart/form-data" novalidate="novalidate">
                                        <?php
                                        include '../config.php';
                                        $id = $_GET['id'];
                                        $sql = "SELECT * FROM `register` WHERE id= '$id'";

                                        $result = $conn->query($sql);
                                        $row = $result->fetch_assoc();
                                        $User_id = $row['User_id'];
                                        $password = $row['psw'];
                                        $name = $row['Name'];
                                        $Degree_Com = $row['Degree_completed'];
                                        $month = $row['month'];
                                        $year = $row['year'];
                                        $email = $row['Email'];
                                        $mobile = $row['Mobile_no'];
                                        $w_mobile = $row['Whatsapp_no'];
                                        $photo = $row['Photo'];
                                        $address = $row['Address'];
                                        $city = $row['City'];
                                        $state = $row['Sate'];
                                        $O_address = $row['Office_Address'];
                                        $O_city = $row['O_City'];
                                        $O_state = $row['O_state'];


                                        // $caption=$row['Caption'];

                                        ?>
                                        <div class="row">


                                            <div class="form-group col-lg-6">
                                                <label for="">User Id </label>
                                                <input name="Userid" type="text" id="name" placeholder="Your User Id..." class="form-control" value="<?php echo $User_id; ?>">
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input id="cc-payment" name="Name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $name; ?>">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label for="">Degree Completed </label>
                                                <select name="degree_com" id="" class="form-control">
                                                    <option value=""><?php echo $Degree_Com; ?> </option>
                                                    <option value="Grduate">Graduate</option>
                                                    <option value="Post Graduate">Post Graduate</option>
                                                    <option value="Doctrate">Doctrate</option>
                                                </select>

                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label for="">Select Month </label>

                                                <select name="month" id="" class="form-control">
                                                    <option value=""><?php echo $month; ?></option>
                                                    <option value="Jan">Jan</option>
                                                    <option value="Feb">Feb</option>
                                                    <option value="Mar">Mar</option>
                                                    <option value="Apr">Apr</option>
                                                    <option value="May">May</option>
                                                    <option value="Jun">Jun</option>
                                                    <option value="Jul">Jul</option>
                                                    <option value="Aug">Aug</option>
                                                    <option value="Sep">Sep</option>
                                                    <option value="Oct">Oct</option>
                                                    <option value="Nov">Nov</option>
                                                    <option value="Dec">Dec</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label for="cc-payment" class="control-label mb-1">Year</label>
                                                <input id="cc-payment" name="year" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $year; ?>">

                                            </div>
                                        </div>
                                        <div class="row">


                                            <div class="form-group col-lg-6">
                                                <label for="cc-payment" class="control-label mb-1">Email Address</label>
                                                <input id="cc-payment" name="Email" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $email; ?>">

                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="cc-payment" class="control-label mb-1">Mobile Number</label>
                                                <input id="cc-payment" name="Mobile_no" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $mobile; ?>">

                                            </div>
                                        </div>
                                        <div class="row">


                                            <div class="form-group col-lg-6">
                                                <label for="cc-payment" class="control-label mb-1">WhatsApp Number </label>
                                                <input id="cc-payment" name="WmobileNo" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $w_mobile; ?>">

                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="cc-payment" class="control-label mb-1">Photo</label>
                                                <input id="cc-payment" name="photo" type="file" class="form-control" aria-required="true" aria-invalid="false">
                                                <a href="<?php echo $photo; ?>">view Photo</a>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 form-group">

                                           
                                            <label for="address">Home Address </label>
                                            <textarea name="address" type="text" class="form-control" id="address" placeholder="Your Address..."><?php echo $address; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row">


                                            <div class="form-group col-lg-6">
                                                <label for="cc-payment" class="control-label mb-1">City </label>
                                                <input id="cc-payment" name="city" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $city; ?>">

                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="cc-payment" class="control-label mb-1">State</label>
                                                <input id="cc-payment" name="state" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $state; ?>">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 form-group">

                                           
                                            <label for="address">Office Address(optional)</label>
                                            <textarea name="o_address" type="text" class="form-control" id="address" placeholder="Your Address..."><?php echo $O_address; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row">


                                            <div class="form-group col-lg-6">
                                                <label for="cc-payment" class="control-label mb-1">City </label>
                                                <input id="cc-payment" name="o_city" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $O_city; ?>">

                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="cc-payment" class="control-label mb-1">State</label>
                                                <input id="cc-payment" name="o_state" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $O_state; ?>">

                                            </div>
                                        </div>
                                        <div >
                                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                                <!-- <i class="fa fa-lock fa-lg"></i>&nbsp; -->
                                                <span id="payment-button-amount">Update</span>

                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div> <!-- .card -->

                </div><!--/.col-->

                <div class="col-lg-2">


                </div><!--/.col-->


            </div>
        </div>
    </div><!-- .animated -->


    <div class="clearfix"></div>




    <?php
    include '../config.php';
    if (isset($_POST['submit'])) {

        if ($_FILES['photo']['name'] == "") {
            $target_file = $photo;
        } else {

            $target_dir = "../uploads/"; // Specify the directory where the file will be uploaded
            $target_file = $target_dir . basename($_FILES["photo"]["name"]);
            $uploadOk = 1;
           
        }
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check file size (limit to 5MB)
        if ($_FILES["photo"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        $allowedTypes = array("jpg", "png", "jpeg", "gif");
        if (!in_array($fileType, $allowedTypes)) {
            echo "Sorry, only JPG, JPEG, PNG, & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            // If everything is ok, try to upload the file
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        // $Email = $_SESSION['Email'];
        $id = $_GET['id'];
        $User_id = $_POST['Userid'];
        $name = $_POST['Name'];
        // $password=$_POST['password'];
        $Degree_Com = $_POST['degree_com'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $email = $_POST['Email'];
        $mobile = $_POST['Mobile_no'];
        $Wmobile_no = $_POST['WmobileNo'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $Off_address = $_POST['o_address'];
        $O_city = $_POST['o_city'];
        $O_state = $_POST['o_state'];

        // $password = md5($_POST['password']);

        $sql = "UPDATE `register` SET `User_id`='$User_id',`Name`='$name',`Degree_completed`='$Degree_Com',`month`='$month',`year`='$year',`Email`='$email',`Mobile_no`='$mobile',`Whatsapp_no`='$Wmobile_no',`Photo`='$target_file',`Address`='$address',`City`='$city',`Sate`='$state',`Office_Address`='$Off_address',`O_City`='$O_city',`O_state`='$O_state' WHERE id='$id'";
        // echo  $sql;

        if ($conn->query($sql)) {
            echo "<script> alert('Edit Detail successfully!'); window.location='myDetails.php'; </script>";
        } else {
            echo "<BR><BR> Error occured";
        }
    }
    ?>
    <?php include 'userFooter.php' ?>
</body>

</html>