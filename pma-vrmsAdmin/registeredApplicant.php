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
		<?php include('logic/registered_applicant_logic.php'); ?>
		<h4>Registered Applicant</h4>

		<div class="'container">
			<div class="row">
				<div class="col-md-12">

					<table class="table table-bordered">
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
							<th colspan=4 style="text-align:center">Options</th>
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
											<td><button class="btn btn-info" data-toggle='modal' data-target='#view_form1' onclick='view_form1($key)'>View</button></td>
											<td><button class="btn btn-success" data-toggle='modal' data-target='#renew_applicant' onclick='renew_applicant($key)'>Renew</button></td>
											<td><button class="btn btn-warning" data-toggle='modal' data-target='#edit_form1' onclick='edit_form1($key)'>Edit</button></td>
											<td><button class="btn btn-danger" data-toggle='modal' data-target='#delete_form1' onclick='delete_form1($key)'>Delete</button></td>
										</tr>
DATA;
								}
							?>
						</tbody>
					</table>

				</div>
			</div>
		</div>
		

		<?php  
			require_once('modals/view_form1.php');
			require_once('modals/renew_applicant.php');
			require_once('modals/edit_form1.php');
			require_once('modals/delete_form1.php');
		?>

		<script type="text/javascript">
			var edit_form1 = function(key){
				var row = $('#applicant_'+key);
				var a_id = row.find('td:first-child').text();
				var a_lastname = row.find('td:nth-child(2)').text();
				var a_firstname = row.find('td:nth-child(3)').text();
				var a_middlename = row.find('td:nth-child(4)').text();
				var a_address = row.find('td:nth-child(5)').text();
				var a_occupation = row.find('td:nth-child(6)').text();
				var a_officeAddress = row.find('td:nth-child(7)').text();
				var a_driversLicense = row.find('td:nth-child(8)').text();
				var a_expirationDate = row.find('td:nth-child(9)').text();
				
				var modal = $('#edit_modal_form1');
				modal.find('input[name=a_applicantId]').val(a_id);
				modal.find('input[name=a_lastname]').val(a_lastname);
				modal.find('input[name=a_firstname]').val(a_firstname);
				modal.find('input[name=a_middlename]').val(a_middlename);
				modal.find('input[name=a_address]').val(a_address);
				modal.find('input[name=a_occupation]').val(a_occupation);
				modal.find('input[name=a_officeAddress]').val(a_officeAddress);
				modal.find('input[name=a_driversLicense]').val(a_driversLicense);
				modal.find('input[name=a_expirationDate]').val(a_expirationDate);
			}

			var delete_form1 = function(key){
				var row = $('#applicant_'+key);
				
				var a_id = row.find('td:first-child').text();
				var a_lastname = row.find('td:nth-child(2)').text();
				var a_firstname = row.find('td:nth-child(3)').text();
				var a_middlename = row.find('td:nth-child(4)').text();
				var a_address = row.find('td:nth-child(5)').text();
				var a_occupation = row.find('td:nth-child(6)').text();
				var a_officeAddress = row.find('td:nth-child(7)').text();
				var a_driversLicense = row.find('td:nth-child(8)').text();
				var a_expirationDate = row.find('td:nth-child(9)').text();
				
				var modal = $('#delete_modal_form1');
				modal.find('input[name=a_applicantId]').val(a_id);
				modal.find('input[name=a_lastname]').val(a_lastname);
				modal.find('input[name=a_firstname]').val(a_firstname);
				modal.find('input[name=a_middlename]').val(a_middlename);
				modal.find('input[name=a_address]').val(a_address);
				modal.find('input[name=a_occupation]').val(a_occupation);
				modal.find('input[name=a_officeAddress]').val(a_officeAddress);
				modal.find('input[name=a_driversLicense]').val(a_driversLicense);
				modal.find('input[name=a_expirationDate]').val(a_expirationDate);
			}

			var view_form1 = function(key){
				var row = $('#applicant_'+key);
				var a_id = row.find('td:first-child').text();
				var a_lastname = row.find('td:nth-child(2)').text();
				var a_firstname = row.find('td:nth-child(3)').text();
				var a_middlename = row.find('td:nth-child(4)').text();
				var a_address = row.find('td:nth-child(5)').text();
				var a_occupation = row.find('td:nth-child(6)').text();
				var a_officeAddress = row.find('td:nth-child(7)').text();
				var a_driversLicense = row.find('td:nth-child(8)').text();
				var a_expirationDate = row.find('td:nth-child(9)').text();
				
				var modal = $('#view_modal_form1');
				modal.find('input[name=a_applicantId]').val(a_id);
				modal.find('input[name=a_lastname]').val(a_lastname);
				modal.find('input[name=a_firstname]').val(a_firstname);
				modal.find('input[name=a_middlename]').val(a_middlename);
				modal.find('input[name=a_address]').val(a_address);
				modal.find('input[name=a_occupation]').val(a_occupation);
				modal.find('input[name=a_officeAddress]').val(a_officeAddress);
				modal.find('input[name=a_driversLicense]').val(a_driversLicense);
				modal.find('input[name=a_expirationDate]').val(a_expirationDate);
			}

		</script>

	</body>
</html>