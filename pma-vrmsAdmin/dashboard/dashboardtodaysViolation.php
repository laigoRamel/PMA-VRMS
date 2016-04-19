<?php 
$conn = new mysqli('localhost', 'root', '', 'pma-vrms');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
$result = $conn->query("select plateNum, owner, datein, violation from report where datein = curdate()");
$num_rows = mysqli_num_rows($result);
echo "$num_rows \n recorded violation for today.";
?>


					         