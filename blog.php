<?php
	$page = $_SERVER['PHP_SELF'];
	$sec = "10";
?>
<!DOCTYPE HTML>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
	<title>BLOG | MAXKNEE</title>
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
				<span1 class="tagline1"><b>"maxknee"</b></span1>
				<span class="tagline">.......maximizing mobility</span>
				<span2 class="tagline2">Conatct : <span2>
				<span2 class="tagline3">0674-2350713  </span2>
				<span2 class="tagline4">876-368-5158  </span2>
				<span2 class="tagline4">876-368-5158  </span2>
			</div>
			<ul>
				<li>
					<a href="index.php">home</a>
				</li>
				<li>
					<a href="about.php">about</a>
				</li>
				<li>
					<a href="doctor.php">our doctor</a>
				</li>
				<li>
					<a href="services.php">services</a>
				</li>
				<li>
					<a href="appointment.php">book appointment</a>
				</li>
				<li>
					<a href="sos.php">sos emergency</a>
				</li>
				<li>
					<a href="contact.php">contact</a>
				</li>
				<li class="selected">
					<a href="blog.php">blog</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div id="blog">
				<ul>
						<?php
							include 'connect.php';
							$sql="SELECT topic,content,author,category,dates FROM image_address";
							$result = mysqli_query($connect, $sql);
							if (mysqli_num_rows($result) > 0)
							{
								while($row = mysqli_fetch_assoc($result))
								{
									$topic=$row['topic'];
									echo "<li>";
									echo "<div class='article'>";
									echo	"<h3>";
									echo $row["topic"];
									echo "</h3>";
									echo "<p>";
									echo $row["content"];
									echo "</p>";
									echo "<a href='blog_single.php?know=$topic' class='more'>readmore</a>";
									echo "</div>";
									echo "<div class='stats'>";
									$sql1="SELECT data,address FROM test";
									$result1 = mysqli_query($connect, $sql1);
									if (mysqli_num_rows($result1) > 0)
									{
										while($row1 = mysqli_fetch_assoc($result1))
										{
											if($topic==$row1['data'])
											{
												$image=$row1['address'];
												echo "<img src='$image' height='158px' width='185px' alt=''>";
											}
										}
									}
									echo "<span>posted : ";
									echo $row["dates"];
									echo "</span>";
									echo "<span>author : ";
									echo $row["author"];
									echo "</span>";
									echo "<span>category : ";
									echo $row["category"];
									echo "</span>";
									echo "</div>";
									echo "</li>";
								}
							}
						?>
				</ul>
			</div>
			<div id="sidebar">
				<div class="category">
					<h3>blog categories</h3>
					<ul>
						<li>
							<a href="#">health factors</a>
						</li>
						<li>
							<a href="#">preventive tips</a>
						</li>
						<li>
							<a href="#">medical education</a>
						</li>
						<li>
							<a href="#">families in general</a>
						</li>
						<li>
							<a href="#">babies and mommies</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<p>
				Copyright &copy; <a href="index.php">Maxknee</a>
			</p>
			<?php include 'nav_transfer.php'; ?>
			<div>
				<?php include 'stay_connected.php'; ?>
			</div>
		</div>
	</div>
</body>
</html>
