<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng nhập hệ thống quản trị </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
        }

    </style>
    <link rel="icon" 
      type="image/png" 
      href="../images/logo.jpg">
</head>


<body style="background: linear-gradient(-90deg, #2FBDB2, #41BAE7);">

<div class="container" >
<div class="row">
  <div class="col-lg-4 col-md-12"></div>
  <div class="col-lg-4 col-md-12">

        <form method="POST">
                <div class="modal-dialog" style="margin-top: 30%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H3 class="text-center">ĐĂNG NHẬP TRANG QUẢN TRỊ </h3>
                            <div class="text-center" style="padding-bottom: 1px;">TVAN CONDOTEL</div>
                            <div class="text-center" style="padding-top: 2px;">72 Lương Định Của, TP Cần Thơ  </div>

                        </div>
                        <div class="modal-body">
                        <form method="POST">
                            <div class="input-group" style="padding-bottom: 10px;">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="txtid" class="form-control input-lg" placeholder="Tên đăng nhập"/>
                            </div>

                            <div class="input-group" style="padding-bottom: 10px;">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" name="txtpass" class="form-control input-lg" placeholder="Mật khẩu"/>
                            </div>
                        
                            <div class="form-group" style="margin-top: 10px;">
                                <input type="submit" name='btnlogin' class="btn btn-block btn-lg btn-primary" value="Đăng nhập"/>

                            </div>
                        </form>
                    </div>
                </div>
        </form>

  </div>
  <div class="col-lg-4 col-md-12"></div>
</div>
    
</div>


<?php
include "../database.php";

if(isset($_POST['btnlogin'])){

    $id=$_POST['txtid'];
    $pass=$_POST['txtpass']."jkasjdkfji12oi3sa892@#$^&%!(*&_%!*";

    $pass=md5($pass);

    $sql="SELECT * FROM admin where admin_id='$id' and admin_password='$pass'";

    $x=mysqli_query($db,$sql);
    $count=mysqli_num_rows($x);

    if($count>0){

        $_SESSION['admin']=$id;
        header('Location: index.php');

    }else{

        header("Refresh:0");
        
    }
}

?>





  </div> 
</div>




</body>
</html>


