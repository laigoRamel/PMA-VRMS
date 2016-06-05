
<?php
  if (isset($_POST)) {
    $lastname = $_POST['adminLastname'];
    $firstname = $_POST['adminFirstname'];
    $middlename = $_POST['adminMiddlename'];
    $office = $_POST['adminOffice'];
    $type = $_POST['type'];
    $rank = $_POST['adminRank'];
    $username = $_POST['adminUsername'];
    $password = $_POST['adminPassword'];

    $fullname = ($lastname . ", " . $firstname . " " . $middlename);

    $dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms')
      or die ('Error connecting to MySQL server.');

    $query = "INSERT INTO accounts(id, name, office, type, rank, username,
      password, level, flag)
        VALUES ('', '$fullname', '$office', '$type', '$rank', '$username',
          '$password', 1, 1)";

    mysqli_query($dbc, $query)
      or die ('Error querying database');

    mysqli_close($dbc);
  }

  header('Location: accounts_admin_page.php');
?>
