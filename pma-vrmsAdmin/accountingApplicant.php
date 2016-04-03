<?php
	include('login/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Accounting</title>

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
		<h4>For Applicant</h4>

		<div class="'container">
			<div class="row">
				<div class="col-md-12">

					<table class="table table-bordered table-hover" id="bootstrap-table">
						<thead>
							<th>Last Name</th>
							<th>First Name</th>
							<th>Middle Name</th>
							<th>Address</th>
							<th>Occupation</th>
							<th>Office Address</th>
							<th>Driver License</th>
							<th>Expiration Date</th>
							<th>Class</th>
						</thead>
						<tbody>
							<?php 
								foreach ($applicants as $key => $applicant) {
									echo <<<DATA
										<tr id='applicant_$key'>
											<td style='display:none'>$applicant[a_applicantId]</td>
											<td>$applicant[a_lastname]</td>
											<td>$applicant[a_firstname]</td>
											<td>$applicant[a_middlename]</td>
											<td>$applicant[a_address]</td>
											<td>$applicant[a_occupation]</td>
											<td>$applicant[a_officeAddress]</td>
											<td>$applicant[a_driversLicense]</td>
											<td>$applicant[a_expirationDate]</td>
											<td>$applicant[a_class]</td>
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

	</body>
</html>