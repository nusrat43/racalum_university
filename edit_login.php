<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>




    </style>
</head>

<body>

    <?php include "header.php"?>

    <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Alumni</h6>
          <h2>Edit Login </h2>
        </div>
      </div>
    </div>
  </section>


    <section class="login-us" id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact1" action="" method="POST">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Login</h2>
                                    </div>
                                    <hr>
                                    <div class="">
                                        <fieldset>
                                            <label for="">User Email </label>
                                            <input name="email" type="text" id="email" placeholder="YOUREMAIL...*" required="">
                                        </fieldset>
                                    </div>
                                    <br>
                                    <div class="">
                                        <fieldset>
                                            <label for="">Password </label>
                                            <input name="password" type="password" id="password" placeholder="YOUR PASSWORD...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" class="button" name="submit">Login</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- <script src="script.js"></script> -->

    <?php
    include 'config.php'; // Include your database connection

    if (isset($_POST['submit'])) {
        $formusername = $_POST['email'];
        $formpassword = md5($_POST['password']);



        // Prepare the SQL statement
        $stmt = $conn->prepare("SELECT * FROM `login` WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $formusername, $formpassword);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            $_SESSION['Email'] = $formusername;
            $_SESSION['Type'] = $row['type']; // Store user type in session

            if ($row['type'] === 'User') {
                echo "<script>alert('LoggedIn');window.location='UserDashboard/userDashboard.php'; </script>";
                exit();
            }
        } else {
            echo "<script>alert('Wrong UserId Password');window.location='edit_login.php'; </script>";
        }
        $stmt->close();
    }
    ?>


    <?php include "footer.php" ?>
</body>

</html>