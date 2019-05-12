<?php

  session_start();
  require_once('DBconnect.php');
  $email=$_SESSION['var'];
  $sql = "SELECT Fname, Lname, Email, Type FROM user WHERE Email LIKE '$email'";
  $query = mysqli_query($connection, $sql);
  if (!$query)
  {
	   die ('SQL Error: ' . mysqli_error($connection));
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>

    <style>

    body
    {
      background-size: cover;
    }

      .logout
      {
        float: right;
        bottom: 0px;
        margin-top: 550px;
        height
      }
      .home
      {
        float: left;
        bottom: 0px;
        margin-top: 550px;
        height
      }
      .button
      {
        display: inline-block;
        border-radius: 10px;
        background-color: #990000;
        border: none;
        color: #000;
        font-weight: bolder;
        text-align: center;
        font-size: 25px;
        padding: 20px;
        width: 200px;
        transition: all 0.5s;
        cursor: pointer;
      }

      .button span
      {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button span:after
      {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .button:hover span
      {
        padding-right: 25px;
      }

      .button:hover span:after
      {
        opacity: 1;
        right: 0;
      }

      .button1
      {
        display: inline-block;
        border-radius: 10px;
        background-color: #990000;
        border: none;
        color: #000;
        text-align: center;
        font-weight: bolder;
        font-size: 25px;
        padding: 20px;
        width: 200px;
        transition: all 0.5s;
        cursor: pointer;
      }

      .button1 span
      {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button1 span:after
      {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .button1:hover span
      {
        padding-right: 25px;
      }

      .button1:hover span:after
      {
        opacity: 1;
        right: 0;
      }

    </style>

  </head>
  <body background="images/profile2.jpg">
    <div class="home">
    <button class="button1" onclick="location.href='home.php'" style="vertical-align:middle" name="logout" ><span>Home </span></button>
  </div>
    <div class="logout">
      <form class="out" action="logout.php" method="post">
        <button class="button" style="vertical-align:middle" name="logout" ><span>LogOut </span></button>
      </form>
    </div>
  </body>
</html>
<?php

while ($row = mysqli_fetch_array($query))
{
  echo '<h1 style="font-family:cursive ;font-weight:bold; color:#990000; font-size:100px; text-align:center;">Welcome '.$row['Fname'].' '.$row['Lname'].'</h1>';
  if($row['Type']==1)
  {
    echo '<h6 style="font-weight:bold; color:#fff; margin-top: 550px; float:left; font-size:40px; text-align:center;">SYSTEM ADMIN</h6>';
  }
  else
  {
    echo '<h6 style="font-weight:bold; color:#fff; margin-top: 450px; font-size:20px; text-align:center;"></h6><br><br><br><br>
          <h6 style="font-weight:bold; color:#fff; font-size:20px; text-align:right;">SYSTEM USER -> '.$row['Email'].'</h6>';
  }
}

?>
