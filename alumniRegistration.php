<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .box {
      display: flex;
      margin-top: 50px;
      margin-left: 200px;
    }

    .b {
      width: 400px;
      height: 250px;
      /* border: 1px solid black; */
      margin: 20px;
      border-radius: 15px;
      text-align: center;
      padding: 50px;
      background-color: white;
      /* background-image:url(assets/images/service-item-bg.jpg); */
      box-shadow: 4px 4px 14px grey;
    }
   .b a{
    
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
          <h2>Alumni Register</h2>
        </div>
      </div>
    </div>
  </section>


    <section class="usefulWeb">
    
      <div class="box">
        <div class="b">
          <p>New Registration</p>
          <a href="register.php">Click here to register</a>
        </div>
        <div class="b">
          <p>Edit Existing Registration</p>
          <a href="edit_login.php">Click here</a>
        </div>
        <div class="b">
          <p>Search</p>
          <a href="search.php">Click here to Search</a>
        </div>
      </div>
      <div class="box">
        <div class="b">
          <p>How To Register</p>
          <a href="assets/images/Howtoregister.pdf">click here...</a>
        </div>
        <div class="b">
          <p>How to Change Password </p>
          <a href="assets/images/HowtochangePassword.pdf">Click here</a>
        </div>
        <div class="b">
          <p>How to Modify Information Or Changing/ Adding Photograph</p>
          <a href="assets/images/HowtoChangePhotograph.pdf">Click here</a>
        </div>
      </div>
      </section>


    <!-- <section class="apply-now services1" id="apply">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="div_reg">

              <div class="item">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="">
                </div>
                <div class="down-content">
                  <h4>Best Education</h4>
                  <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                </div>
              </div>

              <div class="item">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
                <div class="down-content">
                  <h4>Best Teachers</h4>
                  <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                </div>
              </div>

              <div class="item">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
                <div class="down-content">
                  <h4>Best Students</h4>
                  <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                </div>
              </div>
            </div>
            <div class="div_reg">

              <div class="item">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
                <div class="down-content">
                  <h4>Online Meeting</h4>
                  <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                </div>
              </div>

              <div class="item">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
                <div class="down-content">
                  <h4>Best Networking</h4>
                  <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                </div>
              </div>
              <div class="item">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
                <div class="down-content">
                  <h4>Best Networking</h4>
                  <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section> -->

    <?php include 'footer.php' ?>
 





</body>

</html>