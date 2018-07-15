<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include "../../database.php";
if(isset($_POST['btn_addnews'])){
    
    $img="no_image.png";
    $date=date("Y/m/d");
    $admin='';
    $title='';
    $content='';
    $language = $_POST['fm_language'];

    if(isset($_POST['fm_title'])){
    	$title=$_POST['fm_title'];
    }

    if( isset($_POST['fm_content'])   ) {
    	$content=$_POST['fm_content'];
    }

    $loihinhanh='';

    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(array_key_exists($ext, $allowed)){
            $maxsize = 6 * 1024 * 1024;
            if($filesize < $maxsize){
                if(in_array($filetype, $allowed)){
                    // Check whether file exists before uploading it
                    if(file_exists("../../images/hotel/news/" . $_FILES["photo"]["name"])){
                        $loihinhanh=$_FILES["photo"]["name"] . " đã tồn tại tên hình này.";
                    } else{
                        move_uploaded_file($_FILES["photo"]["tmp_name"], "../../images/news/" . $_FILES["photo"]["name"]);
                        $img=$_FILES["photo"]["name"];

                    }
                } else{
                    echo  $loihinhanh="Lỗi upload hình ảnh";
                }
            }else  $loihinhanh="Lỗi hình không được quá 6MB";
        } else $loihinhanh="Không đúng định dạng ảnh";


    }

    $sql="insert into news values('','$title','$img','$content','$admin','$date','$language')";

    $qr=mysqli_query($db,$sql);
    if($qr){
        // echo "Thêm thành công";
        echo "<script>alert('Thêm thành công');window.location='../index.php';</script>";
    }else{
        echo "Thất bại</br>".$loihinhanh;

    }




}

?>