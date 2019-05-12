<?php
  session_start();
  require_once('DBconnect.php');
  $email= $_POST['email'];
  $pass= $_POST['pass'];
  echo "<br>";
  $pass= md5($pass);
  $my_query= "SELECT * FROM user WHERE Email LIKE '$email' AND Pwd LIKE '$pass' AND Type = 2";
  $result= mysqli_query($connection, $my_query);
  if (mysqli_num_rows($result))
  {
    $_SESSION['sessionvar'] = true;
    $_SESSION['var'] = $email;
    ?>
    <script>
    document.location.href="/crewbeats_PRO/home.php";
    </script>
    <?php
  }
  else {
    $_SESSION['sessionvar'] = false;?>
    <script>
    window.alert('Invalid Email / Password.')
    document.location.href="/crewbeats_PRO/RegLog.php"
  </script><?php

  }
?>
