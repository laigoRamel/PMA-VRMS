<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee log</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style-main.min.css">
    <link rel="stylesheet" href="../bootstrap/css/jquery.bdt.css">
    <link rel="stylesheet" href="../css/skin.min.css">
    <link rel="stylesheet" type="text/css" href="../css/print.css">
    <link rel="icon" href="img/seal.png">
    
	<script src="../bootstrap/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/app.min.js"></script>
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
            <li class=""><a href="../index.php"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>
              
            
            
            <!-- Vehicle Log -->
            <li class=""><a href="../vehicleLog.php"><i class="glyphicon glyphicon-road"></i> <span>Vehicle Log</span></a></li>
              
            <!-- Reports -->
            <li><a href="../reports.php"><i class="glyphicon glyphicon-flag"></i> <span>Reports</span></a></li>
              
            <!-- Employee Log -->
            <li class="active"><a href="../login/logbook_page.php"><i class="glyphicon glyphicon-user"></i> <span>Employee Log</span></a></li>

            <!-- Create Account -->
            <li class=""><a href="../login/create_account_page.php"><i class="glyphicon glyphicon-plus"></i> <span>Create Account</span></a></li>
            
            <!-- Accounting --> 
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Accounting</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../accountingApplicant.php">Civilians</a></li>
                <li><a href="../AccountingMilitary.php">Military</a></li>
              </ul>
            </li>
              
            <li class="header">FORMS</li>
            <!-- Forms -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>New Form</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../form1.php">Camp Allen/Navybase/<br>Fort del Pilar</a></li>
                <li><a href="../form2.php">AFP</a></li>
              </ul>
            </li>
              
            <!-- Registered -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Registered</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../registeredApplicant.php">Applicants</a></li>
                <li><a href="../registeredAFP.php">Military</a></li>
              </ul>
            </li>
              
            <!-- Pending -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-option-horizontal"></i> <span>Pending</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pendingApplicant.php">Civilian</a></li>
                <li><a href="../pendingMilitary.php">Military</a></li>
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
                    <h3>    
                        <span id="printHeader" class="logo-lg"><b>PMA</b>VRMS: Employee Log</span>
                    </h3>
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