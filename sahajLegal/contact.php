<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sahaj Legal - Law Firm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- slider section -->
    <?php include 'head.php';?>
  </head>
  <body>
    <div class="hero_area">
      <!-- <div class="hero_bg_box">
        <img src="images/hero-bg.jpg" alt="">
      </div> -->
      <!-- header section strats -->
        <?php include 'menu.php';?>
      <!-- end header section -->      
    </div>

    <!-- vision section -->
    <section class="gutter">
      <div class="container">
        <div class="heading_container heading_center">
          <h2 class="">
            <span class="dot_design"></span>Media Coverage
          </h2>
        </div>
      </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row contact-wrap">
            <div class="col-sm-10">
              <div class="center">
                <h2>Drop Your Message</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <!-- <div id="sendmessage" class="alert alert-success">Your message has been sent. Thank you!</div> -->
              <div id="errormessage"></div>
              <form action="contact_form.php" method="post" class="php-email-form">
              <div class="form-row">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>

             <!--  <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LdxpMQkAAAAAGx7mrDO2myi1Yit5eozVaSKtk3x"></div> -->
              <div class="g-recaptcha" data-sitekey="6LdxpMQkAAAAAGx7mrDO2myi1Yit5eozVaSKtk3x"></div>
              <!-- <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message alert alert-danger"></div>
                <div class="sent-message alert alert-success">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit" class="btn btn-secondary">Send Message</button></div>
            </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59519.83549472735!2d72.76471643567606!3d21.192567392800363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04dd46a414501%3A0x53c388cdf2003159!2sAmar%20V.%20Patel%20-%20Advocate!5e0!3m2!1sen!2sin!4v1609144081904!5m2!1sen!2sin" style="border:0;width: 100%; height: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
      <!--/.row-->
    </div>
    </section>
    <!-- vision section ends -->

    <!-- footer section -->
    <?php include 'footer.php';?>
    <!-- end footer section -->
    <script>
      // $(document).ready(function(){
      //   $("#disclaimer_modal").modal('show');
      // });
    </script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->
    <script >
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en',  includedLanguages: 'en,gu,hi' ,layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
      }
    </script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".myClient", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        // pagination: {
        //   el: ".swiper-pagination",
        //   clickable: true,
        // },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
  </body>
</html>
