<?php 
$conn = new mysqli('localhost', 'root', '', 'pma-vrms');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
$resultForm1 = $conn->query("SELECT a_applicantId FROM form1_applicantpd");
$resultForm2 = $conn->query("SELECT m_militaryId FROM form2_militarypd");
$numRowsForm1 = mysqli_num_rows($resultForm1);
$numRowsForm2 = mysqli_num_rows($resultForm2);
$resultPendingForms = mysqli_num_rows($resultForm1) + mysqli_num_rows($resultForm2);
echo "$resultPendingForms \n";
?>


					         