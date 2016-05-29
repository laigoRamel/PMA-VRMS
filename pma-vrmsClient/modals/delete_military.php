<div class="modal fade" id='delete_military'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>Delete User</h4>
			</div>
			<div class='modal-body'>
				<div class='row'>
					<div class='col-lg-12'>
						<form action='logic/delete_military_logic.php' method='post'>
						
							<div id='delete_modal_table_military'>
								<div style='display: none;'>
									<input type='text' name='military_dataId' readonly />
								</div>

								<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Last Name</span>
		  								 <input type='text' class="form-control" name='m_lastname' aria-describedby="sizing-addon2">
										</div>

										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">First Name</span>
		  								 <input type='text' class="form-control" name='m_firstname' aria-describedby="sizing-addon2">
										</div>

										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Middle Name</span>
		  								 <input type='text' class="form-control" name='m_middlename' aria-describedby="sizing-addon2">
										</div>

										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Rank</span>
		  								 <input type='text' class="form-control" name='m_rank' aria-describedby="sizing-addon2">
										</div>
										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">BR / SVC</span>
		  								 <input type='text' class="form-control" name='m_svc' aria-describedby="sizing-addon2">
										</div>
										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">AFPSN</span>
		  								 <input type='text' class="form-control" name='m_afpsn' aria-describedby="sizing-addon2">
										</div>
										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Residence Address</span>
		  								 <input type='text' class="form-control" name='m_residenceAddress' aria-describedby="sizing-addon2">
										</div>
										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Residence Tel. #</span>
		  								 <input type='text' class="form-control" name='m_residenceTelNo' aria-describedby="sizing-addon2">
										</div>
										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Email Address</span>
		  								 <input type='text' class="form-control" name='m_emailAddress' aria-describedby="sizing-addon2">
										</div>
										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Mobile #</span>
		  								 <input type='text' class="form-control" name='m_mobileNo' aria-describedby="sizing-addon2">
										</div>
										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Designated Office</span>
		  								 <input type='text' class="form-control" name='m_designatedOffice' aria-describedby="sizing-addon2">
										</div>
										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Office Tel. #</span>
		  								 <input type='text' class="form-control" name='m_designatedOfficeTelNo' aria-describedby="sizing-addon2">
										</div>
										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Office Address</span>
		  								 <input type='text' class="form-control" name='m_officeAddress' aria-describedby="sizing-addon2">
										</div>
										<div class="input-group input-group-sm textbox-margin">
		 								 <span class="input-group-addon text-margin" id="sizing-addon2">Date of Retirement</span>
		  								 <input type='text' class="form-control" name='m_dateOfRetirement' aria-describedby="sizing-addon2">
										</div>

							</div>

<br/>
							<?php require_once('index_logic.php'); ?>

							<div class='row'>
								<div class='col-lg-12'>
									<button type="button" class="btn btn-default btn-sm" data-toggle='modal' data-target='#add_vehicle'>
										<span class="glyphicon glyphicon-plus" aria-hidden="true" data-toggle='modal'></span> Add Vehicle
									</button>
									<br/><br/>

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
													<td><button class='btn btn-danger btn-sm' data-toggle='modal' data-target='#delete_vehicle' onclick='delete_vehicle($key)'>Delete</button></td>
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
		</div>
	</div>
</div>