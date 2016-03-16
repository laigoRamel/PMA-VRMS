<div class="modal fade" id='edit_form1'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>Edit Personal Data</h4>
			</div>
			<div class='modal-body'>
				<div class='row'>
					<div class='col-lg-12'>
						<form action="logic/edit_form1Logic.php" method="POST">
							<div id="edit_modal_form1">
								<fieldset class="scheduler-border">
									<legend class="scheduler-border">Camp Allen / Navy Base</legend>
									<fieldset class="scheduler-border">
										<legend class="scheduler-border">Personal Information</legend>
										<input style="display:none;" type="text" name="a_applicantId" readonly>
										<input type="file" name="fileToUpload" id="fileToUpload">
						    			<br>
										<label>Last Name: </label>
										<input type="text" name='a_lastname'>
										<label>First Name: </label>
										<input type="text" name='a_firstname'>
										<label>Middle Name: </label>
										<input type="text" name='a_middlename'>
										<br>
										<label>Address: </label>
										<input type="text" name='a_address'>
										<br>
										<label>Occupation: </label>
										<input type="text" name='a_occupation'>
										<br>
										<label>Office Address: </label>
										<input type="text" name='a_officeAddress'>
										<br>
										<label>Driver's License: </label>
										<input type="text" name='a_driversLicense'>
										<label>Expiration Date: </label>
										<input type="text" name='a_expirationDate'>
									</fieldset>
									<br/>
									<fieldset class="scheduler-border">
										<legend class="scheduler-border">Requirements</legend>
										<input type="checkbox">Photocopy of current military ID, Office ID, or driver's license</input><br>
						                <input type="checkbox">Photocopy of retirement/separation/discharged order for former military personnel</input><br>
						                <input type="checkbox">Photocopy of order for Commissionship/Enlistment for AFP Reservists</input><br>
						                <input type="checkbox">Photocopy of latest appointment order for AFP civilian employees and DND organic personnel</input><br>
						                <input type="checkbox">Photocopy of marriage contract, in case the vehicle is registered in the name of the non-military spouse</input><br>
									</fieldset>
									<br>
									<fieldset class="scheduler-border">
										<legend class="scheduler-border">Type/Class</legend>
										<input type="radio">Class A</input>
						                <input type="radio">Class B</input>
						                <input type="radio">Class C</input>
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
									<button type="submit" value="Ok" class="btn btn-default pull-right">OKAY</button>
								</fieldset>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class='modal-footer'>
				
			</div>
		</div>
	</div>
</div>


			