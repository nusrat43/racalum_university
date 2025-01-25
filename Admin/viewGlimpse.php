<style>
.form1{
    align-self: center;

}
</style>
<script>
function deleteCart(Id)
  {
       
	 if(confirm('Are you sure to Delete this record ?'))
	 {
        if (window.XMLHttpRequest) {
                   xmlhttp = new XMLHttpRequest();
        } else {
                   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

            }
        };
        xmlhttp.open("GET","deleteGlimpse.php?id="+Id,true);
	    window.location.reload(true);
        xmlhttp.send();
	   }
	    else {
	       return false;
		   }
	   }
  
 </script>
<body>

    <?php include "Admin_header.php" ?>
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
                                <li><a href="#">Glimpse</a></li>
                                <li class="active">View Glimpse of Alumni Meet</li>
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


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Glimpse </strong>
                        </div>
                           <div class="form1 col-lg-6" >
                        <form action="#" method="POST" enctype="multipart/form-data"  >
                            <div class="form-group">
                                <label  for="cc-payment" class="control-label mb-1" ><strong>Select Year</strong>  </label>
                                <select name="year" id="" class="form-control">
                                    <option value="">Select Year</option>
                                    <option value="2018">Glimpse of 2018 Pics</option>
                                    <option value="2019">Glimpse of 2019 Pics</option>
                                    <option value="2020">Glimpse of 2020 Pics</option>
                                    <option value="2021">Glimpse of 2021 Pics</option>
                                </select>
                            </div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                                    <!-- <i class="fa fa-lock fa-lg"></i>&nbsp; -->
                                <span id="payment-button-amount">Search</span>
                            </button>
  
                        </form>
                        </div>
                        <?php
                        if (isset($_POST['submit'])) {
                            $year=$_POST['year'];


                        }
                        ?>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Caption</th>  
                                        <th scope="col">Edit</th>  
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    include '../config.php';
                                  // Check if the year is set
                                    if (isset($year) && !empty($year)) {
                                        // Fetch data filtered by year
                                        $sql = "SELECT * FROM `glimpse_pics` WHERE year='$year'";
                                    } else {
                                        // Fetch all data if year is not set
                                        $sql = "SELECT * FROM `glimpse_pics`";
                                    }
                                    $result = $conn->query($sql);
                                    $sn = 1;
                                    while ($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        $photo = $row['Photo'];
                                        $caption = $row['Caption']; ?>
                                        <tr>
                                            <th scope="row"><?php echo $sn++; ?></th>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img style="height:120px; width:120px;"  src="<?php echo $photo; ?>" alt=""></a>
                                                </div>
                                            </td>
                                            <td> <?php echo $caption; ?></td>
                                            <td><a href="editGlimpse.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-pen-to-square" style="font-size: 30px; margin-top:20px"></i></a></td>
                                            <td><button onclick="deleteCart('<?php echo $id;?>')" class="btn"><img src="images/delete.png" ></button></td>
                                        </tr>
                                    <?php  } ?>


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <div class="col-lg-2">


                </div><!--/.col-->


            </div>
        </div>


    </div><!-- .animated -->

    <div class="clearfix">

    </div>






    <?php include "Admin_footer.php" ?>




</body>

</html>