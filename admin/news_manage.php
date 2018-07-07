<div class="container">
<h2>Quản lý bài đăng</h2>
  <p>Xếp theo thứ tự từ mới nhất</p>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên bài đăng</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>

    <?php
    $sql="select * from news ORDER BY news_id DESC";
    $query= mysqli_query($db,$sql);

    while($new=mysqli_fetch_array($query)){
    	$id=$new['news_id'];
    ?>

    <tr>
	    <td><?=$id?></td>
	    <td><?=$new['news_title']?></td>
	    <td>
	      	<a href="process/delete_news.php?deletenews=<?=$id?>"
	      	onclick="return deleteConfirm()">
	      	Xóa
	      	</a>
	     </td>
    </tr>

    <?php
	}
	?>

    </tbody>
    </table>
    </div>