<?php
include('login/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pending Military</title>

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
            
             <!-- Create Account -->
            <li class=""><a href="login/create_account_page.php"><i class="glyphicon glyphicon-plus"></i> <span>Create Account</span></a></li>
            
            <!-- Accounting --> 
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Accounting</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="accountingApplicant.php">Civilian</a></li>
                <li><a href="AccountingMilitary.php">Military</a></li>
              </ul>
            </li>
              
            <li class="header">FORMS</li>
            <!-- Forms -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Registration Form</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form1.php">Fort del Pilar/Camp Allen/<br>Navybase</a></li>
                <li><a href="form2.php">AFP/Military</a></li>
              </ul>
            </li>
              
            <!-- Registered -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Registered</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="registeredApplicant.php">Civilian</a></li>
                <li><a href="registeredAFP.php">Military</a></li>
              </ul>
            </li>
              
            <!-- Pending -->
            <li class="treeview active">
              <a href="#"><i class="glyphicon glyphicon-option-horizontal"></i> <span>Pending</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="pendingApplicant.php">Civilian</a></li>
                <li class="active"><a href="pendingMilitary.php">Military</a></li>
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
            Pending Military
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
	       <?php include('logic/pending_military_logic.php'); ?>

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
							<th>Email Address</th>
							<th>Designated Office</th>
							<th>Class</th>
							<th>Options</th>
						</thead>
						<tbody>
							<?php 
								foreach ($militarys as $key => $military) {
									echo <<<DATA
										<tr id='military_$key'>
											<td><img src='img/profile/military/$military[m_profile]' height='100px;'></td>
                        <td>$military[m_lastname]</td>
                        <td>$military[m_firstname]</td>
                        <td>$military[m_middlename]</td>
                        <td>$military[m_rank]</td>
                        <td style='display:none'>$military[m_brSvc]</td>
                        <td style='display:none'>$military[m_afpsn]</td>
                        <td style='display:none'>$military[m_residenceAddress]</td>
                        <td style='display:none'>$military[m_residenceTelNo]</td>
                        <td>$military[m_emailAddress]</td>
                        <td style='display:none'>$military[m_mobileNo]</td>
                        <td>$military[m_designatedOffice]</td>
                        <td style='display:none'>$military[m_officeTelNo]</td>
                        <td style='display:none'>$military[m_officeAddress]</td>
                        <td style='display:none'>$military[m_retirementDate]</td>
                        <td>$military[m_class]</td>
                        <td style='display:none'>$military[wheels]</td>
                        <td style='display:none'>$military[vehicleMake]</td>
                        <td style='display:none'>$military[plateNo]</td>
                        <td style='display:none'>$military[yearModel]</td>
                        <td style='display:none'>$military[color]</td>
                        <td style='display:none'>$military[motorNo]</td>
                        <td style='display:none'>$military[chassisNo]</td>
                        <td style='display:none'>$military[stickerNo]</td>
											<td><button class="btn btn-success" data-toggle='modal' data-target='#update_military' onclick='update_military($key)'>Update</button></td>
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

		
		<?php  
			require_once('modals/update_military.php');
		?>
            
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

   
	<script src="bootstrap/js/jquery.sortelements.js" type="text/javascript"></script>
	<script src="bootstrap/js/jquery.bdt.js" type="text/javascript"></script>
    <script>
		$(document).ready( function () {
			$('#bootstrap-table').bdt();
		});
	</script>
    
    <?php  
			require_once('modals/update_military.php');
		?>
    
</html>