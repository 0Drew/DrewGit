




<?php

$local = "localhost";
$usern = "root";
$passw = "";
$db = "gitdb";

$conn = mysqli_connect($local, $usern, $passw, $db);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>