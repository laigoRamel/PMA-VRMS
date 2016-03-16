<?php
	include('login/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registered Applicant</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fieldset.css">
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

</head>
	<body>
		<?php include('header/header.php'); ?>
		<?php include('logic/registered_logic.php'); ?>
		<h4>Reports</h4>

		<div class="'container">
			<div class="row">
				<div class="col-md-12">

					<table class="table table-bordered">
						<thead>
							<th>Plate No.</th>
							<th>Owner</th>
							<th>Date</th>
							<th>Timein</th>
							<th>Timeout</th>
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
										</tr>
DATA;
								}
							?>
						</tbody>
					</table>
					<button class="btn btn-default pull-right">Print</button>
				</div>
			</div>
		</div>
		

		

	</body>
</html>