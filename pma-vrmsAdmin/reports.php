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
		<h4></h4>

		<div class="'container">
			<div class="row">
				<div class="col-md-12">

					<table class="table table-bordered">
						<thead>
							<th>Plate No.</th>
							<th>Owner</th>
							<th>DateIn</th>
							<th>Timein</th>
							<th>Violation</th>
							<th>Type</th>
						</thead>
						<tbody>
							<?php 
								foreach ($reports as $key => $report) {
									echo <<<DATA
										<tr id='report$key'>
											<td style='display:none'>$report[rid]</td>
											<td>$report[plateNum]</td>
											<td>$report[owner]</td>
											<td>$report[datein]</td>
											<td>$report[timein]</td>
											<td>$report[violation]</td>
											<td>$report[type]</td>
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