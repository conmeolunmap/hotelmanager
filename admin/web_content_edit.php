

<?php
if(isset($_GET['position'])){
	$po = $_GET['position'];
	if(is_numeric($po)){
		$sql="select * from content where content_id='$po'";
		$query=mysqli_query($db,$sql);
		$con = mysqli_fetch_array($query);

		$content=$con['content'];
	}else{
		echo "<script>window.location='index.php';</script>";
	}
}else{
	echo "<script>window.location='index.php';</script>";
}

?>
 <h2>Điền thông tin chỉnh sửa</h2>
 <h3 style="color: orange"><?=$con['content_title']?></h3>

 <form method="POST" action="process/edit_content.php">
    <div class="form-group">
      <label for="comment">Nội dung:</label>
      <input name="content_id" type="hidden" value="<?=$po?>">
      <textarea name="content" class="form-control" id="comment"><?=$content?></textarea><br>
      <button type="submit" name="btn_edit_content" class="btn btn-default">Lưu chỉnh sửa</button>
    </div>
 </form>