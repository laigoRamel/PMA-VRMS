<?php
	include('login/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registered Vehicle</title>

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
		<?php include('header/header.php'); ?>
		<?php include('logic/registered_logic.php'); ?>
		<h4>Registered Vehicle</h4>

		<div class="'container">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-hover" id="bootstrap-table">
						<thead>
							<th>Owner</th>
							<th>Vehicle Make</th>
							<th>Plate No.</th>
							<th>Year Model</th>
							<th>Color</th>
							<th>Motor No.</th>
							<th>Chassis No.</th>
							<th>Sticker No.</th>
							<th style="text-align:center">Options</th>
						</thead>
						<tbody>
							<?php 
								foreach ($vehicles as $key => $vehicle) {
									echo <<<DATA
										<tr id='vehicle_$key'>
											<td style='display:none'>$vehicle[vehicleId]</td>
											<td>marc lim</td>
											<td>$vehicle[vehicleMake]</td>
											<td>$vehicle[plateNo]</td>
											<td>$vehicle[yearModel]</td>
											<td>$vehicle[color]</td>
											<td>$vehicle[motorNo]</td>
											<td>$vehicle[chassisNo]</td>
											<td>$vehicle[stickerNo]</td>
											<td><button class="btn btn-info" data-toggle='modal' data-target='#view_vehicle' onclick='view_vehicle($key)'>View</button></td>
										</tr>
DATA;
								}
							?>
						</tbody>
					</table>
				</div>
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

		<?php  
			require_once('modals/view_vehicle.php');

		?>

	</body>
</html>