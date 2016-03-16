<?php
	session_start();
	$u = $_SESSION['user'];
	require_once('connect.php');
	
	date_default_timezone_set("Asia/Taipei");
	$d = date("Y-m-d");
	$t = date("H:i:s");
	
	
	$query="SELECT * FROM userlog WHERE username = '" . $u . "' AND flag=1";
	$results = mysqli_query($conn, $query);
	
	if(mysqli_num_rows($results) >= 1){
		$query="UPDATE userlog SET dateout='$d', timeout='$t', flag=0 WHERE username='$u' AND flag=1"; 
		$results = mysqli_query($conn, $query);
	}
	
	session_destroy();
	header("location:index.php");
?>