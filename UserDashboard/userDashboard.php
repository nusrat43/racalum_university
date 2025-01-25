<!doctype html>

<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>

    <!-- Header Section   -->
    <?php include "userHeader.php"?>
    
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                <div class="col-sm-6 col-lg-4">
                        <div class="card text-white bg-flat-color-1">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                    <h3 class="mb-0 fw-r">
                                        <!-- <span class="currency float-left mr-1"></span> -->
                                        <!-- <span class="count">100</span> -->
                                    </h3>
                                    <h3 class="text-light mt-1 m-0" ><a href="userDashboard.php" style="color:white;">Dashboard</a></h3>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                <i class="fa-solid fa-photo-film icon-lg"></i>
                                </div><!-- /.card-right -->

                            </div>

                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-white bg-flat-color-6">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                    <!-- <h3 class="mb-0 fw-r">
                                        <span class="count float-left">85</span>
                                        <span>.</span>
                                    </h3> -->
                                    <h3 class="text-light mt-1 m-0"><a href="../index..php" style="color:white;">Home</a></h3>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                    <i class="fa-solid fa-book icon-lg"></i>
                                </div><!-- /.card-right -->

                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-white bg-flat-color-3">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                    <!-- <h3 class="mb-0 fw-r">
                                        <span class="count">6569</span>
                                    </h3> -->
                                    <h3 class="text-light mt-1 m-0"><a href="myDetails.php" style="color:white;">Edit Profile</a></h3>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                <i class="fa-solid fa-users icon-lg"></i>
                                   
                                </div><!-- /.card-right -->

                            </div>

                        </div>
                    </div>
                    
                </div>
                <!-- /Widgets -->
                <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h1 style="text-align:center;">Welcome to User Dashboard </h1>
                            </div>
                            
                            <!-- <div class="row">
                               
                                
                            </div> /.row ->
                            <div class="card-body"></div>
                        </div>
                    </div><!-- /# column -->
                </div>
                <!--  /Traffic -->
                <div class="clearfix" style="height: 350px;"></div>
               
                        
                    </div>
                </div>
                
                
           
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <?php include "userFooter.php"?>
       
        <!-- /.site-footer -->
        
    </div>
    <!-- /#right-panel -->

   
</body>
</html>
