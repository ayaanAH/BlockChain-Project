<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin LogIn</title>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>


      <link rel="stylesheet" href="css/adminLogin.css">

  <style>
  .loginBtn{
    font-family: 'Open Sans Condensed', sans-serif;
    text-align: center;
    padding: 4px 8px;
    margin-top: 20px;
    padding: 10px;
    border-radius: 10px;
    font-size: 20px;
    height: 40px;
    background: rgba(107,255,3,0.3);
  }

  html
  {
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    overflow: hidden;
  }
  .cover
  {
    height: 100%;
    width: 100%;
    padding: 100%;
  }
  a:hover{
    opacity: 0.9;
    background: rgba(107,255,3,0.3);
  }
  </style>

</head>

<body background="images/adminLogin.jpg">
  <div id="login-button">
    <img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
  </img>

</div><a style="text-align:center;font-weight:bold;padding:15px;" href="RegLog.php">BACK</a>
<div id="container">
  <h1>Admin Log-In</h1>
  <span class="close-btn">
    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
  </span>

  <form class="logg" action="loggAdmin.php" method="post">
    <input type="email" name="eml" placeholder="E-mail">
    <input type="password" name="pasd" placeholder="Password">
    <input type="submit" class="loginBtn" value="Log In">
  </form>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="js/adminLogin.js"></script>


</body>

</html>
