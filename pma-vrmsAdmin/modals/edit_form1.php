<div class="modal fade" id='edit_form1'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>Edit Personal Data</h4>
			</div>
			<div class='modal-body'>
				<div class='row'>
					<div class='col-lg-12'>
	<form action="logic/edit_form1Logic.php" enctype='multipart/form-data' method="POST">
		<!-- personal information -->
		<div class="row" id="edit_modal_form1">
            <div class="col-md-7">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title">Personal Information</h3> </div>
                    <div class="panel-body">
                        <input style="display:none;" type="text" name="a_applicantId" readonly>
                        
                        <!-- image upload -->
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                            <img id="img_edit">
                          </div>
                          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                          <div>
                               <span class="fileinput-filename"></span>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                            <input type="file" name="a_profile"></span>
                              
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                          </div>
                        </div>

                        <br>
                        <div class="form-horizontal">                  
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Last Name" name='name' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Address" name='a_address' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Occupation</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Occupation" name='a_occupation' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Office Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Address" name='a_officeAddress' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Driver's License</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Driver's License" name='a_driversLicense' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Expiration Date</label>
                              <div class="col-sm-9">
                                <input type="date" class="form-control" placeholder="YYYY-MM-DD @MarcLim gawin mong datepicker" name='a_expirationDate' data-mask="9999-99-99" required>
                              </div>
                            </div>
                            
                           
                            
                        </div>
                    </div>
                </div>

                    
                </div>
        
        <div class="col-md-5">
        <!-- Vehicle type -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Vehicle Type/Class</h3> </div>
                        <div class="panel-body">
                        <div class="radio">
                            <label><input type="radio" name="a_class" value="Class A" <?php echo ($a_class=='Class A')?'checked':'' ?> required>Class A (PASSCARD)</label>
                            <p>&emsp; a. Registered to active Military Personnel</p>
                            <p>&emsp; b. Staff vehicles registered to the AFP</p>
                        </div>
        				<br>

                        <div class="radio">
                            <label><input type="radio" name="a_class" value="Class B" <?php echo ($a_class=='Class B')?'checked':'' ?> required>Class B (RED Sticker)</label>
                            <p>&emsp; a. Former military personnel or AFP Reservists</p>
                            <p>&emsp; b. Unremarried widow/widower of Military Personnel</p>
                            <p>&emsp; c. AFP & DND Civillian employees</p>
                        </div>
        				<br>

                        <div class="radio">
                            <label><input type="radio" name="a_class" value="Class C" <?php echo ($a_class=='Class C')?'checked':'' ?> required>Class C (YELLOW Sticker)</label>
                            <p>&emsp; a. Concessionaires/Traders with AFP Contract</p>
                            <p>&emsp; b. Official/Employee/Member of tenant entity/club facility on post</p>
                            <p>&emsp; c. Diplomats and expatriates</p>
                            <p>&emsp; d. Selected Sponsored Civilians</p>
                        </div>
        
                        </div>
                    </div>

                    <!-- place registered -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Place Registered</h3> </div>
                        <div class="panel-body">
                        <div class="radio">
                            <label><input type="radio" name="a_placeRegistered" value="Fort del Pilar" <?php echo ($a_placeRegistered=='Fort del Pilar')?'checked':'' ?> required>Fort del Pilar</label>
                        </div>

                        <div class="radio">
                            <label><input type="radio" name="a_placeRegistered" value="Camp Allen" <?php echo ($a_placeRegistered=='Camp Allen')?'checked':'' ?> required>Camp Allen</label>
                        </div>

                        <div class="radio">
                            <label><input type="radio" name="a_placeRegistered" value="Navy Base" <?php echo ($a_placeRegistered=='Navy Base')?'checked':'' ?> required>Navy Base</label>
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
                            <label><input name='requirements[]' value='1' type="checkbox" checked="checked">Photocopy of current military ID, Office ID, or driver's license</label>
                            </div>
                            <div class="checkbox">
                            <label><input name='requirements[]' value='2' type="checkbox" checked="checked">Photocopy of retirement/separation/discharged order for former military personnel</label>
                            </div>
                            <div class="checkbox">
                            <label><input name='requirements[]' value='3' type="checkbox" checked="checked">Photocopy of order for Commissionship/Enlistment for AFP Reservists</label>
                            </div>
                            <div class="checkbox">
                            <label><input name='requirements[]' value='4' type="checkbox" checked="checked">Photocopy of latest appointment order for AFP civilian employees and DND organic personnel</label>
                            </div>
                            <div class="checkbox">
                            <label><input name='requirements[]' value='5' type="checkbox" checked="checked">Photocopy of marriage contract, in case the vehicle is registered in the name of the non-military spouse</label>
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
                            <thead>
                              <th>Wheels</th>
                              <th>Vehicle Make</th>
                              <th>Plate No</th>
                              <th>Year Model</th>
                              <th>Color</th>
                              <th>Motor No</th>
                              <th>Chassis No</th>
                              <th>Sticker No</th>
                            </thead>
                                
					<tr>  
						<td>
							<select name="wheels" class="form-control name_list" required>
								<option value="">No. of Wheels...</option>
								<option value="2-wheeled" <?php if($wheels=="2-wheeled") echo 'selected="selected"'; ?> >2-wheeled</option>
								<option value="4-wheeled" <?php if($wheels=="4-wheeled") echo 'selected="selected"'; ?> >4-wheeled</option>
							</select>
						</td>  
						<td><input type="text" name="vehicleMake" placeholder="Vehicle Make" class="form-control name_list" required/></td>  
						<td><input type="text" name="plateNo" placeholder="Plate No." class="form-control name_list" required/></td>  
						<td>
							<select name="yearModel" class="form-control name_list" required>
								<option value="">Year Model...</option>
								<option value="1990" <?php if($yearModel=="1990") echo 'selected="selected"'; ?> >1990</option>
								<option value="1991" <?php if($yearModel=="1991") echo 'selected="selected"'; ?> >1991</option>
								<option value="1992" <?php if($yearModel=="1992") echo 'selected="selected"'; ?> >1992</option>
								<option value="1993" <?php if($yearModel=="1993") echo 'selected="selected"'; ?> >1993</option>
								<option value="1994" <?php if($yearModel=="1994") echo 'selected="selected"'; ?> >1994</option>
								<option value="1995" <?php if($yearModel=="1995") echo 'selected="selected"'; ?> >1995</option>
								<option value="1996" <?php if($yearModel=="1996") echo 'selected="selected"'; ?> >1996</option>
								<option value="1997" <?php if($yearModel=="1997") echo 'selected="selected"'; ?> >1997</option>
								<option value="1998" <?php if($yearModel=="1998") echo 'selected="selected"'; ?> >1998</option>
								<option value="1999" <?php if($yearModel=="1999") echo 'selected="selected"'; ?> >1999</option>
								<option value="2000" <?php if($yearModel=="2000") echo 'selected="selected"'; ?> >2000</option>
								<option value="2001" <?php if($yearModel=="2001") echo 'selected="selected"'; ?> >2001</option>
								<option value="2002" <?php if($yearModel=="2002") echo 'selected="selected"'; ?> >2002</option>
								<option value="2003" <?php if($yearModel=="2003") echo 'selected="selected"'; ?> >2003</option>
								<option value="2004" <?php if($yearModel=="2004") echo 'selected="selected"'; ?> >2004</option>
								<option value="2005" <?php if($yearModel=="2005") echo 'selected="selected"'; ?> >2005</option>
								<option value="2006" <?php if($yearModel=="2006") echo 'selected="selected"'; ?> >2006</option>
								<option value="2007" <?php if($yearModel=="2007") echo 'selected="selected"'; ?> >2007</option>
								<option value="2008" <?php if($yearModel=="2008") echo 'selected="selected"'; ?> >2008</option>
								<option value="2009" <?php if($yearModel=="2009") echo 'selected="selected"'; ?> >2009</option>
								<option value="2010" <?php if($yearModel=="2010") echo 'selected="selected"'; ?> >2010</option>
								<option value="2011" <?php if($yearModel=="2011") echo 'selected="selected"'; ?> >2011</option>
								<option value="2012" <?php if($yearModel=="2012") echo 'selected="selected"'; ?> >2012</option>
								<option value="2013" <?php if($yearModel=="2013") echo 'selected="selected"'; ?> >2013</option>
								<option value="2014" <?php if($yearModel=="2014") echo 'selected="selected"'; ?> >2014</option>
								<option value="2015" <?php if($yearModel=="2015") echo 'selected="selected"'; ?> >2015</option>
								<option value="2016" <?php if($yearModel=="2016") echo 'selected="selected"'; ?> >2016</option>
								<option value="2017" <?php if($yearModel=="2017") echo 'selected="selected"'; ?> >2017</option>
								<option value="2018" <?php if($yearModel=="2018") echo 'selected="selected"'; ?> >2018</option>
								<option value="2019" <?php if($yearModel=="2019") echo 'selected="selected"'; ?> >2019</option>
								<option value="2020" <?php if($yearModel=="2020") echo 'selected="selected"'; ?> >2020</option>
							</select>
						</td>  
						<td><input type="text" name="color" placeholder="Color" class="form-control name_list" required/></td>  
						<td><input type="text" name="motorNo" placeholder="Motor No." class="form-control name_list" required/></td>  
						<td><input type="text" name="chassisNo" placeholder="Chassis No." class="form-control name_list" required/></td>  
						<td><input type="text" name="stickerNo" placeholder="Sticker No" class="form-control name_list" required/></td>  
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
					</div>
				</div>
			</div>
			<div class='modal-footer'>
				
			</div>
		</div>
	</div>
</div>


			