<section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
            <h4 class="sub-heading"><?=$tvan['ourluxuryrooms']?></h4>
              <h2 class="heading"><?=$tvan['featuredrooms']?></h2>
          </div>
        </div>
        <div class="row ">


        <?php
        $sql="select * from type_of_room where type_id='R1'";
        $do=mysqli_query($db,$sql);
        $room1=mysqli_fetch_array($do);

        ?>



          <div class="col-sm-12 col-md-4">
            <div class="media d-block room mb-0">
              <figure>
                <img src="images/hotel/6.jpg" alt="Generic placeholder image" class="img-fluid">
                <div class="overlap-text">
                  <span>
                    <?=$room1['type_name']?>
                    <span class="ion-ios-star"></span>
                    
                    
                  </span>
                </div>
              </figure>
              <div class="media-body">
                <h3 class="mt-0"><a href="#"><?=$tvan['room1']?></a></h3>
                <ul class="room-specs">
                  <span class="ion-ios-people-outline"></span> <?=$room1['type_people']?> <?=$tvan['guests']?><br>
                  <span class="ion-cash"></span> <?=number_format($room1['type_priceonday'])?> vnd/<?=$tvan['day']?> <br> 
                  <span class="ion-cash"></span> <?=number_format($room1['type_priceonmonth'])?> vnd/<?=$tvan['month']?><br>
                  <span class="ion-ios-circle-filled"></span> 1 Sofa<br> 
                  <span class="ion-ios-circle-filled"></span> 1 Shower<br> 
                  <span class="ion-ios-circle-filled"></span> 1 WC<br> 
                  <span class="ion-ios-circle-filled"></span> 1 Kitchen
                </ul>
                
                <p><a href="booknow.php?roomtype=1" class="btn btn-primary btn-sm"><?=$tvan['booknow']?></a></p>
              </div>
            </div>
          </div>





          <?php
        $sql="select * from type_of_room where type_id='R2'";
        $do=mysqli_query($db,$sql);
        $room2=mysqli_fetch_array($do);

        ?>



          <div class="col-sm-12 col-md-4">
            <div class="media d-block room mb-0">
              <figure>
                <img src="images/hotel/9.jpg" alt="Generic placeholder image" class="img-fluid">
                <div class="overlap-text">
                  <span>
                    <?=$room2['type_name']?>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    
                  </span>
                </div>
              </figure>
              <div class="media-body">
                <h3 class="mt-0"><a href="#"><?=$tvan['room2']?></a></h3>
                <ul class="room-specs">
                  <span class="ion-ios-people-outline"></span> <?=$room2['type_people']?> <?=$tvan['guests']?><br>
                  <span class="ion-cash"></span> <?=number_format($room2['type_priceonday'])?> vnd/<?=$tvan['day']?> <br> 
                  <span class="ion-cash"></span> <?=number_format($room2['type_priceonmonth'])?> vnd/<?=$tvan['month']?><br>
                  <span class="ion-ios-circle-filled"></span> 1 Sofa<br> 
                  <span class="ion-ios-circle-filled"></span> 1 Shower<br> 
                  <span class="ion-ios-circle-filled"></span> 1 WC<br> 
                  <span class="ion-ios-circle-filled"></span> 1 Kitchen
                </ul>
                
                <p><a href="booknow.php?roomtype=2" class="btn btn-primary btn-sm"><?=$tvan['booknow']?></a></p>
              </div>
            </div>
          </div>







          <?php
        $sql="select * from type_of_room where type_id='R3'";
        $do=mysqli_query($db,$sql);
        $twin=mysqli_fetch_array($do);

        ?>



          <div class="col-sm-12 col-md-4">
            <div class="media d-block room mb-0">
              <figure>
                <img src="images/hotel/7.jpg" alt="Generic placeholder image" class="img-fluid">
                <div class="overlap-text">
                  <span>
                    <?=$twin['type_name']?>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                </div>
              </figure>
              <div class="media-body">
                <h3 class="mt-0"><a href="#"><?=$tvan['room3']?></a></h3>
                <ul class="room-specs">
                  <span class="ion-ios-people-outline"></span> <?=$twin['type_people']?> <?=$tvan['guests']?> <br>
                  <span class="ion-cash"></span> <?=number_format($twin['type_priceonday'])?> vnd/<?=$tvan['day']?> <br> 
                  <span class="ion-cash"></span> <?=number_format($twin['type_priceonmonth'])?> vnd/<?=$tvan['month']?><br>
                  <span class="ion-ios-circle-filled"></span> 2 Sofa<br> 
                  <span class="ion-ios-circle-filled"></span> 2 Shower<br> 
                  <span class="ion-ios-circle-filled"></span> 2 WC<br> 
                  <span class="ion-ios-circle-filled"></span> 1 Kitchen
                </ul>
                
                <p><a href="booknow.php?roomtype=3" class="btn btn-primary btn-sm"><?=$tvan['booknow']?></a></p>
              </div>
            </div>
          </div>

            
            
          </div>
        </div>
      </div>
    </section>