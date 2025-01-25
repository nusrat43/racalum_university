<head>
    <title> </title>

    <?php
    include 'userHeader.php';
    ?>
    <script>
        function toggleVisibility(inputId, eyeId) {
            const inputField = document.getElementById(inputId);
            const eyeIcon = document.getElementById(eyeId);

            if (inputField.type === "password") {
                inputField.type = "text";
                eyeIcon.src = "images/eye-slash-solid.svg"; // Icon for 'hide'
            } else {
                inputField.type = "password";
                eyeIcon.src = "images/eye-solid.svg"; // Icon for 'show'
            }
        }

        function validatePasswordChange() {
            const newPassword = document.getElementsByName("newPswd")[0].value;
            const confirmPassword = document.getElementsByName("newPswd1")[0].value;

            if (newPassword !== confirmPassword) {
                alert("New Password and Confirm Password do not match!");
                return false;
            }
            return true;
        }
    </script>
</head>
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
                                    <h3 class="text-center">Change Password </h3>
                                </div>
                                <hr>
                                <form action="#" method="post" novalidate="novalidate" enctype="multipart/form-data" novalidate="novalidate">

                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Current Password</label>
                                        <input id="cc-payment" name="oldPswd" type="password" class="form-control" aria-required="true" aria-invalid="false">
                                        <!-- <img id="eye1" src="images/eye-solid.svg" alt="Show/Hide" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;" onclick="toggleVisibility('oldPass', 'eye1')"> -->
                                    </div>

                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">New Password</label>
                                        <input id="cc-payment" name="newPswd" type="password" class="form-control" aria-required="true" aria-invalid="false">
                                        <!-- <img id="eye2" src="images/eye-solid.svg" alt="Show/Hide" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;" onclick="toggleVisibility('newPswd', 'eye2')"> -->
                                    </div>

                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Confirm Password</label>
                                        <input id="cc-payment" name="newPswd1" type="password" class="form-control" aria-required="true" aria-invalid="false">
                                        <!-- <img id="eye3" src="images/eye-solid.svg" alt="Show/Hide" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;" onclick="toggleVisibility('newPswd1', 'eye3')"> -->
                                    </div>


                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                            <!-- <i class="fa fa-lock fa-lg"></i>&nbsp; -->
                                            <span id="payment-button-amount">Change</span>

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
if (isset($_POST['submit'])) {
    include '../config.php';
    $username1 = $_SESSION['Email'];
    $oldpassword = md5($_POST['oldPswd']);
    $newpassword = md5($_POST['newPswd']);
    $confirmPassword = md5($_POST['newPswd1']); // Hash confirm password
    $pswd = $_POST['newPswd'];

    if ($newpassword !== $confirmPassword) {
        echo "<script>alert('New Password and Confirm Password do not match!'); window.history.back();</script>";
        exit();
    }

    $sql = "select * from login where Email='" . $username1 . "'and Password='" . $oldpassword . "'";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()) // record exists
    {
        $sql = "update login set password='$newpassword' , psw='$pswd' where email='" . $username1 . "'";
        $conn->query($sql);
        echo "<script>alert('Password changed successfully!'); window.location='myDetails.php';</script>";
    } else {
        echo "<script>alert('Wrong username or password!'); window.history.back();</script>";
    }
}
?>

<!--login-inner-->
<?php
include 'userFooter.php';
?>