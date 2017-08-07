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
?>
<?php 	$title=$level;
	$prefix="../../";
	include '../../header.php';
?>
<div id="stage_left">
			<center><br/><b><?php echo $level; ?></b></center><br/><hr>
			<p>Click <a href="./4.php">Here to proceed</a>.<br/>Hint: You have to bypass javascript to proceed.</p><br/>
		</div>
<?php 	$footer=1;
	include '../../footer.php'; 
?>
