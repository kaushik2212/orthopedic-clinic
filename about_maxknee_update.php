<?php
if(isset($_REQUEST["update"]))
{
		$about=$_REQUEST["new_about"];
		$myfile = fopen("about_maxknee.txt", "w") or die("Unable to open file!");
		fwrite($myfile, $about);
		fclose($myfile);
		if(is_uploaded_file($_FILES['image']['tmp_name']))
		{
			$n=$_FILES['image']['name'];
			if(move_uploaded_file($_FILES['image']['tmp_name'],'F:\xampp\htdocs\clinic\New\New1'.$n))
			{
				$m='New/New1'.$n;
				$myfile = fopen("image_address.txt", "w") or die("Unable to open file!");
				fwrite($myfile,$m );
				fclose($myfile);
				echo "File uploaded";
			}
		}
	}
?>
