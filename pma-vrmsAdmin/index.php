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
            <li class="active"><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>
              
            
            
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
            Dashboard
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">

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


   
    
</html>