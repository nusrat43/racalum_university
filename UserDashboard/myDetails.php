<?php
session_start();
?>
<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script>
        function deleteCart(Id) {

            if (confirm('Are you sure to Delete this record ?')) {
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {

                    }
                };
                xmlhttp.open("GET", "deleteAlumni.php?id=" + Id, true);
                window.location.reload(true);
                xmlhttp.send();
            } else {
                return false;
            }
        }
    </script>

    <style>
        .modal-header h3 {
            /* color: #03a9f3; */
            /* color: brown; */
        }

        .modal-header button {
            padding-bottom: 50px;
            /* color: brown; */
            font-size: 40px;
            opacity: 1;
            padding-bottom: 50px !important;
        }
        .modal {
            /* background:transparent; */
            background: rgba(0, 0, 0, 0.8);
        }

        .modal-content {
            border-radius: 15px !important;
            padding: 20px;
            width: 600px !important;
            height: 600px !important;
            margin-left: 600px;
            margin-top: 100px;



        }

        .modal-footer .close {
           
            color: white;
            opacity: 1;
        }
        .modal-footer button{
          /* color:  !important; */
            padding: 10px !important;
            border-radius: 5px;
            font-size: 20px !important;
            font-weight: normal;
            background-color: black !important;
        }
       
     
        .modal-body strong {
            /* color: #03a9f3; */
            color: black;
        }
    </style>


</head>

<body>

    <?php include "userHeader.php" ?>
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
                                <li><a href="#"></a>My Details </li>

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
                            <strong class="card-title">My Details</strong>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col"></th>
                                        <th scope="col">Edit</th>
                                        <!-- <th scope="col">Delete</th> -->
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                    <?php
                                  
                                    if (isset($_SESSION['Email'])) {
                                        
                                    } else {
                                        echo "<a href='login.php'>Log In</a>";
                                    }
                                    ?>
                                    <?php
                                     
                                    if (isset($_SESSION['Email'])) {
                                        include '../config.php';
                                        $Email = $_SESSION['Email'];
                                        $sql = "select * from `register` where Email= '$Email'";
                                        $result = $conn->query($sql);
                                        $row = $result->fetch_assoc();
                                        // $fliename = $row['Profile_Pic'];
                                
                                             $sn = 1;
                                            $i = 1;
                                   
                                        $id = $row['id'];
                                        $date = $row['Date'];
                                        $date = date('d-m-Y ', strtotime($date));
                                        $photo = $row['Photo'];
                                        $email = $row['Email'];
                                        $mobile = $row['Mobile_no'];
                                        $name = $row['Name'];
                                        $w_mobile = $row['Whatsapp_no'];
                                        $address = $row['Address'];
                                        $city = $row['City'];
                                        $state = $row['Sate'];
                                        $o_address = $row['Office_Address'];
                                        $o_city = $row['O_City'];
                                        $o_state = $row['O_state'];

                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $sn++; ?></th>

                                            <td><?php echo $name; ?> </td>
                                            <td> <?php echo $email; ?></td>
                                            <td> <?php echo $mobile; ?></td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img style="height:120px; width:120px;" src="<?php echo $photo; ?>" alt=""></a>
                                                </div>
                                            </td>
                                            <td>
                                                <button id="<?php echo  $i ?>" class="btn btn-secondary">View More</button>
                                            </td>
                                            <!-- <td><a href="popUp.php?id=<?php echo $id ?>">More</a></td> -->
                                            <td><a href="editDetails.php?id=<?php echo $id ?>"><i class="fa-solid fa-pen-to-square" style="font-size: 30px; margin-top:20px"></i></a></td>
                                            <!-- <td><button onclick="deleteCart('<?php echo $id; ?>')" class="btn"><img src="images/delete.png"></button></td> -->
                                        </tr>

                                        <!-- The Modal -->
                                        <div id="myModal<?php echo $i ?>" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <div class="modal-header" style="display: flex;">
                                                    <h3 class="modal-title" id="studentModalLabel">Meet - <?php echo $name?></h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-modal-id="myModal<?php echo $i ?>">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>Name - </strong> <?php echo $name; ?></span></p>
                                                    <p><strong>Email - </strong> <?php echo $email; ?></span></p>
                                                    <p><strong>Mobile - </strong> <?php echo $mobile; ?></span></p>
                                                    <p><strong>Other Mobile - </strong> <?php echo $w_mobile; ?></span></p>
                                                    <p><strong>Address - </strong> <?php echo $address; ?> <?php echo $city; ?>, <?php echo $state; ?></span></p>
                                                    <p><strong>Office Address - </strong> <?php echo $o_address; ?> <?php echo $o_city; ?> <?php echo $o_state; ?></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close" data-modal-id="myModal<?php echo $i ?>">Close</button>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            // JavaScript to manage dynamic modals
                                            document.addEventListener('DOMContentLoaded', function() {
                                                // Handle opening the modal
                                                document.querySelectorAll('button[id^="<?php echo $i ?>"]').forEach(function(btn) {
                                                    btn.addEventListener('click', function() {
                                                        const modalId = `myModal${btn.id}`;
                                                        const modal = document.getElementById(modalId);
                                                        if (modal) {
                                                            modal.style.display = 'block';
                                                        }
                                                    });
                                                });

                                                // Handle closing the modal
                                                document.querySelectorAll('.close').forEach(function(closeBtn) {
                                                    closeBtn.addEventListener('click', function() {
                                                        const modalId = closeBtn.getAttribute('data-modal-id');
                                                        const modal = document.getElementById(modalId);
                                                        if (modal) {
                                                            modal.style.display = 'none';
                                                        }
                                                    });
                                                });

                                                // Close modal when clicking outside of it
                                                window.addEventListener('click', function(event) {
                                                    document.querySelectorAll('.modal').forEach(function(modal) {
                                                        if (event.target == modal) {
                                                            modal.style.display = 'none';
                                                        }
                                                    });
                                                });
                                            });
                                        </script>


                                    <?php $i++;
                                    	} else {
                                            echo "<a href='register.php'>Register</a>";
                                        }?>


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


    <!-- Trigger/Open The Modal -->






    <?php include "userFooter.php" ?>


</body>

</html>