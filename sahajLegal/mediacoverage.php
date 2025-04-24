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
        <div class="media_gallery grid-wrapper">
          <!-- tall | big | wide -->
          <a href="#"><img src="images/media/AdvAmarVPatel.jpeg" alt="AdvAmarVPatel" class="img-fluid" /></a>
          <a href="#"><img src="images/media/Advocate_adajan.jpeg" alt="Advocate_adajan" class="img-fluid" /></a>
          <a href="#" class="tall"><img src="images/media/m1.jpg" alt="m1" class="img-fluid" /></a>
          <a href="#" class="big"><img src="images/media/m2.jpg" alt="m2" class="img-fluid" /></a>
          <a href="#" class="tall"><img src="images/media/m4.jpg" alt="m4" class="img-fluid" /></a>
          <a href="#" class="tall"><img src="images/media/m5.jpg" alt="m5" class="img-fluid" /></a>
          <a href="#"><img src="images/media/m3.jpg" alt="m3" class="img-fluid" /></a>
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
