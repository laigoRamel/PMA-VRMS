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
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/style-main.min.css">
    <link rel="stylesheet" href="css/skin.min.css">
    <link rel="icon" href="img/seal.png">
    
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/app.min.js"></script>
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
          <!-- logo2 -->
          <span class="logo-lg"><b>PMA</b>VRMS</span>
        </div>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
            
            <!-- logout button -->
            <ul class="nav navbar-nav pull-right">
			<li class="drop-down">
				<a class="drop-down toggle" data-toggle="dropdown" href=""><?php echo $login_session; ?><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>
						<a href='login/logout.php'>Log out</a>
					</li>
				</ul>
			</li>
		</ul>
        </nav>
        
        
      </header>
      <!-- Left side column -->
      <aside class="main-sidebar">

        <!-- sidebar -->
        <section class="sidebar">
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">NAVIGATION</li>
              
            <!-- Dashboard -->
            <li class=""><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>
              
            
            
            <!-- Vehicle Log -->
            <li><a href="vehicleLog.php"><i class="glyphicon glyphicon-road"></i> <span>Vehicle Log</span></a></li>
              
            <!-- Reports -->
            <li><a href="reports.php"><i class="glyphicon glyphicon-flag"></i> <span>Reports</span></a></li>
              
            <!-- Employee Log -->
            <li><a href="login/logbook_page.php"><i class="glyphicon glyphicon-user"></i> <span>Employee Log</span></a></li>
            
            <!-- Accounting --> 
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Accounting</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="accountingApplicant.php">Civilians</a></li>
                <li><a href="AccountingMilitary.php">Military</a></li>
              </ul>
            </li>

            <li class="header">FORMS</li>
            <!-- Forms -->
            <li class="treeview active">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>New Form</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form1.php">Camp Allen/Navybase</a></li>
                <li class="active"><a href="form2.php">AFP</a></li>
              </ul>
            </li>
              
            <!-- Registered -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Registered</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="registeredApplicant.php">Applicants</a></li>
                <li><a href="registeredAFP.php">Military</a></li>
                <li><a href="registeredVehicle.php">Vehicles</a></li>
              </ul>
            </li>
              
            <!-- Pending -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-option-horizontal"></i> <span>Pending</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="pendingApplicant.php">Civilian</a></li>
                <li><a href="pendingMilitary.php">Military</a></li>
              </ul>
            </li>
            
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
	<form action="logic/add_form2Logic.php" method="POST">
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
                            <input type="file" name="m_profile"></span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                          </div>
                        </div>

                        <br>
                        <div class="form-horizontal">                  
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Last Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Last Name" name='m_lastname'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">First Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="First Name" name='m_firstname'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Middle Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Middle Name" name='m_middlename'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Rank</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Rank" name='m_rank'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">BR / SVC</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="BR / SVC" name='m_brSvc'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">AFPSN</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="AFPSN" name='m_afpsn'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Residence Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Residence Address" name='m_residenceAddress'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Residence Tel. No.</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Residence Tel. No." name='m_residenceTelNo'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Email Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Email Address" name='m_emailAddress'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Mobile No.</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Mobile No." name='m_mobileNo'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Designated Office</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Designated Office" name='m_designatedOffice'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Office Tel. No.</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Office Tel. No." name='m_officeTelNo'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Office Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Office Address" name='m_officeAddress'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Date of Retirement</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Date of Retirement" name='m_retirementDate'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Class</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Class" name='m_class'>
                              </div>
                            </div>
                            
                        
                            
                           
                            
                        </div>
                    </div>
                </div>

                    
                </div>
        
        <div class="col-md-5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Vehicle Type/Class</h3> </div>
                        <div class="panel-body">
                        <div class="radio">
                            <label><input type="radio" name="a_class" value="Class A">Class A (PASSCARD)</label>
                            <p>&emsp; a. Registered to active Military Personnel</p>
                            <p>&emsp; b. Staff vehicles registered to the AFP</p>
                        </div>
        
                        <div class="radio">
                            <label><input type="radio" name="a_class" value="Class B">Class B (RED Sticker)</label>
                            <p>&emsp; a. Former military personnel or AFP Reservists</p>
                            <p>&emsp; b. Unremarried widow/widower of Military Personnel</p>
                            <p>&emsp; c. AFP & DND Civillian employees</p>
                        </div>
        
                        <div class="radio">
                            <label><input type="radio" name="a_class" value="Class C">Class C (YELLOW Sticker)</label>
                            <p>&emsp; a. Concessionaires/Traders with AFP Contract</p>
                            <p>&emsp; b. Official/Employee/Member of tenant entity/club facility on post</p>
                            <p>&emsp; c. Diplomats and expatriates</p>
                            <p>&emsp; d. Selected Sponsored Civilians</p>
                        </div>
        
                        </div>
                    </div>
                
                <!-- Requirements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Requirements</h3>
                    </div>
                    
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
            
                <div class="col-md-12">
                <!-- Vehicle Information -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Vehicle Information</h3> </div>
                        <div class="panel-body">
                            <div class="form-horizontal dynamic_field">
                            <input style="display:none;" type="text" name="vehicleId" readonly>
                            <table class="table table-bordered" id="dynamic_field">
                                
					<tr>
            <td>
              <select name="wheels[]" class="form-control name_list" >
                <option value="">No. of Wheels...</option>
                <option value="2-wheeled">2-wheeled</option>
                <option value="4-wheeled">4-wheeled</option>
              </select>
            </td>  
						<td><input type="text" name="vehicleMake[]" placeholder="Vehicle Make" class="form-control name_list" /></td>  
						<td><input type="text" name="plateNo[]" placeholder="Plate No." class="form-control name_list" /></td>  
						<td>
              <select name="yearModel[]" class="form-control name_list">
                <option value="">Year Model...</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
              </select>
            </td>  
						<td><input type="text" name="color[]" placeholder="Color" class="form-control name_list" /></td>  
						<td><input type="text" name="motorNo[]" placeholder="Motor No." class="form-control name_list" /></td>  
						<td><input type="text" name="chassisNo[]" placeholder="Chassis No." class="form-control name_list" /></td>  
						<td><input type="text" name="stickerNo[]" placeholder="Sticker No" class="form-control name_list" /></td>  
						<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
					</tr>  
                            
                            </table>
                                
                            
                        </div>
                        </div>
                    </div>
                    
                    <!-- submit button -->
                    <div class="panel-body">
                        <button type="button submit" class="btn btn-primary btn-lg pull-right" value="Ok"> 
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Submit Form
                        </button> 
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


        

</body>
    

    <script type="text/javascript">
		$(document).ready(function(){  
			var i=1;  
			$('#add').click(function(){  
				i++;  
				$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="vehicleMake[]" placeholder="Vehicle Make" class="form-control name_list" /></td><td><input type="text" name="plateNo[]" placeholder="Plate No." class="form-control name_list" /></td><td><input type="text" name="yearModel[]" placeholder="Year Model" class="form-control name_list" /></td><td><input type="text" name="color[]" placeholder="Color" class="form-control name_list" /></td><td><input type="text" name="motorNo[]" placeholder="Motor No." class="form-control name_list" /></td><td><input type="text" name="chassisNo[]" placeholder="Chassis No." class="form-control name_list" /></td><td><input type="text" name="stickerNo[]" placeholder="Sticker No" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
			});  
			$(document).on('click', '.btn_remove', function(){  
				var button_id = $(this).attr("id");   
				$('#row'+button_id+'').remove();  
			});  
		});  
	</script>
    
    
</html>