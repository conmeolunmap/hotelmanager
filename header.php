<?php 
    
    if(isset($_GET['lang']) && $_GET['lang']=='vie'){
      include "language/vi.php";
    }else{
      include "language/eng.php";
    }
    ?>

<header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <!-- <img class="img-rounded" style="width:50px;" src="images/logo.jpg"/> -->
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">

              <li class="nav-item">
                <a class="nav-link" href="index.php"><?=$tvan['home']?></a>
              </li>


              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="rooms.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rooms</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="rooms.html">Presidential Room</a>
                  <a class="dropdown-item" href="rooms.html">Luxury Room</a>
                  <a class="dropdown-item" href="rooms.html">Deluxe Room</a>
                </div>
              </li> -->


              <li class="nav-item">
                <a class="nav-link" href="news.php"><?=$tvan['news']?></a>
              </li>

              <!-- <li class="nav-item">
                <a class="nav-link " href="about.html"><?=$tvan['about']?></a>
              </li> -->

              <li class="nav-item">
                <a class="nav-link" href="#contact"><?=$tvan['contact']?></a>
              </li>

               <!-- <li class="nav-item cta">
                <a class="nav-link" href="booknow.php"><span><?=$tvan['booknow']?></span></a>
              </li>
 -->

              <?php
              // $current_URL = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

              // $vietnam = $current_URL."&lang=vie";
              // $english = $current_URL."&lang=eng";

            $params = $_GET;
			unset($params["lang"]);

			$params_eng["lang"] = "eng";
			$params_vie["lang"] = "vie";

			$new_query_string_eng = http_build_query($params_eng);
			$new_query_string_vie = http_build_query($params_vie);

			$query_eng = (empty($_SERVER['HTTPS'])?"http://":"https://") .
		    (empty($_SERVER['HTTP_HOST'])?$defaultHost:$_SERVER['HTTP_HOST']) .
		    $_SERVER['PHP_SELF'] . "?" . $new_query_string_eng;

		    $query_vie = (empty($_SERVER['HTTPS'])?"http://":"https://") .
		    (empty($_SERVER['HTTP_HOST'])?$defaultHost:$_SERVER['HTTP_HOST']) .
		    $_SERVER['PHP_SELF'] . "?" . $new_query_string_vie
              
              ?>

              <li class="nav-item">
                <a class="nav-link" href="<?=$query_vie?>">
                  <img src="images/vie.svg" width="30px"/>
                </a>
                
              </li>
              <li>
              <a class="nav-link" href="<?=$query_eng?>">
                  <img src="images/eng.png" width="30px"/>
                </a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->