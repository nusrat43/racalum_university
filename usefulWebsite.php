<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
  <style>
    .down-content a {
      margin-top: 0 !important;
      margin-bottom: 10px;
      position: absolute;
      top: 170px;
      left: 150px;
    }
    .down-content p{
      font-weight: bold;
    }
    .down-content{
      height: 250px !important;
      border-radius: 20px;
    }
  </style>
</head>

<body>

  <?php include 'header.php' ?>

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- <h6>Get all details</h6> -->
          <h2>Useful Websites</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="usefulWeb" id="meetings">
    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <div class="row">

            <div class="col-lg-12">
              <div class="row grid">
                <?php
                include 'config.php';
                // $id = $_GET['id'];
                $sql = "SELECT * FROM `useful_website`";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                  $url = $row['url'];
                  $description = $row['description'];
                ?>
                  <div class="col-lg-4  all soon">
                    <div class="meeting-item">
                      <!-- <div class="thumb">
                        <a href="meeting-details.html"><img src="assets/images/useful2.png" alt=""></a>
                      </div> -->
                      <div class="down-content">
                        <p style="text-align: justify;"><?php echo $description ?></p> <br>
                        <!-- Visit Website button placed below the title -->
                        <a href="<?php echo $url; ?>" class="btn btn-success " target="_blank">Visit Website</a>
                      </div>
                    </div>
                  </div>
                <?php } ?>
                <!-- njdnfjsdbf -->
              </div>
            </div>

           
          </div>
        </div>

      </div>
    </div>
  </section>
  </div>
 
 
  </section>





  <?php include 'footer.php' ?>

</body>

</html>