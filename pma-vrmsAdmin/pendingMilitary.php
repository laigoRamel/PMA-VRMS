<?php
include('login/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pending Military</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/style-main.min.css">
    <link rel="stylesheet" href="css/skin.min.css">
    <link rel="icon" href="img/seal.png">

	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/app.min.js"></script>
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
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-plus"></i>
                <span>Accounts</span>
                <i class="glyphicon glyphicon-chevron-down pull-right"></i>
              </a>

              <ul class="treeview-menu">

                <li><a href="login/accounts_client_page.php">Client Accounts</a></li>
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
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Registration Form</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form1.php">Camp Allen/Navybase</a></li>
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
            <li class="treeview active">
              <a href="#"><i class="glyphicon glyphicon-option-horizontal"></i> <span>Pending</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="pendingApplicant.php">Civilian</a></li>
                <li class="active"><a href="pendingMilitary.php">Military</a></li>
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
            Pending Military
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
	       <?php include('logic/pending_military_logic.php'); ?>

		<div class="'container">
			<div class="row">
				<div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
                            <table class="table table-bordered table-hover" id="bootstrap-table">
						<thead>
              <th>Profile</th>
							<th>Last Name</th>
							<th>First Name</th>
							<th>Middle Name</th>
							<th>Rank</th>
							<th>Email Address</th>
							<th>Designated Office</th>
							<th>Class</th>
							<th>Options</th>
						</thead>
						<tbody>
							<?php
								foreach ($militarys as $key => $military) {
									echo <<<DATA
										<tr id='military_$key' requirements='$military[m_submitted_requirements]' m_militaryId='$military[m_militaryId]'>
											<td><img src='img/profile/military/$military[m_profile]' height='100px;'></td>
                        <td>$military[m_lastname]</td>
                        <td>$military[m_firstname]</td>
                        <td>$military[m_middlename]</td>
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
											<td style='display:none'>
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
                                <td style='display:none'>$vehicle[stickerNo]</td>
                              </tr>
VEHICLE;
                    }
                  echo <<<DATA1
                    </table>
                  </td>
                      <td><button onclick="show_update_modal($key)" class="btn btn-success update-btn">Update</button></td>
                    </tr>
DATA1;
                }
							?>
						</tbody>
					</table>
                        </div>
                    </div>


				</div>
			</div>
		</div>


		<?php
			require_once('modals/update_military.php');
		?>

        </section>
<!-- Main content -->

        <br/><br/>

        </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        TISIS
      </footer>

    </div><!-- ./wrapper -->

    <script>
      var show_update_modal = function(key){

      var row = $('#military_'+key).closest('tr');
        var name = row.find('td:nth-child(3)').text();
        var a_address = row.find('td:nth-child(4)').text();
        var a_occupation = row.find('td:nth-child(5)').text();
        var a_officeAddress = row.find('td:nth-child(6)').text();
        var a_class = row.find('td:nth-child(9)').text();
        var a_placeRegistered = row.find('td:nth-child(11)').text();


        $('#update-modal-info').find('tr:eq(0)').find('td:eq(1)').text(name);
        $('#update-modal-info').find('tr:eq(1)').find('td:eq(1)').text(a_address);
        $('#update-modal-info').find('tr:eq(2)').find('td:eq(1)').text(a_occupation);
        $('#update-modal-info').find('tr:eq(3)').find('td:eq(1)').text(a_officeAddress);
        $('#update-modal-info').find('tr:eq(4)').find('td:eq(1)').text(a_class);
        $('#update-modal-info').find('tr:eq(5)').find('td:eq(1)').text(a_placeRegistered);


        var requirements_1 = $('#military_'+key).attr('requirements');
        var requirements_2 = requirements_1.split(',');

        for(var i=1; i<6; i++){
          $('#requirement-'+i).prop('checked', false);
        }

        requirements_2.forEach(function(value, index){
          $('#requirement-'+value).prop('checked', true);
        });

        $('#m_militaryId').val($('#military_'+key).attr('m_militaryId'));

        $('#vehicle_table_'+key+' tr').each(function(index, value){
          $('#update-military-vehicles').append('<tr>'+
          '<td style="display: none;"><input type="text" name="vehicleId[]" value="'+$(this).find('td:eq(0)').text()+'"></td>'+
          '<td>'+$(this).find('td:eq(1)').text()+'</td>'+
          '<td>'+$(this).find('td:eq(2)').text()+'</td>'+
          '<td>'+$(this).find('td:eq(3)').text()+'</td>'+
          '<td>'+$(this).find('td:eq(4)').text()+'</td>'+
          '<td>'+$(this).find('td:eq(5)').text()+'</td>'+
          '<td>'+$(this).find('td:eq(6)').text()+'</td>'+
          '<td>'+$(this).find('td:eq(7)').text()+'</td>'+
          '<td><input class="form-control" type="text" name="decalNo[]"></td>'+
          '</tr>');
        });

        $('#update_military').modal('show');
    }

      // $('table').on('click', '.update-btn', function(){
      //   var requirements_1 = $(this).closest('tr').attr('requirements');
      //   var requirements_2 = requirements_1.split(',');

      //    for(var i=1; i<7; i++){
      //       $('#requirement-'+i).prop('checked', false);
      //     }

      //   requirements_2.forEach(function(value, index){
      //     $('#requirement-'+value).prop('checked', true);
      //   });

      //   $('#m_militaryId').val($(this).closest('tr').attr('m_militaryId'));

      //   $('#update_military').modal('show');
      // });
    </script>

    <script type="text/javascript">
      $('#update_military').find('input[type=checkbox]').change(function(){
          var is_complete = false;
          $('#update_military').find('input[type=checkbox]').each(function(index, data){
            if(!($(this).is(':checked'))){
                is_complete = false;
                return false;
            }else{
                is_complete = true;
            }
        });
        if(is_complete){
          $('#update-vehicles-stickerNo').css('display', 'block');
          $('#update-vehicles-stickerNo input[name*=stickerNo]').attr('required', true);
        }else{
          $('#update-vehicles-stickerNo').css('display', 'none');
        }
    });
    </script>
</body>


	<script src="bootstrap/js/jquery.sortelements.js" type="text/javascript"></script>
	<script src="bootstrap/js/jquery.bdt.js" type="text/javascript"></script>
    <script>
		$(document).ready( function () {
			$('#bootstrap-table').bdt();
		});
	</script>

    <?php
			require_once('modals/update_military.php');
		?>

</html>
