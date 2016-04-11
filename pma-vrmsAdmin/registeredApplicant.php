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
	
    <?php include('logic/registered_applicant_logic.php'); ?>
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
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>New Form</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form1.php">Camp Allen/Navybase</a></li>
                <li><a href="form2.php">AFP</a></li>
              </ul>
            </li>
              
            <!-- Registered -->
            <li class="treeview active">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Registered</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li class="active"><a href="registeredApplicant.php">Applicants</a></li>
                <li><a href="registeredAFP.php">Military</a></li>
                <li><a href="registeredApplicantVehicle.php">Applicant Vehicles</a></li>
                <li><a href="registeredAFPVehicle.php">Military Vehicles</a></li>
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
            Registered Applicants
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
                                    <th>Address</th>
                                    <th>Occupation</th>
                                    <th>Office Address</th>
                                    <th>Driver License</th>
                                    <th>Expiration Date</th>
                                    <th>Class</th>
                                    <th colspan=4 style="text-align:center">Options</th>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach ($applicants as $key => $applicant) {
                                        echo <<<DATA
                                        <tr id='applicant_$key'>
                                            <td id="current_id" style='display:none'>$applicant[a_applicantId]</td>
                                            <td><img src='img/profile/applicant/$applicant[a_profile]' height='100px;'></td>
                                            <td>$applicant[a_lastname]</td>
                                            <td>$applicant[a_firstname]</td>
                                            <td>$applicant[a_middlename]</td>
                                            <td>$applicant[a_address]</td>
                                            <td>$applicant[a_occupation]</td>
                                            <td>$applicant[a_officeAddress]</td>
                                            <td>$applicant[a_driversLicense]</td>
                                            <td>$applicant[a_expirationDate]</td>
                                            <td>$applicant[a_class]</td>
                                            <td><button class="btn btn-info" data-toggle='modal' data-target='#view_form1' onclick='view_form1($key)'>View</button></td>
                                            <td><button class="btn btn-success" data-toggle='modal' data-target='#renew_applicant' onclick='renew_applicant($applicant[a_applicantId])'>Renew</button></td>
                                            <td><button class="btn btn-warning" data-toggle='modal' data-target='#edit_form1' onclick='edit_form1($key)'>Edit</button></td>
                                            <td><button class="btn btn-danger" data-toggle='modal' data-target='#delete_form1' onclick='delete_form1($key)'>Delete</button></td>
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
	require_once('modals/view_form1.php');
	require_once('modals/renew_applicant.php');
	require_once('modals/edit_form1.php');
	require_once('modals/delete_form1.php');
	?>

	<script type="text/javascript">
		var edit_form1 = function(key){
			var row = $('#applicant_'+key);
			var a_id = row.find('td:first-child').text();
			var a_lastname = row.find('td:nth-child(2)').text();
			var a_firstname = row.find('td:nth-child(3)').text();
			var a_middlename = row.find('td:nth-child(4)').text();
			var a_address = row.find('td:nth-child(5)').text();
			var a_occupation = row.find('td:nth-child(6)').text();
			var a_officeAddress = row.find('td:nth-child(7)').text();
			var a_driversLicense = row.find('td:nth-child(8)').text();
			var a_expirationDate = row.find('td:nth-child(9)').text();

			var modal = $('#edit_modal_form1');
			modal.find('input[name=a_applicantId]').val(a_id);
			modal.find('input[name=a_lastname]').val(a_lastname);
			modal.find('input[name=a_firstname]').val(a_firstname);
			modal.find('input[name=a_middlename]').val(a_middlename);
			modal.find('input[name=a_address]').val(a_address);
			modal.find('input[name=a_occupation]').val(a_occupation);
			modal.find('input[name=a_officeAddress]').val(a_officeAddress);
			modal.find('input[name=a_driversLicense]').val(a_driversLicense);
			modal.find('input[name=a_expirationDate]').val(a_expirationDate);
		}

		var delete_form1 = function(key){
			var row = $('#applicant_'+key);

			var a_id = row.find('td:first-child').text();
			var a_lastname = row.find('td:nth-child(2)').text();
			var a_firstname = row.find('td:nth-child(3)').text();
			var a_middlename = row.find('td:nth-child(4)').text();
			var a_address = row.find('td:nth-child(5)').text();
			var a_occupation = row.find('td:nth-child(6)').text();
			var a_officeAddress = row.find('td:nth-child(7)').text();
			var a_driversLicense = row.find('td:nth-child(8)').text();
			var a_expirationDate = row.find('td:nth-child(9)').text();

			var modal = $('#delete_modal_form1');
			modal.find('input[name=a_applicantId]').val(a_id);
			modal.find('input[name=a_lastname]').val(a_lastname);
			modal.find('input[name=a_firstname]').val(a_firstname);
			modal.find('input[name=a_middlename]').val(a_middlename);
			modal.find('input[name=a_address]').val(a_address);
			modal.find('input[name=a_occupation]').val(a_occupation);
			modal.find('input[name=a_officeAddress]').val(a_officeAddress);
			modal.find('input[name=a_driversLicense]').val(a_driversLicense);
			modal.find('input[name=a_expirationDate]').val(a_expirationDate);
		}

		var view_form1 = function(key){
			var row = $('#applicant_'+key);
			var a_id = row.find('td:first-child').text();
			var a_lastname = row.find('td:nth-child(2)').text();
			var a_firstname = row.find('td:nth-child(3)').text();
			var a_middlename = row.find('td:nth-child(4)').text();
			var a_address = row.find('td:nth-child(5)').text();
			var a_occupation = row.find('td:nth-child(6)').text();
			var a_officeAddress = row.find('td:nth-child(7)').text();
			var a_driversLicense = row.find('td:nth-child(8)').text();
			var a_expirationDate = row.find('td:nth-child(9)').text();

			var modal = $('#view_modal_form1');
			modal.find('input[name=a_applicantId]').val(a_id);
			modal.find('input[name=a_lastname]').val(a_lastname);
			modal.find('input[name=a_firstname]').val(a_firstname);
			modal.find('input[name=a_middlename]').val(a_middlename);
			modal.find('input[name=a_address]').val(a_address);
			modal.find('input[name=a_occupation]').val(a_occupation);
			modal.find('input[name=a_officeAddress]').val(a_officeAddress);
			modal.find('input[name=a_driversLicense]').val(a_driversLicense);
			modal.find('input[name=a_expirationDate]').val(a_expirationDate);
		}

    var renew_applicant = function(key){
      
      $('#renew_applicant_id').val(key);

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