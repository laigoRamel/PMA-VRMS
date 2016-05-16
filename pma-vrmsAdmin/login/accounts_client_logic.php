
<?php
  if (isset($_POST['submit2'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['username'];
    $middlename = $_POST['middlename'];
    $office = $_POST['office'];
    $rank = $_POST['rank'];
    $username = $_POST['username'];
    $password = $_POST['password'];

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
?>
