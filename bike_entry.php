<?php
session_start();
if(isset($_REQUEST["submit"]))
{
		$modelname=$_REQUEST["modelname"];
    $vtype=$_REQUEST["vtype"];
		$price=$_REQUEST["prices"];
    include 'connect.php';
    if(is_uploaded_file($_FILES['image']['tmp_name']))
		{
			$n=$_FILES['image']['name'];
			if(move_uploaded_file($_FILES['image']['tmp_name'],'F:\xampp\htdocs\young\New1'.$n))
			{
				$m='Blog/New1'.$n;
			}
		}
    $sql = "INSERT INTO bikes(model_name, bike_type,price,img_add)
    VALUES ('$modelname','$vtype','$price','$m')";
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
