<?php
	//include('login/session.php');
?>

<div class="modal fade" id='renew_applicant'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>Renew Applicant</h4>
			</div>
			<div class='modal-body'>
				<div class='row'>
					<div class='col-md-6'>
						<table id='renew-modal-info' class='table table-hover table-bordered table-striped'>
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
						<form action='logic/renew_applicant_logic.php' method='post'>
                        	<input style="display:none;" type="hidden" name="a_applicantId" readonly id="renew_applicant_id">

							<div class="panel-body">
                        <div class="checkbox">
                            <label><input name='requirements[]' value='1' type="checkbox">Photocopy of current military ID, Office ID, or driver's license</label>
                            </div>
                            <div class="checkbox">
                            <label><input name='requirements[]' value='2' type="checkbox">Photocopy of retirement/separation/discharged order for former military personnel</label>
                            </div>
                            <div class="checkbox">
                            <label><input name='requirements[]' value='3' type="checkbox">Photocopy of order for Commissionship/Enlistment for AFP Reservists</label>
                            </div>
                            <div class="checkbox">
                            <label><input name='requirements[]' value='4' type="checkbox">Photocopy of latest appointment order for AFP civilian employees and DND organic personnel</label>
                            </div>
                            <div class="checkbox">
                            <label><input name='requirements[]' value='5' type="checkbox">Photocopy of marriage contract, in case the vehicle is registered in the name of the non-military spouse</label>
                            <label><?php echo $login_session; ?></label>
                            </div>
                    </div>
											
								<br/>
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