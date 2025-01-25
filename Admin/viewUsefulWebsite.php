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
        xmlhttp.open("GET","deleteUsefulWebsite.php?id="+Id,true);
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
                                <li><a href="#">Useful Website</a></li>
                                <li class="active">View Useful Website</li>
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
                            <strong class="card-title">View Useful Website</strong>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">URL</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Delete</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    include '../config.php';
                                    $sql = "SELECT * FROM `useful_website`";
                                    $result = $conn->query($sql);
                                    $sn = 1;
                                    while ($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        $url = $row['url'];
                                        $description=$row['description'];
                                       ?>
                                        <tr>
                                            <th scope="row"><?php echo $sn++; ?></th>                             
                                            <td> <?php echo $url; ?></td>
                                            <td> <?php echo $description; ?></td> 
                                            <td><a href="noticeDelete.php?id=<?php echo $row['id']; ?>"><img src="images/delete.png"></a></td>                                           
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


