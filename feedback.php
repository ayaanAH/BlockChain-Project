<?php
  session_start();
  require('DBconnect.php');
  $n1=$_GET['n1'];
  $e1=$_GET['e1'];
  $m1=$_GET['m1'];
  $my_query1="insert into feedback(f_name, f_email, f_msg, f_reply) values('$n1','$e1','$m1', '')";
  $result2=mysqli_query($connection, $my_query1);
?>
<script>
  document.location.href='/crewbeats_PRO/contact.php';
</script>
