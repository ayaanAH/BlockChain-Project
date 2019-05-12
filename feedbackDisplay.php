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
    <title></title>

    <style type="text/css">
		body {
      background-image: url(images/DisplayFeedBack.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      height: 900px;
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 20px;
		}

		table td {
			transition: all .5s;
		}

		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th,
		.data-table td {
			border: 4px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #296073;
			color: #FFFFFF;
      font-weight:bolder;
      font-size: 25px;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #FCF7FF;
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
			background-color: transparent;
		}
		.data-table tbody tr:hover td {
			background-color: #dddddd;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th, {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
    .replyBTN
    {
      padding: 5px;
      color:#000;
      font-size:20px;
      cursor:pointer;
      border-radius: 10px;
      height: 40px;
      width: 100px;
      margin-left: 20px;
      margin-left:35px;
      background:#990000;
        border:1px solid #CCCCCC;
        text-shadow:0 1px 1px #FFFFFF;
        -moz-box-shadow:0 1px 3px rgba(0, 0, 0, 0.50);
        -webkit-box-shadow:0 1px 3px rgba(0, 0, 0, 0.50);
        box-shadow:0 1px 3px rgba(0, 0, 0, 0.50);
    }
    .replyBTN:hover
    {
      height: 45px;
      width: 105px;
      border:3px solid #CCCCCC;
      color: #fff;
      background: #990001;
    }
    textarea
    {
      padding:8px;
      margin:5px 0 20px 35px;
      border-radius:10px;
      display:block;
      width:300px;
      height:100px;
      background:none;
      border:3px solid #999;
      font-size: 20px;
      outline:none;
      color:#fff;
      font-family:cursive;
      resize:none;
      font-weight: bold;
    }
    .name
    {
      padding:8px;
      font-weight: bold;
      margin:5px 0 20px 35px;
      border-radius:10px;
      display:block;
      width:200px;
      height:40px;
      color: #fff;
      background:none;
      border:3px solid #999;
      font-family: cursive;
      font-size: 20px;
      outline:none;
      resize:none;
    }
    .knockout {
background: url(images/cosmic.jpg) -80px -80px;
color: red;
-webkit-text-fill-color: transparent;
-webkit-background-clip: text;
font-weight: bold;
font-size: 50px;
font-family: arial, helvetica;
width: 600px;
margin: 50px auto;
text-align: center;
}

	</style>

  </head>
  <body>
    <div class="knockout">
      <a href="#reply">USER FEEDBACK</a>
    </div>
	<table class="data-table">
		<caption class="title">...</caption>
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
    <tr><td>

      <form id="reply" action="reply.php" method="post">
      Name:<br>
      <input  style="padding:0px;margin: 0 0 0 0;font-size: 20px;height:30px;width:250px;float:left; border-radius:10px;" class="name" name="name" type="text" placeholder="UserName."><br><br>
    </td><td>
      Reply:<br>
      <textarea name="reply"placeholder="Reply to the user."></textarea>

    </td></tr>
    <tr>
      <td><input type="submit" class="replyBTN" value="Reply">
      </form></td>
      <td>
        <form id="reply" action="adminHome.php" method="post">
        <center><input style="item-align:center;" colspan="4" type="submit" class="replyBTN" value="Back"></center>
      </form>
      </td>
    </tr>
		</tbody>
		<tfoot>
			<tr>
				<center><th style="text-align:center;" colspan="4">Work on the flaws suggested by the users</th></center>
			</tr>
		</tfoot>
	</table>

  </body>
</html>
