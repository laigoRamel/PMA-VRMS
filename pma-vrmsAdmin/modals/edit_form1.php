<div class="modal fade" id='edit_form1'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>Edit Personal Data</h4>
			</div>
  <form action="logic/edit_form1Logic.php" enctype='multipart/form-data' method="POST" onsubmit="return alert('Edited and updated');">
			<div class='modal-body'>
				<div class='row'>
					<div class='col-lg-12'>

		<!-- personal information -->
		<div class="row" id="edit_modal_form1">
            <div class="col-md-7">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title">Personal Information</h3> </div>
                    <div class="panel-body">
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
                                   <input type="file" name="a_profile">
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
                                <input type="text" class="form-control" placeholder="Last Name" name='a_lastname' required>
                              </div>
                            </div>    
                            <div class="form-group">
                              <label class="col-sm-2 control-label">First Name</label>
                              <div class="col-sm-9">
                                <input id='old_first_name' type='hidden' name='old_first_name'>
                                <input type="text" class="form-control" placeholder="First Name" name='a_firstname' required>
                              </div>
                            </div>    
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Middle Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Middle Name" name='a_middlename' required>
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
            
                
            </div>
            
            <div class="col-md-12">
                <!-- Vehicle Information -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Vehicle Information</h3> </div>
                        <div class="panel-body">
                            <div id='editModal-vehicles' class="form-horizontal dynamic_field">    
                            
                              <input id='modal_applicant_id' type='hidden' name='id'>
                              <table class="table table-bordered" id="dynamic_field">
                              <thead>
                                <th>Type</th>
                                <th>Vehicle Make</th>
                                <th>Plate No</th>
                                <th>Year Model</th>
                                <th>Color</th>
                                <th>Motor No</th>
                                <th>Chassis No</th>
                                <th>Sticker No</th>
                                <th>Options</th>
                              </thead>
                              <tbody id='edit-vehicles'>
                              </tbody>
                              
                              </table>
                            
                        </div>

                        </div>
                    </div>

                    
                </div>
        
		</div>
		<!--end of div class row-->

					</div>
				</div>
			</div>
			<div class='modal-footer'>
         <span id='validate-stickerNo' style='color: red; display: none;'><i class='fa fa-warning'></i> &nbsp;Sticker number must be unique</span>
         <span id='validate-plateNo' style='color: red; display: none;'><i class='fa fa-warning'></i> &nbsp;Plate number must be unique</span>
				  <button id='submit-edit' class='btn btn-primary' type='submit'>Ok</button>
			</div>

        </form>
		</div>
	</div>
</div>

			