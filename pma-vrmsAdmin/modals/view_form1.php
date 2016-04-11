<div class="modal fade" id='view_form1'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>View Personal Data</h4>
			</div>
			<div class='modal-body'>
				<div class='row'>
					<div class='col-lg-12'>
						<!-- Main content -->
        <section class="content">
	<form action="logic/view_form1Logic.php" enctype='multipart/form-data' method="POST">
		<!-- personal information -->
		<div class="row"  id="view_modal_form1">
            <div class="col-md-7">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title">Personal Information</h3> </div>
                    <div class="panel-body">
                        <input style="display:none;" type="text" name="a_applicantId" readonly>
                        
                        <!-- image display -->
                        <img src="<?php echo "img/profile/applicant/$applicant[a_profile]"; ?>" height="100px">

                        <br>
                        <br>
                        <div class="form-horizontal">                  
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Last Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="a_lastname" readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">First Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name='a_firstname'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Middle Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name='a_middlename'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name='a_address'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Occupation</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name='a_occupation'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Office Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name='a_officeAddress'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Driver's License</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name='a_driversLicense'>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Expiration Date</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name='a_expirationDate' data-mask="9999-99-99">
                              </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                    
                </div>
        
        <div class="col-md-5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Vehicle Type/Class</h3> </div>
                        <div class="panel-body">
                        <div class="radio">
                            <label><input type="radio" name="a_class" value="Class A">Class A (PASSCARD)</label>
                            <p>&emsp; a. Registered to active Military Personnel</p>
                            <p>&emsp; b. Staff vehicles registered to the AFP</p>
                        </div>
        				<br>

                        <div class="radio">
                            <label><input type="radio" name="a_class" value="Class B">Class B (RED Sticker)</label>
                            <p>&emsp; a. Former military personnel or AFP Reservists</p>
                            <p>&emsp; b. Unremarried widow/widower of Military Personnel</p>
                            <p>&emsp; c. AFP & DND Civillian employees</p>
                        </div>
        				<br>

                        <div class="radio">
                            <label><input type="radio" name="a_class" value="Class C">Class C (YELLOW Sticker)</label>
                            <p>&emsp; a. Concessionaires/Traders with AFP Contract</p>
                            <p>&emsp; b. Official/Employee/Member of tenant entity/club facility on post</p>
                            <p>&emsp; c. Diplomats and expatriates</p>
                            <p>&emsp; d. Selected Sponsored Civilians</p>
                        </div>
        
                        </div>
                    </div>
                
                <!-- Requirements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Requirements</h3>
                    </div>
                    
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
                            </div>
                    </div>
                </div>
            
                
            </div>
            
                <div class="col-md-12">
                <!-- Vehicle Information -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Vehicle Information</h3> </div>
                        <div class="panel-body">
                            <div class="form-horizontal dynamic_field">
                            <input style="display:none;" type="text" name="vehicleId" readonly>
                            <table class="table table-bordered" id="dynamic_field">
                                
					<tr>  
						<td>
							<select name="wheels[]" class="form-control name_list" >
								<option value="">No. of Wheels...</option>
								<option value="2-wheeled">2-wheeled</option>
								<option value="4-wheeled">4-wheeled</option>
							</select>
						</td>  
						<td><input type="text" name="vehicleMake[]" placeholder="Vehicle Make" class="form-control name_list" /></td>  
						<td><input type="text" name="plateNo[]" placeholder="Plate No." class="form-control name_list" /></td>  
						<td>
							<select name="yearModel[]" class="form-control name_list">
								<option value="">Year Model...</option>
								<option value="1990">1990</option>
								<option value="1991">1991</option>
								<option value="1992">1992</option>
								<option value="1993">1993</option>
								<option value="1994">1994</option>
								<option value="1995">1995</option>
								<option value="1996">1996</option>
								<option value="1997">1997</option>
								<option value="1998">1998</option>
								<option value="1999">1999</option>
								<option value="2000">2000</option>
								<option value="2001">2001</option>
								<option value="2002">2002</option>
								<option value="2003">2003</option>
								<option value="2004">2004</option>
								<option value="2005">2005</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
							</select>
						</td>  
						<td><input type="text" name="color[]" placeholder="Color" class="form-control name_list" /></td>  
						<td><input type="text" name="motorNo[]" placeholder="Motor No." class="form-control name_list" /></td>  
						<td><input type="text" name="chassisNo[]" placeholder="Chassis No." class="form-control name_list" /></td>  
						<td><input type="text" name="stickerNo[]" placeholder="Sticker No" class="form-control name_list" /></td>  
						<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
					</tr>  
                            
                            </table>
                                
                            
                        </div>
                        </div>
                    </div>
                    
                    <!-- submit button -->
                    <div class="panel-body">
                        <button type="button submit" class="btn btn-primary btn-lg pull-right" value="Ok"> 
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Submit Form
                        </button> 
                    </div>
                    
                </div>
        
		</div>
		<!--end of div class row-->
	</form>
</section>
					</div>
				</div>
			</div>
			<div class='modal-footer'>
				
			</div>
		</div>
	</div>
</div>


			