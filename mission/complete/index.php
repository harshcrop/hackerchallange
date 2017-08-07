<?php 	session_start();
	$level="Completed";
	$level_id=-1;
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
				<p>Congratulations!! You Have Completed All Levels!!
			</div>
<?php 	$footer=1;
	include '../../footer.php'; 
?>