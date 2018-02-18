<?php
	$page = $_SERVER['PHP_SELF'];
	$sec = "60";
?>
<!DOCTYPE HTML>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
	<title>HOME - MAXKNEE</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/style_mobile.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>
<body>
	<script>
	   $(document).ready(function(){
		   $(window).bind('scroll', function() {
				 if ($(window).scrollTop() > 80) {
					 $('header').addClass('fixed');
				 }
				 else {
					 $('header').removeClass('fixed');
				 }
			});
		});
	</script>
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
			<ul>
				<li class="selected">
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
					<a href="sos.php">SOS emergency</a>
				</li>
				<li>
					<a href="contact.php">contact</a>
				</li>
				<li>
					<a href="blog.php">blog</a>
				</li>
			</ul>
		</div>
	</div>
	<div>
		<!-- Start WOWSlider.com BODY section -->
			<div id="wowslider-container1">
			<div class="ws_images">
				<ul>
					<li><img src="data1/images/biking.jpg" alt="biking" title="biking" id="wows1_0"/></li>
					<li><img src="data1/images/cycling.jpg" alt="slider" title="cycling" id="wows1_1"/></a></li>
					<li><img src="data1/images/1.jpg" alt="1" title="1" id="wows1_2"/></li>
					<li><img src="data1/images/6.jpg" alt="1" title="Physiotherapy" id="wows1_2"/></li>
				</ul></div>
				<div class="ws_bullets">
					<div>
						<a href="#" title="biking"><span><img src="data1/tooltips/biking.jpg" alt="biking"/>1</span></a>
						<a href="#" title="cycling"><span><img src="data1/tooltips/cycling.jpg" alt="cycling"/>2</span></a>
						<a href="#" title="1"><span><img src="data1/tooltips/1.jpg" alt="1"/>3</span></a>
						<a href="#" title="physiotherapy"><span><img src="data1/tooltips/6.jpg" width="85px" height="48px" alt="6"/></span></a>
					</div>
				</div>
				<div class="ws_script" style="position:absolute;left:-99%">
					<a href="#">wowslideshow</a>
				</div>
				<div class="ws_shadow"></div>
			</div>
			<script type="text/javascript" src="engine1/wowslider.js"></script>
			<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
	<div id="body">
		<div class="body">
			<div class="section">
				<div class="article">
					<h2>What's new about maxknee?</h2>
					<?php
						$myfile=fopen("image_address.txt",'r') or die("unable to open the file");
						$txt=fread($myfile,filesize("image_address.txt"));
					?>
					<img src="<?php echo $txt ?>" height="150px" width="150px" alt="">
					<?php
						fclose($myfile);
						$myfile=fopen("about_maxknee.txt","r") or die("unable to open the file");
						$txt=fread($myfile,filesize("about_maxknee.txt"));
						echo "<p>";
						echo $txt;
						echo "</p>";
						fclose($myfile);
					?>
				</div>
				<div class="aside">
					<b>Quote of the day</b>
					<?php
						$myfile=fopen("quote.txt","r") or die("unable to open the file");
						$txt=fread($myfile,filesize("quote.txt"));
						echo "<p>";
						echo $txt;
						echo "</p>";
						fclose($myfile);
						$myfile=fopen("writer.txt","r") or die("unable to open he file!");
						$txt=fread($myfile,filesize("writer.txt"));
						echo "<a>";
						echo $txt;
						echo "</a>";
						fclose($myfile);
					?>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<p>
				Copyright &copy; <a href="index.html">Maxknee</a>
			</p>
			<?php include 'nav_transfer.php'; ?>
			<div>
				<?php include 'stay_connected.php'; ?>
			</div>
		</div>
	</div>
</body>
</html>
