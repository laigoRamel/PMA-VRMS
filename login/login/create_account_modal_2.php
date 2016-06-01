<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Bootsrtap For Beginners</title>
	<meta name="description" content="Hello World">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	

</head>

<body>

	<header>
		<div class="jumbotron">
			<div class="container">
				<h1>Hello World</h1>
				<h3>Modals in Bootstrap</h3>
			</div> 
		</div> 
	</header>
	
	<div class="container">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-1">Activate the button</button>
		<div class="modal fade" id="modal-1">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					 <div class="modal-header">
					 	<button type="button" class="close" data-dismiss="modal">&times;</button>
					 	<h3 class="modal-title">This is the heading</h3>
					 </div>
					 <div class="modal-body">
					 	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at pharetra sapien. Nulla scelerisque ex eget ligula ornare, vel efficitur quam dictum. Proin malesuada posuere risus suscipit mattis. Suspendisse potenti. Donec et odio nibh. Praesent auctor erat at nunc gravida tincidunt. Ut facilisis, ex ultricies scelerisque aliquam, ex lectus fermentum urna, quis auctor eros ante non dui. 
					 </div>

					 <div class="modal-footer">
					 	<a href="" class="btn btn-default" data-dismiss="modal">Close</a>
					 	<a href="" class="btn btn-primary">Download</a>
					 </div>
				</div>
			</div>
		</div>
	</div>


	<footer>
		<div class="container">
			<hr>

			<p>
				<small><a href="http://facebook.com/askorama">Like me</a> On facebook</small></p>
			<p>	<small><a href="http://twitter.com/wiredwiki">Ask whatever </a> On Twitter</small></p>
			<p>	<small><a href="http://youtube.com/wiredwiki">Subscribe me</a> On Youtube</small>
				
			</p>
		</div> <!-- end container -->
	</footer>
		
	<!-- Latest compiled and minified JavaScript -->
	<script src="bootstrap3/js/bootstrap.min.js"></script>
<script src="bootstrap3/js/jquery-2.2.1.min.js"></script>
</body>	
</html>