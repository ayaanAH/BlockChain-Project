<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login</title>
  <link href='css/login2.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/login3.css" type='text/css'>
      <link rel="stylesheet" href="css/login1.css" type='text/css'>
</head>
<style media="screen">
  body
  {
    background-image: url("images/createadmin.jpg");
    background-size: cover;
  }


  .adminLogin
  {
 color: #990000;
 font-weight: 500;
 font-size: 30px;
 -webkit-transition: -webkit-transform 0.2s;
 transition: transform 0.2s;
 margin-top: 30px;
 display: inline-block;
 text-decoration: none;
 position: relative;
 }
 .adminLogin::before {
 position: absolute;
 top: 0;
 left: -10px;
 z-index: -1;
 box-sizing: content-box;
 padding: 0 10px;
 width: 100%;
 height: 100%;
 border-radius: 5px;
 background-color: #000;
 content: '';
 opacity: 0;
 -webkit-transition: -webkit-transform 0.4s, opacity 0.3s;
 transition: transform 0.4s, opacity 0.3s;
 -webkit-transform: scale(0);
 transform: scale(0);
 border-radius: 10px;
 }
 .adminLogin:hover::before
 {
 opacity: 1;
 -webkit-transform: scale(1);
 transform: scale(1);
 }


  .form
  {
    background-image: radial-gradient(circle, #05184a, #002e5c, #004367, #00566b, #07696d);
    padding: 40px;
    max-width: 600px;
    margin: 200px auto;
    opacity: 0.8;
    border-radius: 40px;
    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
  }
  .tab-group li a
  {
    display: block;
    text-decoration: none;
    padding: 15px;
    background: black;
    color: #19405C;
    font-size: 20px;
    width: 50%;
    text-align: center;
    cursor: pointer;
    transition: .5s ease;
  }
  .tab-group li a:hover
  {
    background: #a9a9a9;
    font-weight: bold;
    color: black;
  }
  .tab-group .active a
  {
    background: rgba(192, 192, 192, 0.5);
    color: #800000;
    font-weight: bold;
  }
  input:focus, textarea:focus
  {
    outline: 0;
    border-color: #1ab188;
    border-radius: 10px;
  }
  .button {
    border: 0;
    outline: none;
    border-radius: 30px;
    padding: 15px 0;
    font-size: 2rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .1em;
    background: rgba(192, 192, 192, 0.5);
    color: #800000;
    transition: all 0.5s ease;
    -webkit-appearance: none;
    cursor: pointer;
  }
  .button:hover, .button:focus
  {
    background: #000000;
    color: #19405C;
  }

</style>
<body>
  <div class="form">
    <ul class="tab-group">
      <li class="tab active"><a href="#back">BACK</a></li>
      <li class="tab"><a href="#signup">Sign Up</a></li>
    </ul>
      <div class="tab-content">

        <div id="back">
          <h1 style="font-family: cursive; color: #F35246;">Welcome Back!</h1>
          <center><a href="adminHome.php" class="adhome"><img src="images/home1.png" style="height:30px;"></a></center>
        </div>

        <div id="signup">
          <h1 style="font-family: cursive; color: #F35246;">Create new Admin</h1>
          <form action="createAdmin.php" method="post">
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" class="sty" name="fname" id="fname" required autocomplete="off" />
            </div>
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lname" id="lname" required autocomplete="off"/>
            </div>
          </div>
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" id="email" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="pass" id="pass" required autocomplete="off"/>
          </div>
          <button type="submit" class="button button-block"/>Register</button>
          </form>
        </div>
      </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/login1.js"></script>
</body>
</html>
