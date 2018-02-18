<?php
  session_start();
  if(empty($_SESSION["mailid"]))
  {
    include "downnav.php";
  }
  else {
    include "signout_downnav.php";
  }
?>
