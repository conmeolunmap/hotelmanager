
<!DOCTYPE html>
<html>
<head>
	<title>Admin Tvan Condotel</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



  <link href='fullcalendar/fullcalendar.min.css' rel='stylesheet' />
  <link href='fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
  <script src='fullcalendar/lib/moment.min.js'></script>
  <script src='fullcalendar/lib/jquery.min.js'></script>
  <script src='fullcalendar/fullcalendar.min.js'></script>
  


<script src="ckeditor/ckeditor.js"/>

<?php 
// date_default_timezone_set('Asia/Ho_Chi_Minh');
?>

</head>
<body id="main">


<?php
session_start();
if(!isset($_SESSION['admin'])){
  echo "<script>window.location='login.php'</script>";
}

if(isset($_GET['logout'])){
  session_destroy();
  echo "<script>window.location='login.php';</script>";
}

?>




<script language="JavaScript" type="text/javascript">
    
    function deleteConfirm(){
        return confirm('Bạn có chắc muốn xóa !');
    }
</script>




<!-- 
<script>
        $(":file").filestyle();
  </script>
 -->




<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="520" style="border: 0px;z-index: 0;border-radius: 0;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php">Tvan</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
               
                <li><a href="?key=add_news.php">Thêm tin tức</a></li>
                <li><a href="?key=news_manage.php">Quản lý tin tức</a></li>
                <li><a href="?key=room_booking.php">Quản lý đặt phòng </a></li>
                <li><a href="?key=calendar_view.php">Xem lịch </a></li>
                <li><a href="?key=web_content.php">Nội dung web</a></li>
                <li><a href="?key=edit_room_price.php">Giá phòng</a></li>
                <li><a href="?key=change_password.php">Đổi pass</a></li>
    
                <li><a style="color: red;" href="?logout">Thoát</a></li>

            </ul>
        </div>
    </div>
</nav>


<div class="container">

<?php
          include "../database.php";


          $file="room_booking.php";
          if(isset($_REQUEST["key"])) //INCLUDE trang vao phan` Content
          {
              $b=$_REQUEST["key"];
              $file=$b;
          }
          include $file;
?>
</div>

</div>
</body>
</html>