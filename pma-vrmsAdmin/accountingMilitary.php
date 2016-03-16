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
	<link rel="stylesheet" type="text/css" href="css/fieldset.css">
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
	<body>
		<?php include('header/header.php'); ?>
		<?php include('logic/registered_logic.php'); ?>
		<h4>For Military</h4>

		<div class="'container">
			<div class="row">
				<div class="col-md-12">

					<table class="table table-bordered">
						<thead>
							<th>Last Name</th>
							<th>First Name</th>
							<th>Middle Name</th>
							<th>Rank</th>
							<th>BR / SVC</th>
							<th>AFPSN</th>
							<th>Residence Address</th>
							<th>Residence Tel. No.</th>
							<th>Email Address</th>
							<th>Mobile No.</th>
							<th>Designated Office</th>
							<th>Office Tel. No.</th>
							<th>Office Address</th>
							<th>Date of Retirement</th>
							<th>Class</th>
						</thead>
						<tbody>
							<?php 
								foreach ($militarys as $key => $military) {
									echo <<<DATA
										<tr id='military_$key'>
											<td style='display:none'>$military[m_militaryId]</td>
											<td>$military[m_lastname]</td>
											<td>$military[m_firstname]</td>
											<td>$military[m_middlename]</td>
											<td>$military[m_rank]</td>
											<td>$military[m_brSvc]</td>
											<td>$military[m_afpsn]</td>
											<td>$military[m_residenceAddress]</td>
											<td>$military[m_residenceTelNo]</td>
											<td>$military[m_emailAddress]</td>
											<td>$military[m_mobileNo]</td>
											<td>$military[m_designatedOffice]</td>
											<td>$military[m_officeTelNo]</td>
											<td>$military[m_officeAddress]</td>
											<td>$military[m_retirementDate]</td>
											<td>$military[m_class]</td>
										</tr>
DATA;
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
			
		</script>
	</body>
</html>