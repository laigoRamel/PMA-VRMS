<?php
	include('login/login_logic.php');
    //include('login/create_account_logic.php');
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="login/bootstrap2/css/bootstrap.min.css">
        <link rel="stylesheet" href="login/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="login/css2/form-elements.css">
        <link rel="stylesheet" href="login/css2/style.css">
        <link rel="shortcut icon" href="login/img/seal.png">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">


    </head>

    <body>  

        <!-- Top content -->
        <div class="top-content">
        	
            <div style="margin-top:15px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                                <img src="login/img/seal.png" align="middle">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
                            <div class="form-bottom" style="margin-top:130px;">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
                                    <br/>
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>

			                        <button type="submit" class="btn" name="submits">Sign in/Login</button><br>
			                        
			                        
			                        <span><?php echo $error; ?></span>
			                    </form>
                                    <br/>
                                    
                                
		                    </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">

                            <!--<a href="login/create_account_page.php" class="btn btn-primary">Sign Up</a>-->
                            <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-1">Sign Up</button>-->
        <!--<div class="modal fade" id="modal-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form class="form-horizontal" action="create_account_logic.php">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Fill in the following</h3>
                        </div>
                        <div class="modal-body">
                            <div class = "form-group">
                                <label for = "last-name" class = "col-lg-2 control-label">Last Name:</label>
                                <div class = "col-lg-10">
                                    <input type = "text" class = "form-control" name = "last-name" placeholder="full name">
                                </div>
                            </div>

                            <div class = "form-group">
                                <label for = "first-name" class = "col-lg-2 control-label">First Name:</label>
                                <div class = "col-lg-10">
                                    <input type = "text" class = "form-control" name = "first-name" placeholder="full name">
                                </div>
                            </div>

                            <div class = "form-group">
                                <label for = "middle-initial" class = "col-lg-2 control-label">Middle Initial:</label>
                                <div class = "col-lg-10">
                                    <input type = "text" class = "form-control" name = "middle-initial" placeholder="full name">
                                </div>
                            </div>

                            <div class = "form-group">
                                <label for = "email" class = "col-lg-2 control-label">Email:</label>
                                <div class = "col-lg-10">
                                    <input type = "text" class = "form-control" name = "email" placeholder="full name">
                                </div>
                            </div>

                            <div class = "form-group">
                                <label for = "password" class = "col-lg-2 control-label">Password:</label>
                                <div class = "col-lg-10">
                                    <input type = "text" class = "form-control" name = "password" placeholder="full name">
                                </div>
                            </div>
                        </div>

                        

                        <div class="modal-footer">
                            <a href="" class="btn btn-default" data-dismiss="modal">Close</a>
                            <!--<a href="" class="btn btn-primary">Register</a>-->
                            <!--<a href="login/create_account_logic.php" class="btn btn-primary">Register</a>-->

                           <!-- <button type="submit" class="btn btn-primary" name="sumbits2">Register</button>
                        </div>
                    </form>
                </div>
            </div>-->
        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="login/js/jquery-1.11.1.min.js"></script>
        <script src="login/bootstrap/js/bootstrap.min.js"></script>
        <script src="login/js/jquery.backstretch.min.js"></script>
        <script src="login/js/scripts.js"></script>
        

    </body>

</html>
