<?php

  session_start();
  require_once('DBconnect.php');
  $reply = $_POST['reply'];
  $name = $_POST['name'];
  $Qur = "UPDATE feedback SET f_reply = '$reply' WHERE feedback.f_name = '$name'";
  echo $Qur;
  $res = mysqli_query($connection, $Qur);
  if (!$res)
  {
	   die ('SQL Error: ' . mysqli_error($connection));
  }

?>
<script>
  window.alert("Reply recorded.");
  document.location.href='/crewbeats_PRO/feedbackDisplay.php';
</script>
