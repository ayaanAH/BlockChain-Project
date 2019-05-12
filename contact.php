<?php

  session_start();
  require_once('DBconnect.php');
  $sql = "SELECT f_name,f_msg FROM feedback";
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
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <style>


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
.clear{clear:both;}/* clear float */
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
        font-family:Arial, Helvetica, sans-serif;
        background-image: url(images/bg.jpg);
        animation: animateBg 25s linear infinite;
        animation-direction: alternate;
      }
      .topnav
      {
        position: absolute;
        background-image: linear-gradient(to bottom, #000000, #151515, #101010, #080808, #1a1a1a);

      }
      @keyframes animateBg
      {
        0%
        {
          background-position: 0 0;
        }
        100%
        {
          background-position: 1920px 0;
        }
      }
      iframe
      {
        border-radius: 15px;
        margin-top: 50px;
        box-shadow: inset 0 0 40px rgba(255, 255, 255, 0.5);
        opacity: 0.9;
      }
      h1{
          font-family:cursive;
          font-size:70px;
          color:white;
      }
      h5{
          color:white;
      }
      .contact_address{
      	float:left;
        padding: 20px;
      }
      .contact_address h4{
        margin-top:50px;
         font-size:25px;
         color:#00BF79;
         text-decoration:underline;
         padding-top:5px;
      }
      .contact_address p{
      	font-size:16px;
      	color:#FFF;
      	line-height:1.8em;
      	padding:5px;
      }
      .address_data p a{
      	text-decoration:underline;
      	color:#CCC;
      }
      .map {
          float: right;
          padding: 20px 30px;
          width: 60%;
      }
      .map h4{
        margin-top: 10%;
      	font-size:20px;
          color:#00BF79;
          text-decoration:underline;
          padding:5px 0;
      }
      .feedback{
      	padding-bottom:30px;
      }
      .feed p{
      	font-size:16px;
      	color:#EEE;
      	line-height:1.8em;
      	padding:5px 35px;
      }
      form label{
      	display:block;
      	margin-left:35px;
      	font-size:14px;
      	color:#FFF;
      }
      .feed form{
      	padding-top:10px;
      	float:left;
      	width:400px;
      }
      .feed form input[type="text"]{
      	padding:8px;
      	margin:5px 0 20px 35px;
      	display:block;
      	width:300px;
        height: 20px;
        font-size: 14px;
      	border:1px solid #DDD;
        border-radius:10px;
      	background:none;
      	outline:none;
      	color:#DDD;
      	font-family:Arial, Helvetica, sans-serif;
      }
      .feed img
      {
        float: right;
        height: 500px;

      }
      .feed textarea{
      		padding:8px;
      		margin:5px 0 20px 35px;
          border-radius:10px;
      		display:block;
      		width:300px;
      		height:100px;
      		background:none;
      		border:1px solid #DDD;
      		outline:none;
      		color:#DDD;
      		resize:none;
      		font-family:Arial, Helvetica, sans-serif;
      		}
      .feed form input[type="submit"]{
      		padding: 10px;
      		color:#666666;
      		font-size:14px;
      		cursor:pointer;
          border-radius: 10px;
          height: 40px;
          width: 100px;
          margin-left: 20px;
      		margin-left:35px;
      		background:#FFF;
      	    border:1px solid #CCCCCC;
      	    text-shadow:0 1px 1px #FFFFFF;
      	    -moz-box-shadow:0 1px 3px rgba(0, 0, 0, 0.50);
      	    -webkit-box-shadow:0 1px 3px rgba(0, 0, 0, 0.50);
      	    box-shadow:0 1px 3px rgba(0, 0, 0, 0.50);
      }
      .feed form input[type="submit"]:hover{
      	   background-color: grey;
           color: #000;
      }
      .feed form input[type="submit"]:active{
      	  background-color:#FFF;
      }
      .contact_img{
      	float:right;
      	margin-right:35px;
      }
      .contact_img img{
      	border:1px solid #DDD;
      }
      .map iframe {
      	width:100%;
      }
      @media screen and (max-width: 1080px){
      .wrap{
      	width:90%;
      }
      .box3 {
          width: 33%;
      }
      .box2 {
          width: 30%;
      }
      .box1 {
          width: 30%;
      }
      .grid_data {
          width: 30%;
      }
      .pizza_details {
          width: 50%;
      }
      .services_img {
          width: 31%;
      }
      .services_img:nth-child(2) {
          margin: 0 3%;
      }
      .contact_img {
          width: 50%;
      }
      }
      .main_top{
      	padding:0 35px;
      }
      .main_top h2{
      	float:left,right;
      	font-size:25px;
      	color:white;
          padding-top:24px;
      }

      table {
  			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
  			font-size: 20px;
        width: 100%;
  		}

  		table td {
  			transition: all .5s;
  		}

  		/* Table */
  		.data-table {
  			border-collapse: collapse;
  			font-size: 20px;
  			min-width: 537px;
  		}

  		.data-table th,
  		.data-table td {
  			border: 4px solid #e1edff;
  			padding: 7px 17px;
  		}

  		/* Table Header */
  		.data-table thead th {
  			background-color: transparent;
  			color: #FFFFFF;
        font-weight:bolder;
        font-size: 30px;
  			border-color: #6ea1cc !important;
  			text-transform: uppercase;
  		}

  		/* Table Body */
  		.data-table tbody td {
  			color: #000;
        font-size: 25px;
        font-style: oblique;
        font-weight: bold;
        font-family:ariel-black;
  		}
  		.data-table tbody td:first-child,
  		.data-table tbody td:nth-child(4),
  		.data-table tbody td:last-child {
  			text-align: left;
  		}

  		.data-table tbody tr:nth-child(odd) td {
  			background-color: #BFFCF9;
        opacity: 0.8;
  		}
      .data-table tbody tr:nth-child(even) td {
  			background-color: #BFFCF9;
        opacity: 0.5;
  		}
  		.data-table tbody tr:hover td {
  			background-color: #FA969B;
        color: #BFFCF9;
  			border-color: #ffff0f;
  		}
      .data-table tbody td:empty
  		{
  			background-color: transparent;
  		}

    </style>
  </head>
  <body>
    <nav class="topnav">
      <div class="navi">
        <a href="home.php" ><img src="images/list_img.png" alt="" />Home</a>
        <a href="about.php"><img src="images/list_img.png" alt="" />About</a>
        <a href="contact.php"><img src="images/list_img.png" alt="" />Contact</a>
        <?php
        if( isset($_SESSION['sessionvar']) && !empty($_SESSION['sessionvar']) )
        {
          ?><a style="align-items: right; float:right;" href="profile.php"><img style="height:30px" src="images/USER_ICON.png" alt="" /></a>
          <?php
        }
        else
        {?>
            <a style="align-items: right; float:right;" href="RegLog.php"><img src="images/USER_ICON.png" alt="" /></a>
            <?php
        } ?>
        </div>
    </nav>

    <div class="main">
  <div class="contact_top">
    <div class="contact_address">
    <h4>Contact Address</h4>
      <p>NO-23, G-BLOCK, BEHIND BIG MARKET, 1 CROSS, G Block, </p>
      <p>Sahakar Nagar,Byatarayanapura, Bengaluru, Karnataka 560092</p>
      <p>INDIA</p>
      <div class="address_data">
      <p>Phone:(+91) 9900755904</p>
      <p>Fax: (+966) 506354807</p>
      <p>Website:<a href="#"> https://blockchainhelp.pro/.com</a></p>
     <p> Email:<a href="mailto:into@gmail.com">blockchain_help@blockchain.co.in</a></p>
       </div>
    </div>
    <div class="map">
    <h4>Find Address Here:</h4>
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d62191.47739415669!2d77.61964794142332!3d13.037751070286356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sblockchain+near+me!5e0!3m2!1sen!2sus!4v1552402388141" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><br/>
    <small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=pizza+near+me&amp;aq=&amp;sll=13.018734315169558,77.60838742404951&amp;sspn=0.11388,0.209255&amp;ie=UTF8&amp;hq=pizza+near+me&amp;hnear=&amp;radius=15000&amp;t=m&amp;ll=37.792473,-122.400849&amp;spn=0.071946,0.071946" style="color:#DDD;text-align:left;text-decoration:underline;font-size:12px">View Larger Map</a></small>
    </div>

   <div class="clear"></div>
  </div>
  <div class="feedback">
    <div class="feed">
      <div class="main_top">
      <h2>Get In Touch</h2>
      <div class="main_top_strip">
      </div>
      <div class="clear"></div>
      </div>
           <p>you can also provide your name, email and the message you are willing to convey us. We shall get back to you as soon as possible.</p>
           <img src="images/logo.png" alt="Blockchain Help">
           <form action="feedback.php" method="get">
             <label>NAME :</label>
             <input type="text" name="n1" id="n1" placeholder="Enter name">
             <label>E-MAIL :</label>
             <input type="text" name="e1" id="e1" placeholder="Enter E-mail">
             <label>MESSAGE :</label>
             <textarea style="font-family:cursive;font-size:20px;" name="m1" id="m1" placeholder="Give your sugessions/comments."></textarea>
             <input type="submit" value="Submit" onclick="alert('Thank you for your Feedback.')">
           </form>
           <div class="clear"></div>
      </div>
  </div>
  <table class="data-table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Comment</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			     echo '<tr>
					      <td>'.$row['f_name'].'</td>
					      <td>'.$row['f_msg'].'</td>
                </tr>';
		}?>
		</tbody>
  </table>
</div>
  </body>
</html>
