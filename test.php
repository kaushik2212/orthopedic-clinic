<?php
if(isset($_REQUEST["submit"]))
{
    $warehouse=$_REQUEST["warehouse"];
    $starttime=$_REQUEST["start_time"];
    $startdate=$_REQUEST["start_date"];
    $endtime=$_REQUEST["end_time"];
    $enddate=$_REQUEST["end_date"];
    if($starttime==$endtime)
    {
      echo "Match1";
    }
    elseif ($starttime>=$endtime) {
      echo "Match2";
    }
    elseif ($endtime>=$starttime) {
      echo "Match3";
    }
    }
 ?>
