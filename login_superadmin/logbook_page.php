<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee log</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../pma-vrmsSuperAdmin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../pma-vrmsSuperAdmin/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../pma-vrmsSuperAdmin/css/style-main.min.css">
    <link rel="stylesheet" href="../pma-vrmsSuperAdmin/bootstrap/css/jquery.bdt.css">
    <link rel="stylesheet" href="../pma-vrmsSuperAdmin/css/skin.min.css">
    <link rel="stylesheet" type="text/css" href="../pma-vrmsSuperAdmin/css/print.css">
    <link rel="icon" href="img/seal.png">

	<script src="../pma-vrmsSuperAdmin/bootstrap/jquery.min.js"></script>
	<script src="../pma-vrmsSuperAdmin/bootstrap/js/bootstrap.min.js"></script>
    <script src="../pma-vrmsSuperAdmin/js/app.min.js"></script>
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
						<a href='logout.php'>Log out</a>
					</li>
          <li>
            <a href='change_password.php'>Change Password</a>
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
            <li class=""><a href="../pma-vrmsSuperAdmin/index.php"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>



            <!-- Vehicle Log -->
            <li><a href="../pma-vrmsSuperAdmin/vehicleLog.php"><i class="glyphicon glyphicon-road"></i> <span>Vehicle Log</span></a></li>

            <!-- Reports -->
            <li><a href="../pma-vrmsSuperAdmin/reports.php"><i class="glyphicon glyphicon-flag"></i> <span>Reports</span></a></li>

            <!-- Employee Log -->
            <li class="active"><a href="logbook_page.php"><i class="glyphicon glyphicon-user"></i> <span>Employee Log</span></a></li>

              <!-- Create Account -->
            <!-- <li class=""><a href="login/create_account_page.php"><i class="glyphicon glyphicon-plus"></i> <span>Create Account</span></a></li> -->

            <!-- Accounts -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-plus"></i>
                <span>Accounts</span>
                <i class="glyphicon glyphicon-chevron-down pull-right"></i>
              </a>

              <ul class="treeview-menu">

                <li><a href="accounts_client_page.php">Client Accounts</a></li>
                <li><a href="accounts_admin_page.php">Admin Accounts</a></li>
                <li><a href="accounts_superuser_page.php">Superuser Accounts</a></li>
              </ul>
            </li>

            <!-- Accounting -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Accounting</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li class=""><a href="../pma-vrmsSuperAdmin/accountingApplicant.php">Civilian</a></li>
                <li><a href="../pma-vrmsSuperAdmin/AccountingMilitary.php">Military</a></li>
              </ul>
            </li>

            <li class="header">FORMS</li>
            <!-- Forms -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Registration Form</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pma-vrmsSuperAdmin/form1.php">Camp Allen/Navybase</a></li>
                <li><a href="../pma-vrmsSuperAdmin/form2.php">AFP</a></li>
              </ul>
            </li>

            <!-- Registered Applicant-->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Registered Applicant</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pma-vrmsSuperAdmin/registeredApplicant.php">Civilian</a></li>
                <li><a href="../pma-vrmsSuperAdmin/registeredAFP.php">Military</a></li>
              </ul>
            </li>

            <!-- Pending -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-option-horizontal"></i> <span>Pending</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pma-vrmsSuperAdmin/pendingApplicant.php">Civilian</a></li>
                <li><a href="../pma-vrmsSuperAdmin/pendingMilitary.php">Military</a></li>
              </ul>
            </li>

            <li class="header">VEHICLES</li>
            <!-- Vehicle Status -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-info-sign"></i> <span>Vehicle Status</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pma-vrmsSuperAdmin/ApplicantVehicleStatus.php">For Civilian</a></li>
                <li><a href="../pma-vrmsSuperAdmin/AFPVehicleStatus.php">For Military</a></li>
              </ul>
            </li>

            <!-- Vehicle -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-flag"></i> <span>Vehicles</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li class=""><a href="../pma-vrmsSuperAdmin/applicant_vehicles.php">For Civilian</a></li>
                <li><a href="../pma-vrmsSuperAdmin/military_vehicles.php">For Military</a></li>
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
            Employee Log
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">

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
                        <h3>Employee Log</h3>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <!-- Print -->
                            <button id="printReports" class="btn btn-primary btn-lg pull-right" onclick="printReports()">
                                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print
                            </button>
                            <table class="table table-bordered table-hover" id="bootstrap-table">
				<thead>
					<th>User</th>
					<th>Activity</th>
                    <th>Date</th>
					<th>Time</th>
				</thead>
				<tbody>

					<?php
            $handler = mysqli_connect('localhost', 'root', '', 'pma-vrms')
              or die ('Error connecting to MySQL server.');

            $query = "SELECT * FROM admin_logs
                        ORDER BY curr_date, curr_time DESC";

            $result = mysqli_query($handler, $query)
              or die ('Error querying database.');

            while ($row = mysqli_fetch_array($result)) {
              $user = $row['username'];
              $activity = $row['activity'];
              $date = $row['curr_date'];
              $time = $row['curr_time'];
          ?>
              <tr>
                <td><?php echo $user; ?></td>
                <td><?php echo $activity; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $time; ?></td>
              </tr>

          <?php
            }
          ?>

          <?php

					/*require_once('logbook_logic.php');

					$date = 'date';
					foreach($record as $rec){
						$date_time_in = date_format(date_create($rec['time_in']), 'M d, Y | h:i:s A');
						$date_time_out = $rec['time_out'] === '0000-00-00 00:00:00' ? 'Online' : date_format(date_create($rec['time_out']), 'M d, Y | h:i:s A');
						echo <<<REC
						<tr>
							<td>$rec[username]</td>
							<td>$date_time_in</td>
							<td>$date_time_out</td>
						</tr>
REC;

					}*/



					/**echo "<table class=\"table\">";
					echo "<thead>";
					echo "<tr>";
					echo "<th>Name</th>";
					echo "<th>Date</th>";
					echo "<th>Time-in</th>";
					echo "<th>Time-out</th>";
					echo "</tr>";
					echo "</thead>";

					echo "<tbody>";
					for ($counter = 1; $counter <= 5; $counter++) {
						echo "<tr><td>";
						echo $login_session;
						echo "</td><td>";
	    					//echo $
					}
					echo "</tbody>";**/
				?>

				</tbody>
			</table>
			<!--<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Date</th>
					<th>Time-in</th>
					<th>Time-out</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php echo $login_session; ?></td>
					<td><?php echo date('month'); ?></td>
					<td><?php echo time(); ?>8:00</td>
					<td>12:00</td>
				</tr>
			</tbody>
		</table>-->
                        </div>
                    </div>
                </div>
    <script src="../pma-vrmsSuperAdmin/js/print.js" type="text/javascript"></script>
	<script src="../pma-vrmsSuperAdmin/bootstrap/js/jquery.sortelements.js" type="text/javascript"></script>
	<script src="../pma-vrmsSuperAdmin/bootstrap/js/jquery.bdt.js" type="text/javascript"></script>
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
