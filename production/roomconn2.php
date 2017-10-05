<?php
	$conn = new mysqli("localhost", "root", "", "simpledata");
	//$gid = $_POST['gid'];
	$data = array();
	function getData(){
			$data[1] =$_POST['room_no'];
			$data[2] =$_POST['floor'];
			$data[3] =$_POST['room_type'];
			$data[4] =$_POST['room_status'];
			$data[5] =$_POST['room_price'];
		return $data;
	}

	if(isset($_POST['register'])) {
		$info = getData();
		$sql = "insert into roomno (room_no, floor, room_type, room_status, room_price) values ('$info[1]', '$info[2]', '$info[3]', '$info[4]', '$info[5]',)";
			if($conn->query($sql) === true){
				echo("Data has been Saved");
			}
			else{
				echo("no rows was entered");
			}
	}



?>