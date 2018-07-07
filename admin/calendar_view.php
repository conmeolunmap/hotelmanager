<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$today = date('Y/m/d', time());
?>
<script>


	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			defaultDate: '<?=$today?>',
			navLinks: true, // can click day/week names to navigate views
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			events: [

				<?php

				include "../database.php";
				$sql="select * from orders a join room b on a.room_id=b.room_id";
				$query=mysqli_query($db,$sql);

				while($ord=mysqli_fetch_array($query)){

					$start=$ord['start'];
					$end=$ord['end'];
					$name=$ord['name'];
					$phone=$ord['phone'];
					$roomid=$ord['room_id'];
					$color="#ffae00";

					switch($ord['room_type']){
						case 'R1': $color="#2fbdb2"; break;
						case 'R2': $color="#d37ad2"; break;
						default: $color="#ffae00";
					}

					echo "
					{
						title: '".$name."',
						start: '".$start."',
						end: '".$end."',
						color: '".$color."'
					},
					";
				}
				

				?>
				
			
				
			]
		});
		
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>

	<div class="description" style="margin: 10px auto; text-align: center;">
		<span class="label " style="background-color: #2fbdb2">Phòng 1 giường </span>
		<span class="label " style="background-color: #d37ad2">Phòng 2 giường </span> 
		<span class="label " style="background-color: #ffae00">Căn hộ hai phòng </span>
	</div>
	<div id='calendar'></div>


