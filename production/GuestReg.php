<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"simpledata");
?>




<?php
include "config.php";
session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
}

?>
<?php include("guestcon.php"); ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <script src="js/jquery-3.2.1.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>

  <nav class="navbar navbar-inverse navbar-static-Top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Hotel Yazmin Plaza</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav"> 
      <li class="active"><a href="index.php">   Home<span class="sr-only">(current)</span></a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
        <!-- <//?php
        if($_SESSION['type']=='Adminstrator'){
          ?>
        <li><a href="#">Tempelate</a></li>
        <li><a href="#">Sitting</a></li>
        <li><a href="#">Media</a></li>
        <//?php
        } else{
          ?>
        <li><a href="#">Profile</a></li> -->
        
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <//?php
        }
          ?> -->
      </ul>
      <?php
        if($_SESSION['type']=='Member'){
          ?>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <?php
        }
          ?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo $_SESSION['username'] ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">logout <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!-- <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li> -->
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
   
     <div class="container-fluid">
           <div class="row">
               <div class="col-md-2"> 
               <div class="list-group">
  <!-- <a href="GuestReg.php" class="list-group-item ">Guest</a> -->
  <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Guest
    <span class="caret"></span>
   </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
  <li><a href="GuestReg.php">Guest Registration</a></li>
  <li><a href="search.php">Guest List</a></li>
  </ul>
</div>

  <a href="#" class="list-group-item">Rooms</a>
  <a href="#" class="list-group-item">Booking</a>
  <a href="#" class="list-group-item">Reservation</a>
  <a href="#" class="list-group-item">Report</a>
  <?php
        if($_SESSION['type']=='Adminstrator'){
          ?>
  <a href="#" class="list-group-item">Media</a>
  <a href="#" class="list-group-item">Sitting</a>
  <?php
        }else{
          ?>
  <a href="#" class="list-group-item">Profile</a>
  <?php
        }
          ?>
  <a href="logout.php" class="list-group-item">logout</a>
</div>
                         
               </div>
            
                <!-- <div class="jumbotron"> -->
                   
                <div class="container">
    <!-- <h1 class="well">Gust Regestration </h1> -->
	<div class="col-lg-10 well">
	<div class="row">
				<form method="post" action="GuestReg.php">
					<div class="col-sm-8">
				
        		<div class="row">
					<div class="col-sm-12 form-group">
								<label>Full Name</label>
								<input type="text" name="gfullname" placeholder="Enter your Full Name Here.." class="form-control">
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<input name="gaddress" placeholder="Enter Address Here.." rows="3" class="form-control">
						</div>	
						<div class="row">
							<div class="col-sm-3 form-group">
								<label>Country</label>
								<div class="control-group">
                                  <select id="country" name="gcountry"  class="form-control">
                                    <option value="Somalia"class="form-control"> Somalia</option>
                                    <option value="Ethopia"class="form-control"> Ethopia</option>
                                    <option value="Kenya"class="form-control"> Kenya</option>
                                    <option value="Jabuti"class="form-control"> Jabuti</option>


                                       

                                  </select> 
                                </div>
							</div>	
							<div class="col-sm-4 form-group">
								<label>city</label>
								<div class="control-group">
                                  <select id="country" name="gcity"  class="form-control">
                                    <option value="Somalia"class="form-control"> Somalia</option>
                                    <option value="Ethopia"class="form-control"> Ethopia</option>
                                    <option value="Kenya"class="form-control"> Kenya</option>
                                    <option value="Jabuti"class="form-control"> Jabuti</option>


                                       

                                  </select> 
                                </div>
							</div>
							<div class="col-sm-5 form-group">
								<label>Date of Regestration</label>
								<input type="date" name="gdate" placeholder="Enter datae Code Here.." class="form-control">
							</div>		
						</div>
            <div class="row">
					<div class="col-sm-12 form-group">
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="gphone" placeholder="Enter Phone Number Here.." class="form-control">
					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="Email" name="gemail" placeholder="Enter Email Address Here.." class="form-control">
            <label class="row">Gender:</label>
            </div>
            </div>
            </div>
  <div class="form-group">
  <div class="row"> 
       <div class="col-sm-2">
            <label class="radio-inline">
                 <input name="ggender" id="ggender-male" value="Male" type="radio" />Male
             </label>
        </div>
      
        <div class="col-sm-2">
             <label class="radio-inline">
                  <input name="ggender" id="ggender-female" value="Female" type="radio" />Female
             </label>
         </div>
   </div>
   </div>
				<div class="row">
					<div class="col-sm-12">
					<div class="form-group">
					<button  type="submit" name="register" class="btn btn-lg btn-info">Rigester</button>	
								</div>
                </div>
                </div>
				
				</form> 
				</div>

	</div>
	</div>
    

                  


        
      

   </body>
</html>