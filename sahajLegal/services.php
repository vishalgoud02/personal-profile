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
            <span class="dot_design"></span>OUR SERVICES
          </h2>
        </div>
      </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="services_cnt text-center">
            <a href="#" class="" title="Civil Law"></a>
            <h3>Civil Law</h3>
            <img src="images/item1.jpg" alt="item1" class="img-fluid" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="services_cnt text-center">
            <a href="#" class="" title="Civil Law"></a>
            <h3>Land Law</h3>
            <img src="images/item2.jpg" alt="item1" class="img-fluid" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="services_cnt text-center">
            <a href="#" class="" title="Civil Law"></a>
            <h3>Property Law</h3>
            <img src="images/item9.jpg" alt="item1" class="img-fluid" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="services_cnt text-center">
            <a href="#" class="" title="Civil Law"></a>
            <h3>Real Estates Project Consultant</h3>
            <img src="images/item4.jpg" alt="item1" class="img-fluid" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="services_cnt text-center">
            <a href="#" class="" title="Civil Law"></a>
            <h3>Title Investigation</h3>
            <img src="images/item6.jpg" alt="item1" class="img-fluid" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="services_cnt text-center">
            <a href="#" class="" title="Civil Law"></a>
            <h3>CBusiness Law</h3>
            <img src="images/item13.jpg" alt="item1" class="img-fluid" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="services_cnt text-center">
            <a href="#" class="" title="Civil Law"></a>
            <h3>Banking Law</h3>
            <img src="images/item14.jpg" alt="item1" class="img-fluid" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="services_cnt text-center">
            <a href="#" class="" title="Civil Law"></a>
            <h3>Consumer Law</h3>
            <img src="images/item15.jpg" alt="item1" class="img-fluid" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="services_cnt text-center">
            <a href="#" class="" title="Civil Law"></a>
            <h3>Family Law</h3>
            <img src="images/item16.jpg" alt="item1" class="img-fluid" />
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
