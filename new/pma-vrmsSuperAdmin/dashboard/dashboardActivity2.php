<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pma-vrms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select max(tid) as 'tid', max(owner) as 'name', timein from client_log where dateIn = curdate();";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["name"]. " just entered PMA at " . $row["timein"]."<br>";
    }
} else {
    echo "0 results";
}

?>