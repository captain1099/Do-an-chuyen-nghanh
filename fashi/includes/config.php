<?php
	/*if(isset($_GET["show"])) 
	{
		$row = $_GET["show"];
	}
	else {$row = $_GET["show"];}

	if($row == "show_detail")
	{
		include ("show_detail.php");
	}*/



	if(isset($_GET["info"])) 
	{
		$row = $_GET["info"];
	}
	else {$row = $_GET["info"];}
	if($row == "show_info")
	{
		include ("show_info.php");
	}
	else if($row == "edit_info")
	{
		include ("edit_info.php");
	}

?>