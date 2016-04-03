<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee Log</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
	<link rel="stylesheet" href="bootstrap/css/jquery.bdt.css">
	<link rel="stylesheet" type="text/css" href="css/fieldset.css">

	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
</head>

<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">PMA-VRMS</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="drop-down">
					<a class="drop-down toggle" data-toggle="dropdown" href="#">Forms<span class="caret"></span></a>
					<ul class="dropdown-menu active">
						<li>
							<a href="../form1.php">Form1 (Camp Allen / Navy Base)</a>
						</li>
						<li>
							<a href="../form2.php">Form2 (AFP Form)</a>
						</li>
					</ul>
				</li>
				<li class="drop-down">
					<a class="drop-down toggle" data-toggle="dropdown" href="#">Registered<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li>
							<a href="../registeredApplicant.php">Registered Applicant</a>
						</li>
						<li>
							<a href="../registeredAFP.php">Registered Military</a>
						</li>
						<li>
							<a href="../registeredVehicle.php">Registered Vehicle</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="drop-down toggle" data-toggle="dropdown" href="#">Pending<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li>
							<a href="../pendingApplicant.php">Pending Applicant</a>
						</li>
						<li>
							<a href="../pendingMilitary.php">Pending Military</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="drop-down toggle" data-toggle="dropdown" href="#">Accounting<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li>
							<a href="../accountingApplicant.php">For Applicant</a>
						</li>
						<li>
							<a href="../accountingMilitary.php">For Military</a>
						</li>
					</ul>
				</li>
				<li><a href="../vehicleLog.php">Vehicle Log</a></li>
				<li><a href="../reports.php">Reports</a></li>
				<li><a href="logbook_page.php">Employee Log</a></li>
				<li><a href="../militaryPersonnelLog.php">Military Personnel Log</a></li>
				<li><a href="pending_accounts_page.php">Pending Accounts</a></li>

			</ul>

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
		</div>
	</nav>


	<div class="container">
		<div class="row">
		<table class="table table-bordered table-hover" id="bootstrap-table">
				<thead>
					<th>Name</th>
					<th>Time-in</th>
					<th>Time-out</th>
				</thead>
				<tbody>

					<?php
					require_once('logbook_logic.php');

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

					}



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

	<script src="bootstrap/js/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/jquery.sortelements.js" type="text/javascript"></script>
	<script src="bootstrap/js/jquery.bdt.js" type="text/javascript"></script>
	<script>
		$(document).ready( function () {
			$('#bootstrap-table').bdt();
		});
	</script>		

<script src="js/bootstrap.js"></script>
</body>
</html>
