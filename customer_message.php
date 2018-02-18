<?php
session_start();
if(isset($_REQUEST["send"]))
{
		$office=$_REQUEST["offices"];
		$name=$_REQUEST["fname"];
    $email=$_REQUEST["email"];
    $message=$_REQUEST["message"];
    include 'connect.php';
    $dat=date("j F y");
    $sql = "INSERT INTO customer_review(dates, name, email, message, office)
    VALUES ('$dat','$name','$email','$message','$office')";
    if (mysqli_query($connect, $sql))
    {
      $_SESSION["update_flag"]="1";
			echo $_SESSION["update_flag"];
      header("Location:contact.php");
    }
    else
    {
			$_SESSION["update_flag"]="2";
			echo $_SESSION["update_flag"];
      header("Location:contact.php");
    }
	}
?>
