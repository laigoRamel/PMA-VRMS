
<?php
  if (isset($_POST)) {
    $lastname = $_POST['superuserLastname'];
    $firstname = $_POST['superuserFirstname'];
    $middlename = $_POST['superuserMiddlename'];
    $office = $_POST['superuserOffice'];
    $type = $_POST['type'];
    $rank = $_POST['superuserRank'];
    $username = $_POST['superuserUsername'];
    $password = $_POST['superuserPassword'];

    $fullname = ($lastname . ", " . $firstname . " " . $middlename);

    $dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms')
      or die ('Error connecting to MySQL server.');

    $query = "INSERT INTO accounts(id, name, office, type, rank, username,
      password, level, flag)
        VALUES ('', '$fullname', '$office', '$type', '$rank', '$username',
          '$password', 3, 1)";

    mysqli_query($dbc, $query)
      or die ('Error querying database');

    mysqli_close($dbc);
  }

  header('Location: accounts_superuser_page.php');
?>
