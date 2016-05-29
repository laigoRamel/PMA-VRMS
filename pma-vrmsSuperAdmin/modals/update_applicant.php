<div class="modal fade" id='update_applicant'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>Renew Applicant</h4>
			</div>
			<div class='modal-body'>
				<div class='row'>
					<div class='col-md-6'>
						<table id='update-modal-info' class='table table-hover table-bordered table-striped'>
							<tr>
								<td><label>Name</label></td>
								<td></td>
							</tr>
							<tr>
								<td><label>Address</label></td>
								<td></td>
							</tr>
							<tr>
								<td><label>Occupation</label></td>
								<td></td>
							</tr>
							<tr>
								<td><label>Office Address</label></td>
								<td></td>
							</tr>
							<tr>
								<td><label>Class</label></td>
								<td></td>
							</tr>
							<tr>
								<td><label>Place Registered</label></td>
								<td></td>
							</tr>
						</table>
					</div>
					<div class='col-md-6'>
						<form action='logic/update_pending_applicant_logic.php' method='post'>
							<input id='applicantId' type='hidden' name='applicantId'>
							<!--<input id='requirement-1' type="checkbox">Photocopy of current year OR, and CR</input><br>-->
			                <input id='requirement-1' name='requirements[]' value='1' type="checkbox">Photocopy of current military ID, Office ID, or driver's license</input><br>
			                <input id='requirement-2' name='requirements[]' value='2' type="checkbox">Photocopy of retirement/separation/discharged order for former military personnel</input><br>
			                <input id='requirement-3' name='requirements[]' value='3' type="checkbox">Photocopy of order for Commissionship/Enlistment for AFP Reservists</input><br>
			                <input id='requirement-4' name='requirements[]' value='4' type="checkbox">Photocopy of latest appointment order for AFP civilian employees and DND organic personnel</input><br>
			                <input id='requirement-5' name='requirements[]' value='5' type="checkbox">Photocopy of marriage contract, in case the vehicle is registered in the name of the non-military spouse</input><br>
											
								<br/>
								<button type='submit' value='Ok' class="btn btn-default pull-right">
										<span class="glyphicon glyphicon-ok" ></span> Ok
									</button>
								


						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>