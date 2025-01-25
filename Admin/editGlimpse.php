


    <?php include "Admin_header.php"?>

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
                                    <li><a href="#">Glimpse</a></li>
                                    <li class="active">Edit Glimpse</li>
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

                    <div class="col-lg-6">
                        <div class="card">
                            <?php
                                include '../config.php';
                                $id = $_GET['id'];
                                $sql = "SELECT * FROM `glimpse_pics` WHERE id= '$id'";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                $year =$row['year'];
                                $caption=$row['Caption'];
                                $photo=$row['Photo'];
                            
                                ?>
                                <div class="card-header">
                                    <strong class="card-title">Glimpse</strong>
                                </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Edit Glimpse of Alumni Meet </h3>
                                        </div>
                                        <hr>
                                        <form action="#" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            
                                        <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1" >Select Year </label>
                                                <select name="year" id="" class="form-control" >
                                                    <option value=""> (<?php echo $year;?>)</option>
                                                    <option value="2018">Glimpse of 2018 Pics</option>
                                                    <option value="2019">Glimpse of 2019 Pics</option>
                                                    <option value="2020">Glimpse of 2020 Pics</option>
                                                    <option value="2021">Glimpse of 2021 Pics</option>
                                                </select>
                                            </div>
                                           
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Caption</label>
                                                <textarea id="cc-name" name="caption" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"><?php echo  $caption; ?></textarea>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1" >Upload Images</label>
                                                <input id="cc-payment" name="photo" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div class="form-group">
                                                <img src="<?php echo $photo ;?>" alt="" height="50px" width="50px">
                                            </div>
                                             
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                                    <!-- <i class="fa fa-lock fa-lg"></i>&nbsp; -->
                                                    <span id="payment-button-amount">Upload</span>
                                                  
                                                </button>
                                            </div>
                                        </form>
                                        <?php
                                            include '../config.php';
                                            if (isset($_POST['submit'])) {

                                                if($_FILES['photo']['name']=="")
                                                {
                                                    $target_file= $photo;
                                                }
                                                else{

                                              
                                                $target_dir = "uploads/"; // Specify the directory where the file will be uploaded
                                                $target_file = $target_dir . basename($_FILES["photo"]["name"]);
                                                $uploadOk = 1;
                                                $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                                                }
                                            
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
                                                $year =$_POST['year'];
                                                $caption=$_POST['caption'];
                                               
                                                $sql1 = "UPDATE `glimpse_pics` SET `Photo`='$target_file',`Caption`='$caption',`year`='$year' WHERE id='$id'";
                                                //echo  $sql;

                                                if ($conn->query($sql1)) {
                                                   echo "<script> alert('Edit Glimpse successfully!'); window.location='viewGlimpse.php'; </script>";
                                                } else {
                                                    echo "<BR><BR> Error occured";
                                                }
                                            }
                                        ?>
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
 

    <?php include "Admin_footer.php"?>

