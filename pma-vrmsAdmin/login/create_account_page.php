

<!DOCTYPE html>
<html>
	<head>
		<title>Create Account</title>

		<meta charset="utf-8">
		
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/fieldset.css">
		<script src="bootstrap/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<form class="form-horizontal" method="post" action="create_account_logic.php">
				<div class="form-group">
					<label for="last_name" class="col-sm-2 control-label">
						Last Name
					</label>

					<div class="col-sm-10">
						<input type="text" class="form-control" id="last_name" name="last_name">
					</div>
				</div>

				<div class="form-group">
					<label for="last_name" class="col-sm-2 control-label">
						First Name
					</label>

					<div class="col-sm-10">
						<input type="text" class="form-control" id="first_name" name="first_name">
					</div>
				</div>

				<div class="form-group">
					<label for="middle_initial" class="col-sm-2 control-label">
						Middle Initial
					</label>

					<div class="col-sm-10">
						<input type="text" class="form-control" id="middle_initial" name="middle_initial">
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">
						Email
					</label>

					<div class="col-sm-10">
						<input type="text" class="form-control" id="email" name="email">
					</div>
				</div>

				<div class="form-group">
					<label for="password" class="col-sm-2 control-label">
						Password
					</label>

					<div class="col-sm-10">
						<input type="text" class="form-control" id="password" name="password">
					</div>
				</div>

				<input type="submit" value="Register" name="submit2" />

			</form>
		</div>

	</body>
</html>