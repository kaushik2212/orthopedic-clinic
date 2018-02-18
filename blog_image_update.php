<?php
session_start();
if(isset($_REQUEST["update"]))
{
    $topic1=$_SESSION['topic'];
    include 'connect.php';
  	if(is_uploaded_file($_FILES['image']['tmp_name']))
		{
			$n=$_FILES['image']['name'];
			if(move_uploaded_file($_FILES['image']['tmp_name'],'F:\xampp\htdocs\clinic\Blog\New1'.$n))
			{
				$m='Blog/New1'.$n;
        $sql="INSERT INTO test(address,data)
              VALUES('$m','$topic1')";
				if(mysqli_query($connect,$sql))
        {
          echo "File uploaded";
          session_destroy();
        }
        else
        {
          echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
			}
		}
	}
?>
