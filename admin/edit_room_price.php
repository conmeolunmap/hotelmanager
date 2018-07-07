

<?php
	$sql = "SELECT * FROM type_of_room where type_id='R1'";
	$query = mysqli_query($db,$sql);
	$room1 = mysqli_fetch_array($query);
		$giangay=$room1['type_priceonday'];
		$giathang=$room1['type_priceonmonth'];
?>

<div class="row">
  <div class="col-sm-4">
		<form action="process/edit_price.php" method="POST">
		<div class="panel panel-default">
		  <div class="panel-heading" style="background-color: #2fbdb2;">Phòng 1 giường</div>
		  <div class="panel-body">
		  	<div class="form-group">
			  <label for="usr">Giá ngày:</label>
			  <input type="number" class="form-control" name="R1_priceonday" value="<?=$giangay?>" id="usr">
			  <label for="usr">Giá tháng:</label>
			  <input type="number" class="form-control" name="R1_priceonmonth" value="<?=$giathang?>" id="usr">
			  <input type="submit" name='btn_editprice1' class="btn btn-default" value="Cập nhật giá phòng 1 giường"/>
			</div>
		  </div>
		</div>
		</form>
  </div>



<?php
	$sql = "SELECT * FROM type_of_room where type_id='R2'";
	$query = mysqli_query($db,$sql);
	$room2 = mysqli_fetch_array($query);
		$giangay=$room2['type_priceonday'];
		$giathang=$room2['type_priceonmonth'];
?>

  <div class="col-sm-4">
  		<form action="process/edit_price.php" method="POST">
		<div class="panel panel-default">
		  <div class="panel-heading" style="background-color: #d37ad2;">Phòng 2 giường</div>
		  <div class="panel-body">
		  	<div class="form-group">
			  <label for="usr">Giá ngày:</label>
			  <input type="number" name="R2_priceonday" value="<?=$giangay?>" class="form-control" id="usr">
			  <label for="usr">Giá tháng:</label>
			  <input type="number" name="R2_priceonmonth" value="<?=$giathang?>" class="form-control" id="usr">
			  <input type="submit" name='btn_editprice2' class="btn btn-default" value="Cập nhật giá phòng 2 giường"/>
			</div>
		  </div>
		</div>
		</form>
  </div>


<?php
	$sql = "SELECT * FROM type_of_room where type_id='R3'";
	$query = mysqli_query($db,$sql);
	$room3 = mysqli_fetch_array($query);
		$giangay=$room3['type_priceonday'];
		$giathang=$room3['type_priceonmonth'];
?>

  <div class="col-sm-4">
  		<form action="process/edit_price.php" method="POST">
		<div class="panel panel-default">
		  <div class="panel-heading" style="background-color: #ffae00;">Căn hộ 2 phòng ngủ</div>
		  <div class="panel-body">
		  	<div class="form-group">
			  <label for="usr">Giá ngày:</label>
			  <input type="number" name="R3_priceonday" value="<?=$giangay?>" class="form-control" id="usr">
			  <label for="usr">Giá tháng:</label>
			  <input type="number" name="R3_priceonmonth" value="<?=$giathang?>" class="form-control" id="usr">
			  <input type="submit" name='btn_editprice3' class="btn btn-default" value="Cập nhật giá căn hộ 2 phòng ngủ"/>
			</div>
		  </div>
		</div>
		</form>

  </div>
</div>








