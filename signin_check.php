<?php
	session_start();
	if(isset($_REQUEST["submit"]))
{
	$user_name=$_REQUEST["username"];
	$pass=$_REQUEST["password"];
	if ($user_name=="kaushik" and $pass=="9040888404")
	{
		$_SESSION['mailid']=$user_name;
		header("location:signin_home.php");
	}
	else
{
		$_SESSION["check"]="1";
		header("Location:sign_in.php");
	}
}
?>
