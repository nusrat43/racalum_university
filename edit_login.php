<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* login page
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f2f2f2;
    font-family: 'Arial', sans-serif;
} */
section.login {
  background-image: url(assets/images/bg7.jpg);
  background-position: center center;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 140px 0px 50px 0px;
}
.login-container {
    height: 500px;
    width: 500px;
    margin-top: 150px;
    margin-bottom: 100px;
    margin-left: 600px;
    background-color: #fbd2d2;
    padding: 60px;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);

}

.login-form {
    
    max-width: 300px;
    margin: auto;
}

.login-form h2 {
    margin-bottom: 50px;
    color: #333;
    padding: 10px;
    border-bottom: 2px solid black;
}

.input-group {
    margin-bottom: 15px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    /* border-radius: 8px; */
    font-size: 16px;
    color: #333;
    margin-bottom: 20PX;
}
.login-form a{
    color: green;
}
.login-form a:hover{
    color: red;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    border: none;
    border-radius: 8px;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

    </style>
</head>
<body>

<?php include "header.php" ?>


    <section class="login" >
    <div class="login-container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="" method=post>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter Username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" required>
                </div>
                <input type="submit"> <a href="#">Forget password</a>

                
            </form>
        </div>
    </div>
    </section>
    <!-- <script src="script.js"></script> -->

    <?php  include "footer.php"?>
</body>
</html>
