<?php
if(isset($_REQUEST["update"]))
{
	$quote=$_REQUEST["quote"];
	$writer=$_REQUEST["writer"];
	$myfile = fopen("quote.txt", "w") or die("Unable to open file!");
	$txt = $quote;
	fwrite($myfile, $txt);
	fclose($myfile);
	$myfile=fopen("writer.txt","w") or die("unable to open the file");
	fwrite($myfile,$writer);
	fclose($myfile);
}
?>
