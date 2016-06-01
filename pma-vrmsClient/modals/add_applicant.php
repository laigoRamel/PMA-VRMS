<link href='ext/bootstrap/css/textbox.css' rel='stylesheet' type='text/css' />


<div class="modal fade" id='add_applicant'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>Add Applicant</h4>
			</div>
			<div class='modal-body'>
				<div class='row'>
					<div class='col-lg-12'>
						<form action='logic/add_applicant_logic.php' method='post'>
							<table id='edit_modal_table'>
								<tr style='display: none;'>
									<td>Username</td>
									<td><input type='text' name='personal_dataId' readonly /></td>
								</tr>
								<tr>
									<div class="input-group input-group-sm textbox-margin">
	 								 <span class="input-group-addon text-margin" id="sizing-addon2">Last Name</span>
	  								 <input type="text" class="form-control" name='lastname' aria-describedby="sizing-addon2">
									</div>
								</tr>
								<tr>
									<div class="input-group input-group-sm textbox-margin">
	 								 <span class="input-group-addon text-margin" id="sizing-addon2">First Name</span>
	  								 <input type="text" class="form-control" name='firstname' aria-describedby="sizing-addon2">
									</div>
								</tr>
								<tr>
									<div class="input-group input-group-sm textbox-margin">
	 								 <span class="input-group-addon text-margin" id="sizing-addon2">Middle Name</span>
	  								 <input type="text" class="form-control" name='middlename' aria-describedby="sizing-addon2">
									</div>
								</tr>
								<tr>
									<div class="input-group input-group-sm textbox-margin">
	 								 <span class="input-group-addon" id="sizing-addon2">Address</span>
	  								 <input type="text" class="form-control" name='address' aria-describedby="sizing-addon2">
									</div>
								</tr>
								<tr>
									<div class="input-group input-group-sm textbox-margin">
	 								 <span class="input-group-addon" id="sizing-addon2">Occupation</span>
	  								 <input type="text" class="form-control" name='occupation' aria-describedby="sizing-addon2">
									</div>
								</tr>
								<tr>
									<div class="input-group input-group-sm textbox-margin">
	 								 <span class="input-group-addon" id="sizing-addon2">Office Address</span>
	  								 <input type="text" class="form-control" name='office_address' aria-describedby="sizing-addon2">
									</div>
								</tr>
								<tr>
									<div class="input-group input-group-sm textbox-margin">
	 								 <span class="input-group-addon" id="sizing-addon2">Driver's License</span>
	  								 <input type="text" class="form-control" name='driver_license' aria-describedby="sizing-addon2">
									</div>
								</tr>
								<tr>
									<div class="input-group input-group-sm textbox-margin">
	 								 <span class="input-group-addon" id="sizing-addon2">Expiration Date</span>
	  								 <input type="text" class="form-control" name='expiration_date' aria-describedby="sizing-addon2">
									</div>
								</tr>
								
							</table>
							
							<br/>
							<?php require_once('index_logic.php'); ?>

							<div class='row'>
								<div class='col-lg-12'>
									<button type="button" class="btn btn-default btn-sm" data-toggle='modal' data-target='#add_vehicle'>
										<span class="glyphicon glyphicon-plus" aria-hidden="true" data-toggle='modal'></span> Add Vehicle
									</button>
									<br/>
									<br/>
									<table  class="table table-bordered table-hover table-striped">
										<thead>
											<th>Vehicle Make/s</th>
											<th>Plate #</th>
											<th>Year Model</th>
											<th>Color</th>
											<th>Motor #</th>
											<th>Chassis #</th>
											<th>Sticker #</th>
											<th colspan=2 style="text-align:center">Options</th>
										</thead>
										<tbody>
											<?php
											foreach($vehicles as $key => $vehicle){
												echo <<<DATA
												<tr id='vehicle_$key'>
													<td style='display: none'>$vehicle[vehicle_dataId]</td>
													<td>$vehicle[vehicle_make]</td>
													<td>$vehicle[plate_no]</td>
													<td>$vehicle[year_model]</td>
													<td>$vehicle[color]</td>
													<td>$vehicle[motor_no]</td>
													<td>$vehicle[chassis_no]</td>
													<td>$vehicle[sticker_no]</td>
													<td><button class='btn btn-warning btn-sm' data-toggle='modal' data-target='#edit_vehicle' onclick='edit_vehicle($key)'>Edit</button></td>
												</tr>
DATA;

											}
											?>

										</tbody>

									</table>
										<button type='submit' value='Ok' class="btn btn-default pull-right" >
											<span class="glyphicon glyphicon-ok"></span> Ok
										</button>
								</div>
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