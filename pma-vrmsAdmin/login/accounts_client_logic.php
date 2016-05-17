
<?php
  if (isset($_POST['submit3'])) {
    $lastname = $_POST['clientLastname'];
    $firstname = $_POST['clientFirstname'];
    $middlename = $_POST['clientMiddlename'];
    $office = $_POST['clientOffice'];
    $rank = $_POST['clientRank'];
    $username = $_POST['clientUsername'];
    $password = $_POST['clientPassword'];

    $fullname = ($lastname . ", " . $firstname . " " . $middlename);

    $dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms')
      or die ('Error connecting to MySQL server.');

    $query = "INSERT INTO accounts(id, name, office, rank, username,
      password, level)
        VALUES ('', '$fullname', '$office', '$rank', '$username',
          '$password', 2)";

    mysqli_query($dbc, $query)
      or die ('Error querying database');

    mysqli_close($dbc);
  }

  header('Location: accounts_client_page.php');
?>
