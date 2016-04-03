<?php
	include('login/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="jasny-bootstrap/bootstrap/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/style-main.min.css">
    <link rel="stylesheet" href="css/skin.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="jasny-bootstrap/js/jasny-bootstrap.min.js"></script>


</head>
	<body class="hold-transition skin-black sidebar-mini">
    <div class="wrapper">
        
        
        <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <div class="logo">
          <span class="logo-mini">
              <img src="img/seal.png" style="width:30px;height:30px;">
          </span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>PMA</b>VRMS</span>
        </div>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
        </nav>
          
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar -->
        <section class="sidebar">
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            <!-- Optionally, you can add icons to the links -->
              
            <!-- Dashboard -->
            <li class=""><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>
              
            <!-- Forms -->
            <li class="treeview active">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Forms</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li class="active"><a href="form1.php">Camp Allen/Navybase</a></li>
                <li><a href="form2.php">AFP</a></li>
              </ul>
            </li>
              
            <!-- Pending -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-option-horizontal"></i> <span>Pending</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Civilian</a></li>
                <li><a href="#">Military</a></li>
                <li><a href="#">Vehicles</a></li>
              </ul>
            </li>
              
            <!-- Registered -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Registered</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="registeredPerson.php">Applicants</a></li>
                <li><a href="registeredAFP.php">Military</a></li>
                <li><a href="registeredVehicle.php">Vehicles</a></li>
              </ul>
            </li>
            
            <!-- Vehicle Log -->
            <li><a href="#"><i class="glyphicon glyphicon-road"></i> <span>Vehicle Log</span></a></li>
              
            <!-- Reports -->
            <li><a href="#"><i class="glyphicon glyphicon-flag"></i> <span>Reports</span></a></li>
              
            <!-- Employee Log -->
            <li><a href="#"><i class="glyphicon glyphicon-user"></i> <span>Employee Log</span></a></li>

              
            
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Camp Allen / Navy Base
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
	<form action="logic/add_form1Logic.php" method="POST">
		<!-- personal information -->
		<div class="row">
            <div class="col-md-7">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title">Personal Information</h3> </div>
                    <div class="panel-body">
                        <input style="display:none;" type="text" name="a_applicantId" readonly>
                        
                        <!-- image upload -->
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                          <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span>
                            <input type="file" name="..."></span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                          </div>
                        </div>

                        <br>
                        <div class="form-horizontal">                  
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Last Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Last Name" name='a_lastname'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">First Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="First Name" name='a_firstname'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Middle Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Middle Name" name='a_middlename'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Address" name='a_address'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Occupation</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Occupation" name='a_occupaton'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Office Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Address" name='a_officeAddress'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Driver's License</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Driver's License" name='a_driversLicense'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Expiration Date</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Expiration Date" name='a_expirationDate'>
                              </div>
                            </div>
                            
                           
                            
                        </div>
                    </div>
                </div>

                    <!-- requirements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Requirements</h3> </div>
                        <div class="panel-body">
                            <div class="checkbox">
                            <label><input name='requirements[]' value='1' type="checkbox">Photocopy of current military ID, Office ID, or driver's license</label>
                            </div>
                            <div class="checkbox">
                            <label><input name='requirements[]' value='2' type="checkbox">Photocopy of retirement/separation/discharged order for former military personnel</label>
                            </div>
                            <div class="checkbox">
                            <label><input name='requirements[]' value='3' type="checkbox">Photocopy of order for Commissionship/Enlistment for AFP Reservists</label>
                            </div>
                            <div class="checkbox">
                            <label><input name='requirements[]' value='4' type="checkbox">Photocopy of latest appointment order for AFP civilian employees and DND organic personnel</label>
                            </div>
                            <div class="checkbox">
                            <label><input name='requirements[]' value='5' type="checkbox">Photocopy of marriage contract, in case the vehicle is registered in the name of the non-military spouse</label>
                            </div>
          
                        </div>
                    </div>
                </div>
        
        <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Vehicle Type/Class</h3> </div>
                        <div class="panel-body">
                        <div class="radio">
                            <label><input type="radio" name="a_class" value="Class A">Class A</label>
                        </div>
        
                        <div class="radio">
                            <label><input type="radio" name="a_class" value="Class B">Class B</label>
                        </div>
        
                        <div class="radio">
                            <label><input type="radio" name="a_class" value="Class C">Class C</label>
                        </div>
        
                        </div>
                    </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Vehicle Information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-horizontal">
                            <input style="display:none;" type="text" name="vehicleId" readonly>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Vehicle Make/s</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Vehicle Make/s" name='vehicleMake'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Plate No.</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Plate No." name='plateNo'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Year Model</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Year Model" name='yearModel'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Color</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Color" name='Color'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Motor No.</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Motor No." name='motorNo'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Chassis No.</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Chassis No." name='chassisNo'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Sticker No.</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Sticker No." name='stickerNo'>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- submit button -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <button type="button" class="btn btn-primary btn-lg pull-right" value="Ok"> 
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Submit Form
                        </button> 
                    </div>
                </div>
            </div>
        
		</div>
		<!--end of div class row-->
	</form>
</section>
<!-- Main content -->

        <br/><br/>
      
        </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        TISIS
      </footer>

    </div><!-- ./wrapper -->


        
        

		


<script src="bootstrap/js/jQuery-2.1.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/app.min.js"></script>
    	<script src="jasny-bootstrap/js/fileinput.js"></script>

	</body>
</html>