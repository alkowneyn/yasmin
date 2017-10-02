<?php
	$conn = new mysqli("localhost", "root", "", "simpledata");
	//$gid = $_POST['gid'];
	$data = array();
	function getData(){
		$data[1] = $_POST['gfullname'];
		$data[2] = $_POST['floor'];
		$data[3] = $_POST['rno'];
		$data[4] = $_POST['rtype'];
		$data[5] = $_POST['rprice'];
		
		return $data;
	}

	if(isset($_POST['register'])) {
		$info = getData();
		$sql = "insert into room (gfullname, floor, rno, rtype, rprice) values ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]' )";
			if($conn->query($sql) === true){
				echo("Data has been Saved");
			}
			else{
				echo("no rows was entered");
			}
	}



?>