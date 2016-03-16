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
							<th>Username</th>
							<th>DateIn</th>
							<th>Timein</th>
							<th>DateOut</th>
							<th>Timeout</th>
						</thead>
						<tbody>
							<?php 
								foreach ($mplogs as $key => $mplog) {
									echo <<<DATA
										<tr id='report_$key'>
											<td style='display:none'>$mplog[logid]</td>
											<td>$mplog[username]</td>
											<td>$mplog[datein]</td>
											<td>$mplog[timein]</td>
											<td>$mplog[dateout]</td>
											<td>$mplog[timeout]</td>
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