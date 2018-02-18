<?php
if(isset($_REQUEST["button2"]))
{
		$username=$_REQUEST[""];
		$password=$_REQUEST[""];
    $email=$_REQUEST[""];
    $phone=$_REQUEST[""];
		$address=$_REQUEST[""];
    $connect=mysqli_connect('localhost','root','','id941227_travel');
    if(!$connect)
    {
      die('not connected'.mysqli_error());
    }
    $dat=date("j F y");
    $sql = "INSERT INTO user(username, password, email, phone_number, address)
    VALUES ('$username','$password','$email','$phone','$address')";
    if (mysqli_query($connect, $sql))
    {
			echo "new record created successfully";
	  }
	  else
	  {
	    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	  }
	}
?>
