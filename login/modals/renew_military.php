<div class="modal fade" id='renew_military'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>Renew Military</h4>
			</div>
			<div class='modal-body'>
				<div class='row'>
					<div class='col-lg-12'>
						<form action='logic/renew_military_logic.php' method='post'>
							<div class="panel-body">
                        <div class="checkbox">
                        	<input style="display:none;" type="hidden" name="m_militaryId" readonly id="renew_military_id">
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