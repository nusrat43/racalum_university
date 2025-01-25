<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .notices-wrapper {
      overflow: hidden;
      height: 300px;
      /* Adjust to control visible area */
      position: relative;
    }

    .notices {
      display: flex;
      flex-direction: column;
      animation: scrollNotices 25s linear infinite;
      /* Clone items for seamless looping */
    }

    .notice {
      background-color: #fff;
      padding: 15px;
      border-radius: 5px;
      margin-bottom: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .notice h2 {
      margin: 0;
      font-size: 18px;
      color: #ff7e00;
      line-height: 1.4;
    }

    .notice p {
      margin: 5px 0 0;
      font-size: 14px;
      color: #333;
      line-height: 1.2;
    }

    .notice a {
      line-height: 1.4;
    }

    /* Hover effect */
    .notice:hover {
      transform: translateY(-1px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);
    }

    /* Continuous scroll animation */
    @keyframes scrollNotices {
      0% {
        transform: translateY(0);
      }

      100% {
        transform: translateY(-100%);
      }
    }
  </style>
</head>
<body>
    
<?php include 'header.php'?>

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- <h6>Get all details</h6> -->
          <h2>Online Teaching and Learning Tools</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h1 style="color: white; text-align:center; padding-bottom:40px">Event</h1>
                <div class="notices-wrapper">
                  <div class="notices" id="notices">
                  <?php
                    include 'config.php';
                    $sql = "SELECT * FROM `event`";
                    $result = $conn->query($sql);
                    $sn = 1;
                    while ($row = $result->fetch_assoc()) {
                    $eventDetail=$row['eventDetail'];
                    $date = $row['date'];
                    $date = date('d-m-Y ', strtotime($date));   
                                                        
                  ?>
                    <div class="notice">
                      <h2><?php echo $eventDetail;?></h2>
                      <p style="color: black;">Updated On [ <?php echo $date; ?> ]</p>
                      <!-- <a href="assets/images/books/Yaadon_ke_Nakoos-news.pdf">View</a> -->
                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR BACHELOR DEGREE</h3>
                <p>You are not allowed to redistribute the template ZIP file on any other template website. Please contact us for more information.</p>
                <div class="main-button-yellow">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
              </div>
            </div> -->
        </div>
        <div class="col-lg-4">
        <div class="col-lg-12" >
          <img src="assets/images/img.webp" alt="" height="470px">
        </div>
        </div>

        <div class="col-lg-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
              <h1 style="color: white; text-align:center; padding-bottom:40px">Notice</h1>
              <div class="notices-wrapper">
                  <div class="notices" id="notices">
                  <?php

                    include 'config.php';
                    $sql = "SELECT * FROM `notice`";
                    $result = $conn->query($sql);
                    $sn = 1;
                    while ($row = $result->fetch_assoc()) {
                    $Heading=$row['Heading'];
                    $Description=$row['Description'];
                    $file=$row['File'];
                                                        
                  ?>
                    <div class="notice">
                      <h2><?php echo $Heading;?></h2>
                      <p style="color: black;"><?php echo $Description; ?></p>
                      <a href="<?php echo $file; ?>">View file</a>
                    </div>
                   
                    <?php } ?>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>



  <?php include 'footer.php'?>
</body>
</html>