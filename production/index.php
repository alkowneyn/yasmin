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
    <!--bootstrapvalidator-->
    <link href="../vendors/css/bootstrapValidator.min.css" rel="stylesheet">
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
    <!-- validator-->
    <script src="../vendors/js/bootstrapValidator.min.js" type="text/javascript"></script>
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
        


 <div class="container">
  
    <!-- <h1 class="well">Gust Regestration </h1> -->
	<div class="col-lg-6 col-lg-offset-4 ">
	<div class="row">
  <div class="panel panel-primary">
			<div class="panel-heading"><center>Guest </center> 
			</div>
			<div class="panel-body">
				<form  id="guest-form"  method="post" action="index.php">
					<div class="col-sm-8">
				
        		<div class="row">
					<div class="col-sm-12 form-group">
								<label control-label" for="name"">Full Name*</label>
								<input type="text" id="name" name="gfullname" pattern="[a-zA-Z]{1,35}+[a-zA-Z]{1,35}" placeholder="Enter your Full Name Here.." class="form-control" required>
							</div>
						</div>					
						<div class="form-group">
							<label control-label" for="address"">Address*</label>
							<input type="text" id="address"  name="gaddress" placeholder="Enter Address Here.." rows="3" class="form-control" required>
						</div>	
						<div class="row">
							<div class="col-sm-3 form-group">
								<label control-label" for="state"">State*</label>
								<div class="control-group">
                                  <select id="state" name="gcountry"  class="form-control" required>
                                     <?php
                                            $sql = "select name  from states";
                                            $result = $conn->query($sql);
                                            if($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) { ?>
                                            <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                            <?php }
                                            }
                                        ?>
                                    


                                       

                                  </select> 
                                </div>
							</div>	
							<div class="col-sm-4 form-group">
								<label control-label" for="city"">city*</label>
								<div class="control-group">
                                  <select id="city" name="gcity"  class="form-control" required>
                                <?php
                                            $sql = "select name  from pob";
                                            $result = $conn->query($sql);
                                            if($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) { ?>
                                            <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                            <?php }
                                            }
                                        ?>
                                  </select> 
                                </div>
							</div>
							<div class="col-sm-5 form-group">
								<label >Date of Regestration*</label>
								<input type="date" name="gdate" placeholder="Enter datae Code Here.." class="form-control" required>
							</div>		
						</div>
            <div class="row">
					<div class="col-sm-12 form-group">
					<div class="form-group">
						<label control-label" for="phone"">Phone Number*</label>
						<input type="number"  id="phone" name="gphone" placeholder="Enter Phone Number Here.." class="form-control" required>
					</div>		
					<div class="form-group">
						<label control-label" for="email"">Email Address</label>
						<input type="Email" id="email" name="gemail" placeholder="Enter Email Address Here.." class="form-control">
            <label class="row">Gender*:</label>
            </div>
            </div>
            </div>
  <div class="form-group">
  <div class="row"> 
       <div class="col-sm-2">
            <label class="radio-inline" control-label" for="ggender-male"">
                 <input name="ggender" id="ggender-male" value="Male" type="radio" required/>Male
             </label>
        </div>
      
        <div class="col-sm-2">
             <label class="radio-inline"  control-label" for="ggender-female"">
                  <input name="ggender" id="ggender-female" value="Female" type="radio" required/>Female
             </label>
         </div>
   </div>
   </div>
				<div class="row">
					<div class="col-sm-10 col-md-offset-2">
					<div class="form-group">
					<button  style="width:100%; margin: 15px 0px 0px 0px;"   type="submit" name="register"  class="btn btn-lg btn-danger" >Rigester</button>	
								</div>
                </div>
               
				</div>
				</form> 
        </div>
        </div>
        <div id="confirmation" class="alert-succes hidden">
        <span class="glyphicon glyphicon-star"></span> Thank yuo for your Regestration 
        </div>
				</div>

	</div>
	</div>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
  <script src="jquery-3.2.1.js"></script>
    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!--bootstrapvalidator-->
    <link href="../vendors/css/bootstrapValidator.min.css" rel="stylesheet">
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
     <script src="../vendors/js/bootstrapValidator.min.js" type="text/javascript"></script>
	
  </body>
<script type="text/javascript">
   $(document).ready(function (){
       var validator = $("#guest-form").bootstrapvalidator({
           feedbackIcons: {
            valid: "glyphicon glyphicon-ok",
            invalid: "glyphicon glyphicon-remove",
            validating: "glyphicon glyphicon-refresh",
           },
           
             fields : {
                    email :{
                           message : "Email address is required",
                           validators : {
                             notEmpty : {
                               message : "please provide an email address"
                             },
                              stringLength: {
                                min : 6,
                                max : 35,
                                message: " Email address must bee between 6 and 35 charecters long"
                              },

                           }
                    },

                  state :{
                    validators : {
                      greaterThan : {
                        value: 1,
                        message: "state is required"
                      }
                    }
                  } 

             }

       });
validator.on("success.form.bv", function (e) {
  e.preventDefault();
  $("#guest-form").addclass("hidden");
   $("#confirmation").removeclass("hidden");
});
   });


</script>






</html>
