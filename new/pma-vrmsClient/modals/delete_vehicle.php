<div class="modal fade" id='delete_vehicle'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>Delete User</h4>
			</div>
			<div class='modal-body'>
				<div class='row'>
					<div class='col-lg-12'>
						<form action='logic/delete_vehicle_logic.php' method='post'>
						
							<table id='delete_modal_table_vehicle'>
								<tr style='display: none;'>
									<td>Username</td>
									<td><input type='text' name='vehicle_dataId' readonly /></td>
								</tr>
								<tr>
									<td>Vehicle Make/s</td>
									<td><input type='text' name='vehicle_make' /></td>
								</tr>
								<tr>
									<td>Plate #</td>
									<td><input type='text' name='plate_no' /></td>
								</tr>
								<tr>
									<td>Year Model</td>
									<td><input type='text' name='year_model' /></td>
								</tr>
								<tr>
									<td>Color</td>
									<td><input type='text' name='color' /></td>
								</tr>
								<tr>
									<td>Motor #</td>
									<td><input type='text' name='motor_no' /></td>
								</tr>
								<tr>
									<td>Chassis #</td>
									<td><input type='text' name='chassis_no' /></td>
								</tr>
								<tr>
									<td>Sticker #</td>
									<td><input type='text' name='sticker_no' /></td>
								</tr>
								<tr>
									<td colspan='2'><input type='submit' value='Ok' class='btn btn-primary btn-sm' /></td>
								</tr>
							</table>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>