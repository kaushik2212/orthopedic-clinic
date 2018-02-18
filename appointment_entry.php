<?php
session_start();
if(isset($_REQUEST["submit"]))
{
		$fullname=$_REQUEST["fullname"];
    $gender=$_REQUEST["gender"];
		$number=$_REQUEST["number"];
    $app_type=$_REQUEST["appointment_type"];
    $address=$_REQUEST["address"];
    $state=$_REQUEST["state"];
    $city=$_REQUEST["city"];
    $subject=$_REQUEST["subject"];
    include 'connect.php';
    $dat=date("j F y");
    $sql = "INSERT INTO appointment(dates, full_name, gender, mob_number, appointment_type, subject, address, city, state)
    VALUES ('$dat','$fullname','$gender','$number','$app_type','$subject','$address','$city','$state')";
    if (mysqli_query($connect, $sql))
    {
      $_SESSION["app_update_flag"]="1";
			echo $_SESSION["app_update_flag"];
      header("Location:appointment.php");
    }
    else
    {
			$_SESSION["update_flag"]="2";
			echo $_SESSION["update_flag"];
      header("Location:appointment_form.php");
    }
	}
?>
