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
            <span class="dot_design"></span>Vision & Mission
          </h2>
        </div>
        <div class="row align-items-center">
          <div class="col-md-6 text-center">            
            <img src="images/vision.jpg" alt="vision" class="img-fluid" />
          </div>
          <div class="col-md-6">
            <h2>Vision</h2>
            <p>At Sahaj Legal, we aim to provide the most in depth and research-based services to our clients. Simplifying our customer’s legal matter is our prime motto. We aim to set a benchmark in our Profession and raise standards of legal advisory and services. We, at Sahaj Legal Law Firm, also envision increased legal awareness of the common man, specially at the grass root level of the society. People in rural areas are usually not aware about law and the proceedings for getting justice. We wish to make people aware about their rights and how the legal system of our country works. Our belief is to work hard and make legal services accessible to every level of our society. When you having correct information about law, only then you can use it to your benefit. Hence, we try to make people aware about Indian law and we have seen people changing their lives when they acquire proper understanding of law.</p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-6">
            <h2>Mission</h2>
            <p>Sahaj Legal Law Firm, has always been known for its wide variety of services ranging from local matters of land and revenue and private client issues to international settlements of corporates. Our vibrant and skilled team has been providing ethical legal representation to our clients and will continue to provide this service for years to come. By incorporation of a time bound and research- based approach we intend to give the most reliable services. We have been instrumental in solving legal issues with our in-depth study of cases. Our routine discussions with our clients give them a better insight into case proceedings, thereby assuring them of timely justify of their case. Young talent at Sahaj legal Law Firm is passionate about their work and has multilingual capabilities and exposure to a variety of cases which makes us pioneer in handling complex cases of Land and Revenue matters and Civil cases. Sahaj Legal Law Firm has maintained its deep research strategy and has continuously evolved for latest client needs be it corporates and individuals at Local and International level. We shall work hard to maintain our goodwill and be the best in our Profession.</p>
          </div>
          <div class="col-md-6 text-center">
            <img src="images/mission.jpg" alt="mission" class="img-fluid" />
          </div>
        </div>
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
