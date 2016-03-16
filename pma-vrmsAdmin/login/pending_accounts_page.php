<?php
	include('session.php');
	//include('pending_accounts_logic.php');
?>

<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee Log</title>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fieldset.css">
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body>

    	<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">PMA-VRMS</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="drop-down">
				<a class="drop-down toggle" data-toggle="dropdown" href="#">Forms<span class="caret"></span></a>
				<ul class="dropdown-menu active">
					<li>
						<a href="../index.php">Form1 (Camp Allen / Navy Base)</a>
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
			<li><a href="../pending.php">Pending Forms</a></li>
			<li><a href="">Accounting</a></li>
			<li><a href="../vehicleLog.php">Vehicle Log</a></li>
			<li><a href="">Reports</a></li>
			<li><a href="logbook_page.php">Employee Log</a></li>
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
		<table class="table">
			<thead>
				<th>Name</th>
				<th>Middle Initial</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Approve</th>

			</thead>

			<tbody>
				<?php
					$dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms');

					$query = "SELECT id, first_name, middle_initial, last_name, email FROM admin_pending_accounts";

					$result = mysqli_query($dbc, $query)
							or die('Error querying database.');

	
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo "<tr>" . 
									"<td>$row[first_name]</td>" . 
									"<td>$row[middle_initial]</td>" .
									"<td>$row[last_name]</td>" .
									"<td>$row[email]</td>" .  
								"</tr>";
						}
					}

	mysqli_close($dbc);
?>

			</tbody>
		</table>
	</div>
</div>