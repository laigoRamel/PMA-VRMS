<link rel="stylesheet" type="text/css" href="css/print.css">


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
            <!-- Main content -->
             <button id='print-btn' class='btn btn-primary btn-md'><i class='fa fa-print'></i>Print</button>
	<form action="logic/view_form2Logic.php" enctype='multipart/form-data' method="POST">
		<!-- personal information -->
		<div class="row" id="view_modal_form2">
            <div class="col-md-7">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title">Personal Information</h3> </div>
                    <div class="panel-body">
                        <input style="display:none;" type="text" name="m_militaryId" readonly>
                        
                        <br>
                        <br>
                        <div class="form-horizontal">                  
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Name</label>
                              <div class="col-sm-9">
                                <input id="view-name" type="text" class="form-control" placeholder="Last Name" name='name' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Rank</label>
                              <div class="col-sm-9">
                                <input id="view-rank" type="text" class="form-control" placeholder="Rank" name='m_rank' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">BR / SVC</label>
                              <div class="col-sm-9">
                                <input id="view-brSvc" type="text" class="form-control" placeholder="BR / SVC" name='m_brSvc' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">AFPSN</label>
                              <div class="col-sm-9">
                                <input id="view-afpsn" type="text" class="form-control" placeholder="AFPSN" name='m_afpsn' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Residence Address</label>
                              <div class="col-sm-9">
                                <input id="view-residenceAddress" type="text" class="form-control" placeholder="Residence Address" name='m_residenceAddress' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Residence Tel. No.</label>
                              <div class="col-sm-9">
                                <input id="view-residenceTelNo" type="text" class="form-control" placeholder="Residence Tel. No." name='m_residenceTelNo' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Email Address</label>
                              <div class="col-sm-9">
                                <input id="view-emailAddress" type="text" class="form-control" placeholder="Email Address" name='m_emailAddress' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Mobile No.</label>
                              <div class="col-sm-9">
                                <input id="view-mobileNo" type="text" class="form-control" placeholder="Mobile No." name='m_mobileNo' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Designated Office</label>
                              <div class="col-sm-9">
                                <input id="view-designatedOffice" type="text" class="form-control" placeholder="Designated Office" name='m_designatedOffice' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Office Tel. No.</label>
                              <div class="col-sm-9">
                                <input id="view-officeTelNo" type="text" class="form-control" placeholder="Office Tel. No." name='m_officeTelNo' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Office Address</label>
                              <div class="col-sm-9">
                                <input id="view-officeAddress" type="text" class="form-control" placeholder="Office Address" name='m_officeAddress' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Date of Retirement</label>
                              <div class="col-sm-9">
                                <input id="view-dateOfRetirement" type="text" class="form-control" placeholder="YYYY-MM-DD" name='m_retirementDate' data-mask="9999-99-99" readonly>
                              </div>
                            </div>
                            
                        
                            
                           
                            
                        </div>
                    </div>
                </div>

                    
                </div>
        
        <div class="col-md-5">
                    <!-- image display -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <div>
                        <img id='img_view' height="100px">
                        </div>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Vehicle Type/Class</h3> </div>
                        <div class="panel-body">
                        <div class="radio">
                            <label><input id="view-type" type="text" class="form-control" name="m_class" readonly>
                        </div>
        
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Date and Time Registered</h3> </div>
                        <div class="panel-body">
                        <div class="radio">
                            <label><input id="view-dateRegistered" type="text" class="form-control" name="m_dateRegistered" readonly>
                        </div>
        
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Place Registered</h3> </div>
                        <div class="panel-body">
                        <div class="radio">
                            <label><input id="view-placeRegistered" type="text" class="form-control" name="m_placeRegistered" readonly>
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
                              <th>Type</th>
                              <th>Vehicle Make</th>
                              <th>Plate No</th>
                              <th>Year Model</th>
                              <th>Color</th>
                              <th>Motor No</th>
                              <th>Chassis No</th>
                              <th>deCal No</th>
                            </thead>
                            <tbody id='view-vehicles'>
                            </tbody>
                                
					<!--<tr>  
						<td><input type="text" name="wheels" class="form-control name_list" readonly></input></td>  
						<td><input type="text" name="vehicleMake" class="form-control name_list" readonly/></td>  
						<td><input type="text" name="plateNo" class="form-control name_list" readonly/></td>  
						<td><input type="text" name="yearModel" class="form-control name_list" readonly></input></td>  
						<td><input type="text" name="color" class="form-control name_list" readonly/></td>  
						<td><input type="text" name="motorNo" class="form-control name_list" readonly/></td>  
						<td><input type="text" name="chassisNo" class="form-control name_list" readonly/></td>  
						<td><input type="text" name="stickerNo" class="form-control name_list" readonly/></td>
					</tr>-->
                            
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

<script src="js/print.js" type="text/javascript"></script>


			