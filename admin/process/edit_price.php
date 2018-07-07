

<?php

include "../../database.php";


if(isset($_POST['btn_editprice1'])){
	$giangay = $_POST['R1_priceonday'];
	$giathang = $_POST['R1_priceonmonth'];
	$sql="UPDATE type_of_room SET type_priceonday='$giangay',type_priceonmonth='$giathang' where type_id='R1'";
	$do = mysqli_query($db,$sql);
	if($do){
		echo "<script>alert('Đã cập nhật');window.location='../index.php?key=edit_room_price.php';</script>";
	}else{
		echo "<script>alert('Lỗi xảy ra');window.location='../index.php?key=edit_room_price.php';</script>";
	}
}



if(isset($_POST['btn_editprice2'])){
	$giangay = $_POST['R2_priceonday'];
	$giathang = $_POST['R2_priceonmonth'];
	$sql="UPDATE type_of_room SET type_priceonday='$giangay',type_priceonmonth='$giathang' where type_id='R2'";
	$do = mysqli_query($db,$sql);
	if($do){
		echo "<script>alert('Đã cập nhật');window.location='../index.php?key=edit_room_price.php';</script>";
	}else{
		echo "<script>alert('Lỗi xảy ra');window.location='../index.php?key=edit_room_price.php';</script>";
	}
}


if(isset($_POST['btn_editprice3'])){
	$giangay = $_POST['R3_priceonday'];
	$giathang = $_POST['R3_priceonmonth'];
	$sql="UPDATE type_of_room SET type_priceonday='$giangay',type_priceonmonth='$giathang' where type_id='R3'";
	$do = mysqli_query($db,$sql);
	if($do){
		echo "<script>alert('Đã cập nhật');window.location='../index.php?key=edit_room_price.php';</script>";
	}else{
		echo "<script>alert('Lỗi xảy ra');window.location='../index.php?key=edit_room_price.php';</script>";
	}
}

?>