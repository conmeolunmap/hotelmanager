
<?php
include "../../database.php";


if(isset($_GET['deletenews'])){
	$id = $_GET['deletenews'];
	$sql="DELETE FROM news WHERE news_id='$id'";
	$do = mysqli_query($db,$sql);
	if($do){
		echo "<script>alert('Đã xóa');window.location='../index.php?key=news_manage.php';</script>";
	}else{
		echo "<script>alert('Lỗi xảy ra');</script>";
	}
}
?>