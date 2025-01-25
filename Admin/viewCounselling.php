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
        xmlhttp.open("GET","deleteCounselling.php?id="+Id,true);
	    window.location.reload(true);
        xmlhttp.send();
	   }
	    else {
	       return false;
		   }
	   }
  
 </script>

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
                                <li><a href="#">Counselling</a></li>
                                <li class="active">View Counselling</li>
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
                            <strong class="card-title">View Counselling Paragraph Entry</strong>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Question</th>
                                        <th scope="col">Para 1</th>
                                        <th scope="col">Para 2</th>
                                        <th scope="col">Para 3</th>
                                        <th scope="col">Para 4</th>
                                        <th scope="col">Para 5</th>
                                        <th scope="col">Para 6</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Delete</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    include '../config.php';
                                    $sql = "SELECT * FROM `counselling`";
                                    $result = $conn->query($sql);
                                    $sn = 1;
                                    while ($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        $date = $row['date'];
                                        $date = date('d-m-Y ', strtotime($date)); 
                                        $question=$row['question'];
                                        $para1=$row['para1'];
                                        $para2=$row['para2'];
                                        $para3=$row['para3'];
                                        $para4=$row['para4'];
                                        $para5=$row['para5'];
                                        $para6=$row['para6'];
                                       ?>
                                        <tr>
                                            <th scope="row"><?php echo $sn++; ?></th>                             
                                            <td> <?php echo $question; ?></td>
                                            <td> <?php echo $para1; ?></td>
                                            <td> <?php echo $para2; ?></td>
                                            <td> <?php echo $para3; ?></td>
                                            <td> <?php echo $para4; ?></td>
                                            <td> <?php echo $para5; ?></td>
                                            <td> <?php echo $para6; ?></td>
                                            <td> <?php echo $date; ?></td>  
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


