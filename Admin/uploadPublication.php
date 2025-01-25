
<body>

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
                                    <li><a href="#">Publication</a></li>
                                    <li class="active">Upload Publication</li>
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
                            <div class="card-header">
                                <strong class="card-title">Publication</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Upload Publication</h3>
                                        </div>
                                        <hr>
                                        <form action="#" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            
                                        <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Title</label>
                                                <textarea id="cc-name" name="title" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"></textarea>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                           
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Comment</label>
                                                <textarea id="cc-name" name="comment" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"></textarea>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1" >Type</label>
                                               <select name="type" id="" class="form-control">
                                                    <option value="">Select Type </option>
                                                    <option value="A">ICAR Competitive Examinations</option>
                                                    <option value="B">Agri Business Management</option>
                                                    <option value="C">Academics/Research</option>
                                                    <option value="D">Banking Services</option>
                                                    <option value="E">E-Books/Research Reviews</option>
                                                    <option value="F">ARAC Documents</option>  
                                               </select>
                                               
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1" >Select file to Upload</label>
                                                <input id="cc-payment" name="files" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                           
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                                    <!-- <i class="fa fa-lock fa-lg"></i>&nbsp; -->
                                                    <span id="payment-button-amount">Upload</span>
                                                  
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

    $target_dir = "uploads/"; // Specify the directory where the file will be uploaded
    $target_file = $target_dir . basename($_FILES["files"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
       echo "Sorry, file already exists.";
       $uploadOk = 0;
    }

    // Check file size (limit to 5MB)
    if ($_FILES["files"]["size"] > 500000000) {
       echo "Sorry, your file is too large.";
       $uploadOk = 0;
    }

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

    $title=$_POST['title'];
    $comment= $_POST['comment'];
	$type   = $_POST['type'];

	$sql = "INSERT INTO `publication`(`title`, `comment`, `type`, `file`) VALUES ('$title','$comment','$type',' $target_file')";
	// echo  $sql;
	
  if ($conn->query($sql)) {
    
    echo "<script>alert('Uploaded Publication');window.location='viewPublication.php?'; </script>";
} else {
    echo "<BR><BR> Error occured";
}
}	// echo "<script>alert('$Date_of_birth')</script>";


?>

    <?php include "Admin_footer.php"?>


</body>
</html>
