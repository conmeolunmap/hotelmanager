<?php

include_once "database.php";



//FROM MENU
$tvan['home'] = "Home";
$tvan['news'] = "News";
$tvan['about'] = "About";
$tvan['contact'] = "Contact";
//END MENU


$ar=mysqli_fetch_array(mysqli_query($db,"select * from content where content_id=7"));
$tvan['address'] = $ar['content'];
$tvan['address_title'] = "Address";
$tvan['reservation'] = "Reservation";
$tvan['booknow'] = "Book Now";


//WELCOME 
$wel = "select * from content where content_id=4";
$welquery = mysqli_query($db,$wel);
$welc=mysqli_fetch_array($welquery);
$tvan['welcome'] = $welc['content'];



//INTRODUCE
$sqlx= "select * from content where content_id=3";
$query = mysqli_query($db,$sqlx);
$intro = mysqli_fetch_array($query);

$tvan['introduce_header'] = "Introduce";
$tvan['introduce_content'] = $intro['content'];
// "
// Chào mừng quý khách đến với sự thoải mái và tiện nghi của căn hộ T- Van Serviced Apartment Cần Thơ. Chúng tôi nằm ngay trung tâm thương mại, ăn uống và du lịch của thành phố Cần Thơ. Là nơi yên tĩnh thích hợp cho quý khách đến nghỉ dưỡng và làm việc cũng như đang chính trong ngôi nhà của mình. Chúng tôi cung cấp căn hộ đầy đủ tiện nghi, khu vực tắm nắng trên sân thượng, chỗ đậu xe hơi, truy cập Wi-Fi miễn phí cùng nhiều tiện ích khác. Vì vậy, hãy cho phép căn hộ T- Van Cần Thơ là 'nhà xa nhà' của các bạn, đáp ứng mọi dịch vụ một cách tốt nhất cho quý khách
// ";





//ABOUT ROOM
$tvan['featuredrooms'] = "Our Luxury Studios";
	//name
	$tvan['room1'] = "Studio 1";
	$tvan['room2'] = "Studio 2";
	$tvan['room3'] = "Studio 3";
	//đơn vị tính
	$tvan['guests'] = "guests";
	$tvan['day'] = "day";
	$tvan['month'] = "month";
//END ROOM








$tvan['room1_dayprice']=0;
$tvan['room1_monthprice']=0;

$tvan['room2_dayprice']=0;
$tvan['room2_monthprice']=0;

$tvan['room3_dayprice']=0;
$tvan['room3_monthprice']=0;

$tvan['relaxandenjoy'] = "Relax and enjoy";

$tvan['ourblog'] = "Our blog";
$tvan['ourrecentnews']= "Our recent news";

$tvan['readmore'] = "Read more";




//FROM FOOTER
$sqlx= "select * from content where content_id=2";
$query = mysqli_query($db,$sqlx);
$phone = mysqli_fetch_array($query);
$tvan['phonesupport'] = "Phone support";
$tvan['phone'] = $phone['content'];
$tvan['connectwithus'] = "Connect with us";
//END OF FOOTER





//FROM RESERVATION PAGE
$tvan['slogan']="Caring - Warming - Committing - Developing";

$tvan['reservationform']= "Reservation Form";
$tvan['arrivaldate'] = "Arrival Date";
$tvan['departuredate'] = "Departure Date";


$tvan['customer_name']="Name";
$tvan['customer_phone']="Phone";
$tvan['customer_note']="Note";

$tvan['book_adults']="Adults";
$tvan['book_children'] = "Children";
$tvan['book_address'] = "Address";
$tvan['book_note'] = "Description";

$tvan['reservenow'] = "Reserve Now";

$tvan['notification_success'] = "Booking Success";
$tvan['notification_failed'] = "Booking Failed";
//END OF RESERVATION PAGE




?>






