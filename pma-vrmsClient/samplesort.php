<?php
	session_start();
	if(!isset($_SESSION['user'])){
			header("location:client_index.php");
	}

	date_default_timezone_set("Asia/Taipei");
	$d = date("Y-m-d");
	$t = date("H:i:s");

	require_once('connect.php');
	
	//QUERY
	$query1 = "SELECT * FROM client_log ORDER BY tid desc";
	$results = mysqli_query($conn, $query1);
	$sr = "All Records";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$key = $_POST['keyword'];
			$sr = "Search Results for " .$key;
			//$field = $_POST['field'];
			
			$query = "SELECT * FROM client_log WHERE plateNum LIKE '%" . $key . "%' OR owner LIKE '%" . $key . "%' OR dateIn LIKE '%" . $key . "%' OR timein LIKE '%" . $key . "%' OR dateOut LIKE '%" . $key . "%' OR timeout LIKE '%" . $key . "%' OR  type LIKE '%" . $key . "%'   ORDER BY tid DESC";
			$results = mysqli_query($conn, $query);
			
	}


?>

<!DOCTYPE html>
<html>
	<head>
   	 <title>Vehicle Log</title>

		<link href='index.css' rel='stylesheet' type='text/css' />
		<link href='format.css' rel='stylesheet' type='text/css' />
		<link href='ext/bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css' />
		
		<script src='ext/jquery.min.js' type='text/javascript'></script>
		<script src='ext/bootstrap/js/bootstrap.min.js' type='text/javascript'></script>
   	 	<link rel="shortcut icon" href="img/seal.png">
		
		<!-- sorting -->
		<link rel="stylesheet" type="text/css" href="clientcss/tablesort.css">
		<script type="text/javascript" src="clientjs/table.js"></script>
		<script type="text/javascript" src="clientjs/tablesort.js"></script>
		
		
		<script type="text/javascript">
			$(function () {
			$('table.table-sort').tablesort();
		});
		</script>

	</head>
	<body>

		<?php include('client_header.php'); ?>
		
		<div class="panel panel-default panel-border">
		<div class="panel-heading" align="center">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="client_vehiclelog.php">Vehicle Time In</a></li>
					<li><a href="client_vehicleout.php">Vehicle Time Out</a></li>
					<li><a href="client_viewlog.php">View Vehicle Log</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="client_report.php">Create Report</a></li>
						<li><a href="client_viewreport.php">View Report</a></li>
					  </ul>
					</li>
					<li><a href="client_afterfive.php">17:00</a></li>
				  </ul>
			</div>
		</div>
		</div>
		
		
		<div class="panel panel-default panel-border">
		<div class="panel-heading">
			<h4>Vehicle Log</h4>Date: <?php echo $d . "<br>Time: " . $t; ?>
		</div>
	
		
		<div class='container'>
			<div class='row'>
				<div class='col-md-12' align="center">
					<br>
					
					<form method="POST" action="" id="samplesort.php">
						<table id="search">
							<tr><td>Keyword: </td><td><input type="text" name="keyword" /></td>
							<td colspan="2"><button type="submit" form="samplesort.php">
								<span class="glyphicon glyphicon-search"> Search</span>
								</button></td></tr>
						</table>
					</form>
					
					<br>
					<h4> <?php echo $sr; ?></h4>
					<br/>					
					
					<div id="view" style="overflow-y:auto;">
					<?php
							//		echo "<table align='center' id='viewtable'><tr><th class='head' rowspan='2'>Plate No. </th><th class='head' rowspan='2'>Registered Under</th><th class='head' colspan='2'>Time In</th><th class='head' colspan='2'>Time Out</th><th class='head' rowspan='2'>Type</th></tr>";
							//		echo "<tr><th class='head'>Date</th><th class='head'>Time</th><th class='head'>Date</th><th class='head'>Time</th></tr>";
								
							//		echo "<table align='center' class='table-sort table-sort-search'><tr><td></td><td></td><td class='head' colspan='2'>Time In</td><td class='head' colspan='2'>Time Out</td><td></td></tr>";
									echo "<table align='center' class='table-sort table-sort-search'><thead><tr><th class='table-sort'>Plate No. </th><th class='table-sort'>Registered Under</th><th class='table-sort'>Date</th><th class='table-sort'>Time</th><th class='table-sort'>Date</th><th class='table-sort'>Time</th><th class='table-sort'>Type</th></thead></tr>";
									
								
									if(mysqli_num_rows($results) >= 1){
										while($row = mysqli_fetch_assoc($results)){
											$a = $row['plateNum'];
											$b = $row['owner'];
											$c = $row['dateIn'];
											$d = $row['timein'];
											$e = $row['dateOut'];
											$f = $row['timeout'];
											$g = $row['type'];
					
											echo "<tr><td class='col'> " . $a . "</td><td class='col'>" . $b . "</td><td class='col'>" . $c . "</td><td class='col'>" . $d ."</td><td class='col'>" . $e ."</td><td class='col'>" . $f. "</td><td class='col'>" . $g."</td></tr>";
																						
										
									}
									echo "</table>";
									}else{
										echo "<br> No Records.";
									}
									
									
							
						?>
						</div>
					
					
								
					
				</div>
			</div>
		</div>
		
		<br/>
		</div>
	

		</body>
</html>