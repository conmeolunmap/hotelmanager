<?php
include "../database.php";

$id="admin2";
$pwd="admin2"."jkasjdkfji12oi3sa892@#$^&%!(*&_%!*";
$pwd=md5($pwd);

$sql="insert into admin values('$id','$pwd','admin')";
$do=mysqli_query($db,$sql);
if($do){
	echo "ok";
}else{
	echo "failed";
}

?>