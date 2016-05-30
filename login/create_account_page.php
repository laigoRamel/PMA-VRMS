<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../pma-vrmsAdmin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../pma-vrmsAdmin/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../pma-vrmsAdmin/css/style-main.min.css">
    <link rel="stylesheet" href="../pma-vrmsAdmin/bootstrap/css/jquery.bdt.css">
    <link rel="stylesheet" href="../pma-vrmsAdmin/css/skin.min.css">
    <link rel="stylesheet" type="text/css" href="../pma-vrmsAdmin/css/print.css">
    <link rel="icon" href="../pma-vrmsAdmin/img/seal.png">

	<script src="../pma-vrmsAdmin/bootstrap/jquery.min.js"></script>
	<script src="../pma-vrmsAdmin/bootstrap/js/bootstrap.min.js"></script>
    <script src="../pma-vrmsAdmin/js/app.min.js"></script>
</head>

<body class="hold-transition skin-black sidebar-mini">
    <div class="wrapper">


        <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <div class="logo">
          <span class="logo-mini">
              <img src="../pma-vrmsAdmin/img/seal.png" style="width:30px;height:30px;">
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
						<a href='logout.php'>Log out</a>
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
            <li class=""><a href="../pma-vrmsAdmin/index.php"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>



            <!-- Vehicle Log -->
            <li class=""><a href="../pma-vrmsAdmin/vehicleLog.php"><i class="glyphicon glyphicon-road"></i> <span>Vehicle Log</span></a></li>

            <!-- Reports -->
            <li><a href="../pma-vrmsAdmin/reports.php"><i class="glyphicon glyphicon-flag"></i> <span>Reports</span></a></li>

            <!-- Employee Log -->
            <li class=""><a href="../pma-vrmsAdmin/login/logbook_page.php"><i class="glyphicon glyphicon-user"></i> <span>Employee Log</span></a></li>

            <!-- Create Account -->
            <li class="active"><a href="create_account_page.php"><i class="glyphicon glyphicon-plus"></i> <span>Create Account</span></a></li>

            <!-- Accounting -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Accounting</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pma-vrmsAdmin/accountingApplicant.php">Civilian</a></li>
                <li><a href="../pma-vrmsAdmin/accountingMilitary.php">Military</a></li>
              </ul>
            </li>

            <li class="header">FORMS</li>
            <!-- Forms -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Registration Form</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pma-vrmsAdmin/form1.php">Camp Allen/Navybase/<br>Fort del Pilar</a></li>
                <li><a href="../pma-vrmsAdmin/form2.php">AFP/Military</a></li>
              </ul>
            </li>

            <!-- Registered -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Registered</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pma-vrmsAdmin/registeredApplicant.php">Civilian</a></li>
                <li><a href="../pma-vrmsAdmin/registeredAFP.php">Military</a></li>
              </ul>
            </li>

            <!-- Pending -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-option-horizontal"></i> <span>Pending</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pma-vrmsAdmin/pendingApplicant.php">Civilian</a></li>
                <li><a href="../pma-vrmsAdmin/pendingMilitary.php">Military</a></li>
              </ul>
            </li>

						<!-- Vehicle Status -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Vehicle Status</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pma-vrmsAdmin/ApplicantVehicleStatus.php">For Civilian</a></li>
                <li><a href="../pma-vrmsAdmin/AFPVehicleStatus.php">For Military</a></li>
              </ul>
            </li>

						<!-- Vehicle -->
             <li class="treeview">
               <a href="#"><i class="glyphicon glyphicon-flag"></i> <span>Vehicles</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
               <ul class="treeview-menu">
                 <li class=""><a href="../pma-vrmsAdmin/applicant_vehicles.php">For Civilian</a></li>
                 <li><a href="../pma-vrmsAdmin/military_vehicles.php">For Military</a></li>
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
            Create User Account
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">

		<div class="'container">
			<div class="row">
				<div class="col-md-12">
                    <h3>
                        <span id="printHeader" class="logo-lg"><b>PMA</b>VRMS: Employee Log</span>
                    </h3>
                    <div class="box">
                        <div class="box-body">
                            <br/><br/><br/><br/><br/><br/><br/>
                            <form class="form-horizontal" method="post" action="create_account_logic.php">


                              <div class="form-group">
                                <label for="email" class="col-sm-4 control-label">
                                  Username
                                </label>

                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="email" name="email">
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="password" class="col-sm-4 control-label">
                                  Password
                                </label>

                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="password" name="password">
                                </div>
                              </div>

                              <div class="span7 text-center">
                                <input type="submit" value="Register" name="submit2" />
                              </div>



                    </form>
                            <br/><br/><br/><br/><br/><br/><br/>
                        </div>
                    </div>


                </div>
    <script src="../js/print.js" type="text/javascript"></script>
	<script src="../bootstrap/js/jquery.sortelements.js" type="text/javascript"></script>
	<script src="../bootstrap/js/jquery.bdt.js" type="text/javascript"></script>
	<script>
		$(document).ready( function () {
			$('#bootstrap-table').bdt();
		});
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
