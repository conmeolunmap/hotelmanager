<!doctype html>
<html lang="en">
  <head>
    <title>LTVAN condotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <?php
    include "database.php";

    ?>

    <style>
    *{
      font-family: 'Quicksand', sans-serif;
    }
    </style>



  </head>
  <body>
    
    <?php include "header.php"; ?>

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>News &amp; Events</h1>
              <p>Read our daily news and events of our luxury hotel.</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <?php
    $sql="select * from news order by news_id DESC limit 0,1";
    $query=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($query);
    $news_title=$row['news_title'];
    $news_content=$row['news_content'];
    $news_date=$row['news_date'];



    if(isset($_GET['newsid'])){
      $newsid=$_GET['newsid'];
      if(is_numeric($newsid)){
        $sql="select * from news where news_id='$newsid'";
        $query=mysqli_query($db,$sql);
        $row=mysqli_fetch_array($query);
        $news_title=$row['news_title'];
        $news_content=$row['news_content'];
        $news_date=$row['news_date'];
      }else{
        echo "<script>window.location='index.php';</script>";
      }
      
    }
    

    ?>
    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <h1 class="mb-4"><?=$news_title?></h1>
            <div class="post-meta">
                        
                        <span class="mr-2">
                          <?php echo date('F d, Y h:mA', strtotime($news_date)); ?>
                        </span> &bullet;
                        
                      </div>
            <div class="post-content-body">
            <?=$news_content?>
            
            </div>

            
            


            

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">


            <!-- <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Search...">
                </div>
              </form>
            </div> -->
            <!-- END sidebar-box -->
            
            <?php
              $news_on_1_page = 5;
              if(isset($_GET['page'])){
                  if(is_numeric($_GET['page'])){
                      $current_page = $_GET['page'];
                  }else{
                      echo "<script>window.location='index.php';</script>";
                  }
              }else{
                  $current_page = 1;
              }

              $result = mysqli_query($db,"SELECT COUNT(*) FROM news");
              $tmp=mysqli_fetch_array($result);
              $total = $tmp[0];
              $number_of_page = ceil($total/$news_on_1_page);

            ?>













            <!--////////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////////////////////
            //////////////////ON THE RIGHT SIDE/////////////////////////////////////
            ////////////////////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////////-->

            <div class="sidebar-box">
              <h3 class="heading">Current Posts</h3>
              <div class="post-entry-sidebar">
                <ul>
                <?php
                $sql="SELECT * FROM news ORDER BY news_id DESC limit ".(($current_page-1)*$news_on_1_page).",".$news_on_1_page;

                $query=mysqli_query($db,$sql);
                while($row=mysqli_fetch_array($query)){
                ?>
                  <li>

                  <?php
                  $params = $_GET;
                  unset($params["newsid"]);
                  $params["newsid"] = $row['news_id'];
                  $new_query_string = http_build_query($params);
                  $newsid = (empty($_SERVER['HTTPS'])?"http://":"https://") .
                    (empty($_SERVER['HTTP_HOST'])?$defaultHost:$_SERVER['HTTP_HOST']) .
                    $_SERVER['PHP_SELF'] . "?" . $new_query_string
                  ?>
                    <a href="<?=$newsid?>">
                      <img src="images/news/<?=$row['news_avatar']?>" alt="Image placeholder" class="mr-4">
                      <div class="text">
                        <h4><?=$row['news_title']?></h4>
                        <div class="post-meta">
                          <span class="mr-2"><?php echo date('F d, Y h:mA', strtotime($row['news_date'])); ?></span> &bullet;
                          
                        </div>
                      </div>
                    </a>
                  </li>

                  <?php
                  }
                  ?>

                  
                </ul>
              </div>

              <div style="margin:auto;text-align: center;">
              <ul class="pagination">
                  <?php
                    for($i=1;$i<=$number_of_page;$i++){
                        if($i==$current_page){
                          
                          echo "<li class='active'><a href='?page=$i'><b>$i</b></a></li>";
                          
                        }else{
                          echo "
                          <li>
                          <a href='?page=$i'>$i</a>
                          </li>
                          ";
                        }
                    }
                ?>
              </ul>
              </div>

            </div>
            <!-- END sidebar-box -->

            

            
          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>
   
 


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
  </body>
</html>