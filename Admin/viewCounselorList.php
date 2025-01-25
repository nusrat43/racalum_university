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
            xmlhttp.open("GET", "deleteCounselor.php?id=" + Id, true);
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
                            <li><a href="#">Counselor List</a></li>
                            <li class="active">view Counselor</li>
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
            <div class="col-lg-4"></div>

            <div class="col-lg-4">
            <form method="POST" action="">
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1"><strong>Select Type of Counselor</strong> </label>
                                <select name="counselor" id="counselor" class="form-control">
                                    <option value="">Select Counselor</option>
                                    <option value="ICAR">Counselors for ICAR</option>
                                    <option value="Banking">Counselors for Banking</option>
                                </select>
                            </div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                <span id="payment-button-amount">Search</span>
                            </button>
                        </form>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">List of Counselors</strong>
                    </div>

                    <div class="card-body">
                       

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../config.php';

                                // Default query for all records
                                $sql = "SELECT * FROM `counsellingtable1`";

                                // Handle POST request for filtering
                                if (isset($_POST['submit'])) {
                                    $counselor = $_POST['counselor'];
                                    if (!empty($counselor)) {
                                        // Add condition to query if a counselor is selected
                                        $sql = "SELECT * FROM `counsellingtable1` WHERE `counselorSelect` = '$counselor'";
                                    }
                                  
                                }

                                $result = $conn->query($sql);
                                $sn = 1;
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['id'];
                                    $name = $row['Name'];
                                    $email = $row['Email'];
                                    $subject = $row['Subject'];
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $sn++; ?></th>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $subject; ?></td>
                                        <td><button onclick="deleteCart('<?php echo $id; ?>')" class="btn"><img src="images/delete.png"></button></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
<div class="clearfix">

</div>

<?php include "Admin_footer.php" ?>