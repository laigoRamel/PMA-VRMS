<div class="modal fade" id='delete_applicant'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>Delete User</h4>
			</div>
			<div class='modal-body'>
				<div class='row'>
					<div class='col-lg-12'>
						<form action='logic/delete_applicant_logic.php' method='post'>
						
							<div id='delete_modal_table'>
								<div style='display: none;'>
									<input type='text' name='personal_dataId' readonly />
								</div>

								<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Last Name</span>
		  								 <input type='text' class="form-control" name='lastname' aria-describedby="sizing-addon2">
										</div>

										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">First Name</span>
		  								 <input type='text' class="form-control" name='firstname' aria-describedby="sizing-addon2">
										</div>

										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Middle Name</span>
		  								 <input type='text' class="form-control" name='middlename' aria-describedby="sizing-addon2">
										</div>

										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Address</span>
		  								 <input type='text' class="form-control" name='address' aria-describedby="sizing-addon2">
										</div>
										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Occupation</span>
		  								 <input type='text' class="form-control" name='occupation' aria-describedby="sizing-addon2">
										</div>
										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Office Address</span>
		  								 <input type='text' class="form-control" name='office_address' aria-describedby="sizing-addon2">
										</div>
										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Driver's License</span>
		  								 <input type='text' class="form-control" name='driver_license' aria-describedby="sizing-addon2">
										</div>
										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Expiration Date</span>
		  								 <input type='text' class="form-control" name='expiration_date' aria-describedby="sizing-addon2">
										</div>
							</div>


							
							<button type='submit' value='Ok' class="btn btn-default pull-right" >
										<span class="glyphicon glyphicon-ok"></span> Ok
									</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>