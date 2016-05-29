
<?php
  if (isset($_POST)) {
    $lastname = $_POST['clientLastname'];
    $firstname = $_POST['clientFirstname'];
    $middlename = $_POST['clientMiddlename'];
    $office = $_POST['clientOffice'];
    $type = $_POST['type'];
    $rank = $_POST['clientRank'];
    $username = $_POST['clientUsername'];
    $password = $_POST['clientPassword'];

    $fullname = ($lastname . ", " . $firstname . " " . $middlename);

    $dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms')
      or die ('Error connecting to MySQL server.');

    $query = "INSERT INTO accounts(id, name, office, type, rank, username,
      password, level, flag)
        VALUES ('', '$fullname', '$office', '$type', '$rank', '$username',
          '$password', 2, 1)";

    mysqli_query($dbc, $query)
      or die ('Error querying database');

    mysqli_close($dbc);
  }

  header('Location: accounts_client_page.php');
?>
