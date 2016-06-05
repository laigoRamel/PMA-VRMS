<?php
include('../login_superadmin/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/style-main.min.css">
    <link rel="stylesheet" href="css/skin.min.css">
    <link rel="stylesheet" href="jasny-bootstrap/css/jasny-bootstrap.min.css">
    <link rel="icon" href="img/seal.png">

	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/app.min.js"></script>
    <script src="jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
</head>

<body class="hold-transition skin-black sidebar-mini">
    <div class="wrapper">


        <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <div class="logo">
          <span class="logo-mini">
              <img src="img/seal.png" style="width:30px;height:30px;">
          </span>
          <!-- logo2 -->
          <span class="logo-lg"><b>PMA</b>VRMS</span>
        </div>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

            <!-- logout button -->
            <ul class="nav navbar-nav pull-right">
			<li class="drop-down">
				<a class="drop-down toggle" data-toggle="dropdown" href=""><?php echo $login_session; ?><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>
						<a href='../login_superadmin/logout.php'>Log out</a>
					</li>
          <li>
            <a href='../login_superadmin/change_password.php'>Change Password</a>
          </li>
				</ul>
			</li>
		</ul>
        </nav>


      </header>
      <!-- Left side column -->
      <aside class="main-sidebar">

        <!-- sidebar -->
        <section class="sidebar">
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">NAVIGATION</li>

            <!-- Dashboard -->
            <li class=""><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>



            <!-- Vehicle Log -->
            <li><a href="vehicleLog.php"><i class="glyphicon glyphicon-road"></i> <span>Vehicle Log</span></a></li>

            <!-- Reports -->
            <li><a href="reports.php"><i class="glyphicon glyphicon-flag"></i> <span>Reports</span></a></li>

            <!-- Employee Log -->
            <li><a href="../login_superadmin/logbook_page.php"><i class="glyphicon glyphicon-user"></i> <span>Employee Log</span></a></li>

              <!-- Create Account -->
            <!-- <li class=""><a href="login/create_account_page.php"><i class="glyphicon glyphicon-plus"></i> <span>Create Account</span></a></li> -->

            <!-- Accounts -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-plus"></i>
                <span>Accounts</span>
                <i class="glyphicon glyphicon-chevron-down pull-right"></i>
              </a>

              <ul class="treeview-menu">

                <li><a href="../login_superadmin/accounts_client_page.php">Client Accounts</a></li>
                <li><a href="../login_superadmin/accounts_admin_page.php">Admin Accounts</a></li>
                <li><a href="../login_superadmin/accounts_superuser_page.php">Superuser Accounts</a></li>
              </ul>
            </li>

            <!-- Accounting -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Accounting</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li class=""><a href="accountingApplicant.php">Civilian</a></li>
                <li><a href="AccountingMilitary.php">Military</a></li>
              </ul>
            </li>

            <li class="header">FORMS</li>
            <!-- Forms -->
            <li class="treeview active">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Registration Form</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li class="active"><a href="form1.php">Camp Allen/Navybase</a></li>
                <li><a href="form2.php">AFP</a></li>
              </ul>
            </li>

            <!-- Registered Applicant-->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Registered Applicant</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="registeredApplicant.php">Civilian</a></li>
                <li><a href="registeredAFP.php">Military</a></li>
              </ul>
            </li>

            <!-- Pending -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-option-horizontal"></i> <span>Pending</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="pendingApplicant.php">Civilian</a></li>
                <li><a href="pendingMilitary.php">Military</a></li>
              </ul>
            </li>

            <!-- Vehicle Status -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Vehicle Status</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="ApplicantVehicleStatus.php">For Civilian</a></li>
                <li><a href="AFPVehicleStatus.php">For Military</a></li>
              </ul>
            </li>

           <!-- Vehicle -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-flag"></i> <span>Vehicles</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li class=""><a href="applicant_vehicles.php">For Civilian</a></li>
                <li><a href="military_vehicles.php">For Military</a></li>
              </ul>
            </li>

          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Camp Allen / Navy Base
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
	<form action="logic/add_form1Logic.php" enctype='multipart/form-data' method="POST" onSubmit="alert('Successfully Regisstered');">
		<!-- personal information -->
		<div class="row">
            <div class="col-md-7">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title">Personal Information</h3> </div>
                    <div class="panel-body">
                        <input style="display:none;" type="text" name="a_applicantId" readonly>

                        <!-- image upload -->
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                          </div>
                          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                          <div>
                               <span class="fileinput-filename"></span>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="a_profile" required></span>

                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                          </div>
                        </div>

                        <br>
                        <div class="form-horizontal">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Last Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Last Name" name='a_lastname' required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">First Name</label>
                              <div class="col-sm-9">
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
                            <label><input type="radio" name="a_class" value="Class A" disabled>Class A (PASSCARD)</label>
                            <p>&emsp; a. Registered to active Military Personnel</p>
                            <p>&emsp; b. Staff vehicles registered to the AFP</p>
                        </div>
        				<br>

                        <div class="radio">
                            <label><input type="radio" name="a_class" value="Class B" required>Class B (RED Sticker)</label>
                            <p>&emsp; a. Former military personnel or AFP Reservists</p>
                            <p>&emsp; b. Unremarried widow/widower of Military Personnel</p>
                            <p>&emsp; c. AFP & DND Civillian employees</p>
                        </div>
        				<br>

                        <div class="radio">
                            <label><input type="radio" name="a_class" value="Class C" required>Class C (YELLOW Sticker)</label>
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
                            <label><input type="radio" name="a_placeRegistered" value="Fort del Pilar" required>Fort del Pilar</label>
                        </div>

                        <div class="radio">
                            <label><input type="radio" name="a_placeRegistered" value="Camp Allen" required>Camp Allen</label>
                        </div>

                        <div class="radio">
                            <label><input type="radio" name="a_placeRegistered" value="Navy Base" required>Navy Base</label>
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
                            <label><input class='requirements_checkbox' name='requirements[]' value='1' type="checkbox">Photocopy of current military ID, Office ID, or driver's license</label>
                            </div>
                            <div class="checkbox">
                            <label><input class='requirements_checkbox' name='requirements[]' value='2' type="checkbox">Photocopy of retirement/separation/discharged order for former military personnel</label>
                            </div>
                            <div class="checkbox">
                            <label><input class='requirements_checkbox' name='requirements[]' value='3' type="checkbox">Photocopy of order for Commissionship/Enlistment for AFP Reservists</label>
                            </div>
                            <div class="checkbox">
                            <label><input class='requirements_checkbox' name='requirements[]' value='4' type="checkbox">Photocopy of latest appointment order for AFP civilian employees and DND organic personnel</label>
                            </div>
                            <div class="checkbox">
                            <label><input class='requirements_checkbox' name='requirements[]' value='5' type="checkbox">Photocopy of marriage contract, in case the vehicle is registered in the name of the non-military spouse</label>
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
                              <th></th>
                            </thead>

					<tr>
						<td>
							<select name="wheels[]" class="form-control name_list" required>
								<option value="">No. of Wheels...</option>
								<option value="2-wheeled">2-wheeled</option>
								<option value="4-wheeled">4-wheeled</option>
							</select>
						</td>
						<td><input type="text" name="vehicleMake[]" placeholder="Vehicle Make" class="form-control name_list" required/></td>
						<td><input type="text" name="plateNo[]" placeholder="Plate No." class="form-control name_list" required/></td>
						<td>
							<select name="yearModel[]" class="form-control name_list" required>
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
						<td><input type="text" name="color[]" placeholder="Color" class="form-control name_list" required/></td>
						<td><input type="text" name="motorNo[]" placeholder="Motor No." class="form-control name_list" required/></td>
						<td><input type="text" name="chassisNo[]" placeholder="Chassis No." class="form-control name_list" required/></td>
						<td><input type="text" name="stickerNo[]" placeholder="Sticker No" class="form-control name_list sticker_number" disabled/></td>
						<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
					</tr>

                            </table>


                        </div>
                        </div>
                    </div>

                    <!-- submit button -->
                    <div class="panel-body">
                        <span id='validate-plateNo' style='color: red; display: none;'><i class='fa fa-warning'></i> &nbsp;Plate number must be unique</span>
                        <span id='validate-stickerNo' style='color: red; display: none;'><i class='fa fa-warning'></i> &nbsp;Sticker number must be unique</span>
                        <button id='submit-add' type="button submit" class="btn btn-primary btn-lg pull-right" value="Ok">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Submit Form
                        </button>
                    </div>

                </div>

		</div>
		<!--end of div class row-->
	</form>
</section>
<!-- Main content -->

        <br/><br/>

        </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        TISIS
      </footer>

    </div><!-- ./wrapper -->



</body>
  <script>
    var check_requirements = function(){
       var is_complete = true;
       $('.requirements_checkbox').each(function(){
            if(!($(this).is(':checked'))){
              is_complete = false;
              return false;
            }else{
              is_complete = true;
            }
        });

       if(!is_complete){
         $('.sticker_number').attr('disabled', true);
          $('.sticker_number').removeAttr('required');
       }else{
         $('.sticker_number').removeAttr('disabled');
         $('.sticker_number').attr('required', true);
       }

    }
  </script>

  <script type="text/javascript">
		$(document).ready(function(){
      var global_sticker_number = [];
      var global_plate_number = [];
      $.get(window.location.origin+'/PMA-VRMS/trunk/pma-vrmsSuperAdmin/logic/ajax_sticker_number.php', function(response){
        $.each(JSON.parse(response), function(index, data){
          global_sticker_number.push(data.stickerNo);
        });
      });
      $.get(window.location.origin+'/PMA-VRMS/trunk/pma-vrmsSuperAdmin/logic/ajax_plate_number.php', function(response){
        $.each(JSON.parse(response), function(index, data){
          global_plate_number.push(data.plateNo);
        });
      });



			var i=1;
			$('#add').click(function(){
         i++;
         $('#dynamic_field').append('<tr id="row'+i+'"><td><select name="wheels[]" class="form-control name_list" required><option value="">No. of Wheels...</option><option value="2-wheeled">2-wheeled</option><option value="4-wheeled">4-wheeled</option></select></td><td><input type="text" name="vehicleMake[]" placeholder="Vehicle Make" class="form-control name_list" /></td><td><input type="text" name="plateNo[]" placeholder="Plate No." class="form-control name_list" /></td><td><select name="yearModel[]" class="form-control name_list" required><option value="">Year Model...</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option></select></td><td><input type="text" name="color[]" placeholder="Color" class="form-control name_list" /></td><td><input type="text" name="motorNo[]" placeholder="Motor No." class="form-control name_list" /></td><td><input type="text" name="chassisNo[]" placeholder="Chassis No." class="form-control name_list" /></td><td><input type="text" name="stickerNo[]" placeholder="Sticker No" class="form-control name_list sticker_number" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        check_requirements();
			});
			$(document).on('click', '.btn_remove', function(){
				var button_id = $(this).attr("id");
				$('#row'+button_id+'').remove();
			});

      $('.panel-body').on('change', 'input[name="plateNo[]"]', function(){
        var this_input = $(this);
        var plate_numbers = [];

        $('input[name="plateNo[]"]').each(function(index, value){
          plate_numbers.push($('input[name="plateNo[]"]:eq('+index+')').val());
        });

        var counter = 0;
        plate_numbers.some(function(value_1, index_1){
          counter = 0;
          plate_numbers.some(function(value_2, index_2){
            if(value_1.length !== 0 && value_2.length !== 0){
              if(value_1 === value_2){
                counter++;
                if(counter >= 2){
                  return true;
                }
              }
            }
          });
          if(counter >= 2){
            return true;
          }
        });

        $.each(global_plate_number, function(index, value){
          if(this_input.val() === value){
            counter++;
          }
        });

        console.log(counter);
        if(counter >= 2){
           $('#validate-plateNo').css('display', 'block');
           $('#submit-add').attr('disabled', true);
        }else{
          $('#validate-plateNo').css('display', 'none');
           $('#submit-add').removeAttr('disabled');
        }
      });

      $('.panel-body').on('change', 'input[name="stickerNo[]"]', function(){
        var current_input = $(this);
        var counter = 0;
        $('input[name="stickerNo[]"]').each(function(index, value){
            if(current_input.val() === $(this).val()){
              counter++;
            }
        });
        $.each(global_sticker_number, function(index, value){
           if(current_input.val() === value){
              counter++;
            }
        });
        if(counter >= 2){
          $('#validate-stickerNo').css('display', 'block');
          $('#submit-add').attr('disabled', true);
        }else{
          $('#validate-stickerNo').css('display', 'none');
          $('#submit-add').removeAttr('disabled');
        }
		  });
    });
	</script>

  <script>
    $('.requirements_checkbox').change(function(){
       check_requirements();
    });
  </script>


</html>
