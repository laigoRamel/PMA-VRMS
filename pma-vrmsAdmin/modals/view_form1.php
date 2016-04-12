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
                                <input type="text" class="form-control" name='a_firstname' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Middle Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name='a_middlename' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name='a_address' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Occupation</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name='a_occupation' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Office Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name='a_officeAddress' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Driver's License</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name='a_driversLicense' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Expiration Date</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name='a_expirationDate' data-mask="9999-99-99" readonly>
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
                        <div>
                        	<input type="text" class="form-control" name="a_class" readonly>
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
                            
                            <table class="table table-bordered" id="dynamic_field">
                                
					<tr>  
						<td><input type="text" name="wheels" class="form-control name_list"></input></td>  
						<td><input type="text" name="vehicleMake" class="form-control name_list" /></td>  
						<td><input type="text" name="plateNo" class="form-control name_list" /></td>  
						<td><input type="text" name="yearModel" class="form-control name_list" ></input></td>  
						<td><input type="text" name="color" class="form-control name_list" /></td>  
						<td><input type="text" name="motorNo" class="form-control name_list" /></td>  
						<td><input type="text" name="chassisNo" class="form-control name_list" /></td>  
						<td><input type="text" name="stickerNo" class="form-control name_list" /></td>
					</tr>  
                            
                            </table>
                                
                            
                        </div>
                        </div>
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


			