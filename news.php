
<?php
/////////////////PHAN TRANG//////////////////////////////////////////////////////////

	$news_on_1_page = 6;
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


<section class="site-section bg-light" id="news">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
            <h4 class="sub-heading">Our Blog</h4>
              <h2 class="heading">Our Recent Blog</h2>
          </div>
        </div>
        <div class="row ">


        <?php
        $sql="SELECT * FROM news ORDER BY news_id DESC limit ".(($current_page-1)*$news_on_1_page).",".$news_on_1_page;
        $do=mysqli_query($db,$sql);
        while($row=mysqli_fetch_array($do)){

        ?>
          <div class="col-md-4">
            <div class="post-entry">
              <img src="images/news/<?=$row['news_avatar']?>" style="max-height: 250px;width:100%;" alt="Image placeholder" class="img-fluid">
              <div class="body-text">
                <div class="category">NEWS</div>
                <h3 class="mb-3"><a href="#"><?=$row['news_title']?></a></h3>
                <p class="mb-4">
                  <?=substr($row['news_content'], 0,300)." . . ."?>
                </p>
                <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>

          <?php
          }
          ?>

          

        </div>

        <div style="margin:auto; text-align: center;">
        <ul class="pagination">
		<?php
	        for($i=1;$i<=$total;$i++){
	            if($i==$current_page){
	            	
	            	echo "<li class='active'><a href='?page=$i#news'><b>$i</b></a></li>";
	            	
	            }else{
	            	echo "
	            	<li>
	            	<a href='?page=$i#news'>$i</a>
	            	</li>
	            	";
	            }
	        }
		  ?>
		</ul>
        </div>

      </div>
    </section>
    <!-- END section -->