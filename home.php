<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Blockchain Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
$(document).ready(function(){

  var welcomeSection = $('.topnav'),
      enterButton = welcomeSection.find('.navi');
      ank = enterButton.find('.ank');
  // Add smooth scrolling to all links
  ank .on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

    <style>

    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
    padding: 60px 0;
    float: left;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer h5{
	padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
.row ul.social li{
	padding: 3px 0;
}
.row ul.social li a i {
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
.row ul.social li:hover a i {
	font-size:30px;
	margin-top:-10px;
}
.row ul.social li a,
.row ul.quick-links li a{
	color:#ffffff;
}
.row ul.social li a:hover{
	color:#eeeeee;
}
#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}
#footer ul.quick-links li a i{
	margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}


    html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
    article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
    ol,ul{list-style:none;margin:0;padding:0;}
    blockquote,q{quotes:none;}
    blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
    table{border-collapse:collapse;border-spacing:0;}
    a{text-decoration:none;}
    .txt-rt{text-align:right;}/* text align right */
    .txt-lt{text-align:left;}/* text align left */
    .txt-center{text-align:center;}/* text align center */
    .float-rt{float:right;}/* float right */
    .float-lt{float:left;}/* float left */
    .clear{float:both;}/* clear float */
    .pos-relative{position:relative;}/* Position Relative */
    .pos-absolute{position:absolute;}/* Position Absolute */
    .vertical-base{	vertical-align:baseline;}/* vertical align baseline */
    .vertical-top{	vertical-align:top;}/* vertical align top */
    .underline{	padding-bottom:5px;	border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a underline */
    nav.vertical ul li{	display:block;}/* vertical menu */
    nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
    img{max-width:100%;}



      body
      {
        margin: 0;
        padding: 0;
        height: 100%;
        background-color: black;
        background-image:url(images/bg1.jpg);
        animation: animateBg 60s linear infinite;
        border-radius: 50%;
        box-shadow: inset 0 0 40px rgba(255, 255, 255, 0.5);
      }
      .topnav
      {
        overflow: hidden;
        background-image: linear-gradient(to bottom, #000000, #151515, #101010, #080808, #1a1a1a);
        width: 100%;
        position: absolute;
      }
      .navi a
      {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        align-items: stretch;
        text-decoration: none;
        font-size: 17px;
      }
      .logo
      {
        float: left;
        margin-top: 50px;
      }
      .info
      {
        float: left;
      }
      .data
      {
        height: 100px;
        background-color: #310A56;
        width: 100%;
        float: left;
        margin-top: 300px;
      }
      .info1
      {
        float: left;
        background: white;
        width: 100%
      }
      .info2
      {
        float: left;
        background: white;
        width: 100%
      }
      .navi a:hover
      {
        background-image: linear-gradient(to right bottom, #067580, #006679, #005771, #004866, #003a5a, #003154);
        color: white;
        border-top: 0px;
        border-left: 0.5;
        border-right: 0.5;
        border-bottom: 2px;
        border-radius: 3px;
        opacity: 0.9;
      }
      .navi a:active
      {
        background-color: #4CAF50;
        color: white;
        border-radius: 3px;
        opacity: 0.9;
      }
      .pulse
      {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 400px;
        height: 400px;
        background-image: url(EARTH1.png);
        background-size: cover;
        animation: animateEarth 10s linear infinite;
        border-radius: 50%;
        box-shadow: inset 0 0 40px rgba(255, 255, 255, 0.5);
      }
      .pulse span
      {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        display: block;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: tranparent;
        border: 2px solid #fff;
        box-sizing: border-box;
        animation: animate 10s linear infinite;
      }
      .pulse span:nth-child(1)
      {
        animation-delay: 0s;
      }
      .pulse span:nth-child(2)
      {
        animation-delay: -2s;
      }
      .pulse span:nth-child(3)
      {
        animation-delay: -4s;
      }
      @keyframes animate
      {
        0%
        {
          width: 400px;
          height: 400px;
          opacity: 1;
        }
        25%
        {
          opacity: 0.75;
        }
        50%
        {
          opacity: 0.5;
        }
        75%
        {
          opacity: 0.25;
        }
        100%
        {
          width: 600px;
          height: 600px;
          opacity: 0;
        }
      }
      @keyframes animateEarth
      {
        0%
        {
          background-position: 0 0;
        }
        100%
        {
          background-position: 719px 0;
        }
      }
      @keyframes animateBg
      {
        0%
        {
          background-position: 0 0;
        }
        100%
        {
          background-position: 1600px 0;
        }
      }
      .invest
      {
        margin-left: 100px;
        float: left;
        width: 200px;
        text-align: left;
        color: grey;
        font-size: 20px;
      }
      .explore
      {
        margin-left: 200px;
        float: left;
        width: 200px;
        text-align: left;
        color: grey;
        font-size: 20px;
      }
      .analyze
      {
        margin-left: 200px;
        float: left;
        width: 200px;
        text-align: left;
        color: grey;
        font-size: 20px;
      }
      .strip
      {
        float: left;
        background-image: url(images/blue_strip.png);
        height: 200px;
        width: 100%;
        position: relative;
        color: #fff;
      }
    </style>
  </head>
  <body>
    <nav class="topnav">
      <div class="navi">
        <a class="ank" href="home.php" ><img src="images/list_img.png" alt="" />Home</a>
        <a class="ank" href="about.php"><img src="images/list_img.png" alt="" />About</a>
        <a class="ank" href="contact.php"><img src="images/list_img.png" alt="" />Contact</a>
        <?php
        if( isset($_SESSION['sessionvar']) && !empty($_SESSION['sessionvar']) )
        {
          ?><a style="align-items: right; float:right;" href="profile.php"><img style="height:30px" src="images/USER_ICON.png" alt="logout" /></a>
          <?php
        }
        else
        {?>
            <a style="align-items: right; float:right;" href="RegLog.php"><img src="images/USER_ICON.png" alt="register/login" /></a>
            <?php
        } ?>
        </div>
    </nav>
    <div class="pulse">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="logo">
      <img src="images/logo.png" alt="">
    </div>
    <div class="info">
      <h1 style="margin-left: -400px; font-size: 50px; margin-top: 400px; color: #fff;">Connecting the world</h1>
      <h1 style="margin-left: -400px; font-size: 50px; color: #fff;">to Crypto.</h1>
      <h1 style="margin-left: -400px; font-size: 30px; margin-top: 30px; color: #fff;">The easy way to send, receive, store, and trade</h1>
      <h1 style="margin-left: -400px; font-size: 30px; color: #fff;">digital currencies</h1>
    </div>
    <div class="clear"></div>
    <div class="data">
      <center><h1 style="font-size: 70px; margin-top: 10px; color: #fff;">Blockchain Help</h1></center>
    </div>
    <div class="info1">
      <div class="infor" style="float:left;">
        <h1 style="margin-left: 50px; font-size: 50px; margin-top: 200px; color: #000;">Your Passport to the</h1>
        <h1 style="margin-left: 50px; font-size: 50px; color: #000;">Future of Finance</h1>
        <h1 style="margin-left: 50px; font-size: 30px; margin-top: 30px; color: #000;">The first and most trusted</h1>
        <h1 style="margin-left: 50px; font-size: 30px; color: #000;">global cryptocurrency </h1>
        <h1 style="margin-left: 50px; font-size: 30px; color: #000;">company</h1>
      </div>
      <img src="images/info1.png" style="float:right; height:400px; margin-right: 100px; margin-top: 150px;" alt="home-map"/>
    </div>
    <div class="info2">
      <div class="invest">
        <h1 style=" font-size: 20px; margin-top: 200px; color: #000;">Invest</h1>
        <p>Exchange and transact bitcoin, ethereum, bitcoin cash, and stellar lumens using the world's most trusted and secure cryptocurrency wallet.</p>
      </div>
      <div class="explore">
        <h1 style=" font-size: 20px; margin-top: 200px; color: #000;">Explore</h1>
        <p>Use the most popular block explorer to search and verify transactions on the Bitcoin, Ethereum, and Bitcoin Cash blockchains.</p>
      </div>
      <div class="analyze">
        <h1 style=" font-size: 20px; margin-top: 200px; color: #000;">Analyze</h1>
        <p>Stay on top of bitcoin and other top cryptocurrency prices, news, and market information.</p>
      </div>
    </div>
    <div class="strip">
      <center><h1 style="font-size: 70px; font-family: cursive;">Enter the Future of Finance</h1></center>
      <center><h2 style="font-size: 40px; font-family: cursive;">Empowering individuals, investors, and developers to join the revolution</h2></center>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>

    <section id="footer">
		<div class="container" style="float: left;">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="home.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="about.php"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="contact.php"><i class="fa fa-angle-double-right"></i>Contact</a></li>
						<li><a href="video.php"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
  <div class="row" style="float:right; margin-top:200px;">
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
      <ul class="list-unstyled list-inline social text-center">
        <li class="list-inline-item"><a href="https://www.facebook.com/blockchain/"><i class="fa fa-facebook"></i></a></li>
        <li class="list-inline-item"><a href="https://twitter.com/blockchain"><i class="fa fa-twitter"></i></a></li>
        <li class="list-inline-item"><a href="https://www.instagram.com/blockchain/"><i class="fa fa-instagram"></i></a></li>
        <li class="list-inline-item"><a href="https://plus.google.com/110104873920168535211"><i class="fa fa-google-plus"></i></a></li>
    </div>
    </hr>
  </div>
  </body>
</html>
