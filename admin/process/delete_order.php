
<?php
include "../../database.php";


if(isset($_GET['deleteorder'])){
	$id = $_GET['deleteorder'];
	$sql="DELETE FROM orders WHERE id='$id'";
	$do = mysqli_query($db,$sql);
	if($do){
		echo "<script>alert('Đã xóa');window.location='../index.php?key=room_booking.php';</script>";
	}else{
		echo "<script>alert('Lỗi xảy ra');</script>";
	}
}
?>