<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sign in | Maxknee</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<script>
	function validateform(){
		var a=document.forms["myform"]["username"].value;
		if(a==" "||a==null)
		{
			alert("Username should be filled");
			return false;
		}
		var b=document.forms["myform"]["password"].value;
		if(b==" "||b==null)
		{
			alert("Password should be filled");
			return false;
		}
	}
</script>
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
      <?php
					include 'upnav.php';
			 ?>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div id="section">
				<h2>Login</h2>
				<form action="signin_check.php" method="POST" name="myform" onsubmit="return validateform()">
					<script type="text/javascript">
						onload=function(){
						var e=document.getElementById("refreshed");
						if(e.value=="no")e.value="yes";
						else{e.value="no";location.reload();}
						}
					</script>
					<?php
							$warn="incorrect username or password";
							session_start();
							if(empty($_SESSION["check"]))
							{
								$_SESSION["check"]="";
							}
							if($_SESSION["check"]=="1")
							{
								echo "<p>";
								echo $warn;
								echo "</p>";
							}
							session_destroy();
					?>
				  <input type="text" name="username" placeholder="Username" autocomplete="off">
					<input type="password" name="password" placeholder="Password" autocomplete="off">
					<input type="submit" name="submit" id="send" value="sign in">
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
			<ul>
				<li>
					<a href="index.html">home</a>
				</li>
				<li>
					<a href="about.html">about</a>
				</li>
				<li>
					<a href="doctor.html">our doctor</a>
				</li>
				<li>
					<a href="services.html">services</a>
				</li>
				<li>
					<a href="appointment.html">appointment</a>
				</li>
				<li>
					<a href="sos.html">sos emergency</a>
				</li>
				<li>
					<a href="contact.html">contact</a>
				</li>
				<li>
					<a href="blog.html">blog</a>
				</li>
				<li>
					<a href="#">no of visitors : </a>
				</li>
			</ul>
			<div>
				<?php include 'stay_connected.php'; ?>
			</div>
		</div>
	</div>
</body>
</html>
