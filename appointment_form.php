<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact | Maxknee</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<style>
label{
  color: #000;
  margin-left: 2px;
  font-weight: bold;
}
input[type=text], input[type=date], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

input[type=submit] {
  background-color: #144879;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  cursor: pointer;
  background-position: 0 -29px;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  width:960px;
  margin-left: auto;
  margin-right: auto;
  overflow: hidden;
  padding: 20px;
}
</style>
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
				<li class="selected">
					<a href="appointment.php">appointment</a>
				</li>
				<li>
					<a href="sos.php">sos emergency</a>
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
	<div id="body">
      <div class="container">
        <form action="appointment_entry.php" method="POST" enctype="multipart/form-data" name="myform" onsubmit="return validateform()">
          <label for="fname">Full Name</label>
          <input type="text" id="fname" name="fullname" required="true" placeholder="Your name.." autocomplete="off">
          <label for="country">Gender</label>
          <select id="country" name="gender" required="true" autocomplete="off">
            <option>Choose your response</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
          <label for="mobile_number">Mobile Number</label>
          <input type="text" id="number" name="number" required="true" placeholder="Your number.." autocomplete="off">
          <label for="country">Appointment Type</label>
          <select id="country" name="appointment_type" autocomplete="off">
            <option>Choose your response</option>
            <option value="Orthopaedic_Consultation">Orthopaedic Consultation</option>
            <option value="Weight_Reduction">Weight Reduction Consultation</option>
            <option value="Physiotherapy_Consultation">Physiotherapy Consultataion</option>
          </select>
		      <label class="control-label" for="date">Date</label>
	        <input type=text id="datepicker" name="date" required="true" placeholder="MM/DD/YYYY" type="text"/>
	        <label for="address">Address</label>
          <input type="text" id="address" name="address" required="true" placeholder="Your Address" autocomplete="off">
          <label for="city">City</label>
          <input type="text" id="city" name="city" required="true" placeholder="Your City" autocomplete="off">
          <label for="state">State</label>
          <input type="text" id="state" name="state" required="true" placeholder="Your State" autocomplete="off">
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" required="true" placeholder="Write something.." style="height:200px" autocomplete="off"></textarea>
          <input type="submit" name="submit" value="Submit">
        </form>
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
