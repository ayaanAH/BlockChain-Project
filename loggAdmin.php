<?php
  session_start();
  require_once('DBconnect.php');
  $email= $_POST['eml'];
  $pass= $_POST['pasd'];
  echo "<br>";
  $query = "select * from user where Type=2";
  $result1= mysqli_query($connection, $query);
  if (mysqli_num_rows($result1))
  {
    $my_query= "SELECT * FROM user WHERE Email LIKE '$email' AND Pwd LIKE '$pass' AND Type = 1";
    $result= mysqli_query($connection, $my_query);
    if (mysqli_num_rows($result))
    {
      $_SESSION['sessionvar'] = true;
      $_SESSION['varAdmin']=$email;
      ?>
      <script>
      document.location.href="/crewbeats_PRO/adminHome.php";
      </script>
      <?php
    }
    else
    {
      $_SESSION['sessionvar'] = false;

      ?>
      <script>
      window.alert('Invalid Email / Password.')
      document.location.href="/crewbeats_PRO/adminLogin.php"
      </script><?php
    }
  }
  else if(!mysqli_num_rows($query))
  {?>
    <script>
    window.alert('Not an ADMIN!!')
    document.location.href="/crewbeats_PRO/adminLogin.php"
    </script><?php
  }
?>
