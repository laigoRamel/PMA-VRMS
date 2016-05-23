<?php
include('login/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vehicle log</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/style-main.min.css">
    <link rel="stylesheet" href="bootstrap/css/jquery.bdt.css">
    <link rel="stylesheet" href="css/skin.min.css">
    <link rel="stylesheet" type="text/css" href="css/print.css">
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
          <li>
            <a href='login/change_password.php'>Change Password</a>
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
            <li class="active"><a href="vehicleLog.php"><i class="glyphicon glyphicon-road"></i> <span>Vehicle Log</span></a></li>

            <!-- Reports -->
            <li><a href="reports.php"><i class="glyphicon glyphicon-flag"></i> <span>Reports</span></a></li>

             <!-- Create Account -->
            <!-- <li class=""><a href="login/create_account_page.php"><i class="glyphicon glyphicon-plus"></i> <span>Create Account</span></a></li> -->

            <!-- Accounts -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-plus"></i>
                <span>Accounts</span>
                <i class="glyphicon glyphicon-chevron-down pull-right"></i>
              </a>

              <ul class="treeview-menu">

                <li><a href="login/accounts_client_page.php">Client Accounts</a></li>
              </ul>
            </li>

            <!-- Accounting -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Accounting</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li class=""><a href="accountingApplicant.php">Civilian</a></li>
                <li><a href="AccountingMilitary.php">Military</a></li>
              </ul>
            </li>

            <li class="header">FORMS</li>
            <!-- Forms -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Registration Form</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form1.php">Camp Allen/Navybase</a></li>
                <li><a href="form2.php">AFP</a></li>
              </ul>
            </li>

            <!-- Registered Applicant-->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Registered Applicant</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="registeredApplicant.php">Civilian</a></li>
                <li><a href="registeredAFP.php">Military</a></li>
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

            <!-- Vehicle Status -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Vehicle Status</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="ApplicantVehicleStatus.php">For Civilian</a></li>
                <li><a href="AFPVehicleStatus.php">For Military</a></li>
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
            Vehicle Log
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
	       <?php include('logic/registered_logic.php'); ?>

		<div class="'container">
			<div class="row">
				<div class="col-md-12">
                    <div id="printHeader">
                        <center>
                        <p>H E A D Q U A R T E R S</p>
                        <p>PHILIPPINE MILITARY ACADEMY</p>
                        <p><b>OFFICE OF THE ASSISTANT CHIEF OF STAFF FOR INTELLIGENCE, MA2</p></b>
                        <p>Fort General Gregorio H del Pilar, Baguio City</p>
                        </center>
                        <h3>Vehicle Log</h3>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <!-- Print -->
                            <button id="printReports" class="btn btn-primary btn-lg pull-right" onclick="printReports()">
                                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print
                            </button>
                            <table class="table table-bordered table-hover" id="bootstrap-table">
                                <thead>
                                    <th>Plate No.</th>
                                    <th>Owner</th>
                                    <th>Date</th>
                                    <th>Timein</th>
                                    <th>Date Out</th>
                                    <th>Timeout</th>
                                    <th>Type</th>
                                    <th>License No</th>
                                    <th>Details</th>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($logs as $key => $log) {
                                            echo <<<DATA
                                                <tr id='report_$key'>
                                                    <td style='display:none'>$log[tid]</td>
                                                    <td>$log[plateNum]</td>
                                                    <td>$log[owner]</td>
                                                    <td>$log[dateIn]</td>
                                                    <td>$log[timein]</td>
                                                    <td>$log[dateOut]</td>
                                                    <td>$log[timeout]</td>
                                                    <td>$log[type]</td>
                                                    <td>$log[licenseNo]</td>
                                                    <td>$log[details]</td>
                                                </tr>
DATA;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

    <script src="js/print.js" type="text/javascript"></script>
	<script src="bootstrap/js/jquery.sortelements.js" type="text/javascript"></script>
	<script src="bootstrap/js/jquery.bdt.js" type="text/javascript"></script>
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
