
<body>

    <?php include "Admin_header.php"?>
    <!-- Left Panel -->



    

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
                                    <li><a href="#">Gallery</a></li>
                                    <li class="active">Upload Video</li>
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
                                <strong class="card-title">Gallery</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Upload Video</h3>
                                        </div>
                                        <hr>
                                        <form action="#" method="POST"  enctype="multipart/form-data">
                                           
                                          
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Caption</label>
                                                <textarea id="cc-name" name="caption" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"></textarea>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Choose a Gallery Section</label>
                                                <select name="Gallerysection" id=""  class="form-control">
                                                    <option value="">select </option>
                                                    <option value="ARAC">ARAC Gallery</option>
                                                    <option value="Farewell">Farewell Memory</option>
                                                    <option value="2021">Glimpse of 2021</option>
                                                    <option value="2020">Glimpse of 2020</option>
                                                    <option value="2019">Glimpse of 2019</option>
                                                    <option value="2018">Glimpse of 2018</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Upload Video</label>
                                                <input id="cc-payment" name="video" type="file" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                                            </div>
                                           
                                           
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                                    <!-- <i class="fa fa-lock fa-lg"></i>&nbsp; -->
                                                    <span id="payment-button-amount">Submit</span>
                                                  
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
      
    <div class="clearfix">
    
    </div>

    <?php
include '../config.php';

if (isset($_POST['submit'])) {
    // Video Upload Code
    $target_dir = "uploads/videos/"; // Specify the directory for video uploads
    $target_file = $target_dir . basename($_FILES["video"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check file size (limit to 50MB)
    if ($_FILES["video"]["size"] > 200000000) { // 200 MB in bytes
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    $allowedTypes = array("mp4", "avi", "mov", "wmv");
    if (!in_array($fileType, $allowedTypes)) {
        echo "Sorry, only MP4, AVI, MOV, & WMV files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Try to upload the file
        if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["video"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $caption = $_POST['caption'];
    $Gallerysection=$_POST['Gallerysection'];

    // Insert into database
    $sql = "INSERT INTO `videos`(`Video`, `Caption`,`Gallerysection`) VALUES ('$target_file','$caption','$Gallerysection')";
    
    if ($conn->query($sql)) {
        echo "<script>alert('Upload Video Successfully'); window.location='video.php'; </script>";
    } else { 
        echo "<br><br> Error occurred";
    }
}
?>


    <?php include "Admin_footer.php"?>




</body>
</html>
