<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php include 'header.php'?>

<section class="heading-page header-text" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h6>Get all details</h6>
        <h2>Online Teaching and Learning Tools</h2>
      </div>
    </div>
  </div>
</section>



<section class="usefulWeb" id="meetings">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row grid">
          <?php 
          include 'config.php';
          $sql = "SELECT * FROM `annual_pics`";
          $result = $conn->query($sql);
    
          while ($row = $result->fetch_assoc()) {
           
            $photo = $row['Photo'];
            $Caption = $row['Caption'];
           
          ?>

          <div class="col-lg-4  all soon">
            <div class="meeting-item">
              <div class="thumb">
                <a href="meeting-details.html">
                <img style="height: 300px; width:385px" src="Admin/<?php echo $photo; ?>" alt="">
                </a>
              </div>
              <div class="down-content">
                <a href="meeting-details.html">
                  <h4><?php echo $Caption; ?></h4>
                </a>
              </div>
            </div>
          </div>
          <?php } ?>
          
        </div>
        
      </div>
    </div>
  </div>
</section>



<?php include 'footer.php'?>










    
</body>
</html>