<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f8f9fa;
    }

    /* Button Styling */
    .btn-primary {
        background: linear-gradient(45deg, #6a11cb, #2575fc);
        border: none;
        border-radius: 30px;
        padding: 12px 25px;
        font-size: 18px;
        color: #fff;
        font-weight: 500;
        transition: all 0.4s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .btn-primary:hover {
        background: linear-gradient(45deg, #2575fc, #6a11cb);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    /* Modal Header Styling */
    .modal-header {
        background: linear-gradient(45deg, #6a11cb, #2575fc);
        color: white;
        border-bottom: none;
    }

    .modal-header h5 {
        font-weight: 700;
    }

    /* Modal Content Styling */
    .modal-content {
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    .modal-body {
        padding: 30px;
        background-color: #fff;
        color: #333;
        font-size: 16px;
        line-height: 1.8;
    }

    .modal-body p {
        margin-bottom: 15px;
        font-size: 17px;
    }

    .modal-body strong {
        color: #6a11cb;
        font-weight: 500;
    }

    /* Close Button */
    .close {
        color: white;
        opacity: 1;
    }

    .close:hover {
        color: #ddd;
    }

    /* Modal Footer Button */
    .btn-secondary {
        border-radius: 30px;
        padding: 10px 20px;
        font-size: 16px;
    }
</style>


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
            xmlhttp.open("GET", "deleteEvent.php?id=" + Id, true);
            window.location.reload(true);
            xmlhttp.send();
        } else {
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
                            <li><a href="#">Event</a></li>
                            <li class="active">View Event</li>
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


            <!-- <div class="col-md-8">
                <h3 class="mb-3">Detail</h3>
                <div class="jumbotron">


                    <!-- <div class="card-body"> ->
                    <table class="table">
                        <thead>
                            <!-- <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    
                                </tr> ->
                        </thead>
                        <tbody>
                            <?php
                            include '../config.php';
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM `register` WHERE id='$id'";
                            $result = $conn->query($sql);
                            $sn = 1;
                            while ($row = $result->fetch_assoc()) {
                                $user_id = $row['User_id'];
                                $name = $row['Name'];
                                $password = md5($row['Password']);
                                $degree_com = $row['Degree_completed'];
                                $month = $row['month'];
                                $year = $row['year'];
                                $email = $row['Email'];
                                $mobile = $row['Mobile_no'];
                                $w_number = $row['Whatsapp_no'];
                                // $Photo =$row['Photo'];
                                $address = $row['Address'];
                                $city = $row['City'];
                                $state = $row['Sate'];
                                $o_address = $row['Office_Address'];
                                $o_city = $row['O_City'];
                                $o_state = $row['O_state'];
                                $date = $row['Date'];
                                $date = date('d-m-Y ', strtotime($date));

                            ?>

                                <tr>
                                    <td>info</td>
                                    <td><b>Id: </b><?php echo $id; ?> | <b>Date-of-Reg :</b> <?php echo $date; ?> | <b>User Id :</b> <?php echo $user_id; ?> | <b>Password :</b> <?php echo $password; ?></td>

                                </tr>
                                <tr>
                                    <td>Degree Completed</td>
                                    <td> <?php echo $degree_com; ?> <?php echo $month; ?> <?php echo $year; ?></td>

                                </tr>
                                <tr>
                                    <td>personal Info </td>
                                    <td><b>Name :</b> <?php echo $name; ?> | <b>Email :</b> <?php echo $email; ?> | <b>Mobile :</b> <?php echo $mobile; ?> | <b>Other Number :</b> <?php echo $w_number; ?> </td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><b>Home Address :</b> <?php echo $address; ?>, <?php echo $city; ?>, <?php echo $state; ?> | <b>Office Address : </b><?php echo $o_address; ?>, <?php echo $o_city; ?>, <?php echo $o_state; ?> </td>
                                </tr>
                            <?php  } ?>
                        </tbody>
                    </table>





                </div>

            </div> -->

            <div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="studentModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="studentModalLabel">Student</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Name:</strong> <span id="studentName"></span></p>
                            <p><strong>Roll Number:</strong> <span id="studentRoll"></span></p>
                            <p><strong>Course:</strong> <span id="studentCourse"></span></p>
                            <p><strong>Email:</strong> <span id="studentEmail"></span></p>
                            <p><strong>Contact:</strong> <span id="studentContact"></span></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
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

<!-- Bootstrap JS and Dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>



<script>
    function showStudentDetails(name, roll, course, email, contact) {
        document.getElementById('studentName').textContent = name;
        document.getElementById('studentRoll').textContent = roll;
        document.getElementById('studentCourse').textContent = course;
        document.getElementById('studentEmail').textContent = email;
        document.getElementById('studentContact').textContent = contact;

        // Show Modal
        $('#studentModal').modal('show');
    }
</script>

<?php include "Admin_footer.php" ?>