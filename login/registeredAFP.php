<?php
	include('login/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registered Military</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/style-main.min.css">
    <link rel="stylesheet" href="css/skin.min.css">
    <link rel="stylesheet" type="text/css" href="css/print.css">
    <link rel="icon" href="img/seal.png">

	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/app.min.js"></script>

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
            <li><a href="login/logbook_page.php"><i class="glyphicon glyphicon-user"></i> <span>Employee Log</span></a></li>

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
								<li><a href="login/accounts_admin_page.php">Admin Accounts</a></li>
								<li><a href="login/accounts_superuser_page.php">Superuser Accounts</a></li>
							</ul>
						</li>

            <!-- Accounting -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Accounting</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="accountingApplicant.php">Civilian</a></li>
                <li><a href="AccountingMilitary.php">Military</a></li>
              </ul>
            </li>

            <li class="header">FORMS</li>
            <!-- Forms -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Registration Form</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form1.php">Fort del Pillar/Camp Allen/<br>Navybase</a></li>
                <li><a href="form2.php">AFP/Military</a></li>
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
                                                    <td><img style="width="40" height="40"" src='img/profile/military/$military[m_profile]' height='100px;'></td>
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
                                                    <td style='display:none'>$military[vehicleId]</td>
                                                    <td style='display:none'>$military[wheels]</td>
                                                    <td style='display:none'>$military[vehicleMake]</td>
                                                    <td style='display:none'>$military[plateNo]</td>
                                                    <td style='display:none'>$military[yearModel]</td>
                                                    <td style='display:none'>$military[color]</td>
                                                    <td style='display:none'>$military[motorNo]</td>
                                                    <td style='display:none'>$military[chassisNo]</td>
                                                    <td style='display:none'>$military[stickerNo]</td>
                                                    <td class="column-options"><button class="btn btn-info" data-toggle='modal' data-target='#view_form2' onclick="view_form2($key, 'img/profile/military/$military[m_profile]')">View</button></td>
                                                    <td class="column-options"><button class="btn btn-success" data-toggle='modal' data-target='#renew_military' onclick='renew_military($military[m_militaryId])'>Renew</button></td>
                                                    <td class="column-options"><button class="btn btn-warning" data-toggle='modal' data-target='#edit_form2' onclick="edit_form2($key, 'img/profile/military/$military[m_profile]')">Edit</button></td>
                                                    <td class="column-options"><button class="btn btn-danger" data-toggle='modal' data-target='#delete_form2' onclick="delete_form2($key, 'img/profile/military/$military[m_profile]')">Delete</button></td>
                                                </tr>
DATA;
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
			var edit_form2 = function(key, img){
        $('#img_edit').attr('src', img);
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

        var modal = $('#edit_modal_form2');
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

        modal.find('input[name=vehicleId]').val(vehicleId);
        modal.find('input[name=wheels]').val(wheels);
        modal.find('input[name=vehicleMake]').val(vehicleMake);
        modal.find('input[name=plateNo]').val(plateNo);
        modal.find('input[name=yearModel]').val(yearModel);
        modal.find('input[name=color]').val(color);
        modal.find('input[name=motorNo]').val(motorNo);
        modal.find('input[name=chassisNo]').val(chassisNo);
        modal.find('input[name=stickerNo]').val(stickerNo);

			}

			var delete_form2 = function(key, img){
        $('#img_delete').attr('src', img);
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

        var modal = $('#delete_modal_form2');
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

        modal.find('input[name=vehicleId]').val(vehicleId);
        modal.find('input[name=wheels]').val(wheels);
        modal.find('input[name=vehicleMake]').val(vehicleMake);
        modal.find('input[name=plateNo]').val(plateNo);
        modal.find('input[name=yearModel]').val(yearModel);
        modal.find('input[name=color]').val(color);
        modal.find('input[name=motorNo]').val(motorNo);
        modal.find('input[name=chassisNo]').val(chassisNo);
        modal.find('input[name=stickerNo]').val(stickerNo);
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

        modal.find('input[name=vehicleId]').val(vehicleId);
        modal.find('input[name=wheels]').val(wheels);
        modal.find('input[name=vehicleMake]').val(vehicleMake);
        modal.find('input[name=plateNo]').val(plateNo);
        modal.find('input[name=yearModel]').val(yearModel);
        modal.find('input[name=color]').val(color);
        modal.find('input[name=motorNo]').val(motorNo);
        modal.find('input[name=chassisNo]').val(chassisNo);
        modal.find('input[name=stickerNo]').val(stickerNo);
			}

       var renew_military = function(key){

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