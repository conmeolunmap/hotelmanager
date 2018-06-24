
<?php
// if(!isset($_SESSION['admin'])){
//     header('Location: ../index.php');
// }
?>

<div class="container" style="margin:auto; padding-bottom: 20px;">
    <h2>Thêm tin tức</h2>

    <form method="post" action="process/add_news.php" enctype="multipart/form-data">

        <div class="form-group">
            <label>Tiêu đề</label>
            <input type="text" size="20" class="form-control" placeholder="" name="fm_title" required>
        </div>


        <label>Hình đại diện</label>
        <div style="position:relative;">
            <!--<a class='btn btn-primary' href='javascript:;'></a>-->
                <input type="file" name="photo"/>

            &nbsp;
            <span class='label label-info' id="upload-file-info"></span>
        </div>

        



        <div class="form-group">
            <label>Noi dung tin tuc</label>
            <textarea class="ckeditor form-control" name="fm_content" id='fm_content' ></textarea></br>
            <script>
             CKEDITOR.replace( 'fm_content',
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
        
        
        



        <button type="submit" class="btn btn-default" name="btn_addnews" value="Upload">Thêm tin tức</button>


    </form>
</div>
