<link rel="stylesheet" type="text/css" href="css/print.css">


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
             <button id='print-btn' class='btn btn-primary btn-md'><i class='fa fa-print'></i>Print</button>
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
                        
  

                        <br>
                        <br>
                        <div class="form-horizontal">                  
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Name</label>
                              <div class="col-sm-9">
                                <input id='view-name' type="text" class="form-control" name="name" readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Address</label>
                              <div class="col-sm-9">
                                <input id='view-address' type="text" class="form-control" name='a_address' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Occupation</label>
                              <div class="col-sm-9">
                                <input id='view-occupation' type="text" class="form-control" name='a_occupation' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Office Address</label>
                              <div class="col-sm-9">
                                <input id='view-office' type="text" class="form-control" name='a_officeAddress' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Driver's License</label>
                              <div class="col-sm-9">
                                <input id='view-license' type="text" class="form-control" name='a_driversLicense' readonly>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Expiration Date</label>
                              <div class="col-sm-9">
                                <input id='view-expiration' type="text" class="form-control" name='a_expirationDate' data-mask="9999-99-99" readonly>
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
                        <div>
                        	<input id="view-type" type="text" class="form-control" name="a_class" readonly>
                        </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Date and Time Registered</h3> </div>
                        <div class="panel-body">
                        <div>
                          <input id="view-dateRegistered" type="text" class="form-control" name="a_dateRegistered" readonly>
                        </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Place Registered</h3> </div>
                        <div class="panel-body">
                        <div>
                          <input id="view-placeRegistered" type="text" class="form-control" name="a_placeRegistered" readonly>
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
                            <thead>
                              <th>Type</th>
                              <th>Vehicle Make</th>
                              <th>Plate No</th>
                              <th>Year Model</th>
                              <th>Color</th>
                              <th>Motor No</th>
                              <th>Chassis No</th>
                              <th>Sticker No</th>
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
</section>
					</div>
				</div>
			</div>
			<div class='modal-footer'>
				
			</div>
		</div>
	</div>
</div>

<script src="js/print.js" type="text/javascript"></script>

			