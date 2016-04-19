<?php 
$conn = new mysqli('localhost', 'root', '', 'pma-vrms');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
$result = $conn->query("SELECT a_applicantId FROM form1_applicantpd");
$num_rows = mysqli_num_rows($result);
echo "$num_rows \n pending form in progress";
?>


					         