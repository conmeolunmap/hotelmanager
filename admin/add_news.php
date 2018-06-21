
<?php
// if(!isset($_SESSION['admin'])){
//     header('Location: ../index.php');
// }
?>

<div class="container" style="margin:auto; padding-bottom: 20px;">
    <h2>Thêm tin tức</h2>
    <form method="post" action="" enctype="multipart/form-data">

        <div class="form-group">
            <label>Title</label>
            <input type="text" size="20" class="form-control" placeholder="Viết tắt, dễ nhớ, không có khoảng trắng" name="fm_matin" required>
        </div>

        <div class="form-group">
            <label>Tiêu đề tin tức</label>
            <input type="text" size="20" class="form-control" placeholder="Enter name of new" name="fm_tintuc" required>
        </div>

        <label >Avatar</label>
        <div style="position:relative;">
            <!--<a class='btn btn-primary' href='javascript:;'></a>-->
                <input type="file" name="photo"/>

            &nbsp;
            <span class='label label-info' id="upload-file-info"></span>
        </div>


        <div class="form-group">
            <label>Nội dung</label>
            <textarea class="ckeditor form-control" name="fm_noidung" id='fm_noidung' ></textarea></br>
            <script>
                CKEDITOR.replace( 'fm_noidung',
                    {
                        filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
                        filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
                        filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                    });
            </script>
        </div>


        <button type="submit" class="btn btn-default" name="btnAdd_tintuc" value="Upload">Thêm tin tức</button>


    </form>
</div>
<?php
    // include "../database.php";
    if(isset($_POST['btnAdd_tintuc'])){
        $tit=$_POST['fm_tintuc'];
        $nd=$_POST['fm_noidung'];
        $ma=$_POST['fm_matin'];
        $sql="insert into news values('$ma','$tit','$nd')";
        $do=mysqli_query($db,$sql);
        if($do){
            echo "<script>alert('Đã thêm tin tức');</script>";
        }else{
            echo "<script>alert('Thất bại');</script>";
        }
    }
?>