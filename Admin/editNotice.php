
<?php $id=['id']?>

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
                                    <li><a href="#">Notice</a></li>
                                    <li class="active">Edit Notice</li>
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
                        

                    <?php
                        include '../config.php';
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM `notice`  WHERE id= '$id'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $heading=$row['Heading'];
                        $file=$row['File'];
                        $Description=$row['Description'];
                        ?>
                    </div><!--/.col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Notice</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Edit Notice</h3>
                                        </div>
                                        <hr>
                                        <form action="#" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1" >Heading</label>
                                                <input id="cc-payment" value="<?php echo $heading; ?>" name="heading" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1" >Select file to Upload</label>
                                                <input id="cc-payment" name="files" type="file" class="form-control" aria-required="true" aria-invalid="false">
                                                <a target="_blank" href="<?php echo $file?>">View</a>
                                            
                                               
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Notice Description  </label>
                                                <textarea id="cc-name" name="description" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"> <?php echo  $Description; ?></textarea>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
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
                                               
                                               
                                                if($_FILES['files']['name']=="")
                                                {
                                                    $target_file=$file;
                                                }
                                                else
                                                {
                                                    $target_dir = "uploads/"; // Specify the directory where the file will be uploaded
                                                    $target_file = $target_dir . basename($_FILES["files"]["name"]);
                                                    $uploadOk = 1;
                                                    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                                                
                                                }

                                                // Check file size (limit to 5MB)
                                                // if ($_FILES["files"]["size"] > 500000000) {
                                                //    echo "Sorry, your file is too large.";
                                                //    $uploadOk = 0;
                                                // }
                                            
                                                // Allow certain file formats
                                                $allowedTypes = array("pdf", ".docx");
                                                if (!in_array($fileType, $allowedTypes)) {
                                                   echo "Sorry, only PDF,DOCX files are allowed.";
                                                   $uploadOk = 0;
                                                }
                                            
                                                // Check if $uploadOk is set to 0 by an error
                                                if ($uploadOk == 0) {
                                                   echo "Sorry, your file was not uploaded.";
                                                } else {
                                                   // If everything is ok, try to upload the file
                                                   if (move_uploaded_file($_FILES["files"]["tmp_name"], $target_file)) {
                                                      echo "The file " . htmlspecialchars(basename($_FILES["files"]["name"])) . " has been uploaded.";
                                                   } else {
                                                      echo "Sorry, there was an error uploading your file.";
                                                   }
                                                }
                                                // $Email = $_SESSION['Email'];
                                                $heading1 = $_POST['heading'];
                                                $Description1=$_POST['description'];
                                               
                                                $sql1 = "UPDATE `notice` SET `Heading`='$heading1',`File`='$target_file',`Description`='$Description1' WHERE id='$id'";
                                                //echo  $sql;

                                                if ($conn->query($sql1)) {
                                                   echo "<script> alert('Edit Notice successfully!'); window.location='viewNotice.php'; </script>";
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


