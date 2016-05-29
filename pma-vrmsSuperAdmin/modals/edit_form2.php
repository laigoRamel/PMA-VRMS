<div class="modal fade" id='edit_form2'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>Edit Military Data</h4>
			</div>
			<div class='modal-body'>
				<div class='row'>
					<div class='col-lg-12'>
	<form action="logic/edit_form2Logic.php" enctype='multipart/form-data' method="POST" onsubmit="return alert('Edited and updated');">
		<!-- personal information -->
		<div class="row" id="edit_modal_form2">
            <div class="col-md-7">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title">Personal Information</h3> </div>
                    <div class="panel-body">
                        <input style="display:none;" type="text" name="m_militaryId" readonly>
                        
                        <!-- image upload -->
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                            <img id="img_edit" style='height: 100%;'/>
                          </div>
                          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                          <div>
                               <span class="fileinput-filename"></span>
                                <span class="btn btn-default btn-file">
                                  <span class="fileinput-new">Select image</span>
                                  <span class="fileinput-exists">Change</span>
                                   <input type="file" name="m_profile">
                               </span>

                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                          </div>
                        </div>

                        <br>
                        <div class="form-horizontal">                  
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Last Name</label>
                              <div class="col-sm-9">
                                <input id='old_last_name' type='hidden' name='old_last_name'>
                                <input type="text" class="form-control" placeholder="Last Name" name='m_lastname' required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">First Name</label>
                              <div class="col-sm-9">
                                <input id='old_first_name' type='hidden' name='old_first_name'>
                                <input type="text" class="form-control" placeholder="First Name" name='m_firstname' required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Middle Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Middle Name" name='m_middlename' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Rank</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Rank" name='m_rank' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">BR / SVC</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="BR / SVC" name='m_brSvc' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">AFPSN</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="AFPSN" name='m_afpsn' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Residence Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Residence Address" name='m_residenceAddress' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Residence Tel. No.</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Residence Tel. No." name='m_residenceTelNo' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Email Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Email Address" name='m_emailAddress' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Mobile No.</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Mobile No." name='m_mobileNo' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Designated Office</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Designated Office" name='m_designatedOffice' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Office Tel. No.</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Office Tel. No." name='m_officeTelNo' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Office Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Office Address" name='m_officeAddress' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Date of Retirement</label>
                              <div class="col-sm-9">
                                <input type="date" class="form-control" placeholder="YYYY-MM-DD @MarcLim gawin mong datepicker" name='m_retirementDate' data-mask="9999-99-99" required>
                              </div>
                            </div>
                            
                        
                            
                           
                            
                        </div>
                    </div>
                </div>

                    
                </div>
        
        <div class="col-md-5">
                    <!-- vehicle type -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Vehicle Type/Class</h3> </div>
                        <div class="panel-body">
                        <div class="radio">
                            <label><input type="radio" name="m_class" value="Class A" <?php echo ($m_class=='Class A')?'checked':'' ?> required>Class A (PASSCARD)</label>
                            <p>&emsp; a. Registered to active Military Personnel</p>
                            <p>&emsp; b. Staff vehicles registered to the AFP</p>
                        </div>
        
                        <div class="radio">
                            <label><input type="radio" name="m_class" value="Class B" <?php echo ($m_class=='Class B')?'checked':'' ?> required>Class B (RED Sticker)</label>
                            <p>&emsp; a. Former military personnel or AFP Reservists</p>
                            <p>&emsp; b. Unremarried widow/widower of Military Personnel</p>
                            <p>&emsp; c. AFP & DND Civillian employees</p>
                        </div>
        
                        <div class="radio">
                            <label><input type="radio" name="m_class" value="Class C" <?php echo ($m_class=='Class C')?'checked':'' ?> required>Class C (YELLOW Sticker)</label>
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
                            <label><input type="radio" name="m_placeRegistered" value="Fort del Pilar" <?php echo ($m_placeRegistered=='Fort del Pilar')?'checked':'' ?> required>Fort del Pilar</label>
                        </div>

                        <div class="radio">
                            <label><input type="radio" name="m_placeRegistered" value="Camp Allen" <?php echo ($m_placeRegistered=='Camp Allen')?'checked':'' ?> required>Camp Allen</label>
                        </div>

                        <div class="radio">
                            <label><input type="radio" name="m_placeRegistered" value="Navy Base" <?php echo ($m_placeRegistered=='Navy Base')?'checked':'' ?> required>Navy Base</label>
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
                            <div id='editModal-vehicles' class="form-horizontal dynamic_field">
                              <input id='modal_military_id' type='hidden' name='id'>
                            <table class="table table-bordered" id="dynamic_field">
                            <thead>
                              <th>Wheels</th>
                              <th>Vehicle Make</th>
                              <th>Plate No</th>
                              <th>Year Model</th>
                              <th>Color</th>
                              <th>Motor No</th>
                              <th>Chassis No</th>
                              <th>deCal No</th>
                            </thead>
                             <tbody id='edit-vehicles'>
                              </tbody>
                            
                            </table>
                                
                            
                        </div>
                        </div>
                    </div>
                    
                    <!-- submit button -->
                    <div class="panel-body">
                        <span id='validate-decalNo' style='color: red; display: none;'><i class='fa fa-warning'></i> &nbsp;Decal number must be unique</span>
                        <span id='validate-plateNo' style='color: red; display: none;'><i class='fa fa-warning'></i> &nbsp;Plate number must be unique</span>
                        <button id='submit-edit' type="button submit" class="btn btn-primary btn-lg pull-right" value="Ok"> 
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
			</div>
			<div class='modal-footer'>
				
			</div>
		</div>
	</div>
</div>


			