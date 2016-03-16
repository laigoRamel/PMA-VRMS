<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">PMA-VRMS</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="drop-down">
				<a class="drop-down toggle" data-toggle="dropdown" href="#">Forms<span class="caret"></span></a>
				<ul class="dropdown-menu active">
					<li>
						<a href="index.php">Form1 (Camp Allen / Navy Base)</a>
					</li>
					<li>
						<a href="form2.php">Form2 (AFP Form)</a>
					</li>
				</ul>
			</li>
			<li class="drop-down">
				<a class="drop-down toggle" data-toggle="dropdown" href="#">Registered<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>
						<a href="registeredApplicant.php">Registered Applicant</a>
					</li>
					<li>
						<a href="registeredAFP.php">Registered Military</a>
					</li>
					<li>
						<a href="registeredVehicle.php">Registered Vehicle</a>
					</li>
				</ul>
			</li>
			<li>
				<a class="drop-down toggle" data-toggle="dropdown" href="#">Pending<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>
						<a href="pendingApplicant.php">Pending Applicant</a>
					</li>
					<li>
						<a href="pendingMilitary.php">Pending Military</a>
					</li>
				</ul>
			</li>
			<li>
				<a class="drop-down toggle" data-toggle="dropdown" href="#">Accounting<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>
						<a href="accountingApplicant.php">For Applicant</a>
					</li>
					<li>
						<a href="accountingMilitary.php">For Military</a>
					</li>
				</ul>
			</li>
			<li><a href="vehicleLog.php">Vehicle Log</a></li>
			<li><a href="">Reports</a></li>
			<li><a href="login/logbook_page.php">Employee Log</a></li>
			<li><a href="militaryPersonnelLog.php">Military Personnel Log</a></li>
			<li><a href="login/pending_accounts_page.php">Pending Accounts</a></li>
			
		</ul>

		<ul class="nav navbar-nav pull-right">
			<li class="drop-down">
				<a class="drop-down toggle" data-toggle="dropdown" href=""><?php echo $login_session; ?><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>
						<a href='logout.php'>Log out</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>