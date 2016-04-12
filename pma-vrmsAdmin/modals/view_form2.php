<div class="modal fade" id='view_form2'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>View Military Data</h4>
			</div>
			<div class='modal-body'>
				<div class='row'>
					<div class='col-lg-12'>
						<form action="logic/add_form2Logic.php" enctype='multipart/form-data' method="POST">
		<!-- personal information -->
		<div class="row" id="view_modal_form2">
            <div class="col-md-7">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title">Personal Information</h3> </div>
                    <div class="panel-body">
                        <input style="display:none;" type="text" name="m_militaryId" readonly>
                        
                        

                        <div class="form-horizontal">                  
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Last Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Last Name" name='m_lastname' required>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">First Name</label>
                              <div class="col-sm-9">
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
                                <input type="text" class="form-control" placeholder="YYYY-MM-DD" name='m_retirementDate' data-mask="9999-99-99" required>
                              </div>
                            </div>
                            
                        
                            
                           
                            
                        </div>
                    </div>
                </div>

                    
                </div>
        
        <div class="col-md-5">
                    
                    <!-- image display -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Picture</h3> </div>
                        <div class="panel-body">
                        <div class="radio">
                            <img src="<?php echo "img/profile/military/$military[m_profile]"; ?>" height="100px">
                        </div>
        
                        </div>
                    </div>
                        
                        
                        
            
            
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Vehicle Type/Class</h3> </div>
                        <div class="panel-body">
                        <div class="radio">
                            <label><input type="text" name="m_class" readonly>
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
						<td><input type="text" name="wheels" class="form-control name_list" readonly></input></td>  
						<td><input type="text" name="vehicleMake" class="form-control name_list" readonly/></td>  
						<td><input type="text" name="plateNo" class="form-control name_list" readonly/></td>  
						<td><input type="text" name="yearModel" class="form-control name_list" readonly></input></td>  
						<td><input type="text" name="color" class="form-control name_list" readonly/></td>  
						<td><input type="text" name="motorNo" class="form-control name_list" readonly/></td>  
						<td><input type="text" name="chassisNo" class="form-control name_list" readonly/></td>  
						<td><input type="text" name="stickerNo" class="form-control name_list" readonly/></td>
					</tr>  
                            
                            </table>
                                
                            
                        </div>
                        </div>
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


			