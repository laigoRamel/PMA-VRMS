<?php
	include('login/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registered Military</title>

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
	
    <?php include('logic/registered_military_logic.php'); ?>
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

            <li class="header">FORMS</li>
            <!-- Forms -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>New Form</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form1.php">Camp Allen/Navybase</a></li>
                <li><a href="form2.php">AFP</a></li>
              </ul>
            </li>
            
            <!-- Accounting --> 
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Accounting</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="accountingApplicant.php">Civilians</a></li>
                <li><a href="AccountingMilitary.php">Military</a></li>
              </ul>
            </li>
              
            <!-- Registered -->
            <li class="treeview active">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Registered</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="registeredApplicant.php">Applicants</a></li>
                <li class="active"><a href="registeredAFP.php">Military</a></li>
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
            Registered AFP
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
	
        <div class="'container">
			<div class="row">
				<div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
                            <table class="table table-bordered table-hover" id="bootstrap-table">
                                <thead>
                                    <th>Profile</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Rank</th>
                                    <th>BR / SVC</th>
                                    <th>AFPSN</th>
                                    <th>Residence Address</th>
                                    <th>Residence Tel. No.</th>
                                    <th>Email Address</th>
                                    <th>Mobile No.</th>
                                    <th>Designated Office</th>
                                    <th>Office Tel. No.</th>
                                    <th>Office Address</th>
                                    <th>Date of Retirement</th>
                                    <th>Class</th>
                                    <th colspan=4 style="text-align:center">Options</th>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($militarys as $key => $military) {
                                            echo <<<DATA
                                                <tr id='military_$key'>
                                                    <td style='display:none'>$military[m_militaryId]</td>
                                                    <td>$military[m_profile]</td>
                                                    <td>$military[m_lastname]</td>
                                                    <td>$military[m_firstname]</td>
                                                    <td>$military[m_middlename]</td>
                                                    <td>$military[m_rank]</td>
                                                    <td>$military[m_brSvc]</td>
                                                    <td>$military[m_afpsn]</td>
                                                    <td>$military[m_residenceAddress]</td>
                                                    <td>$military[m_residenceTelNo]</td>
                                                    <td>$military[m_emailAddress]</td>
                                                    <td>$military[m_mobileNo]</td>
                                                    <td>$military[m_designatedOffice]</td>
                                                    <td>$military[m_officeTelNo]</td>
                                                    <td>$military[m_officeAddress]</td>
                                                    <td>$military[m_retirementDate]</td>
                                                    <td>$military[m_class]</td>
                                                    <td><button class="btn btn-info" data-toggle='modal' data-target='#view_form2' onclick='view_form2($key)'>View</button></td>
                                                    <td><button class="btn btn-success" data-toggle='modal' data-target='#renew_military' onclick='renew_military($key)'>Renew</button></td>
                                                    <td><button class="btn btn-warning" data-toggle='modal' data-target='#edit_form2' onclick='edit_form2($key)'>Edit</button></td>
                                                    <td><button class="btn btn-danger" data-toggle='modal' data-target='#delete_form2' onclick='delete_form2($key)'>Delete</button></td>
                                                </tr>
DATA;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
			</div>
		</div>

	<script src="bootstrap/js/jquery.sortelements.js" type="text/javascript"></script>
	<script src="bootstrap/js/jquery.bdt.js" type="text/javascript"></script>
	<script>
		$(document).ready( function () {
			$('#bootstrap-table').bdt();
		});
	</script>

		<?php  
			require_once('modals/view_form2.php');
			require_once('modals/renew_military.php');
			require_once('modals/edit_form2.php');
			require_once('modals/delete_form2.php');
		?>

		<script type="text/javascript">
			var edit_form2 = function(key){
				var row = $('#military_'+key);
				var m_id = row.find('td:first-child').text();
				var m_lastname = row.find('td:nth-child(2)').text();
				var m_firstname = row.find('td:nth-child(3)').text();
				var m_middlename = row.find('td:nth-child(4)').text();
				var m_rank = row.find('td:nth-child(5)').text();
				var m_brSvc = row.find('td:nth-child(6)').text();
				var m_afpsn = row.find('td:nth-child(7)').text();
				var m_residenceAddress = row.find('td:nth-child(8)').text();
				var m_residenceTelNo = row.find('td:nth-child(9)').text();
				var m_emailAddress = row.find('td:nth-child(10)').text();
				var m_mobileNo = row.find('td:nth-child(11)').text();
				var m_designatedOffice = row.find('td:nth-child(12)').text();
				var m_officeTelNo = row.find('td:nth-child(13)').text();
				var m_officeAddress = row.find('td:nth-child(14)').text();
				var m_retirementDate = row.find('td:nth-child(15)').text();
				
				var modal = $('#edit_modal_form2');
				modal.find('input[name=m_militaryId]').val(m_id);
				modal.find('input[name=m_lastname]').val(m_lastname);
				modal.find('input[name=m_firstname]').val(m_firstname);
				modal.find('input[name=m_middlename]').val(m_middlename);
				modal.find('input[name=m_rank]').val(m_rank);
				modal.find('input[name=m_brSvc]').val(m_brSvc);
				modal.find('input[name=m_afpsn]').val(m_afpsn);
				modal.find('input[name=m_residenceAddress]').val(m_residenceAddress);
				modal.find('input[name=m_residenceTelNo]').val(m_residenceTelNo);
				modal.find('input[name=m_emailAddress]').val(m_emailAddress);
				modal.find('input[name=m_mobileNo]').val(m_mobileNo);
				modal.find('input[name=m_designatedOffice]').val(m_designatedOffice);
				modal.find('input[name=m_officeTelNo]').val(m_officeTelNo);
				modal.find('input[name=m_officeAddress]').val(m_officeAddress);
				modal.find('input[name=m_retirementDate]').val(m_retirementDate);

			}
			
			var delete_form2 = function(key){
				var row = $('#military_'+key);
				
				var m_id = row.find('td:first-child').text();
				var m_lastname = row.find('td:nth-child(2)').text();
				var m_firstname = row.find('td:nth-child(3)').text();
				var m_middlename = row.find('td:nth-child(4)').text();
				var m_rank = row.find('td:nth-child(5)').text();
				var m_brSvc = row.find('td:nth-child(6)').text();
				var m_afpsn = row.find('td:nth-child(7)').text();
				var m_residenceAddress = row.find('td:nth-child(8)').text();
				var m_residenceTelNo = row.find('td:nth-child(9)').text();
				var m_emailAddress = row.find('td:nth-child(10)').text();
				var m_mobileNo = row.find('td:nth-child(11)').text();
				var m_designatedOffice = row.find('td:nth-child(12)').text();
				var m_officeTelNo = row.find('td:nth-child(13)').text();
				var m_officeAddress = row.find('td:nth-child(14)').text();
				var m_retirementDate = row.find('td:nth-child(15)').text();
				
				var modal = $('#delete_modal_form2');
				modal.find('input[name=m_militaryId]').val(m_id);
				modal.find('input[name=m_lastname]').val(m_lastname);
				modal.find('input[name=m_firstname]').val(m_firstname);
				modal.find('input[name=m_middlename]').val(m_middlename);
				modal.find('input[name=m_rank]').val(m_rank);
				modal.find('input[name=m_brSvc]').val(m_brSvc);
				modal.find('input[name=m_afpsn]').val(m_afpsn);
				modal.find('input[name=m_residenceAddress]').val(m_residenceAddress);
				modal.find('input[name=m_residenceTelNo]').val(m_residenceTelNo);
				modal.find('input[name=m_emailAddress]').val(m_emailAddress);
				modal.find('input[name=m_mobileNo]').val(m_mobileNo);
				modal.find('input[name=m_designatedOffice]').val(m_designatedOffice);
				modal.find('input[name=m_officeTelNo]').val(m_officeTelNo);
				modal.find('input[name=m_officeAddress]').val(m_officeAddress);
				modal.find('input[name=m_retirementDate]').val(m_retirementDate);
			}

			var view_form2 = function(key){
				var row = $('#military_'+key);
				var m_id = row.find('td:first-child').text();
				var m_lastname = row.find('td:nth-child(2)').text();
				var m_firstname = row.find('td:nth-child(3)').text();
				var m_middlename = row.find('td:nth-child(4)').text();
				var m_rank = row.find('td:nth-child(5)').text();
				var m_brSvc = row.find('td:nth-child(6)').text();
				var m_afpsn = row.find('td:nth-child(7)').text();
				var m_residenceAddress = row.find('td:nth-child(8)').text();
				var m_residenceTelNo = row.find('td:nth-child(9)').text();
				var m_emailAddress = row.find('td:nth-child(10)').text();
				var m_mobileNo = row.find('td:nth-child(11)').text();
				var m_designatedOffice = row.find('td:nth-child(12)').text();
				var m_officeTelNo = row.find('td:nth-child(13)').text();
				var m_officeAddress = row.find('td:nth-child(14)').text();
				var m_retirementDate = row.find('td:nth-child(15)').text();
				
				var modal = $('#view_modal_form2');
				modal.find('input[name=m_militaryId]').val(m_id);
				modal.find('input[name=m_lastname]').val(m_lastname);
				modal.find('input[name=m_firstname]').val(m_firstname);
				modal.find('input[name=m_middlename]').val(m_middlename);
				modal.find('input[name=m_rank]').val(m_rank);
				modal.find('input[name=m_brSvc]').val(m_brSvc);
				modal.find('input[name=m_afpsn]').val(m_afpsn);
				modal.find('input[name=m_residenceAddress]').val(m_residenceAddress);
				modal.find('input[name=m_residenceTelNo]').val(m_residenceTelNo);
				modal.find('input[name=m_emailAddress]').val(m_emailAddress);
				modal.find('input[name=m_mobileNo]').val(m_mobileNo);
				modal.find('input[name=m_designatedOffice]').val(m_designatedOffice);
				modal.find('input[name=m_officeTelNo]').val(m_officeTelNo);
				modal.find('input[name=m_officeAddress]').val(m_officeAddress);
				modal.find('input[name=m_retirementDate]').val(m_retirementDate);

			}
			
		</script>
      
        </section>  <!-- /Main content -->

        <br/><br/>
      
        </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        TISIS
      </footer>

    </div><!-- ./wrapper -->



</body>
    
    
    
 
</html>