
<html lang="en">
  <head>
    <title>T-VAN Booking</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">

    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/logo.jpg"/>

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>


  <style>
    .star{
      color: #ff5454;
    }

  </style>


  <body>


    <?php 
    include "database.php"; 
    if(isset($_GET['lang']) && $_GET['lang']=='vie'){
      include "language/vi.php";
    }else{
      include "language/eng.php";
    }
    
    include "header.php";
    ?>
    <!-- END header -->






    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1><?=$tvan['reservation']?></h1>
              <p><?=$tvan['slogan']?></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section" style="width:100%; margin: auto;">
      <div class="container">
        <div class="row">
          <div class="col-md-6" >
            <h2 class="mb-5"><?=$tvan['reservationform']?></h2>





                <form action="process/book_process.php" method="post">
                  <div class="row">
                      <div class="col-sm-6 form-group">


                      

                          <label for=""><?=$tvan['arrivaldate']?><span class="star"> *</span></label>
                          <div style="position: relative;">
                            <!-- <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span> -->
                            <input type='date' class="form-control" name="arrival_date" required="" />
                          </div>
                      </div>

                      <div class="col-sm-6 form-group">

                          <label for=""><?=$tvan['departuredate']?><span class="star"> *</span></label>
                          <div style="position: relative;">
                            <!-- <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span> -->
                            <input type='date' class="form-control" name="departure_date"  />
                          </div>
                      </div>


                      <script>
                      var today = new Date();
                      // document.getElementById("arrival_date").innerHTML = "dkjf";
                      $('#arrival_date')=today;

                      
                      </script>

                  </div>

                  <?php
                  $room1="";
                  $room2="";
                  $room3="";
                  if(isset($_GET['roomtype'])){
                    $type=$_GET['roomtype'];
                    switch($type){
                      case 1: $room1="checked"; break;
                      case 2: $room2="checked"; break;
                      case 3: $room3="checked"; break;
                    }
                  }

                  ?>


                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="room">Studio <span class="star"> *</span></label><br>
                      
                      <div class="radio">
                        <label><input checked type="radio" value="R1" name="book_room" <?=$room1?>> <?=$tvan['room1']?></label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" value="R2" name="book_room" <?=$room2?>> <?=$tvan['room2']?></label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" value="R3" name="book_room" <?=$room3?>> <?=$tvan['room3']?></label>
                      </div>

                    </div>

                    <div class="col-md-6 form-group">
                      <label for="room"><?=$tvan['book_adults']?></label>
                      <input min="1" type="number" value="1" name="book_adults" class="form-control" required>

                      <label for="room"><?=$tvan['book_children']?></label>
                      <input min="0" type="number" value="0" name="book_children"  class="form-control" required>
                    </div>

                  </div>




                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name"><?=$tvan['customer_name']?> <span class="star"> *</span></label>
                      <input type="text" name="book_name" class="form-control " required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="phone"><?=$tvan['customer_phone']?> <span class="star"> *</span></label>
                      <input type="phone" name="book_phone" class="form-control " required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="phone">Email</label>
                      <input type="email" name="book_email"  class="form-control ">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name"><?=$tvan['book_address']?> </label>
                      <input type="text" name="book_address"  class="form-control " >
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message"><?=$tvan['book_note']?></label>
                      <textarea name="book_note" id="message" class="form-control " cols="30" rows="4"></textarea>
                    </div>
                  </div>

                  <input type="hidden" name="noti_ok" value="<?=$tvan['notification_success']?>">
                  <input type="hidden" name="noti_failed" value="<?=$tvan['notification_failed']?>">

                  <div class="row">
                    <div class="col-md-6 form-group"> 
                      <input type="submit" value="<?=$tvan['reservenow']?>" name="btn_book" class="btn btn-primary">
                    </div>
                
                  </div>


                </form>









          </div>
          <div class="col-md-6" >
          <img style="width:100%; border-radius:20px;" src="images/hotel/8.jpg" />
          </div>
              
        </div>
      </div>
    </section>
    <!-- END section -->





   <!--  <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/img_5.jpg);">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-9 text-center element-animate">
            <h2>Relax and Enjoy your Holiday</h2>
            
            <div class="btn-play-wrap"><a href="https://www.youtube.com/watch?v=8BAdhoeabUM" class="btn-play popup-youtube "><span class="ion-ios-play"></span></a></div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- END section -->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

    <script>

      $('#arrival_date, #departure_date').datepicker({});

    </script>



    <script src="js/main.js"></script>
  </body>
</html>
