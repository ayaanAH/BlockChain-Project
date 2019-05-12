<?php
  $host = "localhost";
  $username = "root";
  $password = "root";
  $databaseName = "Blockchain";
  // Create connection
  $connection = mysqli_connect($host, $username, $password, $databaseName);
  // Check connection
  if (mysqli_connect_errno()):
    printf("connection Failed: %s\n", mysqli_connect_error());
    exit();
  endif;
?>
