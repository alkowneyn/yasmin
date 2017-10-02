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
$gid="";
$gfullname="";
$gdate="";
$floor="";
$rno="";
$rtype="";
$rprice="";



mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)


function getData()
{
$data =array();
$data[0] =$_POST['gid'];
$data[1] =$_POST['gfullname'];
$data[2] =$_POST['gdate'];
$data[3] =$_POST['floor'];
$data[4] =$_POST['rno'];
$data[5] =$_POST['rtype'];
$data[6] =$_POST['rprice'];





return $data;
}

if (isset($_POST['searchid'])) {
    $info = getData();
    $sql = "SELECT * FROM room WHERE gid= '$info[0]'";
    $search_result =mysqli_query($conn,$sql);
if (mysqli_num_rows($search_result)){
 while ($rows=mysqli_fetch_array($search_result)) {

$id=$rows['gid'];
$gfullname=$rows['gfullname'];
$gdate=$rows['gdate'];
$floor=$rows['floor'];
$rno=$rows['rno'];
$rtype=$rows['rtype'];
$rprice=$rows['rprice'];

}
}
}

// Update Command
// sql to delete a record
if (isset($_POST['update'])) {
      $info = getData();
$sql = "UPDATE room SET gfullname='$info[1]', gdate='$info[2]',floor='$info[3]', rno='$info[4]', rtype='$info[5]', rprice='$info[6]' WHERE gid='$info[0]'";
if ($conn->query($sql)===TRUE) {
    echo"Record updated successfully";
}
else {
    echo" Error updating record".mysql_error($conn);
}
}



if(isset($_GET['Delete'])){
    $sql = "SELECT * FROM room ";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $id=$row['id'];
    //$idDelete = $_GET['idDelete'];
    $sql = "DELETE FROM room WHERE  gid='$gid'";
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
        $query = " SELECT * FROM room  WHERE gid LIKE '%".$search."%' OR gfullname LIKE '%".$search."%'  OR floor LIKE '%".$search."%'  OR rno LIKE '%".$search."%'";
    }
    else
    {
        $query = " SELECT * FROM room ORDER BY gid ";
    }
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    { ?>
        <div class="table-responsive">
            <table class="table table-striped table-condensed table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Guest Full Name</th>
                    <th>Date</th>
                    <th>Floor</th>
                    <th>Room Number</th>
                    <th>Room Type</th>
                    <th>Room Price</th>
                     <th>Action</th>
                      <th>Action</th>
                   </tr>       
        <?php
            while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row["gid"] ?></td>
                    <td><?php echo $row["gfullname"] ?></td>
                    <td><?php echo $row["floor"] ?></td>
                    <td><?php echo $row["rno"] ?></td>
                    <td><?php echo $row["rtype"] ?></td>
                    <td><?php echo $row["rprice"] ?></td>
                   
                    <td>
                       <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#edit-<?php echo $row['gid']; ?>" id=""><i class="fa fa-pencil fa-lg"></i> Edit</button>
                        <div class="modal fade" role="dialog" id="edit-<?php echo $row['gid']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <!-- <h3 id="">Update Guest<//?php echo $row['gid']; ?></h3> -->
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-group"  method="POST">
                                        <input type="text" name="gid" id="#edit-<?php echo $row['gid']; ?>" class="form-control" value="<?php echo $row['gid']; ?>"><br>
                                            <input type="text" name="gfullname" id="#edit-<?php echo $row['gid']; ?>" class="form-control" value="<?php echo $row['gfullname']; ?>"><br>
                                            <select name="floor" id="#edit-<?php echo $row['gid']; ?>" class="form-control">
                                                <option value="<?php echo $row['floor']; ?>"><?php echo $row['floor']; ?></option>
                                                  
                                            </select>
                                            <select name="rno" id="#edit-<?php echo $row['gid']; ?>" class="form-control">
                                                <option value="<?php echo $row['rno']; ?>"><?php echo $row['rno']; ?></option>
                                            </select>
                                            <select name="rtype" id="#edit-<?php echo $row['gid']; ?>" class="form-control">
                                                <option value="<?php echo $row['rtype']; ?>"><?php echo $row['rtype']; ?></option>
                                            </select>
                                             <select name="rprice" id="#edit-<?php echo $row['gid']; ?>" class="form-control">
                                                <option value="<?php echo $row['rprice']; ?>"><?php echo $row['rprice']; ?></option>
                                            </select>
                                            <button type="submit" class="btn btn-success" name="update" id="#edit-<?php echo $row['gid']; ?>">Update Gust</button>
                             
                                        </form>
                             </td>
                                    </div>
                              
                                
                                </div>
                            </div>
                        </div>
                        <td>
                      <form class="form-group" >  <a href="?idDelete=<?php echo $row['gid'] ?>"><button name="Delete" type="submit" class="btn btn-danger"><i class="fa fa-trash fa-lg"></i> Delete</button></a>
                      </form>
                    </td>
                </tr>
                <?php 
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