<?php 
$conn = new mysqli('localhost', 'root', '', 'pma-vrms');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
$result = $conn->query("SELECT tid, type, dateIn FROM client_log WHERE type = 'visitor' and dateIn = curdate()");
$num_rows = mysqli_num_rows($result);
echo "  $num_rows \n ";
?>

						
                    