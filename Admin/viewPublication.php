
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
        xmlhttp.open("GET","deletePublication.php?id="+Id,true);
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
                                <li><a href="#">Upload</a></li>
                                <li class="active">View Publication</li>
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
                            <strong class="card-title">View Publication</strong>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Comment</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">File</th>
                                        <th scope="col">Delete</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    include '../config.php';
                                    $sql = "SELECT * FROM `publication` ";
                                    $result = $conn->query($sql);
                                    $sn = 1;
                                    while ($row = $result->fetch_assoc()) {
                                        $title=$row['title'];
                                        $comment= $row['comment'];
                                        $type   = $row['type'];
                                        $file = $row['file'];
                                       ?>
                                        <tr>
                                            <th scope="row"><?php echo $sn++; ?></th>                             
                                            <td> <?php echo $title; ?></td>
                                            <td> <?php echo $comment ?></td> 
                                            <td> <?php echo $type ?></td>
                                            <td><a href="<?php echo $file?>">view file</a></td> 
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


