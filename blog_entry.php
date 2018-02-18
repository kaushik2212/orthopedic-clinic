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
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
				<span1 class="tagline1"><b>"maxknee"</b></span1>
				<span class="tagline">maximizing mobility....</span>
				<span2 class="tagline2">Contact : <span2>
				<span2 class="tagline3">0674-2350713  </span2>
				<span2 class="tagline4">876-368-5158  </span2>
				<span2 class="tagline4">876-368-5158  </span2>
			</div>
			<?php include 'upnav.php'; ?>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div id="section">
				<span> <a href="signin_home.php">&lt;&nbsp;&nbsp;Back to Admin Home</a> </span>
				<form action="blog_update.php" method="POST" name="myform" onsubmit="return validateform()">
					<script type="text/javascript">
						onload=function(){
						var e=document.getElementById("refreshed");
						if(e.value=="no")e.value="yes";
						else{e.value="no";location.reload();}
						}
					</script>
          <p><b>Update your Blog : </b></p>
				  <input type="text" name="topic" enctype="multipart/form-data" required="true" placeholder="Topic" autocomplete="off">
					<input type="text" name="author" placeholder="name of the author" required="true" autocomplete="off">
          <select name="article_type" required="true">
						<option>Choose article type</option>
						<option value="Health Factor">Health Factor</option>
            <option value="Medical Eduction">Medical Eduction</option>
            <option value="Preventive Tips">Preventive Tips</option>
            <option value="Others">Others</option>
					</select>
          <textarea name="content" cols="15" rows="5" placeholder="Put your content" required="true" autocomplete="off"></textarea>
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
				Copyright &copy; <a href="index.php">Maxknee</a>
			</p>
			<?php include 'signout_downnav.php'; ?>
			<div>
				<?php include 'stay_connected.php'; ?>
			</div>
		</div>
	</div>
</body>
</html>
