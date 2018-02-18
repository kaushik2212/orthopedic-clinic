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
		table, th, td {
		    border: 1px solid black;
		    border-collapse: collapse;
		}
		th, td {
		    padding: 5px;
		    text-align: left;
				font-size: 18px;
				font-weight: bold;
				cursor: text;
		}
		td:hover{
			background-color: #000;
			color: #fff;
		}
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
		.footer span a{
			clear: both;
			display: inline;;
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
			<span> <a href="signin_home.php">&lt;&nbsp;&nbsp;Back to Admin Home</a>  <a href="view_appointment.php">&lt;&nbsp;&nbsp;Appointments</a> </span>
			<h2>Physiotherapy Appointments: </h2>
			<table style="width:100%">
			  <tr>
			    <th>Sl No.</th>
			    <th>Patient Name</th>
					<th>Mobile Number</th>
					<th>Date</th>
			  </tr>
					<?php
						include 'connect.php';
						$sql="SELECT sl,full_name,dates,mob_number,appointment_type FROM appointment";
						$result = mysqli_query($connect, $sql);
						$i=1;
						if (mysqli_num_rows($result) > 0)
						{
							while($row = mysqli_fetch_assoc($result))
							{
								$app=$row["appointment_type"];
								if(strcmp($app,"Physiotherapy_Consultation")==0)
								{
									echo "<tr>";
									echo "<td>";
									echo $i++;
									echo "</td>";
									echo "<td>";
									echo $row["full_name"];
									echo "</td>";
									echo "<td>";
									echo $row["mob_number"];
									echo "</td>";
									echo "<td>";
									echo $row["dates"];
									echo "</td>";
									echo "</tr>";
								}
							}
						}
					 ?>
			</table>
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
