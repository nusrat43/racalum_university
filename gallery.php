<!DOCTYPE html>
<html lang="en">

<head>

  <title>Education - List of Meetings</title>
  <style>
    .table {
      display: flex;
      justify-content: space-around;


    }

    .t {
      width: 350px;
      height: 50px;
      border: 2px solid white;
      background-color: #a12c2f;
      border-radius: 5px;
      padding: 5px;
    }

    .t a {
      color: white;
    }

    a h4 {
      text-align: center;
    }

    video {
      background-color: black;
    }
  </style>

</head>

<body>

  <?php include 'header.php' ?>

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Here are our upcoming meetings</h6>
          <h2>Upcoming Meetings</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <?php
        include 'config.php';
        // $id = $_GET['id'];
        $sql = "SELECT * FROM `videos` WHERE `Gallerysection` = 'ARAC'";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
          $video = $row['Video'];
          $Caption = $row['Caption'];
        ?>
          <div class="col-lg-6  all soon">
            <div class="meeting-item">
              <div class="thumb">
                <a href="meeting-details.html"><video height="300" controls id="myVideo">
                    <source src="Admin/<?php echo $video; ?>" type="video/mp4">
                    Your browser does not support HTML5 video.
                  </video></a>
              </div>
              <div class="down-content" style="width: 636px;">
                <a href="meeting-details.html">
                  <h4><?php echo $Caption; ?></h4>
                </a>
                <!-- <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p> -->
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">

            <div class="col-lg-12">
              <div class="row grid">

                <?php
                include 'config.php';
                // $id = $_GET['id'];
                $sql = "SELECT * FROM `images`";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                  $photo = $row['Photo'];
                  $Caption = $row['Caption'];
                ?>
                  <div class="col-lg-4  all imp">
                    <div class="meeting-item" style="margin-left: 20px;">
                      <div class="thumb">
                        <a href="meeting-details.html"><img style="height: 300px; width:385px" src="Admin/<?php echo $photo; ?>" alt="" ></a>
                      </div>
                      <div class="down-content">
                        <a href="meeting-details.html">
                          <p><?php echo $Caption; ?></p>
                        </a>
                      </div>
                    </div>
                  </div>
                <?php } ?>


              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
          <br>
          Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
          <br>
          Distibuted By: <a href="https://themewagon.com" target="_blank" title="Build Better UI, Faster">ThemeWagon</a>
        </p>
    </div> -->
  </section>
  <?php include 'footer.php' ?>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/video.js"></script>
  <script src="assets/js/slick-slider.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
            scrollTop: reqSectionPos
          },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function() {
        var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
          siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
      e.preventDefault();
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
      checkSection();
    });
  </script>
</body>


</body>

</html>