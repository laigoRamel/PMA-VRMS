<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Accounts</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style-main.min.css">
    <link rel="stylesheet" href="../bootstrap/css/jquery.bdt.css">
    <link rel="stylesheet" href="../css/skin.min.css">
    <link rel="stylesheet" type="text/css" href="../css/print.css">
    <link rel="icon" href="img/seal.png">

	<script src="../bootstrap/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/app.min.js"></script>
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
						<a href='logout.php'>Log out</a>
					</li>
          <li>
            <a href='change_password.php'>Change Password</a>
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
            <li class="treeview active">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Accounting</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li class="active"><a href="accountingApplicant.php">Civilian</a></li>
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
            Admin Accounts
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">

		<div class="'container">
			<div class="row">
				<div class="col-md-12">
                    <!-- <h3>
                        <span id="printHeader" class="logo-lg"><b>PMA</b>VRMS: Admin Accounts</span>
                    </h3> -->
                    <div class="box">
                        <div class="box-body">

													<button class="btn btn-primary btn-lg pull-right" data-toggle="modal"
														data-target="#adminAccount">
														<!-- <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> -->
														Add Admin User
													</button>
                            <!-- <br/><br/><br/><br/><br/><br/><br/> -->

													<!-- Modal -->
													<div class="modal fade" id="adminAccount" tabindex="-1" role="dialog"
														aria-labelledby="adminAccountLabel">

														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>

																	<h4 class="modal-title" id="adminAccountLabel">Create Admin Account</h4>
																</div>

																<div class="modal-body">
																	<form class="form-horizontal" method="post" action="accounts_admin_logic.php">

																		<div class="form-group">
																			<label for="lastname" class="col-sm-4 control-label">
																				Last Name
																			</label>

																			<div class="col-sm-6">
																				<input type="text" class="form-control" id="lastname" name="lastname">
																			</div>
																		</div>

																		<div class="form-group">
																			<label for="firstname" class="col-sm-4 control-label">
																				First Name
																			</label>

																			<div class="col-sm-6">
																				<input type="text" class="form-control" id="firstname" name="firstname">
																			</div>
																		</div>

																		<div class="form-group">
																			<label for="middlename" class="col-sm-4 control-label">
																				Middle Name
																			</label>

																			<div class="col-sm-6">
																				<input type="text" class="form-control" id="middlename" name="middlename">
																			</div>
																		</div>


																		<div class="form-group">
																			<label for="office" class="col-sm-4 control-label">
																				Office
																			</label>

																			<div class="col-sm-6">
																				<input type="text" class="form-control" id="office" name="office">
																			</div>
																		</div>

																		<div class="form-group">
																			<label for="rank" class="col-sm-4 control-label">
																				Rank
																			</label>

																			<div class="col-sm-6">
																				<input type="text" class="form-control" id="rank" name="rank">
																			</div>
																		</div>

			                              <div class="form-group">
			                                <label for="email" class="col-sm-4 control-label">
			                                  Username
			                                </label>

			                                <div class="col-sm-6">
			                                  <input type="text" class="form-control" id="email" name="username">
			                                </div>
			                              </div>

			                              <div class="form-group">
			                                <label for="password" class="col-sm-4 control-label">
			                                  Password
			                                </label>

			                                <div class="col-sm-6">
			                                  <input type="text" class="form-control" id="password" name="password">
			                                </div>
			                              </div>

			                              <div class="span7 text-center">
			                                <input type="submit" value="Register" name="submit2" />
			                              </div>





			                    </form>
																</div>

																<div class="modal-footer">
																	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																	<button type="button" class="btn btn-primary" name="submit2">Save Changes</button>
																</div>

															</div>
														</div>

													</div>
														<table class="table table-bordered table-hover" id="adminAccounts-table">
															<thead>
																<th>Username</th>
																<th>Name</th>
																<th>Office</th>
																<th>Rank</th>
															</thead>

															<tbody>
																<?php
																	$dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms')
																		or die ('Error connecting to MySQL server.');

																	$query = "SELECT username, name, office, rank
																						FROM accounts
																						WHERE level = 1";

																	$result = mysqli_query($dbc, $query)
																		or die ('Error querying database.');

																	while ($row = mysqli_fetch_array($result)) {
																		$username = $row['username'];
																		$name = $row['name'];
																		$office = $row['office'];
																		$rank = $row['rank'];

																?>
																	<tr>
																		<td><?php echo $username; ?></td>
																		<td><?php echo $name; ?></td>
																		<td><?php echo $office; ?></td>
																		<td><?php echo $rank; ?></td>
																	</tr>

																<?php
																	}
																?>
															</tbody>
														</table>


                            <!-- <form class="form-horizontal" method="post" action="create_account_logic.php">


                              <div class="form-group">
                                <label for="email" class="col-sm-4 control-label">
                                  Username
                                </label>

                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="email" name="email">
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="password" class="col-sm-4 control-label">
                                  Password
                                </label>

                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="password" name="password">
                                </div>
                              </div>

                              <div class="span7 text-center">
                                <input type="submit" value="Register" name="submit2" />
                              </div>





                    </form> -->
                            <!-- <br/><br/><br/><br/><br/><br/><br/> -->
                        </div>
                    </div>


                </div>
    <script src="../js/print.js" type="text/javascript"></script>
	<script src="../bootstrap/js/jquery.sortelements.js" type="text/javascript"></script>
	<script src="../bootstrap/js/jquery.bdt.js" type="text/javascript"></script>
	<script>
		$(document).ready( function () {
			$('#bootstrap-table').bdt();
		});
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
