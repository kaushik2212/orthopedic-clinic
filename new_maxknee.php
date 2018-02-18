<?php
	session_start();
	if(empty($_SESSION["mailid"]))
	{
		header("location:sign_in.php");
		exit(0);
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact | Maxknee</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
	<style>
		#section span a{
			clear: both;
			display: block;
			font-size: 13px;
			margin: 0;
			padding: 10px 0 10px;
			color: #797979;
			text-decoration: none;
		}
		#section span a:hover {
			color: #333;
		}
	</style>
</head>
<body>
	<div id="header">
		<div>
			<div>
				<a href="index.php" class="logo"><img src="images/logo.png" width="90px" height="80px"  alt="clinic logo"></a>
				<span1 class="tagline1"><b>maxknee</b></span1>
				<span class="tagline">maximizing mobility....</span>
				<span2 class="tagline2">Conatct : <span2>
				<span2 class="tagline3">0674-2350713  </span2>
				<span2 class="tagline4">876-368-5158  </span2>
				<span2 class="tagline5">965-881-2345 </span2>
			</div>
			<?php include 'upnav.php'; ?>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div id="section">
				<span> <a href="signin_home.php">&lt;&nbsp;&nbsp;Back to Admin Home</a> </span>
				<form action="about_maxknee_update.php" method="POST" name="myform" enctype="multipart/form-data" onsubmit="return validateform()">
					<script type="text/javascript">
						onload=function(){
						var e=document.getElementById("refreshed");
						if(e.value=="no")e.value="yes";
						else{e.value="no";location.reload();}
						}
					</script>
          <p><b>Whats new about maxknee? : </b></p>
				  <textarea rows="4" cols="20" name="new_about" autocomplete="off"></textarea>
					<input type="file" name="image" autocomplete="off">
					<input type="submit" name="update" id="send" value="update">
				</form>
			</div>
			<div id="sidebar">
				<div class="contact">
					<h2>Note :</h2>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<p>
				Copyright &copy; <a href="index.html">Maxknee</a>
			</p>
			<?php include 'signout_downnav.php'; ?>
			<div>
				<?php include 'stay_connected.php'; ?>
			</div>
		</div>
	</div>
</body>
</html>
