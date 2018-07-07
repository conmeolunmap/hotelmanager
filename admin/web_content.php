<h2>Điều chỉnh nội dung web</h2>
  <p>Chỉnh sửa nội dung web ở 1 số vị trí cố định</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th width="20%">Vị trí hiển thị</th>
        <th>Nội dung</th>
  		<th width="15%">Chỉnh sửa</th>
      </tr>
    </thead>
    <tbody>

    <?php
    $sql="select * from content";
    $query=mysqli_query($db,$sql);
    while($row=mysqli_fetch_array($query)){
    	$position=$row['content_id'];
    ?>


      <tr>
        <td><?=$position?></td>
        <td><?=$row['content_title']?></td>
        <td><a href="?key=web_content_edit.php&position=<?=$position?>">Chỉnh sửa</a></td>
      </tr>


     <?php
 	}
     ?>
    </tbody>
  </table>




