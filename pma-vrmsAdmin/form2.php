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
					<input style="display:none;" type="text" name="vehicleId" readonly>
					<label>Vehicle Make/s: </label>
					<input type="text" name='vehicleMake'>
					<br>
					<label>Plate No.: </label>
					<input type="text" name='plateNo'>
					<br>
					<label>Year Model: </label>
					<input type="text" name='yearModel'>
					<br>
					<label>Color: </label>
					<input type="text" name='color'>
					<br>
					<label>Motor No.: </label>
					<input type="text" name='motorNo'>
					<br>
					<label>Chassis No.: </label>
					<input type="text" name='chassisNo'>
					<br>
					<label>Sticker No.: </label>
					<input type="text" name='stickerNo'>
				</fieldset>
				<button type="submit" value="Ok">OKAY</button>
			</fieldset>
		</form>
	</body>
</html>