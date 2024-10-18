<html>

<head>
  <style>
    /* .C_detail {
      display: flex;
      justify-content: space-evenly;
      color: white;

    }

    .h .loc .ab h5 {
      color: white;
    }

    p {
      color: white;
    } */
    .card {
            background-color: rgba(255, 255, 255, 0.1); /* Semi-transparent card background */
            border: none;
            padding: 20px;
            margin: 10px 0;
            height: 180px;
            
        }
        h4 {
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
            text-align: center;
            /* padding-top: 30px; */
        }
        p {
            font-size: 0.9rem;
            color: white;
        }
  </style>
</head>

<body>


 

  <div ></div> <!-- Adjust height as needed -->

  <!-- <div class="footer-bottom">
        <p>© 2016 Ranchi Agriculture College Alumni. All Rights Reserved | Website Developed by <a href="https://ssspatna.com/" target="_blank">Software Services and Solutions Patna</a> & <a href="http://dmllc.us/" target="_blank">DMLLC USA</a></p>
        <p>© 2016 Vegetable Farm. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
    </div> -->
  </div>


  <section class="contact-us" id="contact">
  <div class="container py-5">
    <div class="row text-center">
        <!-- Features and Events -->
        <div class="col-md-4">
            <div class="card">
                <h4>Features and Events</h4>
                <p>Monday - Friday: 07:00 AM - 01:00 PM</p>
                <p>Saturday - Sunday: 08:00 AM - 03:00 PM</p>
            </div>
        </div>
        <!-- Location -->
        <div class="col-md-4">
            <div class="card">
                <h4>Location</h4>
                <p>Kańke, Ranchi - 834006, Jharkhand, India</p>
            </div>
        </div>
        <!-- About Us -->
        <div class="col-md-4">
            <div class="card">
                <h4>About Us</h4>
                <p>Ranchi Agriculture College is a premier institution of the Jharkhand region offering both undergraduate and postgraduate programs in multiple disciplines.</p>
            </div>
        </div>
    </div>
</div>
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
        <br>
        Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
        <br>
        Distibuted By: <a href="https://themewagon.com" target="_blank" title="Build Better UI, Faster">ThemeWagon</a>
      </p>
    </div>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
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

</html>