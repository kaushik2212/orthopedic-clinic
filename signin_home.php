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
	<title>ADMIN HOME | MAXKNEE</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<body>
	<div id="header">
		<div>
			<div>
				<a href="index.php" class="logo"><img src="images/logo.png" width="90px" height="80px"  alt="clinic logo"></a>
				<span1 class="tagline1"><b>maxknee</b></span1>
				<span class="tagline">maximizing mobility....</span>
				<span2 class="tagline2">Contact : <span2>
				<span2 class="tagline3">0674-2350713  </span2>
				<span2 class="tagline4">876-368-5158  </span2>
				<span2 class="tagline5">965-881-2345 </span2>
			</div>
			<?php
					include 'upnav.php';
			 ?>
		</div>
	</div>
	<style>
		#body .footer a{
			text-decoration: none;
		}
	</style>
	<div id="body">
		<div class="footer">
			<a href="#"><h2>admin home :</h2></a>
			<div>
				<a href="view_appointment.php"><img src="images/a.png" height="177px" width="298px" alt=""></a>
				<h3>Appointments</h3>
				<p>
					put some content.
				</p>
			</div>
			<div>
				<a href="#"><img src="images/c.png" height="177px" width="298px" alt=""></a>
				<h3>Customer Reviews</h3>
				<p>
					put some content.
				</p>
			</div>
			<div>
				<a href="quote.php"><img src="images/q.png" height="177px" width="298px" alt=""></a>
				<h3>Change the quote of the day</h3>
				<p>
					put some content.
				</p>
			</div>
			<div>
				<a href="new_maxknee.php"><img src="images/n.png" height="177px" width="298px" alt=""></a>
				<h3>What's new about maxknee?</h3>
				<p>
					put some content.
				</p>
			</div>
			<div>
				<a href="blog_entry.php"><img src="images/b.png" height="177px" width="298px" alt=""></a>
				<h3>Update your Blog</h3>
				<p>
					put some content.
				</p>
			</div>
			<div>
				<a href="blog_entry.php"><img src="images/b.png" height="177px" width="298px" alt=""></a>
				<h3>Slide Show</h3>
				<p>
					put some content.
				</p>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<p>
				Copyright &copy; <a href="index.php">Maxknee</a>
			</p>
			<?php
				include 'signout_downnav.php';
			?>
			<div>
				<?php include 'stay_connected.php'; ?>
			</div>
		</div>
	</div>
</body>
</html>
