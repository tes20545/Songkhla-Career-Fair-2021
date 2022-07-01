<!DOCTYPE html>
<html>
	<title>คะแนนตอบคำถามอาชีพ </title>
	<head>
		<meta charset="utf-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>

		<script type="text/javascript" language="javascript" >
			$(document).ready(function() {
				$('#customer-grid').DataTable( {
					"processing": true,
					"serverSide": true,
					"pageLength": 10,
					"ajax":{
						url :"getquiz.php", // json datasource
						type: "post",  // method  , by default get
						error: function(){  // error handling
							$(".customer-grid-error").html("");
							$("#customer-grid").append('<tbody class="customer-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
							$("#customer-grid_processing").css("display","none");
							
						}
					}
				} );
			} );
		</script>
	</head>
	<body>
		<?php
		    require("../ranking/conexao.php");
			$conn->set_charset("utf8");
			$sql = "SELECT DISTINCT(name), phone, score, save FROM quiz WHERE score >= 16 ORDER BY score DESC LIMIT 27";
			$result = $conn->query($sql);
				echo "<p class='display-3'>คะแนนตอบคำถามอาชีพ</p>";
				echo "<p class='fs-2'>ผู้ที่ได้คะแนนสูงสุดประจำเกมนี้";
			while($row = $result->fetch_assoc()) 
			{
				$i++;
				echo "<p class='fs-4 text-center'>";
				echo "ลำดับที่ ".$i." ชื่อ ".$row['name'] . " | <font color='red'>" . $row['score'] . "คะแนน</font> | เบอร์โทรศัพท์ :".$row['phone']. " | วันที่บันทึก :".$row['save']."<br><hr>";
				echo "</p>";
			}
		?>
		<div class="container-fluid">
			<p class="fs-2">คะแนนทั้งหมด</p>
			<table id="customer-grid"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
				<thead>
					<tr>
						<th>คะแนน</th>
						<th>ชื่อ</th>
						<th>เบอร์โทรศัพท์</th>
						<th>ลงวันที่</th>
					</tr>
				</thead>
			</table>
		</div>
		<br>
	</body>
</html>