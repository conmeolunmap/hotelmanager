
<html lang="en">
  <head>
    <title>T-VAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

    <!--favicon-->
    <!-- <link rel="shortcut icon" type="image/png" href="images/logo.jpg"/> -->







    <?php 
    include "database.php"; 
    if(isset($_GET['lang']) && $_GET['lang']=='vie'){
      include "language/vi.php";
    }else{
      include "language/eng.php";
    }
    ?>



  


  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

    <style>
    *{
      font-family: 'Quicksand', sans-serif;

    }
    </style>
  </head>
  <body>
    
    <?php include "header.php"; ?>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/hotel/2.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1><?=$tvan['welcome']?></h1>
              <p><?=$tvan['address']?></p>
              <p><a href="booknow.php" class="btn btn-primary"><?=$tvan['booknow']?></a></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <div class="heading-wrap text-center element-animate">
              <!-- <h4 class="sub-heading">Stay with our luxury rooms</h4> -->
              <h2 class="heading"><?=$tvan['introduce_header']?></h2>
              <p class="mb-5"><?=$tvan['introduce_content']?></p>
              <!-- <p><a href="#" class="btn btn-primary btn-sm">More About Us</a></p> -->
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-7">
            <img src="images/hotel/3.jpg" style="width:90%; border-radius: 20px;" alt="Image placeholder" class="img-md-fluid img-responsive img-rounded">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    


    <?php include "room.php"; ?>
   





    
    <!-- <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/img_5.jpg);">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-9 text-center element-animate">
            <h2>Relax and Enjoy your Holiday</h2>
            <p class="lead mb-5"></p>
            
          </div>
        </div>
      </div>
    </section> -->
    <!-- END section -->
    



    <?php include "news_on_index.php"; ?>
   


  <!--   
    <style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>

    <div id="map"></div>

    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        var uluru = {lat: 10.376029, lng: 104.961083};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
        map.setZoom(15);
      }
    </script> -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.6698679998885!2d105.78482761417764!3d10.044077175031141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a062a8c0535a6d%3A0x7f584356d9c81a1c!2zNzIgTMawxqFuZyDEkOG7i25oIEPhu6dhLCBDw6FpIEto4bq_LCBOaW5oIEtp4buBdSwgQ-G6p24gVGjGoSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1530776793539" width="600" height="450" frameborder="0" style="border:0;width:100%;" allowfullscreen></iframe>
      



    <?php include "footer.php"; ?>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>

    


         <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWutcRCQ9IdSTeVRA0pyRY9VwvmiOf_O0&callback=initMap"
  type="text/javascript"></script>


  </body>
</html>