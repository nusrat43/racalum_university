<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .our-courses h2 {
      color: white;
    }

    .our-courses p {
      color: white;
      font-size: 20px;
      /* line-height: 3; */
    }

    th {
      color: white;
    }
    #counselling p {
      text-align: justify;
      font-size: 16px;
    }
  </style>

</head>

<body>

  <?php include 'header.php' ?>

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Get all details</h6>
          <h2>Counselling</h2>
        </div>
      </div>
    </div>
  </section>



  <section class="counselling" id="courses">


    <div class="container">
      <div class="coun-container">

      
      <h2> <a href="#counselling" style="color: #209922;">What is counselling ?</a></h2>
      <h2 style="margin-bottom:100px;"> <a href=" " style="color: #209922;">How to Contact ?</a></h2>
      <?php
      include 'config.php';
      $sql = "SELECT * FROM `counselling`";
      $result = $conn->query($sql);

      while ($row = $result->fetch_assoc()) {
        $question = $row['question'];
        $para1 = $row['para1'];
        $para2 = $row['para2'];
        $para3 = $row['para3'];
        $para4 = $row['para4'];
        $para5 = $row['para5'];
        $para6 = $row['para6'];

      ?>
        <section id="counselling">
          <h2><?php echo $question; ?></h2><br>

          <p><?php echo $para1; ?></p><br>
          <p><?php echo $para2; ?></p><br>
          <p><?php echo $para3; ?></p><br>
          <p><?php echo $para4; ?></p><br>
          <p><?php echo $para5; ?></p><br>
          <p><?php echo $para6; ?></p><br>
        </section>
      <?php } ?>
      </div>
    </div>
  </section>

  <div class="container">



    <h4 style="margin-top: 50px; color: #209922">List of Counsellor for ICAR Competitive Exams (JRF, SRF, NET & ARS)</h4>
    <table>

      <tr>
        <th>Sl. No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Interest</th>
      </tr>
      <?php

      include 'config.php';
      $sql = "SELECT * FROM `counsellingtable1` WHERE `counselorSelect` = 'ICAR'";
      $result = $conn->query($sql);
      $sn = 1;
      while ($row = $result->fetch_assoc()) {
        $name = $row['Name'];
        $email = $row['Email'];
        $subject   = $row['Subject'];

      ?>
        <tr>
          <td><?php echo $sn++; ?></td>
          <td><?php echo $name; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $subject ?></td>
        </tr>
      <?php } ?>
    </table>


  </div>
  <div class="container">



    <h4 style="color:#209922;">List of Counsellor for Banking, Entrepreneurship, Agricultural jobs and Higher Studies Abroad</h4>
    <table>

      <tr>
        <th>Sl. No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Interest</th>
      </tr>
      <?php

      include 'config.php';
      $sql = "SELECT * FROM `counsellingtable1` WHERE `counselorSelect` = 'Banking'";
      $result = $conn->query($sql);
      $sn = 1;
      while ($row = $result->fetch_assoc()) {
        $name = $row['Name'];
        $email = $row['Email'];
        $subject   = $row['Subject'];

      ?>
        <tr>
          <td><?php echo $sn++; ?></td>
          <td><?php echo $name; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $subject ?></td>
        </tr>
      <?php } ?>
    </table>


  </div>
  <?php include 'footer.php' ?>

</body>

</html>