<h2>Trang đổi mật khẩu</h2>

<form method="POST" action="" enctype="multipart/form-data"> 

    <div class="form-group">
      <label f>Nhập lại mật khẩu cũ</label>
      <input type="password" name="old" class="form-control" required >
    </div>

    <div class="form-group">
      <label for="pwd">Mật khẩu mới</label>
      <input type="password" name="new" class="form-control"  required>
    </div>

    <div class="form-group">
      <label for="pwd">Mật lại khẩu mới</label>
      <input type="password" name="newagain" class="form-control"  required>
    </div>

    <button type="submit" name="btnchangepwd" class="btn btn-default">Đổi mật khẩu</button>

</form>



<?php
  include "../database.php";
  if(isset($_POST['btnchangepwd'])){
    echo $_SESSION['admin'];
    $new = $_POST['new'];
    $newagain = $_POST['newagain'];
    if($new == $newagain){
      $old = $_POST['old'];
      $sql = "SELECT * FROM admin where admin_id='".$_SESSION['admin']."'";
      $qr = mysqli_query($db,$sql);
      $pw = mysqli_fetch_array($qr);
      $realpwd = $pw['admin_password'];

      $old = $old."jkasjdkfji12oi3sa892@#$^&%!(*&_%!*";
      $old = md5($old);
      if($old == $realpwd){
          //update
          $new = $new."jkasjdkfji12oi3sa892@#$^&%!(*&_%!*";
          $new = md5($new);
          $sql = "update admin set admin_password='".$new."' where admin_id='".$_SESSION['admin']."'";
          $do = mysqli_query($db,$sql);
          if($do){
            echo "<script>alert('Đổi thành công');</script>";
          }else{
            echo "<script>alert('Thất bại');</script>";
          }

      }else{
          echo "<script>alert('Mật khẩu cũ không đúng');</script>";
      }
    }else{
      echo "<script>alert('Mật khẩu không trùng khớp');window.location='?key=change_password.php'</script>";
    }
  }
?>