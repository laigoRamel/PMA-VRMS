<div class="modal fade" id='view_form2'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>View Military Data</h4>
			</div>
			<div class='modal-body'>
				<div class='row'>
					<div class='col-lg-12'>
						<form action="logic/view_form2Logic.php" method="POST">
							<div id="view_modal_form2">
								<fieldset class="scheduler-border">
									<legend class="scheduler-border">AFP / Military</legend>
									<fieldset class="scheduler-border">
										<legend class="scheduler-border">Personal Information</legend>
										<input style="display:none;" type="text" name="m_militaryId" readonly>
										<input type="file" name="fileToUpload" id="fileToUpload">
						    			<br>
										<label>Last Name: </label>
										<input type="text" name='m_lastname' readonly>
										<label>First Name: </label>
										<input type="text" name='m_firstname' readonly>
										<label>Middle Name: </label>
										<input type="text" name='m_middlename' readonly>
										<br>
										<label>Rank: </label>
										<input type="text" name='m_rank' readonly>
										<label>BR / SVC: </label>
										<input type="text" name='m_brSvc' readonly>
										<label>AFPSN: </label>
										<input type="text" name='m_afpsn' readonly>
										<br>
										<label>Residence Address: </label>
										<input type="text" name='m_residenceAddress' readonly>
										<br>
										<label>Residence Tel. No.: </label>
										<input type="text" name='m_residenceTelNo' readonly>
										<br>
										<label>Email Address: </label>
										<input type="text" name='m_emailAddress' readonly>
										<label>Mobile No.: </label>
										<input type="text" name='m_mobileNo' readonly>
										<br>
										<label>Designated Office: </label>
										<input type="text" name='m_designatedOffice' readonly>
										<label>Office Tel. No.: </label>
										<input type="text" name='m_officeTelNo' readonly>
										<br>
										<label>Office Address: </label>
										<input type="text" name='m_officeAddress' readonly>
										<br>
										<label>Date of Retirement: </label>
										<input type="text" name='m_retirementDate' readonly>
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
										<input type="text" name='vehicleMake' readonly>
										<br>
										<label>Plate No.: </label>
										<input type="text" name='plateNo' readonly>
										<br>
										<label>Year Model: </label>
										<input type="text" name='yearModel' readonly>
										<br>
										<label>Color: </label>
										<input type="text" name='color' readonly>
										<br>
										<label>Motor No.: </label>
										<input type="text" name='motorNo' readonly>
										<br>
										<label>Chassis No.: </label>
										<input type="text" name='chassisNo' readonly>
										<br>
										<label>Sticker No.: </label>
										<input type="text" name='stickerNo' readonly>
									</fieldset>
									<button class="btn btn-default pull-right">Print</button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class='modal-footer'>
				
			</div>
		</div>
	</div>
</div>


			