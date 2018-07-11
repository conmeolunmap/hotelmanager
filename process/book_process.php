
<?php
include "../database.php";


if(isset($_POST['btn_book'])){

	$start = $_POST['arrival_date'];
	$end = $_POST['departure_date'];
	$name = $_POST['book_name'];
	$phone = $_POST['book_phone'];
	$typeroom = $_POST['book_room'];
	
	$adults = $_POST['book_adults'];
	$children = $_POST['book_children'];

	$address = $_POST['book_address'];
	$email = $_POST['book_email'];
	$note = $_POST['book_note'];

	
	// $start = "2018-01-02";
	// $end = "2018-01-03";
	
	$room_okay=0; //save the room_id which is okay at the current time

	$sql="select * from room where room_type='$typeroom'";
	$do=mysqli_query($db,$sql);

	while($room=mysqli_fetch_array($do)){ // fetch room
		$status=1;//ms dời vào trong vòng lặp
		
		
		if($room_okay==0){
			$sql2="select * from orders where room_id='".$room['room_id']."' ORDER BY id DESC limit 0,20";
			$list_of_old_orders=mysqli_query($db,$sql2);



			while($old_order=mysqli_fetch_array($list_of_old_orders)){ //fetch orders

				//check xem cùng lớn hơn End hoặc cùng nhỏ hơn Start thì set status = ok
				// nếu có 1 trường hợp failed thì set status  =not ok 
				$old_start = $old_order['start'];
				$old_end = $old_order['end'];
				if( ($start<$end && $end<=$old_start) || ($old_end<=$start && $start<$end) ){
					
				}else{
					//trùng giờ với 1 order nào đó trong 20 order gần nhất
					$status=0;
					// echo " <br>Status=".$status;
				}
			}



			if($status==1){ //không trùng ngày vs bất cứ 1 order nào trong 20 order gần nhất
				$room_okay = $room['room_id'];
				$sql="insert into orders values('','$start','$end','$name','$phone','$address','$email','$children','$adults','$room_okay','$note')";

				$do=mysqli_query($db,$sql);
				if($do){
					echo "<script>alert('".$_POST['noti_ok']."');window.location='../index.php';</script>";
				}else{
					echo "error_888";
				}
			}

		}
		// echo "<br>--Status:".$status;
		// echo "<br>--RoomOkay:".$room_okay;

	}//end fetch room

	

	if($room_okay==0){
		echo "<script>alert('".$_POST['noti_failed']."');window.location='../booknow.php';</script>";
	}
	

	
		
	
	

	

	// $sql="insert into orders values('','$start','$end','$name','$phone','ROOMID2','$guests','$note')";
	// $do=mysqli_query($db,$sql);
	// if($do){
	// 	echo "<br>OK";
	// }else echo "FAILELLEDD";

}

?>