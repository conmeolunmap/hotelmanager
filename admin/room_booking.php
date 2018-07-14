



<style>
.color1{
	background-color: #2fbdb2;
}
</style>
  <h2>Danh sách đặt phòng</h2>
  <p>Xếp theo thứ tự từ mới nhất</p>
  <table class="table">
    <thead>
      <tr>
        <th>Họ tên</th>
        <th>Điện thoại</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Loại phòng</th>
        <th>Người lớn</th>
        <th>Trẻ em</th>
        <th>Ngày vào</th>
        <th>Ngày ra</th>
        <th>Tự sắp xếp</th>
        <th>Ghi chú</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>

    <?php
    $sql="select * from orders a 
    join room b on a.room_id=b.room_id
    join type_of_room c on b.room_type=c.type_id
     ORDER BY a.id DESC LIMIT 0,50";
    
    $query=mysqli_query($db,$sql);

    while($order=mysqli_fetch_array($query)){
    	$orderid=$order['id'];
    ?>


    <tr>
	      <td><?=$order['name']?></td>
	      <td><?=$order['phone']?></td>
            <td><?=$order['address']?></td>
            <td><?=$order['email']?></td>
	      <td><?=$order['type_name']?></td>
	      <td><?=$order['adults']?></td>	
        <td><?=$order['children']?></td>  
	      <td><?=date('d-m-Y', strtotime($order['start']))?></td>
	      <td><?=date('d-m-Y', strtotime($order['end']))?></td>
	      <td><?=$order['room_id']?></td>
	      <td><?=$order['note']?></td>
	      <td>
	      	<a href="process/delete_order.php?deleteorder=<?=$orderid?>"
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
