<?php
include "config.php";
session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
}
// header("location: guestlist.php");
?>

<?php
$host ="localhost";
$user = "root";
$pswd = "";
$db = "simpledata";
$room_id="";
$room_no="";
$floor="";
$room_type="";
$room_status="";
$room_price="";



mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)


function getData()
{
$data =array();
$data[0] =$_POST['room_id'];
$data[1] =$_POST['room_no'];
$data[2] =$_POST['floor'];
$data[3] =$_POST['room_type'];
$data[4] =$_POST['room_status'];
$data[5] =$_POST['room_price'];





return $data;
}

if (isset($_POST['searchid'])) {
    $info = getData();
    $sql = "SELECT * FROM roomno WHERE room_id= '$info[0]'";
    $search_result =mysqli_query($conn,$sql);
if (mysqli_num_rows($search_result)){
 while ($rows=mysqli_fetch_array($search_result)) {

$room_id=$rows['room_id'];
$room_no=$rows['room_no'];
$floor=$rows['floor'];
$room_type=$rows['room_type'];
$room_status=$rows['room_status'];
$room_price=$rows['room_price'];

}
}
}

// Update Command
// sql to delete a record
if (isset($_POST['update'])) {
      $info = getData();
$sql = "UPDATE roomno SET room_no='$info[1]', floor='$info[2]', room_type='$info[3]', room_status='$info[4]', room_price='$info[5]' WHERE room_id='$info[0]'";
if ($conn->query($sql)===TRUE) {
    echo"Record updated successfully";
}
else {
    echo" Error updating record".mysql_error($conn);
}
}



if(isset($_GET['Delete'])){
    $sql = "SELECT * FROM roomno ";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $room_id=$row['room_id'];
    //$idDelete = $_GET['idDelete'];
    $sql = "DELETE FROM roomno WHERE  room_id='$room_id'";
    if($conn->query($sql)===TRUE) {
        header("location: rsearch.php");
    }
    else { ?>
        <script>
            alert("failed to delete");
            window.location.href='rsearch.php';
        </script>
        <?php
        echo "failed to delete";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>Hotel yaasmiin plaza| </title>
 <script src="jquery-3.2.1.js"></script>
    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.min.js"></script>
    
    <style>
th{
	  background:gold;
	  color:white;
	  text-align:center;
      }
      td{
           background:white;
	  color:black;
	  text-align:center;
      }
      </style>

  </head>
  <body>













  
<?php
    $conn = new mysqli("localhost", "root", "", "simpledata");
    if(isset($_POST["query"]))
    {
        $search = mysqli_real_escape_string($conn, $_POST["query"]);
        $query = " SELECT * FROM roomno  WHERE room_id LIKE '%".$search."%' OR room_no LIKE '%".$search."%'  OR floor LIKE '%".$search."%'  OR room_type LIKE '%".$search."%'";
    }
    else
    {
        $query = " SELECT * FROM roomno ORDER BY room_id ";
    }
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    { ?>
        <div class="table-responsive">
            <table class="table table-striped table-condensed table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Room No</th>
                    <th>Floor</th>
                    <th>Room Type</th>
                    <th>Room Status</th>
                    <th>Room Price</th>
                    <th>Action</th>
                    <th>Action</th></tr>       
        <?php
            while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row["room_id"] ?></td>
                    <td><?php echo $row["room_no"] ?></td>
                    <td><?php echo $row["floor"] ?></td>
                    <td><?php echo $row["room_type"] ?></td>
                    <td><?php echo $row["room_status"] ?></td>
                    <td><?php echo $row["room_price"] ?></td>
                    <td>
                       <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#edit-<?php echo $row['room_id']; ?>" id=""><i class="fa fa-pencil fa-lg"></i> Edit</button>
                        <div class="modal fade" role="dialog" id="edit-<?php echo $row['room_id']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <!-- <h3 id="">Update Guest<//?php echo $row['gid']; ?></h3> -->
                                    </div>
                                    <div class="modal-body">
                                                <form class="form-group"  method="POST">
                                                <input type="nomber" name="room_id" id="#edit-<?php echo $row['room_id']; ?>" class="form-control" value="<?php echo $row['room_id']; ?>"><br>
                                                    <input type="text" name="room_no" id="#edit-<?php echo $row['room_id']; ?>" class="form-control" value="<?php echo $row['room_no']; ?>"><br>
                                                    <input type="text" name="floor" id="#edit-<?php echo $row['room_id']; ?>" class="form-control" value="<?php echo $row['floor']; ?>"><br>
                                                    <input type="text" name="room_type" id="#edit-<?php echo $row['room_id']; ?>" class="form-control" value="<?php echo $row['room_type']; ?>"><br>
                                                    <input type="text" name="room_status" id="#edit-<?php echo $row['room_id']; ?>" class="form-control" value="<?php echo $row['room_status']; ?>"><br>
                                                    
                                                    <input type="text" name="room_price" id="#edit-<?php echo $row['room_id']; ?>" class="form-control" value="<?php echo $row['room_price']; ?>"><br>
                                                   
                                                    <button style="width:100%; margin: 15px 0px 0px 0px;" type="submit" class="btn btn-success" name="update" id="#edit-<?php echo $row['room_id']; ?>">  Update </button>
                                    
                                        </form>
                             </td>
                                    </div>
                              
                                
                                </div>
                            </div>
                        </div>
                        <td>
                      <form class="form-group" >  <a href="?idDelete=<?php echo $row['room_id'] ?>"><button name="Delete" type="submit" class="btn btn-danger"><i class="fa fa-trash fa-lg"></i> Delete</button></a>
                      </form>
                    </td>
                </tr> <?php 
            }
    }
else{
 echo 'Data Not Found';}
echo "</table></div>";
?>















<!-- 
			<table class="table table-bordered table-stripped table-condensed">
				<tr>
					<th>ID</th>
					<th>Full Name</th>
					<th>Address</th>
					<th>Country</th>
					<th>City</th>
                    <th>Date</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Gender</th>
				</tr> -->
	 
		 
		</div>


		  </div>  


                </div>
                </div>



                </div>

           </div>
 
      </div>
      

   

     
      </div>
    </div>
 
   
  </body>
</html>