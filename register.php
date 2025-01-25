<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script>
		let a = 1;

		function visible() {
			if (a == 1) {
				document.getElementById("pass").type = "text";
				document.getElementById("eye").src = "images/eye-slash-solid.svg";
				a = 0;
			} else {
				document.getElementById("pass").type = "password";
				document.getElementById("eye").src="images/eye-solid.svg";
				a = 1;
			}
		}
	</script> -->
</head>


<body>
    <?Php include "header.php"?>

    <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Alumni</h6>
          <h2>Alumni Register</h2>
        </div>
      </div>
    </div>
  </section>


    <section class="contact-us1" id="contact1">
        <div class="container1">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact1" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Alumni Registration</h2>
                                        <p>Please enter separately for each degree</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="">User Id </label>
                                            <input name="Userid" type="text" id="name" placeholder="Your User Id...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="">Password </label>
                                            <input name="password" type="password"  placeholder="Your Password..." required="">
                                            <!-- <img  onclick="visible()"  style="width:10px;height:20;" id="eye" src="assets/images/eyes-removebg-preview.png"></img> -->
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="">Name  </label>
                                            <input name="Name" type="text" id="subject" placeholder="Your Name...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label for="">Degree Completed  </label>
                                            <select name="degree_com" id="">
                                                <option value="">Select </option>
                                                <option value="Grduate">Graduate</option>
                                                <option value="Post Graduate">Post Graduate</option>
                                                <option value="Doctrate">Doctrate</option>
                                            </select>
                                            <select name="month" id="">
                                                <option value="">Select Month</option>
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
                                            <input type="text" name="year" id="" placeholder="Year Of Graduation/To Be">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="Email">Email Address  </label>
                                            <input name="Email" type="text" id="Email" placeholder="Your Email...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="Mobile_no">Mobile Number  </label>
                                            <input name="Mobile_no" type="text" id="Mobile_no" placeholder="Mobile Number...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="WmobileNo">WhatsApp Number  </label>
                                            <input name="WmobileNo" type="text" id="WmobileNo" placeholder="WhatsApp Number...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label for="photo">Photo  </label>
                                            <input name="photo" type="file" id="photo" placeholder="Photo...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label for="address">Home Address  </label>
                                            <textarea name="address" type="text" class="form-control" id="address" placeholder="Your Address..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="city">City  </label>
                                            <input name="city" type="text" id="city" placeholder="City...">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="state">State  </label>
                                            <input name="state" type="text" id="state" placeholder="State...">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label for="o_address">Office Address(optional)  </label>
                                            <textarea name="o_address" type="text" class="form-control" id="o_address" placeholder="Your Address..." ></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="o_city">City  </label>
                                            <input name="o_city" type="text" id="o_city" placeholder="City..." >
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="o_state">State  </label>
                                            <input name="o_state" type="text" id="o_state" placeholder="State...">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit"  class="button" name="submit">Register Now</button>
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

    
<?php
include 'config.php';


if (isset($_POST['submit'])) {

	/////////////////Phot Upload Code

	$target_dir = "uploads/"; // Specify the directory where the file will be uploaded
	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
	$uploadOk = 1;
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


	$User_id = $_POST['Userid'];
	$name = $_POST['Name'];
	$Degree_Com = $_POST['degree_com'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $email = $_POST['Email']; 
    $mobile= $_POST['Mobile_no'];
    $Wmobile_no=$_POST['WmobileNo'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $Off_address=$_POST['o_address'];
	$O_city = $_POST['o_city'];
    $O_state=$_POST['o_state']; 
	$password = md5($_POST['password']);
    $pswd=$_POST['password'];

	$sql = "INSERT INTO `register`(`User_id`, `Name`, `Password`, `psw`,`Degree_completed`,`month`, `year`,`Email`, `Mobile_no`, `Whatsapp_no`, `Photo`, `Address`, `City`, `Sate`, `Office_Address`, `O_City`, `O_state`) VALUES ('$User_id','$name','$password','$pswd','$Degree_Com','$month','$year','$email','$mobile','$Wmobile_no','$target_file','$address','$city','$state','$Off_address','$O_city','$O_state')";
	// echo  $sql;
	
  if ($conn->query($sql)) {
    $sql = "INSERT INTO `login`(`Email`, `Password`, `psw`) VALUES ('$email','$password','$pswd')";
		$conn->query($sql);
    
    echo "<script>
           window.location='edit_login.php?Email=$email'; 
        </script>";
} else {
    echo "<BR><BR> Error occured";
}
}	// echo "<script>alert('$Date_of_birth')</script>";


?>
    <?php include 'footer.php' ?>
</body>

</html>



