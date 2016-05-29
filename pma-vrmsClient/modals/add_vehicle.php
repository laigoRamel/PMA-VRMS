<div class="modal fade" id='add_vehicle'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>Add Vehicle</h4>
			</div>
			<div class='modal-body'>
				<div class='row'>
					<div class='col-lg-12'>
						<form action='logic/add_vehicle_logic.php' method='post'>
							<table>
								<tr>
									<div class="input-group input-group-sm textbox-margin">
	 								 <span class="input-group-addon text-margin" id="sizing-addon2">Vehicle Make</span>
	  								 <input type="text" class="form-control" name='vehicle_make' aria-describedby="sizing-addon2">
									</div>
								</tr>
								<tr>
									<div class="input-group input-group-sm textbox-margin">
	 								 <span class="input-group-addon text-margin" id="sizing-addon2">Plate #</span>
	  								 <input type="text" class="form-control" name='plate_no' aria-describedby="sizing-addon2">
									</div>
								</tr>
								<tr>
									<div class="input-group input-group-sm textbox-margin">
	 								 <span class="input-group-addon text-margin" id="sizing-addon2">Year Model</span>
	  								 <input type="text" class="form-control" name='year_model' aria-describedby="sizing-addon2">
									</div>
								</tr>
								<tr>
									<div class="input-group input-group-sm textbox-margin">
	 								 <span class="input-group-addon text-margin" id="sizing-addon2">Color</span>
	  								 <input type="text" class="form-control" name='color' aria-describedby="sizing-addon2">
									</div>
								</tr>
								<tr>
									<div class="input-group input-group-sm textbox-margin">
	 								 <span class="input-group-addon text-margin" id="sizing-addon2">Motor #</span>
	  								 <input type="text" class="form-control" name='motor_no' aria-describedby="sizing-addon2">
									</div>
								</tr>
								<tr>
									<div class="input-group input-group-sm textbox-margin">
	 								 <span class="input-group-addon text-margin" id="sizing-addon2">Chassis #</span>
	  								 <input type="text" class="form-control" name='chassis_no' aria-describedby="sizing-addon2">
									</div>
								</tr>
								<tr>
									<div class="input-group input-group-sm textbox-margin">
	 								 <span class="input-group-addon text-margin" id="sizing-addon2">Sticker #</span>
	  								 <input type="text" class="form-control" name='sticker_no' aria-describedby="sizing-addon2">
									</div>
								</tr>
								<button type='submit' value='Ok' class="btn btn-default pull-right" >
											<span class="glyphicon glyphicon-ok"></span> Ok
										</button>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>