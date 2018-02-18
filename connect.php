<?php
$servername="localhost";
$username="root";
$password="";
$database="maxknee";
$connect=mysqli_connect($servername,$username,$password,$database);
if(!$connect)
{
  die('not connected'.mysqli_error());
}
?>
