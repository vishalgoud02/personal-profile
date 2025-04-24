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

    <!-- about section -->
    <section class="gutter">
      <div class="container">
        <div class="heading_container heading_center">
          <h2 class="">
            <span class="dot_design"></span>Who We Are
          </h2>
          <div class="detail_p_mt">
            <p>Established in 2009, Sahaj Legal Law Firm, founded by Adv Amar V. Patel, is known for advising and representing corporate and individuals for their legal needs. We are one of the most successful and result oriented law firms in Surat-Gujarat. Our team has a large pool of young advocates, who have good exposure of cases in various languages. Our success stories include Land-Property and Revenue cases of Real Estate Developers, RERA, Debt Recovery, Family disputes, Inheritance and Wills.</p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-6 text-center stick_top">
            <img src="images/amar_patel.jpg" alt="Amar Patel" class="img-fluid" />
          </div>
          <div class="col-md-6">
            <h1>Amar V. Patel (Advocate)</h1>
            <p>Advocate Amar V Patel is a renowned advocate of Surat and he is the face behind Sahaj Legal Law Firm. He has been consistently providing reliable and genuine legal services since 2009. Advocate Amar V. Patel believes in simplifying complex legal procedures. Advocate Amar V. Patel specializes in Civil and Land Revenue cases. In the last one decade he has served more than 1000 clients and has worked to the satisfaction of all of them. Advocate Amar V. Patel has been instrumental in spreading awareness about law among the rural people and also provide legal Consulting to our NRI clients who having query regarding their legal matters.</p>

            <p>Adv Amar V Patel having achievements in Social and Commercial Platforms like,</p>
            <ul>
              <li>Member of Gujarat District Bar Association</li>
              <li>Working President of Surat the District Bar Association (2023)</li>
              <li>Vice President of Surat the District Bar Association(2023)</li>
              <li>Joint secretary of the Surat District Bar Association (2019-2021)</li>
              <li>Member of Council-At the Surat District Bar Association(2018)</li>
              <li>Auditor of the Surat District Bar Association(2016)</li>
              <li>Managing Trustee-At Smt.L.N.B Daliya High School,Adajan gam.</li>
              <li>Vice President of Adajan Gam Kadwa Patidar Samaj.Adajan</li>
              <li>Vice President of Law Committee-At Shree Surat Olpad Choryasi Kadva Patidar Samaj</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- about section ends -->

    <section class="multiaddress gutter">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h5>Adajan Office</h5>
            <div><strong>Address:</strong> <span>205, 2nd floor, Regent Square, Adajan, above D-Mart, Surat, Gujarat 395009</span></div>
            <div>Phone: <a href="">098251 42401</a></div>
          </div>
          <div class="col-sm-6">
            <h5>Olpad office</h5>
            <div><strong>Address:</strong> <span>222-223, Dwarkadish Campus, Opposite Taluka Seva Sadan, Olpad, Surat - 394540</span></div>
            <div>Phone: <a href="">094298 71217</a></div>
          </div>
        </div>
      </div>
    </section>

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
