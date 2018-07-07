<?php

//FROM MENU
$tvan['home'] = "Trang chủ";
$tvan['news'] = "Tin tức";
$tvan['about'] = "Về chúng tôi";
$tvan['contact'] = "Liên hệ";
//END MENU






$tvan['address'] = "Địa chỉ: 72 Lương Định Của, p Cái Khế, TP. Cần Thơ";
$tvan['reservation'] = "Đặt phòng";
$tvan['booknow'] = "Đặt phòng ngay";


//WELCOME 
$wel = "select * from content where content_id=5";
$welquery = mysqli_query($db,$wel);
$welc=mysqli_fetch_array($welquery);
$tvan['welcome'] = $welc['content'];



//INTRODUCE
$sqlx= "select * from content where content_id=1";
$query = mysqli_query($db,$sqlx);
$intro = mysqli_fetch_array($query);
$tvan['introduce_header'] = "Giới thiệu";
$tvan['introduce_content'] = $intro['content'];





//ABOUT ROOM
$tvan['ourluxuryrooms'] = "Các loại phòng mà chúng tôi có";
$tvan['featuredrooms'] = "Loại phòng";
	//name
	$tvan['room1'] = "Phòng một giường";
	$tvan['room2'] = "Phòng hai giường";
	$tvan['room3'] = "Căn hộ hai phòng ngủ";
$tvan['guests'] = "khách";
$tvan['day'] = "ngày";
$tvan['month'] = "tháng";
//END ROOM









$tvan['room1_dayprice'] =0;
$tvan['room1_monthprice']=0;

$tvan['room2_dayprice']=0;
$tvan['room2_monthprice']=0;

$tvan['room3_dayprice']=0;
$tvan['room3_monthprice']=0;

$tvan['relaxandenjoy'] = "Tận hưởng và thư giãn cùng TVAN";

$tvan['ourblog'] = "Tin tức gần đây ";
$tvan['ourrecentnews'] = "Tin Tức ";

$tvan['readmore'] = "Xem thêm ";





//FROM FOOTER
$tvan['phonesupport'] = "Điện thoại hỗ trợ ";
$tvan['phone'] = "096 9696068<br>02923 827826";
$tvan['connectwithus'] = "Liên hệ với chúng tôi "; 
//END OF FOOTER





//FROM RESERVATION PAGE
$tvan['reservationform']= "Thông tin đặt phòng";
$tvan['arrivaldate'] = "Ngày đến";
$tvan['departuredate'] = "Ngày đi";

$tvan['customer_name']="Họ tên";
$tvan['customer_phone']="Số điện thoại";
$tvan['customer_note']="Ghi chú";

$tvan['book_adults']="Người lớn";
$tvan['book_children'] = "Trẻ em";
$tvan['book_address'] ="Địa chỉ";
$tvan['book_note'] = "Ghi chú";

$tvan['reservenow'] = "Gửi thông tin đặt phòng";
//END OF RESERVATION PAGE
?>









