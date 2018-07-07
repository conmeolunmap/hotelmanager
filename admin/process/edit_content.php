<?php

include "../../database.php";

if(isset($_POST['btn_edit_content'])){
	
	$id = $_POST['content_id'];
	$content = $_POST['content'];

	$sql = "UPDATE content set content='$content' WHERE content_id='$id' ";
	$do = mysqli_query($db,$sql);
	if($do){
		echo "<script>alert('Đã lưu chỉnh sửa');window.location='../index.php?key=web_content.php';</script>";
	}else{
		echo "<script>alert('Thất bại');window.location='../index.php?key=web_content.php';</script>";
	}
}

?>