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
            <li class=""><a href="../index.php"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>



            <!-- Vehicle Log -->
            <li><a href="../vehicleLog.php"><i class="glyphicon glyphicon-road"></i> <span>Vehicle Log</span></a></li>

            <!-- Reports -->
            <li><a href="../reports.php"><i class="glyphicon glyphicon-flag"></i> <span>Reports</span></a></li>

             <!-- Create Account -->
            <!-- <li class=""><a href="login/create_account_page.php"><i class="glyphicon glyphicon-plus"></i> <span>Create Account</span></a></li> -->

            <!-- Accounts -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-plus"></i>
                <span>Accounts</span>
                <i class="glyphicon glyphicon-chevron-down pull-right"></i>
              </a>

              <ul class="treeview-menu">

                <li class=""><a href="accounts_client_page.php">Client Accounts</a></li>
              </ul>
            </li>

            <!-- Accounting -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Accounting</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../accountingApplicant.php">Civilian</a></li>
                <li><a href="../AccountingMilitary.php">Military</a></li>
              </ul>
            </li>

            <li class="header">FORMS</li>
            <!-- Forms -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Registration Form</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../form1.php">Camp Allen/Navybase</a></li>
                <li><a href="../form2.php">AFP</a></li>
              </ul>
            </li>

            <!-- Registered Applicant-->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Registered Applicant</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../registeredApplicant.php">Civilian</a></li>
                <li><a href="../registeredAFP.php">Military</a></li>
              </ul>
            </li>

            <!-- Pending -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-option-horizontal"></i> <span>Pending</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pendingApplicant.php">Civilian</a></li>
                <li><a href="../pendingMilitary.php">Military</a></li>
              </ul>
            </li>

            <!-- Vehicle Status -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Vehicle Status</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../ApplicantVehicleStatus.php">For Civilian</a></li>
                <li><a href="../AFPVehicleStatus.php">For Military</a></li>
              </ul>
            </li>

            <!-- Vehicle -->
            <li class=""><a href="vehicles.php"><i class="glyphicon glyphicon-flag"></i> <span>Vehicles</span></a></li>

          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Change Password
          </h1>

        </section>


        <!-- Main content -->
        <section class="content">

    <div class="'container">
      <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class='col-md-6'>
                        <table class='table table-hover table-bordered table-striped'>
                            <tr>
                                <td><label>Name</label></td>
                                <td><label><?php echo $_SESSION['name']; ?></label></td>
                            </tr>
                            <tr>
                                <td><label>Office</label></td>
                                <td><label><?php echo $_SESSION['office']; ?></label></td>
                            </tr>
                            <tr>
                                <td><label>Rank</label></td>
                                <td><label><?php echo $_SESSION['rank']; ?></label></td>
                            </tr>
                        </table>
                    </div>
                    <div class='col-md-6'>
                        <input id='password' type='hidden' value="<?php echo $_SESSION['password']; ?>">
                        <form action='change_password_logic.php' method='post'>
                            <table class='table table-hover table-bordered table-striped'>
                                <tr>
                                    <td><label>Old Password <span id='password_not_match' style='color: red; display: none;'>Not Match</span></label></td>
                                    <td><input id='old_password' class='form-control' type='password' name='old_password' required></td>
                                </tr>
                                <tr>
                                    <td><label>New Password <span id='new_password_not_match' style='color: red; display: none;'>Not Match</span></label></td>
                                    <td><input id='new_password' class='form-control' type='password' name='new_password' required></td>
                                </tr>
                                <tr>
                                   <td><label>Confirm Password <span id='confirm_password_not_match' style='color: red; display: none;'>Not Match</span></label></td>
                                    <td><input id='confirm_password' class='form-control' type='password' name='confirm_password' required></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button id='submit-btn' class='btn btn-primary' disabled><i class='fa fa-check'></i> Ok</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

        <br/><br/>

        </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        TISIS
      </footer>

    </div><!-- ./wrapper -->


    <script>
      var validate_new_password = function(){
        if($('#new_password').val() !== $('#confirm_password').val()){
              $('#new_password_not_match').css('display', 'block');
              $('#confirm_password_not_match').css('display', 'block');
               $('#submit-btn').attr('disabled', true);
          }else{
              $('#new_password_not_match').css('display', 'none');
              $('#confirm_password_not_match').css('display', 'none');

              if($('#password').val() === $('#old_password').val()){
                $('#submit-btn').removeAttr('disabled');
              }else{
                $('#submit-btn').attr('disabled', true);
              }
          }
      }

      $('#old_password').change(function(){
          if($('#password').val() !== $(this).val()){
            $('#password_not_match').css('display', 'block');
             $('#submit-btn').attr('disabled', true);
          }else{
            $('#password_not_match').css('display', 'none');

            if($('#new_password').val() === $('#confirm_password').val()){
              $('#submit-btn').removeAttr('disabled');
            }else{
              $('#submit-btn').attr('disabled', true);
            }
          }
      });


      $('#new_password').change(validate_new_password);
      $('#confirm_password').change(validate_new_password);


    </script>
</body>

</html>
