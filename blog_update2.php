<?php

include 'connect.php';
if(isset($_REQUEST['update']))
{
  $topic=$_REQUEST['topic'];
  $author=$_REQUEST['author'];
  $content=$_REQUEST['content'];
  $article_type=$_REQUEST['article_type'];
  $dat=date("F j y");
  $sql = "INSERT INTO image_address(topic, author, content, category, dates)
  VALUES ('$topic','$author','$content','$article_type','$dat')";
  if (mysqli_query($connect, $sql))
  {
    echo "new record created successfully";
  }
  else
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
  }
  if(is_uploaded_file($_FILES['image']['tmp_name']))
  {
    $n=$_FILES['image']['name'];
    $imagename=$_FILES['image']['tmp_name'];
    $targetfile='F:\xampp\htdocs\clinic\Blog\New1'.$n;
    if(move_uploaded_file($imagename,$targetfile))
    {
      $m='Blog\New1'.$n;
      $sql = "INSERT INTO image_address(image_add)
			VALUES ('$m')";
      if (mysqli_query($connect, $sql))
      {
        echo "new record created successfully";
      }
      else
      {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
      }
    }
  }
}
 ?>
