
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
                                    <li><a href="#">Event</a></li>
                                    <li class="active">Add Event</li>
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
                                <strong class="card-title">Event</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Add Event</h3>
                                        </div>
                                        <hr>
                                        <form action="#" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            
                                           
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Event Entry</label>
                                                <textarea id="cc-name" name="event" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"></textarea>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
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

	
    $event = $_POST['event'];

	$sql = "INSERT INTO `event`(`eventDetail`) VALUES ('$event')";
	// echo  $sql;
	
  if ($conn->query($sql)) {
    
    echo "<script>
           window.location='viewEvent.php?'; 
        </script>";
} else {
    echo "<BR><BR> Error occured";
}
}	// echo "<script>alert('$Date_of_birth')</script>";


?>

    <?php include "Admin_footer.php"?>


</body>
</html>
