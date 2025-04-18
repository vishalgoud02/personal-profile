<!DOCTYPE html>
<html>

  <?php include 'head.php';?>

<body class="sub_page">
  
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
      <?php include 'menu.php';?>
    <!-- end header section -->
  </div>
  
  <!-- contact section -->
  <section class="contact_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 ">
          <div class="form_container mb_mobile_45">
            <div class="heading_container heading_center ">
              <h2 class="">
                <span class="dot_design"></span> Get In Touch
              </h2>
            </div>
            <form action="#" class="contact_form">
              <input type="text" name="your_name" class="form-control" id="inputName" placeholder="Your Name">
              <input type="text" name="phone_number" class="form-control" id="inputNumber" placeholder="Mobile Number">
              <input type="email" name="email_address" class="form-control" id="inputMail" placeholder="Email">
              <input type="text" name="your_message" class="form-control" id="inputMessage" placeholder="Message">
              <div class="btn-box btn-center">
                <button type="submit" class="submit_btn">
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact section -->

  <!-- footer section -->
  <?php include 'footer.php';?>
  <!-- footer section -->
</body>

</html>