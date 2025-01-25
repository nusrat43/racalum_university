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
        xmlhttp.open("GET","deleteNotice.php?id="+Id,true);
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
                                <li><a href="#">Notice</a></li>
                                <li class="active">View Notice</li>
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
                            <strong class="card-title">Notice</strong>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                       
                                        <th scope="col">Heading</th>
                                        <th scope="col">Notice Description  </th>
                                        <th scope="col">File</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    include '../config.php';
                                    $sql = "SELECT * FROM `notice`";
                                    $result = $conn->query($sql);
                                    $sn = 1;
                                    while ($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        $date = $row['date'];
                                        $date = date('d/m/Y ', strtotime($date)); 
                                        $heading=$row['Heading'];
                                        $file = $row['File'];
                                        $description = $row['Description']; ?>
                                        <tr>
                                            <th scope="row"><?php echo $sn++; ?></th>
                                            
                                            <td> <?php echo $heading; ?></td>
                                            <td> <?php echo $description; ?></td>

                                            <td> <a href="<?php echo $file?>" style="color: green; font-size: 30px;"><i class="fa-solid fa-download"></i></a></td>
                                            <td> <?php echo $date; ?></td>
                                            <td><a href="editNotice.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-pen-to-square" style="font-size: 30px; margin-top:10px"></i></a></td>
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