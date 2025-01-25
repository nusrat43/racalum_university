
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
        xmlhttp.open("GET","delete.php?id="+Id,true);
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
                                <li><a href="#">Gallery</a></li>
                                <li class="active">View Img</li>
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
                            <strong class="card-title">View Image</strong>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Caption</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    include '../config.php';
                                    $sql = "SELECT * FROM `images`";
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