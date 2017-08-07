<?php 	session_start();
	$level="Level 4";
	$level_id=4;
	if(!isset($_SESSION['level']))
	{	header("Location: ../../");	
	}
	else if($_SESSION['level']!=$level_id)
	{	$loc="Location: ../lvl".$_SESSION['level']."/";
		header($loc);
	}
	else
	{	$_SESSION['level']=5;
		$loc="Location: ../lvl".$_SESSION['level']."/";
		header($loc);
	}
?>