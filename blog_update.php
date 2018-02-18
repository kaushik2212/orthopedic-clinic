<?php
session_start();
if(isset($_REQUEST['update']))
{
  $topic=$_REQUEST['topic'];
  $author=$_REQUEST['author'];
  $content=$_REQUEST['content'];
  $article_type=$_REQUEST['article_type'];
  include 'connect.php';
  $dat=date("j F y");
  $sql = "INSERT INTO image_address(topic, author, content, category, dates)
  VALUES ('$topic','$author','$content','$article_type','$dat')";
  if (mysqli_query($connect, $sql))
  {
    $_SESSION['topic']=$topic;
    header("Location:blog_image_entry.php");
  }
  else
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
  }
}
 ?>
