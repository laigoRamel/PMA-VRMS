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

    <?php include('logic/applicant_vehicleStatus_logic.php'); ?>
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
								<li><a href="login/accounts_admin_page.php">Admin Accounts</a></li>
								<li><a href="login/accounts_client_page.php">Client Accounts</a></li>
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
            Registered Applicants
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
                        <h3>Registered Civilians</h3>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <!-- Print -->
                            <button id="printReports" class="btn btn-primary btn-lg pull-right" onclick="printReports()">
                                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print
                            </button>
                            <table class="table table-bordered table-hover" id="bootstrap-table">
                                <thead>
                                    <th>Name</th>
                                    <th>Wheels</th>
                                    <th>Vehicle Make</th>
                                    <th>Plate No.</th>
                                    <th>Year Model</th>
                                    <th>Color</th>
                                    <th>Motor No.</th>
                                    <th>Chassis No.</th>
                                    <th>Sticker No.</th>
                                    <th  class="column-options" colspan=4 style="text-align:center">Status (registered(not registered), transferred)</th>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($vehicles as $key => $vehicle) {
                                        echo <<<DATA
                                        <tr id='applicant_$key'>
                                            <td style='display:none'>$vehicle[vehicleId]</td>
                                            <td>$vehicle[name]</td>
                                            <td>$vehicle[wheels]</td>
                                            <td>$vehicle[vehicleMake]</td>
                                            <td>$vehicle[plateNo]</td>
                                            <td>$vehicle[yearModel]</td>
                                            <td>$vehicle[color]</td>
                                            <td>$vehicle[motorNo]</td>
                                            <td>$vehicle[chassisNo]</td>
                                            <td>$vehicle[stickerNo]</td>
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

		<?php
            require_once('modals/view_form1.php');
            require_once('modals/renew_applicant.php');
            require_once('modals/edit_form1.php');
            require_once('modals/delete_form1.php');
        ?>

	<script type="text/javascript">
		var edit_form1 = function(key, img){
      $('#img_edit').attr('src', img);
      var row = $('#applicant_'+key);
      var a_id = row.find('td:first-child').text();
      var a_profile = row.find('td:nth-child(2)').text();
      var name = row.find('td:nth-child(3)').text();
//      var a_lastname = row.find('td:nth-child(3)').text();
//      var a_firstname = row.find('td:nth-child(3)').text();
//      var a_middlename = row.find('td:nth-child(3)').text();
      var a_address = row.find('td:nth-child(4)').text();
      var a_occupation = row.find('td:nth-child(5)').text();
      var a_officeAddress = row.find('td:nth-child(6)').text();
      var a_driversLicense = row.find('td:nth-child(7)').text();
      var a_expirationDate = row.find('td:nth-child(8)').text();
      var a_class = row.find('td:nth-child(9)').text();
      var a_dateRegistered = row.find('td:nth-child(10)').text();
      var a_placeRegistered = row.find('td:nth-child(11)').text();

      var vehicleId = row.find('td:nth-child(14)').text();
      var wheels = row.find('td:nth-child(15)').text();
      var vehicleMake = row.find('td:nth-child(16)').text();
      var plateNo = row.find('td:nth-child(17)').text();
      var yearModel = row.find('td:nth-child(18)').text();
      var color = row.find('td:nth-child(19)').text();
      var motorNo = row.find('td:nth-child(20)').text();
      var chassisNo = row.find('td:nth-child(21)').text();
      var stickerNo = row.find('td:nth-child(22)').text();

      var modal = $('#edit_modal_form1');
      modal.find('input[name=a_applicantId]').val(a_id);
      modal.find('input[name=a_profile]').val(a_profile);
      modal.find('input[name=name]').val(name);
//      modal.find('input[name=a_lastname]').val(a_lastname);
//      modal.find('input[name=a_firstname]').val(a_firstname);
//      modal.find('input[name=a_middlename]').val(a_middlename);
      modal.find('input[name=a_address]').val(a_address);
      modal.find('input[name=a_occupation]').val(a_occupation);
      modal.find('input[name=a_officeAddress]').val(a_officeAddress);
      modal.find('input[name=a_driversLicense]').val(a_driversLicense);
      modal.find('input[name=a_expirationDate]').val(a_expirationDate);
      modal.find('input[name=a_class]').val(a_class);
      modal.find('input[name=a_dateRegistered]').val(a_dateRegistered);
      modal.find('input[name=a_placeRegistered]').val(a_placeRegistered);

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

		var delete_form1 = function(key, img){
      $('#img_delete').attr('src', img);
      var row = $('#applicant_'+key);
      var a_id = row.find('td:first-child').text();
      var a_profile = row.find('td:nth-child(2)').text();
      var name = row.find('td:nth-child(3)').text();
      var a_address = row.find('td:nth-child(4)').text();
      var a_occupation = row.find('td:nth-child(5)').text();
      var a_officeAddress = row.find('td:nth-child(6)').text();
      var a_driversLicense = row.find('td:nth-child(7)').text();
      var a_expirationDate = row.find('td:nth-child(8)').text();
      var a_class = row.find('td:nth-child(9)').text();
      var a_dateRegistered = row.find('td:nth-child(10)').text();
      var a_placeRegistered = row.find('td:nth-child(11)').text();

      var vehicleId = row.find('td:nth-child(12)').text();
      var wheels = row.find('td:nth-child(13)').text();
      var vehicleMake = row.find('td:nth-child(14)').text();
      var plateNo = row.find('td:nth-child(15)').text();
      var yearModel = row.find('td:nth-child(16)').text();
      var color = row.find('td:nth-child(17)').text();
      var motorNo = row.find('td:nth-child(18)').text();
      var chassisNo = row.find('td:nth-child(19)').text();
      var stickerNo = row.find('td:nth-child(20)').text();

      var modal = $('#delete_modal_form1');
      modal.find('input[name=a_applicantId]').val(a_id);
      modal.find('input[name=a_profile]').val(a_profile);
      modal.find('input[name=name]').val(name);
      modal.find('input[name=a_address]').val(a_address);
      modal.find('input[name=a_occupation]').val(a_occupation);
      modal.find('input[name=a_officeAddress]').val(a_officeAddress);
      modal.find('input[name=a_driversLicense]').val(a_driversLicense);
      modal.find('input[name=a_expirationDate]').val(a_expirationDate);
      modal.find('input[name=a_class]').val(a_class);
      modal.find('input[name=a_dateRegistered]').val(a_dateRegistered);
      modal.find('input[name=a_placeRegistered]').val(a_placeRegistered);

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

		var view_form1 = function(key, img){
			$('#img_view').attr('src', img);
  		var row = $('#applicant_'+key);
      var a_id = row.find('td:first-child').text();
      var a_profile = row.find('td:nth-child(2)').text();
      var name = row.find('td:nth-child(3)').text();
      var a_address = row.find('td:nth-child(4)').text();
      var a_occupation = row.find('td:nth-child(5)').text();
      var a_officeAddress = row.find('td:nth-child(6)').text();
      var a_driversLicense = row.find('td:nth-child(7)').text();
      var a_expirationDate = row.find('td:nth-child(8)').text();
      var a_class = row.find('td:nth-child(9)').text();
      var a_dateRegistered = row.find('td:nth-child(10)').text();
      var a_placeRegistered = row.find('td:nth-child(11)').text();

      var vehicleId = row.find('td:nth-child(12)').text();
      var wheels = row.find('td:nth-child(13)').text();
      var vehicleMake = row.find('td:nth-child(14)').text();
      var plateNo = row.find('td:nth-child(15)').text();
      var yearModel = row.find('td:nth-child(16)').text();
      var color = row.find('td:nth-child(17)').text();
      var motorNo = row.find('td:nth-child(18)').text();
      var chassisNo = row.find('td:nth-child(19)').text();
      var stickerNo = row.find('td:nth-child(20)').text();

      var modal = $('#view_modal_form1');
      modal.find('input[name=a_applicantId]').val(a_id);
      modal.find('input[name=a_profile]').val(a_profile);
      modal.find('input[name=name]').val(name);
      modal.find('input[name=a_address]').val(a_address);
      modal.find('input[name=a_occupation]').val(a_occupation);
      modal.find('input[name=a_officeAddress]').val(a_officeAddress);
      modal.find('input[name=a_driversLicense]').val(a_driversLicense);
      modal.find('input[name=a_expirationDate]').val(a_expirationDate);
      modal.find('input[name=a_class]').val(a_class);
      modal.find('input[name=a_dateRegistered]').val(a_dateRegistered);
      modal.find('input[name=a_placeRegistered]').val(a_placeRegistered);

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

    var renew_applicant = function(key){

      $('#renew_applicant_id').val(key);

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