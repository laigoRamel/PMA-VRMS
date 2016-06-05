<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Accounts</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../pma-vrmsSuperAdmin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../pma-vrmsSuperAdmin/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../pma-vrmsSuperAdmin/css/style-main.min.css">
    <link rel="stylesheet" href="../pma-vrmsSuperAdmin/bootstrap/css/jquery.bdt.css">
    <link rel="stylesheet" href="../pma-vrmsSuperAdmin/css/skin.min.css">
    <link rel="stylesheet" type="text/css" href="../pma-vrmsSuperAdmin/css/print.css">
    <link rel="icon" href="img/seal.png">

  <script src="../pma-vrmsSuperAdmin/bootstrap/jquery.min.js"></script>
  <script src="../pma-vrmsSuperAdmin/bootstrap/js/bootstrap.min.js"></script>
    <script src="../pma-vrmsSuperAdmin/js/app.min.js"></script>
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
            <li class=""><a href="../pma-vrmsSuperAdmin/index.php"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>



            <!-- Vehicle Log -->
            <li><a href="../pma-vrmsSuperAdmin/vehicleLog.php"><i class="glyphicon glyphicon-road"></i> <span>Vehicle Log</span></a></li>

            <!-- Reports -->
            <li><a href="../pma-vrmsSuperAdmin/reports.php"><i class="glyphicon glyphicon-flag"></i> <span>Reports</span></a></li>

             <!-- Create Account -->
            <!-- <li class=""><a href="login/create_account_page.php"><i class="glyphicon glyphicon-plus"></i> <span>Create Account</span></a></li> -->

            <!-- Employee Log -->
            <li><a href="logbook_page.php"><i class="glyphicon glyphicon-user"></i> <span>Employee Log</span></a></li>

            <!-- Accounts -->
            <li class="treeview active">
              <a href="#"><i class="glyphicon glyphicon-plus"></i>
                <span>Accounts</span>
                <i class="glyphicon glyphicon-chevron-down pull-right"></i>
              </a>

              <ul class="treeview-menu">

                <li><a href="accounts_client_page.php">Client Accounts</a></li>
                <li class="active"><a href="accounts_admin_page.php">Admin Accounts</a></li>
                <li><a href="accounts_superuser_page.php">Superuser Accounts</a></li>
              </ul>
            </li>


                <!--<li class="active"><a href="accounts_client_page.php"><i class="glyphicon glyphicon-plus"></i>Client Accounts</a></li>
              -->

            <!-- Accounting -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Accounting</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pma-vrmsSuperAdmin/accountingApplicant.php">Civilian</a></li>
                <li><a href="../pma-vrmsSuperAdmin/AccountingMilitary.php">Military</a></li>
              </ul>
            </li>

            <li class="header">FORMS</li>
            <!-- Forms -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Registration Form</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pma-vrmsSuperAdmin/form1.php">Camp Allen/Navybase</a></li>
                <li><a href="../pma-vrmsSuperAdmin/form2.php">AFP</a></li>
              </ul>
            </li>

            <!-- Registered Applicant-->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> <span>Registered Applicant</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pma-vrmsSuperAdmin/registeredApplicant.php">Civilian</a></li>
                <li><a href="../pma-vrmsSuperAdmin/registeredAFP.php">Military</a></li>
              </ul>
            </li>

            <!-- Pending -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-option-horizontal"></i> <span>Pending</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pma-vrmsSuperAdmin/pendingApplicant.php">Civilian</a></li>
                <li><a href="../pma-vrmsSuperAdmin/pendingMilitary.php">Military</a></li>
              </ul>
            </li>

            <li class="header">VEHICLES</li>
            <!-- Vehicle Status -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-info-sign"></i> <span>Vehicle Status</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../pma-vrmsSuperAdmin/ApplicantVehicleStatus.php">For Civilian</a></li>
                <li><a href="../pma-vrmsSuperAdmin/AFPVehicleStatus.php">For Military</a></li>
              </ul>
            </li>

           <!-- Vehicle -->
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-flag"></i> <span>Vehicles</span> <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
              <ul class="treeview-menu">
                <li class=""><a href="../pma-vrmsSuperAdmin/applicant_vehicles.php">For Civilian</a></li>
                <li><a href="../pma-vrmsSuperAdmin/military_vehicles.php">For Military</a></li>
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
                        <span id="printHeader" class="logo-lg"><b>PMA</b>VRMS: Client Accounts</span>
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

                                    <div  class="form-group">
                                      <label for="adminLastname" class="col-sm-4 control-label">
                                        Last Name
                                      </label>

                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" id="adminLastname" name="adminLastname">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="adminFirstname" class="col-sm-4 control-label">
                                        First Name
                                      </label>

                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" id="adminFirstname" name="adminFirstname">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="adminMiddlename" class="col-sm-4 control-label">
                                        Middle Name
                                      </label>

                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" id="adminMiddlename" name="adminMiddlename">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="adminOffice" class="col-sm-4 control-label">
                                        Office
                                      </label>

                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" id="adminOffice" name="adminOffice">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="adminRank" class="col-sm-4 control-label">
                                        Type
                                      </label>

                                      <div class="col-sm-6">
                                        <label><input type="radio" name='type' value='army' checked='checked'>PA</label>
                                        <label><input type="radio" name='type' value='navy'>PN</label>
                                        <label><input type="radio" name='type' value='air force'>PAF</label>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="adminRank" class="col-sm-4 control-label">
                                        Rank
                                      </label>

                                      <div class="col-sm-6">
                                        <select id='modal-add-select-rank' class='form-control' name='adminRank'>
                                              <option value='PVT'>PVT</option>
                                  <option value='PFC'>PFC</option>
                                  <option value='CPL'>CPL</option>
                                  <option value='SGT'>SGT</option>
                                  <option value='SSG'>SSG</option>
                                  <option value='TSG'>TSG</option>
                                  <option value='MSG'>MSG</option>
                                  <option value='SMSG'>SMSG</option>
                                  <option value='CMSG'>CMSG</option>
                                  <option value='FCMSG'>FCMSG</option>
                                  <option value='2LT'>2LT</option>
                                  <option value='1LT'>1LT</option>
                                  <option value='MAJ'>MAJ</option>
                                  <option value='LTCOL'>LTCOL</option>
                                            </select>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="adminUsername" class="col-sm-4 control-label">
                                        Username
                                      </label>

                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" id="adminUsername" name="adminUsername">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="adminPassword" class="col-sm-4 control-label">
                                        Password
                                      </label>

                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" id="adminPassword" name="adminPassword">
                                      </div>
                                    </div>


                                </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                                </form>

                              </div>
                            </div>

                          </div>
                            <table class="table table-bordered table-hover" id="adminAccounts-table">
                              <thead>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Office</th>
                                <th>Type</th>
                                <th>Rank</th>
                                <th style='width: 200px;'>Options</th>
                              </thead>

                              <tbody>
                                <?php
                                  $dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms')
                                    or die ('Error connecting to MySQL server.');

                                  $query = "SELECT * FROM accounts WHERE level = 1 AND flag = 1";

                                  $result = mysqli_query($dbc, $query)
                                    or die ('Error querying database.');

                                  while ($row = mysqli_fetch_array($result)) {
                                    $username = $row['username'];
                                    $name = $row['name'];
                                    $office = $row['office'];
                                    $type = $row['type'];
                                    $rank = $row['rank'];
                                    $id = $row['id'];

                                ?>
                                  <tr>
                                    <td><?php echo $username; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $office; ?></td>
                                    <td><?php echo $type; ?></td>
                                    <td><?php echo $rank; ?></td>
                                    <td style='display: none;'><?php echo $id; ?></td>
                                    <td>
                                      <button class='btn btn-warning edit-modal' type='button'>Edit</button>
                                      <button class='btn btn-danger delete-modal' type='button'>Delete</button>
                            <!-- NEW -->
                                      <button class='btn btn-default reset' type='button'>Reset</button>
                                      <span style='display: none; color: blue;'>Reset Success</span>
                                    </td>
                                  </tr>

                                <?php
                                  }
                                ?>
                              </tbody>
                            </table>
                        </div>
                    </div>


                </div>


     <div id='modal-edit' class='modal fade' role='dialog' tabindex='-1'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Account</h4>
            </div>
            <form action='accounts_admin_edit_logic.php' method='post'>
              <div class="modal-body">
                <input id='modal-edit-id' type='hidden' name='id' />
                <table class='table table-bordered table-hover table-striped'>
                  <tr>
                    <td><label>Username</label></td>
                    <td><input id='modal-edit-username' class='form-control' type='text' name='username'></td>
                  </tr>
                  <tr>
                    <td><label>Name</label></td>
                    <td><input id='modal-edit-name' class='form-control' type='text' name='name'></td>
                  </tr>
                  <tr>
                    <td><label>Office</label></td>
                    <td><input id='modal-edit-office' class='form-control' type='text' name='office'></td>
                  </tr>
                  <tr>
                    <td><label>Type</label></td>
                    <td>
                      <label><input id='modal-edit-type_army' type='radio' name='rank_type' value='army' />PA</label>
                      <label><input id='modal-edit-type_navy' type='radio' name='rank_type' value='navy' />PN</label>
                      <label><input id='modal-edit-type_air_force' type='radio' name='rank_type' value='air force' />PAF</label>
                    </td>
                  </tr>
                  <tr>
                    <td><label>Rank</label></td>
                    <td>
                      <select id='select-rank' class='form-control' name='rank'>
                        <option value='PVT'>PVT</option>
                                  <option value='PFC'>PFC</option>
                                  <option value='CPL'>CPL</option>
                                  <option value='SGT'>SGT</option>
                                  <option value='SSG'>SSG</option>
                                  <option value='TSG'>TSG</option>
                                  <option value='MSG'>MSG</option>
                                  <option value='SMSG'>SMSG</option>
                                  <option value='CMSG'>CMSG</option>
                                  <option value='FCMSG'>FCMSG</option>
                                  <option value='2LT'>2LT</option>
                                  <option value='1LT'>1LT</option>
                                  <option value='MAJ'>MAJ</option>
                                  <option value='LTCOL'>LTCOL</option>
                      </select>
                    </td>
                  </tr>
                </table>
              </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
     </div>

     <div id='modal-delete' class='modal fade'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <form action='accounts_admin_delete_logic.php' method='post'>
            <input id='modal-delete-id' type='hidden' name='id'>
            <div class="modal-body">
              <h4><i class='fa fa-warning'></i>&nbsp; Are you sure you want to delete</h4>
            </div>
            <div class='modal-footer'>
              <button class='btn btn-danger' type='submit'>Ok</button>
            </div>
         </form>
      </div>
    </div>
  </div>


    <script src="../pma-vrmsSuperAdmin/js/print.js" type="text/javascript"></script>
  <script src="../pma-vrmsSuperAdmin/bootstrap/js/jquery.sortelements.js" type="text/javascript"></script>
  <script src="../pma-vrmsSuperAdmin/bootstrap/js/jquery.bdt.js" type="text/javascript"></script>
  <script>
    $(document).ready( function () {
      $('#bootstrap-table').bdt();
    });

    var set_select_rank = function(value){
      if(value === 'army'){
        $('#select-rank').html(
                "<option value='PVT'>PVT</option>"+
      "<option value='PFC'>PFC</option>"+
      "<option value='CPL'>CPL</option>"+
      "<option value='SGT'>SGT</option>"+
      "<option value='SSG'>SSG</option>"+
      "<option value='TSG'>TSG</option>"+
      "<option value='MSG'>MSG</option>"+
      "<option value='SMSG'>SMSG</option>"+
      "<option value='CMSG'>CMSG</option>"+
      "<option value='FCMSG'>FCMSG</option>"+
      "<option value='2LT'>2LT</option>"+
      "<option value='1LT'>1LT</option>"+
      "<option value='MAJ'>MAJ</option>"+
      "<option value='LTCOL'>LTCOL</option>"
        );
      }
      if(value === 'navy'){
        $('#select-rank').html(
                "<option value='SN'>SN</option>"+
      "<option value='SN2'>SN2</option>"+
      "<option value='SN1'>SN1</option>"+
      "<option value='PO3'>PO3</option>"+
      "<option value='PO2'>PO2</option>"+
      "<option value='PO1'>PO1</option>"+
      "<option value='CPO'>CPO</option>"+
      "<option value='SCPO'>SCPO</option>"+
      "<option value='MCPO'>MCPO</option>"+
      "<option value='FCCPO'>FCCPO</option>"+
      "<option value='ENS'>ENS</option>"+
      "<option value='LTJG'>LTJG</option>"+
      "<option value='LTCMDR'>LTCMDR</option>"+
      "<option value='CMDR'>CMDR</option>"
        );
      }
      if(value === 'air force'){
        $('#select-rank').html(
                "<option value='AM'>AM</option>"+
      "<option value='A2C'>A2C</option>"+
      "<option value='A1C'>A1C</option>"+
      "<option value='SGT'>SGT</option>"+
      "<option value='SSG'>SSG</option>"+
      "<option value='TSG'>TSG</option>"+
      "<option value='MSG'>MSG</option>"+
      "<option value='SMSG'>SMSG</option>"+
      "<option value='CMSG'>CMSG</option>"+
      "<option value='FCMSG'>FCMSG</option>"+
      "<option value='2LT'>2LT</option>"+
      "<option value='1LT'>1LT</option>"+
      "<option value='MAJ'>MAJ</option>"+
      "<option value='LTCOL'>LTCOL</option>"
        );
      }


      if(value === 'army'){
        $('#modal-add-select-rank').html(
                "<option value='PVT'>PVT</option>"+
      "<option value='PFC'>PFC</option>"+
      "<option value='CPL'>CPL</option>"+
      "<option value='SGT'>SGT</option>"+
      "<option value='SSG'>SSG</option>"+
      "<option value='TSG'>TSG</option>"+
      "<option value='MSG'>MSG</option>"+
      "<option value='SMSG'>SMSG</option>"+
      "<option value='CMSG'>CMSG</option>"+
      "<option value='FCMSG'>FCMSG</option>"+
      "<option value='2LT'>2LT</option>"+
      "<option value='1LT'>1LT</option>"+
      "<option value='MAJ'>MAJ</option>"+
      "<option value='LTCOL'>LTCOL</option>"
        );
      }
      if(value === 'navy'){
        $('#modal-add-select-rank').html(
                "<option value='SN'>SN</option>"+
      "<option value='SN2'>SN2</option>"+
      "<option value='SN1'>SN1</option>"+
      "<option value='PO3'>PO3</option>"+
      "<option value='PO2'>PO2</option>"+
      "<option value='PO1'>PO1</option>"+
      "<option value='CPO'>CPO</option>"+
      "<option value='SCPO'>SCPO</option>"+
      "<option value='MCPO'>MCPO</option>"+
      "<option value='FCCPO'>FCCPO</option>"+
      "<option value='ENS'>ENS</option>"+
      "<option value='LTJG'>LTJG</option>"+
      "<option value='LTCMDR'>LTCMDR</option>"+
      "<option value='CMDR'>CMDR</option>"
        );
      }
      if(value === 'air force'){
        $('#modal-add-select-rank').html(
                "<option value='AM'>AM</option>"+
      "<option value='A2C'>A2C</option>"+
      "<option value='A1C'>A1C</option>"+
      "<option value='SGT'>SGT</option>"+
      "<option value='SSG'>SSG</option>"+
      "<option value='TSG'>TSG</option>"+
      "<option value='MSG'>MSG</option>"+
      "<option value='SMSG'>SMSG</option>"+
      "<option value='CMSG'>CMSG</option>"+
      "<option value='FCMSG'>FCMSG</option>"+
      "<option value='2LT'>2LT</option>"+
      "<option value='1LT'>1LT</option>"+
      "<option value='MAJ'>MAJ</option>"+
      "<option value='LTCOL'>LTCOL</option>"
        );
      }
    }

    $('#adminAccounts-table').on('click', '.edit-modal', function(){
      var tr = $(this).closest('tr');
      var username = tr.find('td:eq(0)').text();
      var name = tr.find('td:eq(1)').text();
      var office = tr.find('td:eq(2)').text();
      var type = tr.find('td:eq(3)').text();
      var rank = tr.find('td:eq(4)').text();
      var id = tr.find('td:eq(5)').text();

      $('#modal-edit-id').val(id);
      $('#modal-edit-username').val(username);
      $('#modal-edit-name').val(name);
      $('#modal-edit-office').val(office);
      $('input[type=radio]').prop('checked', false);

      if(type === 'army'){
        $('#modal-edit-type_army').prop('checked', true);
        set_select_rank('army');
      }
      if(type === 'navy'){
        $('#modal-edit-type_navy').prop('checked', true);
        set_select_rank('navy');
      }
      if(type === 'air force'){
        $('#modal-edit-type_air_force').prop('checked', true);
        set_select_rank('air force');
      }
      $('#select-rank').val(rank);
      $('#modal-edit').modal('show');
    });

    $('input[type=radio]').change(function(){
      set_select_rank($(this).val());

    });

    $('#adminAccounts-table').on('click', '.delete-modal', function(){
      $('#modal-delete-id').val($(this).closest('tr').find('td:eq(5)').text());
      $('#modal-delete').modal('show');
    });
  </script>

</section>  <!-- /Main content -->

        <br/><br/>

        </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        ©2016 PMA-VRMS
      </footer>

    </div><!-- ./wrapper -->


<!-- NEW -->
    <script>
      $('table').on('click', '.reset', function(){
        var id = $(this).closest('tr').find('td:eq(5)').text();
        var element = $(this);
        $.post(window.location.origin+'/pma21/trunk/pma-vrmsAdmin/login/reset_account_logic.php', {id: id}, function(response){
          element.closest('tr').find('td:eq(6)').find('span').css('display', 'block');
          setInterval(function(){
            element.closest('tr').find('td:eq(6)').find('span').css('display', 'none');
          }, 3000);
        });
      });
    </script>

</body>

</html>
