<?php
include('login/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fieldset.css">
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include('header/header.php'); ?>

	<form action="logic/add_form2Logic.php" method="POST">
		<fieldset class="scheduler-border">
			<legend class="scheduler-border">AFP / Military</legend>
			<fieldset class="scheduler-border">
				<legend class="scheduler-border">Personal Information</legend>
				<input style="display:none;" type="text" name="m_militaryId" readonly>
				<input type="file" name="fileToUpload" id="fileToUpload">
				<br>
				<label>Last Name: </label>
				<input type="text" name='m_lastname'>
				<label>First Name: </label>
				<input type="text" name='m_firstname'>
				<label>Middle Name: </label>
				<input type="text" name='m_middlename'>
				<br>
				<label>Rank: </label>
				<input type="text" name='m_rank'>
				<label>BR / SVC: </label>
				<input type="text" name='m_brSvc'>
				<label>AFPSN: </label>
				<input type="text" name='m_afpsn'>
				<br>
				<label>Residence Address: </label>
				<input type="text" name='m_residenceAddress'>
				<br>
				<label>Residence Tel. No.: </label>
				<input type="text" name='m_residenceTelNo'>
				<br>
				<label>Email Address: </label>
				<input type="text" name='m_emailAddress'>
				<label>Mobile No.: </label>
				<input type="text" name='m_mobileNo'>
				<br>
				<label>Designated Office: </label>
				<input type="text" name='m_designatedOffice'>
				<label>Office Tel. No.: </label>
				<input type="text" name='m_officeTelNo'>
				<br>
				<label>Office Address: </label>
				<input type="text" name='m_officeAddress'>
				<br>
				<label>Date of Retirement: </label>
				<input type="text" name='m_retirementDate'>
				<label>Class </label>
				<input type="text" name='m_class'>
			</fieldset>
			<br/>
			<fieldset class="scheduler-border">
				<legend class="scheduler-border">Requirements</legend>
				<input name='requirements[]' value='1' type="checkbox">Photocopy of current military ID, Office ID, or driver's license</input><br>
				<input name='requirements[]' value='2' type="checkbox">Photocopy of retirement/separation/discharged order for former military personnel</input><br>
				<input name='requirements[]' value='3' type="checkbox">Photocopy of order for Commissionship/Enlistment for AFP Reservists</input><br>
				<input name='requirements[]' value='4' type="checkbox">Photocopy of latest appointment order for AFP civilian employees and DND organic personnel</input><br>
				<input name='requirements[]' value='5' type="checkbox">Photocopy of marriage contract, in case the vehicle is registered in the name of the non-military spouse</input><br>
			</fieldset>
			<br>
			<fieldset class="scheduler-border">
				<legend class="scheduler-border">Type/Class</legend>
				<input type="radio" name="m_class" value="Class A">Class A</input>
				<input type="radio" name="m_class" value="Class B">Class B</input>
				<input type="radio" name="m_class" value="Class C">Class C</input>
			</fieldset>
			<br>
			<fieldset class="scheduler-border">
				<legend class="scheduler-border">Vehicle Information</legend>
				
				<table class="table table-bordered" id="dynamic_field">
					<input style="display:none;" type="text" name="vehicleId" readonly>  
					<tr>  
						<td><input type="text" name="vehicleMake[]" placeholder="Vehicle Make" class="form-control name_list" /></td>  
						<td><input type="text" name="plateNo[]" placeholder="Plate No." class="form-control name_list" /></td>  
						<td><input type="text" name="yearModel[]" placeholder="Year Model" class="form-control name_list" /></td>  
						<td><input type="text" name="color[]" placeholder="Color" class="form-control name_list" /></td>  
						<td><input type="text" name="motorNo[]" placeholder="Motor No." class="form-control name_list" /></td>  
						<td><input type="text" name="chassisNo[]" placeholder="Chassis No." class="form-control name_list" /></td>  
						<td><input type="text" name="stickerNo[]" placeholder="Sticker No" class="form-control name_list" /></td>  
						<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
					</tr>  
				</table>
			</fieldset>
			<button type="submit" value="Ok">OKAY</button>
		</fieldset>
	</form>

	<script type="text/javascript">
		$(document).ready(function(){  
			var i=1;  
			$('#add').click(function(){  
				i++;  
				$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="VehicleMake[]" placeholder="Vehicle Make" class="form-control name_list" /></td><td><input type="text" name="plateNo[]" placeholder="Plate No." class="form-control name_list" /></td><td><input type="text" name="yearModel[]" placeholder="Year Model" class="form-control name_list" /></td><td><input type="text" name="color[]" placeholder="Color" class="form-control name_list" /></td><td><input type="text" name="motorNo[]" placeholder="Motor No." class="form-control name_list" /></td><td><input type="text" name="chassisNo[]" placeholder="Chassis No." class="form-control name_list" /></td><td><input type="text" name="StickerNo[]" placeholder="Sticker No" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
			});  
			$(document).on('click', '.btn_remove', function(){  
				var button_id = $(this).attr("id");   
				$('#row'+button_id+'').remove();  
			});  
		});  
	</script>
	
</body>
</html>