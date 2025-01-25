<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php include 'header.php' ?>

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
      
        <div class="col-lg-12">
          <h6>Gallery</h6>
          <h2>Glimpse of Alumni Meet 2018
          </h2>
        </div>
      </div>
    </div>
  </section>

  <section class="counselling" id="courses">
        <div class="container">
            <div class="row">
              <div class="row">
              <?php
                include 'config.php';
                // $id = $_GET['id'];
                $sql = "SELECT * FROM `videos`";
                $result = $conn->query($sql);
                if ($row = $result->fetch_assoc()) {
                  $video = $row['Video'];
                  $Caption = $row['Caption'];
                ?>
                <div class="col-lg-6">
                <div class="meeting-item">
                      <div class="thumb">
                        <a href="meeting-details.html"><img src="Admin/<?php echo $video;?>" alt="" height="300px"></a>
                      </div>
                      <div class="down-content">
                        <a href="meeting-details.html">
                          <h4><?php echo $Caption; ?></h4>
                        </a>
                      </div>
                    </div>

                </div>
                <?php }?>
              </div>
                <!-- <div class="col-lg-4"> </div> -->

                <?php
                include 'config.php';
                // $id = $_GET['id'];
                $sql = "SELECT * FROM `glimpse_pics` WHERE year=2018";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                  $photo = $row['Photo'];
                  $Caption = $row['Caption'];
                ?>
                  <div class="col-lg-4 templatemo-item-col all imp">
                    <div class="meeting-item">
                      <div class="thumb">
                        <a href="meeting-details.html"><img src="Admin/<?php echo $photo;?>" alt="" height="300px"></a>
                      </div>
                      <div class="down-content">
                        <a href="meeting-details.html">
                          <h4><?php echo $Caption; ?></h4>
                        </a>
                      </div>
                    </div>
                  </div>
                <?php } ?>
                <!-- <div class="col-lg-2"></div> -->
            </div> 
            </div>
    </section>




<?php include 'footer.php' ?>

</body>

</html>