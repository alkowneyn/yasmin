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
<?php include("roomconn2.php"); ?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotel yaasmiin plaza| </title>
  <script src="jquery-3.2.1.js"></script>
    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Hotel Yasmin Plaza</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/said.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Saryan Software</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
               <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Guest <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">Guest Registration</a></li>
                      <li><a href="search.php">Guest list</a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> check in <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="checkin.php">  check in </a></li>
                         <li><a href="rsearch.php">checkin list</a></li>
                         </ul>
                         </li>
                         <li><a><i class="fa fa-home"></i> Room<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="room.php">Room Regestration</a></li>
                      <li><a href="rooms.php">Room list</a></li>
                     
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/said.jpg" alt="">Said Saryan
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/said.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Said Saryan</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/said.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/said.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/said.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        

        <!-- /top navigation -->
        
 <div class="container-fluid">
    <!-- <h1 class="well">Gust Regestration </h1> -->
	<div class="col-lg-7 col-lg-offset-4 ">
	<div class="row">
  <div class="panel panel-primary">
			<div class="panel-heading"><center>check in</center> 
			</div>
			<div class="panel-body">
				<form  style="width:100%; margin: 30px 0px 0px 0px";  id="guest-form"  method="post" action="room.php">
										
						<div class="row">
							<div class="col-sm-8 form-group">
								<label control-label" for="state"">Floor*</label>
								<div class="control-group">
                                  <select id="floor" name="floor"  class="form-control" required>
                                     <?php
                                            $sql = "select floor  from rooms";
                                            $result = $conn->query($sql);
                                            if($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) { ?>
                                            <option value="<?php echo $row['floor']; ?>"><?php echo $row['floor']; ?></option>
                                            <?php }
                                            }
                                        ?>
                                   


                                       

                                  </select> 
                                </div>
							</div>	
							<div class="col-sm-4   form-group">
								<label control-label" for="city"">Room Number*</label>
								<div class="control-group">
              
								<input type="number" name="room_no" placeholder="Enter room no.." class="form-control" required>
                                </div>
							</div>
								
              </div>
              
            <div class="row">
					<div class="col-sm-8 form-group">
					<div class="form-group">
						<label control-label" for="rprice"">Room Type*</label>
						<select id="rtype" name="rtype"  class="form-control" required>
                                    <?php
                                            $sql = "select rtype  from rooms";
                                            $result = $conn->query($sql);
                                            if($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) { ?>
                                            <option value="<?php echo $row['rtype']; ?>"><?php echo $row['rtype']; ?></option>
                                            <?php }
                                            }
                                        ?>
                                  </select> 
					</div>		
					
            </div>
            <div class="col-sm-4 form-group">
					<div class="form-group">
						<label control-label" for="rprice"">Room Price*</label>
					
                                  <input type="text" name="rprice" placeholder="Enter room no.." class="form-control" required> 
                              </div>		
                              
                                </div>
                                
                                </div>
  <div class="row">
					<div class="col-sm-8 form-group">
					<div class="form-group">
						<label control-label" for="rprice"">Room Status*</label>
						<select id="room_status" name="room_status"  class="form-control" required>
                                    <?php
                                            $sql = "select rstatus  from hrooms";
                                            $result = $conn->query($sql);
                                            if($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) { ?>
                                            <option ><?php echo $row['rstatus']; ?></option>
                                            <?php }
                                            }
                                        ?>
                                  </select> 
					</div>		
					
            </div>
            </div>
                      <div class="form-group">
                        <div class="col-md-8  col-md-offset-4">
                           <button style="width:100%; margin: 15px 0px 0px 0px;" type="submit" name="register" class="btn btn-lg btn-danger">Rigester</button>	
                        </div>
                        
                      </div>

				
				</form> 
        </div>
				</div>

	</div>
	</div>
        
    </div>

  <script src="jquery-3.2.1.js"></script>
    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
  
<script>
      /// waa midka sameynaya dropdown items-ka
      $(document).ready(function(){
          $("#rtype").on("change", function(){
            
          var ItemID = $(this).val();
          if(ItemID){
              $.get(
                  "rno.php",
                  {rtype: ItemID},
                  function(data){
                      $("input[name=rprice]").val(data);
                  }
              );
              
          }
              else{
                  $("#rno").html("enter");
              }
      });
      });
</script>

  
</html>
