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
	$onload="javascript:test();";
	include '../../header.php';
?>
	<script>
	function test()	
	{	alert("Try Again");
		window.location="./";
	}
	</script>
	<noscript>
		<meta http-equiv="refresh" content="0;url=./js.php" />
	</noscript>
<?php 	$footer=1;
	include '../../footer.php'; 
?>