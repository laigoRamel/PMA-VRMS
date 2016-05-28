
<?php

  if (isset($_POST)) {
  	$id = $_POST['id'];

    $dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms')
      or die ('Error connecting to MySQL server.');

    $query = "UPDATE accounts SET password=username WHERE id='$id'";

    mysqli_query($dbc, $query)
      or die ('Error querying database.');

    mysqli_close($dbc);
  }

  header('Location: accounts_client_page.php');


?>
