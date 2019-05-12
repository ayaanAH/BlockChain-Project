<?php
  require_once('DBconnect.php');
  $fname= $_POST['fname'];
  $lname= $_POST['lname'];
  $email= $_POST['email'];
  $pass= $_POST['pass'];
  echo "<br>";
  $my_query= "select * from user where Email='$email'";
  $result= mysqli_query($connection, $my_query);
  if (mysqli_num_rows($result))
  {?>
    <script>
    window.alert("SORRY! This Email has already been taken.");
    document.location.href="/crewbeats_PRO/createAdmin.php";
    </script><?php
  }
  else {
    $my_query= "insert into user(Fname, Lname, Email, Pwd, Type)values ('$fname','$lname','$email','$pass','1')";
    echo "<br>";
    $result= mysqli_query($connection, $my_query);
    if ($result)
    {?>
      <script>
      window.alert("Successfully Registered.");
      document.location.href="/crewbeats_PRO/adminHome.php";
      </script><?php
    }
    else
    {
      echo "<b> ERROR! unable to post</b>";
    }
  }
  mysqli_close();
?>
