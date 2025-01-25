<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<section>

  <?php include 'header.php' ?>

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Publication</h6>
          <h2>ARAC Document</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="publi">


    <div class="container">
      <div class="inner-publi">

     



      <!-- <h4 style="margin-top: 50px; color: #209922"></h4> -->
      <table>

        <tr>
          <th>S. No</th>
          <th>Title</th>
          <th>Comment</th>
          <th>File</th>
        </tr>
        <?php

        include 'config.php';
        $sql = "SELECT * FROM `publication` WHERE `type` = 'F' order by id desc";
        $result = $conn->query($sql);
        $sn = 1;
        while ($row = $result->fetch_assoc()) {
          $title = $row['title'];
          $comment = $row['comment'];
          $file   = $row['file'];

        ?>
          <tr>
            <td><?php echo $sn++; ?></td>
            <td><?php echo $title; ?></td>
            <td><?php echo $comment; ?></td>
            <td> <a href="<?php echo $file; ?>" style="color: teal;">View File</a></td>
          </tr>
        <?php } ?>
      </table>
      </div>

    </div>
  </section>

  <?php include 'footer.php' ?>
  </body>

</html>