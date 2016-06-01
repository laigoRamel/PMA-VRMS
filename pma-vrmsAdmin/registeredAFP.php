<?php
	include('login/session.php');

  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registered Military</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/style-main.min.css">
    <link rel="stylesheet" href="css/skin.min.css">
    <link rel="stylesheet" type="text/css" href="css/print.css">
        <link rel="stylesheet" href="jasny-bootstrap/css/jasny-bootstrap.min.css">
    <link rel="icon" href="img/seal.png">

	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/app.min.js"></script>
    <script src="jasny-bootstrap/js/jasny-bootstrap.min.js"></script>

</head>

    <?php include('logic/registered_military_logic.php'); ?>
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
						<a href='login/logout.php'>Log out</a>
					</li>
          <li>
            <a href='login/change_password.php'>Change Password</a>
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

             <!-- Create Account -->
            <!-- <li class=""><a href="login/create_account_page.php"><i class="glyphicon glyphicon-plus"></i> <span>Create Account</span></a></li> -->

                        <!-- Accounts -->
            <li><a href="login/accounts_client_page.php"><i class="glyphicon glyphicon-plus"></i><span>Client Accounts</span></a></li>

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
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Registration Form</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form1.php">Camp Allen/Navybase</a></li>
                <li><a href="form2.php">AFP</a></li>
              </ul>
            </li>

            <!-- Registered Applicant-->
            <li class="treeview active">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Registered Applicant</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="registeredApplicant.php">Civilian</a></li>
                <li class="active"><a href="registeredAFP.php">Military</a></li>
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

            <li class="header">VEHICLES</li>
            <!-- Vehicle Status -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-info-sign"></i> <span>Vehicle Status</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
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
            Registered AFP
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">

        <div class="'container">
			<div class="row">
				<div class="col-md-12">
                    <div id="printHeader">
                        <center>
                        <p>H E A D Q U A R T E R S</p>
                        <p>PHILIPPINE MILITARY ACADEMY</p>
                        <p><b>OFFICE OF THE ASSISTANT CHIEF OF STAFF FOR INTELLIGENCE, MA2</p></b>
                        <p>Fort General Gregorio H del Pilar, Baguio City</p>
                        </center>
                        <h3>Registered Military</h3>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <!-- Print -->
                            <button id="printReports" class="btn btn-primary btn-lg pull-right" onclick="printReports()">
                                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print
                            </button>
                            <table class="table table-bordered table-hover" id="bootstrap-table">
                                <thead>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Rank</th>
                                    <th>Email Address</th>
                                    <th>Designated Office</th>
                                    <th>Class</th>
                                    <th>Place Registered</th>
                                    <th colspan=4 style="text-align:center" class="column-options">Options</th>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($militarys as $key => $military) {
                                            echo <<<DATA
                                                <tr id='military_$key'>
                                                    <td style='display:none'>$military[m_militaryId]</td>
                                                    <td><img style="width="40" height="40"" src='../pma-vrmsSuperAdmin/img/profile/military/$military[m_profile]' height='100px;'></td>
                                                    <td>$military[name]</td>
                                                    <td>$military[m_rank]</td>
                                                    <td style='display:none'>$military[m_brSvc]</td>
                                                    <td style='display:none'>$military[m_afpsn]</td>
                                                    <td style='display:none'>$military[m_residenceAddress]</td>
                                                    <td style='display:none'>$military[m_residenceTelNo]</td>
                                                    <td>$military[m_emailAddress]</td>
                                                    <td style='display:none'>$military[m_mobileNo]</td>
                                                    <td>$military[m_designatedOffice]</td>
                                                    <td style='display:none'>$military[m_officeTelNo]</td>
                                                    <td style='display:none'>$military[m_officeAddress]</td>
                                                    <td style='display:none'>$military[m_retirementDate]</td>
                                                    <td>$military[m_class]</td>
                                                    <td style='display:none'>$military[m_dateRegistered]</td>
                                                    <td>$military[m_placeRegistered]</td>
                                                    <td class="column-options"><button class="btn btn-info" data-toggle='modal' data-target='#view_form2' onclick="view_form2($key, '../pma-vrmsSuperAdmin/img/profile/military/$military[m_profile]')">View</button></td>
                                                    <td class="column-options"><button class="btn btn-success" data-toggle='modal' data-target='#renew_military' onclick='renew_military($military[m_militaryId])'>Renew</button></td>
                                                    <td class="column-options"><button class="btn btn-warning" data-toggle='modal' data-target='#edit_form2' onclick="edit_form2($key, '../pma-vrmsSuperAdmin/img/profile/military/$military[m_profile]', '$military[m_militaryId]', '$military[name]', '$military[m_rank]', '$military[m_brSvc]', '$military[m_afpsn]', '$military[m_residenceAddress]', '$military[m_residenceTelNo]', '$military[m_emailAddress]', '$military[m_mobileNo]', '$military[m_designatedOffice]', '$military[m_officeTelNo]', '$military[m_officeAddress]', '$military[m_retirementDate]', '$military[m_class]', '$military[m_dateRegistered]', '$military[m_placeRegistered]')">Edit</button></td>
                                                    <td class="column-options"><button class="btn btn-danger" data-toggle='modal' data-target='#delete_form2' onclick="delete_form2($key, '../pma-vrmsSuperAdmin/img/profile/military/$military[m_profile]')">Delete</button></td>
                                                </tr>
                                                 <table id='vehicle_table_$key'>
DATA;
                                        foreach ($military['vehicles'] as $key => $vehicle) {
                                         echo <<<VEHICLE
                                              <tr>
                                                <td style='display:none'>$vehicle[vehicleId]</td>
                                                <td style='display:none'>$vehicle[wheels]</td>
                                                <td style='display:none'>$vehicle[vehicleMake]</td>
                                                <td style='display:none'>$vehicle[plateNo]</td>
                                                <td style='display:none'>$vehicle[yearModel]</td>
                                                <td style='display:none'>$vehicle[color]</td>
                                                <td style='display:none'>$vehicle[motorNo]</td>
                                                <td style='display:none'>$vehicle[chassisNo]</td>
                                                <td style='display:none'>$vehicle[decalNo]</td>
                                              </tr>
VEHICLE;
                                    }
                                     echo '</table>';
                                      echo '</td>';
                                       echo '</tr>';

                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
			</div>
		</div>
    <script src="js/print.js" type="text/javascript"></script>
	<script src="bootstrap/js/jquery.sortelements.js" type="text/javascript"></script>
	<script src="bootstrap/js/jquery.bdt.js" type="text/javascript"></script>
	<script>
		$(document).ready( function () {
			$('#bootstrap-table').bdt();
		});
	</script>

        <!-- causing footer problem ? ? ? -->
		<?php
			require_once('modals/view_form2.php');
			require_once('modals/renew_military.php');
			require_once('modals/edit_form2.php');
			require_once('modals/delete_form2.php');
		?>

		<script type="text/javascript">
			var edit_form2 = function(key, img, m_militaryId, name, m_rank, m_brSvc, m_afpsn, m_residenceAddress, m_residenceTelNo, m_emailAddress, m_mobileNo, m_designatedOffice, m_officeTelNo, m_officeAddress, m_retirementDate, m_class, m_dateRegistered, m_placeRegistered){
                      $('#img_edit').attr('src', img);
      $('#edit-vehicles').html('');

      $('#vehicle_table_'+key+' tr').each(function(index, value){
        var content = '<tr>'+
                                '<td>'+
                                    '<select id="select-wheeled-'+index+'" name="wheels[]" class="form-control name_list" required>'+
                                      '<option value="">No. of Wheels...</option>'+
                                      '<option value="2-wheeled">2-wheeled</option>'+
                                      '<option value="4-wheeled">4-wheeled</option>'+
                                    '</select>'+
                                '</td>'+ 
                                '<td><input type="text" name="vehicleMake[]" class="form-control name_list"  value="'+$(this).children('td:eq(2)').text()+'" /></td>'+ 
                                '<td><input type="text" name="plateNo[]" class="form-control name_list"  value="'+$(this).children('td:eq(3)').text()+'" /></td>'+  
                                '<td>'+
                                  '<select id="select-year-'+index+'" name="yearModel[]" class="form-control name_list" required>'+
                                    '<option value="">Year Model...</option>'+
                                    '<option value="1990">1990</option>'+
                                    '<option value="1991">1991</option>'+
                                    '<option value="1992">1992</option>'+
                                    '<option value="1993">1993</option>'+
                                    '<option value="1994">1994</option>'+
                                    '<option value="1995">1995</option>'+
                                    '<option value="1996">1996</option>'+
                                    '<option value="1997">1997</option>'+
                                    '<option value="1998">1998</option>'+
                                    '<option value="1999">1999</option>'+
                                    '<option value="2000">2000</option>'+
                                    '<option value="2001">2001</option>'+
                                    '<option value="2002">2002</option>'+
                                    '<option value="2003">2003</option>'+
                                    '<option value="2004">2004</option>'+
                                    '<option value="2005">2005</option>'+
                                    '<option value="2006">2006</option>'+
                                    '<option value="2007">2007</option>'+
                                    '<option value="2008">2008</option>'+
                                    '<option value="2009">2009</option>'+
                                    '<option value="2010">2010</option>'+
                                    '<option value="2011">2011</option>'+
                                    '<option value="2012">2012</option>'+
                                    '<option value="2013">2013</option>'+
                                    '<option value="2014">2014</option>'+
                                    '<option value="2015">2015</option>'+
                                    '<option value="2016">2016</option>'+
                                    '<option value="2017">2017</option>'+
                                    '<option value="2018">2018</option>'+
                                    '<option value="2019">2019</option>'+
                                    '<option value="2020">2020</option>'+
                                  '</select>'+
                                '</td>'+
                                '<td><input type="text" name="color[]" class="form-control name_list"  value="'+$(this).children('td:eq(5)').text()+'" /></td>'+  
                                '<td><input type="text" name="motorNo[]" class="form-control name_list"  value="'+$(this).children('td:eq(6)').text()+'" /></td>'+  
                                '<td><input type="text" name="chassisNo[]" class="form-control name_list"  value="'+$(this).children('td:eq(7)').text()+'" /></td>'+  
                                '<td><input type="text" name="decalNo[]" class="form-control name_list"  value="'+$(this).children('td:eq(8)').text()+'" /></td>'+
                                '<td><button type="button" class="btn btn-danger editModal-btn-remove"><i class="fa fa-times"></i></button></td></tr>';
       $('#edit-vehicles').append(content);

       $('#select-wheeled-'+index).val($(this).children('td:eq(1)').text());
       $('#select-year-'+index).val($(this).children('td:eq(4)').text());

       $('#modal_military_id').val(m_militaryId);
       $('#edit_modal_form2 input[name=m_lastname]').val(name.split(',')[0]);
       $('#edit_modal_form2 input[name=m_firstname]').val(name.split(' ')[1]);
       $('#edit_modal_form2 input[name=m_middlename]').val(name.split(' ')[2]);
       $('#edit_modal_form2 input[name=m_rank]').val(m_rank);
       $('#edit_modal_form2 input[name=m_brSvc]').val(m_brSvc);
       $('#edit_modal_form2 input[name=m_afpsn]').val(m_afpsn);
       $('#edit_modal_form2 input[name=m_residenceAddress]').val(m_residenceAddress);
       $('#edit_modal_form2 input[name=m_residenceTelNo]').val(m_residenceTelNo);
       $('#edit_modal_form2 input[name=m_emailAddress]').val(m_emailAddress);
       $('#edit_modal_form2 input[name=m_mobileNo]').val(m_mobileNo);
       $('#edit_modal_form2 input[name=m_designatedOffice]').val(m_designatedOffice);
       $('#edit_modal_form2 input[name=m_officeTelNo]').val(m_officeTelNo);
       $('#edit_modal_form2 input[name=m_officeAddress]').val(m_officeAddress);
       $('#edit_modal_form2 input[name=m_retirementDate]').val(m_retirementDate);
     //  $('#edit_modal_form2 input[name=m_class]').val(m_class);

       $('#old_last_name').val(name.split(',')[0]);
       $('#old_first_name').val(name.split(' ')[1]);

      });

      $('#edit-vehicles').append('<tr><td><button type="button" name="add" id="editModal-add" class="btn btn-success">Add More</button></td></tr>');
      $('#editModal-vehicles').append('<table id="add-new-vehicle" ></table>');

        }
    $(document).ready(function(){
      var global_decal_number = [];
      var global_plate_number = [];
      $.get(window.location.origin+'/PMA-VRMS/trunk/pma-vrmsAdmin/logic/ajax_decal_number.php', function(response){
        $.each(JSON.parse(response), function(index, data){
          global_decal_number.push(data.decalNo);
        });
      });
      $.get(window.location.origin+'/PMA-VRMS/trunk/pma-vrmsAdmin/logic/ajax_plate_number.php', function(response){
        $.each(JSON.parse(response), function(index, data){
          global_plate_number.push(data.plateNo);
        });
      });


      var i=1;
      $('#edit-vehicles').on('click','#editModal-add', function(){
        i++;
        $('#add-new-vehicle').append('<tr id="row'+i+'"><td><select name="wheels[]" class="form-control name_list" required><option value="">No. of Wheels...</option><option value="2-wheeled">2-wheeled</option><option value="4-wheeled">4-wheeled</option></select></td><td><input type="text" name="vehicleMake[]" placeholder="Vehicle Make" class="form-control name_list" /></td><td><input type="text" name="plateNo[]" placeholder="Plate No." class="form-control name_list" /></td><td><select name="yearModel[]" class="form-control name_list" required><option value="">Year Model...</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option></select></td><td><input type="text" name="color[]" placeholder="Color" class="form-control name_list" /></td><td><input type="text" name="motorNo[]" placeholder="Motor No." class="form-control name_list" /></td><td><input type="text" name="chassisNo[]" placeholder="Chassis No." class="form-control name_list" /></td><td><input type="text" name="decalNo[]" placeholder="Decal No" class="form-control name_list" /></td><td><button type="button" class="btn btn-danger  editModal-btn-remove">X</button></td></tr>');
      }); 

      $('#editModal-vehicles').on('click', '.editModal-btn-remove', function(){
        $(this).closest('tr').remove();
      });

      $('#editModal-vehicles').on('change', 'input[name="plateNo[]"]', function(){
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
        })

        $.each(global_plate_number, function(index, value){
          if(this_input.val() === value){
            counter++;
          }
        });
  
        console.log(counter);
        if(counter >= 2){
           $('#validate-plateNo').css('display', 'block');
           $('#submit-edit').attr('disabled', true);
        }else{
          $('#validate-plateNo').css('display', 'none');
           $('#submit-edit').removeAttr('disabled');
        }
      });


      $('.panel-body').on('change', 'input[name="decalNo[]"]', function(){
        var current_input = $(this);
        var counter = 0;
        $('input[name="decalNo[]"]').each(function(index, value){
            if(current_input.val() === $(this).val()){
              counter++;
            }
        });
        $.each(global_decal_number, function(index, value){
           if(current_input.val() === value){
              counter++;
            }
        });
        if(counter >= 2){
          $('#validate-decalNo').css('display', 'block');
          $('#submit-add').attr('disabled', true);
        }else{
          $('#validate-decalNo').css('display', 'none');
          $('#submit-add').removeAttr('disabled');
        }
      });

    });

			var delete_form2 = function(key, img){
        $('#delete-modal-inputs').html('');

        var m_id = $('#military_'+key+' > td:first-child').text();
        $('#delete-modal-inputs').append("<input name='m_militaryId' value='"+m_id+"' type='hidden'>");
        $('#vehicle_table_'+key+' tr').each(function(){
          var vehicle_id = $(this).children('td:eq(0)').text();
          $('#delete-modal-inputs').append("<input name='vehicleId[]' value='"+vehicle_id+"' type='hidden'>");
        });
			}

			var view_form2 = function(key, img){
        $('#img_view').attr('src', img);
				var row = $('#military_'+key);
        var m_id = row.find('td:first-child').text();
        var m_profile = row.find('td:nth-child(2)').text();
        var name = row.find('td:nth-child(3)').text();
        var m_rank = row.find('td:nth-child(4)').text();
        var m_brSvc = row.find('td:nth-child(5)').text();
        var m_afpsn = row.find('td:nth-child(6)').text();
        var m_residenceAddress = row.find('td:nth-child(7)').text();
        var m_residenceTelNo = row.find('td:nth-child(8)').text();
        var m_emailAddress = row.find('td:nth-child(9)').text();
        var m_mobileNo = row.find('td:nth-child(10)').text();
        var m_designatedOffice = row.find('td:nth-child(11)').text();
        var m_officeTelNo = row.find('td:nth-child(12)').text();
        var m_officeAddress = row.find('td:nth-child(13)').text();
        var m_retirementDate = row.find('td:nth-child(14)').text();
        var m_class = row.find('td:nth-child(15)').text();
        var m_dateRegistered = row.find('td:nth-child(16)').text();
        var m_placeRegistered = row.find('td:nth-child(17)').text();

        var vehicleId = row.find('td:nth-child(18)').text();
        var wheels = row.find('td:nth-child(19)').text();
        var vehicleMake = row.find('td:nth-child(20)').text();
        var plateNo = row.find('td:nth-child(21)').text();
        var yearModel = row.find('td:nth-child(22)').text();
        var color = row.find('td:nth-child(23)').text();
        var motorNo = row.find('td:nth-child(24)').text();
        var chassisNo = row.find('td:nth-child(25)').text();
        var stickerNo = row.find('td:nth-child(26)').text();

        var modal = $('#view_modal_form2');
        modal.find('input[name=m_militaryId]').val(m_id);
        modal.find('input[name=m_profile]').val(m_profile);
        modal.find('input[name=name]').val(name);
        modal.find('input[name=m_rank]').val(m_rank);
        modal.find('input[name=m_brSvc]').val(m_brSvc);
        modal.find('input[name=m_afpsn]').val(m_afpsn);
        modal.find('input[name=m_residenceAddress]').val(m_residenceAddress);
        modal.find('input[name=m_residenceTelNo]').val(m_residenceTelNo);
        modal.find('input[name=m_emailAddress]').val(m_emailAddress);
        modal.find('input[name=m_mobileNo]').val(m_mobileNo);
        modal.find('input[name=m_designatedOffice]').val(m_designatedOffice);
        modal.find('input[name=m_officeTelNo]').val(m_officeTelNo);
        modal.find('input[name=m_officeAddress]').val(m_officeAddress);
        modal.find('input[name=m_retirementDate]').val(m_retirementDate);
        modal.find('input[name=m_class]').val(m_class);
        modal.find('input[name=m_dateRegistered]').val(m_dateRegistered);
        modal.find('input[name=m_placeRegistered]').val(m_placeRegistered);

		$('#view-vehicles').html('');

        $('#vehicle_table_'+key+' tr').each(function(){
            var content = '<tr><td><input type="text" name="wheels" class="form-control name_list" value="'+$(this).children('td:eq(1)').text()+'" readonly></input></td>'+  
                                      '<td><input type="text" name="vehicleMake" class="form-control name_list"  value="'+$(this).children('td:eq(2)').text()+'" readonly/></td>'+ 
                                      '<td><input type="text" name="plateNo" class="form-control name_list"  value="'+$(this).children('td:eq(3)').text()+'" readonly/></td>'+  
                                      '<td><input type="text" name="yearModel" class="form-control name_list"  value="'+$(this).children('td:eq(4)').text()+'" readonly></input></td>'+  
                                      '<td><input type="text" name="color" class="form-control name_list"  value="'+$(this).children('td:eq(5)').text()+'" readonly/></td>'+  
                                      '<td><input type="text" name="motorNo" class="form-control name_list"  value="'+$(this).children('td:eq(6)').text()+'" readonly/></td>'+  
                                      '<td><input type="text" name="chassisNo" class="form-control name_list"  value="'+$(this).children('td:eq(7)').text()+'" readonly/></td>'+  
                                      '<td><input type="text" name="stickerNo" class="form-control name_list"  value="'+$(this).children('td:eq(8)').text()+'" readonly/></td></tr>';
           $('#view-vehicles').append(content);
          });

        }

       var renew_military = function(key, id){
          var row = $('#military_'+key);
          var name = row.find('td:nth-child(3)').text();
          var m_rank = row.find('td:nth-child(4)').text();
          var m_emailAddress = row.find('td:nth-child(5)').text();
          var m_designatedOffice = row.find('td:nth-child(6)').text();
          var m_class = row.find('td:nth-child(9)').text();
          var m_placeRegistered = row.find('td:nth-child(11)').text();

          $('#renew-modal-info').find('tr:eq(0)').find('td:eq(1)').text(name);
          $('#renew-modal-info').find('tr:eq(1)').find('td:eq(1)').text(m_rank);
          $('#renew-modal-info').find('tr:eq(2)').find('td:eq(1)').text(m_emailAddress);
          $('#renew-modal-info').find('tr:eq(3)').find('td:eq(1)').text(m_designatedOffice);
          $('#renew-modal-info').find('tr:eq(4)').find('td:eq(1)').text(m_class);
          $('#renew-modal-info').find('tr:eq(5)').find('td:eq(1)').text(m_placeRegistered);

      $('#renew_military_id').val(key);

    }
		</script>

        </section>  <!-- /Main content -->

        <br/><br/>

        </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        TISIS
      </footer>

    </div><!-- ./wrapper -->



</body>




</html>
