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
	<title>APPOINTMENT | MAXKNEE</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
  <style>
    #body .footer div a{
      padding: 75px 10px 75px 10px;
      background-color: #797979;
      color: #fff;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
      text-decoration: none;
    }
	 	.footer span a{
			clear: both;
			display: block;
			font-size: 15px;
			margin: 0;
			padding: 10px 0 10px;
			color: #797979;
			text-decoration: none;
		}
		.footer span a:hover {
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
			<?php
					include 'upnav.php';
			 ?>
		</div>
	</div>
	<div id="body">
		<div class="footer">
			<span> <a href="signin_home.php">&lt;&nbsp;&nbsp;Back to Admin Home</a></span>
      <div><a href="orthopaedic_appointment_review.php">Orthopaedic Consultation</a></div>
      <div><a href="weight_reduction_review.php">Weight Reduction</a></div>
      <div><a href="physiotherapy_appointment_review.php">Physiotherapy Consultation</a></div>
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
