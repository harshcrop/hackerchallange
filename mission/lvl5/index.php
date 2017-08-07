<?php 	session_start();
	$level="Level 5";
	$level_id=5;
	if(!isset($_SESSION['level']))
	{	header("Location: ../../");	
	}
	else if($_SESSION['level']!=$level_id)
	{	$loc="Location: ../lvl".$_SESSION['level']."/";
		header($loc);
	}
?>
<?php	
	$pwd="#f0f0f0";
	if('POST' == $_SERVER['REQUEST_METHOD'])
	{	if(isset($_POST['pwd']) && strcmp($_POST['pwd'],$pwd)==0)
		{	$next=$level_id+1;
			$_SESSION['level']=$next;
			header( 'Location: ../lvl'.$next.'/' );	
		}
	}
?>
<?php 	$title=$level;
	$prefix="../../";
	$alink=$pwd;
	include '../../header.php';
?>
<script type="text/javascript" src="./validation.js"></script>
	<noscript>
		
	</noscript>

		<div id="stage_left">
			<center><br/><b><?php echo $level; ?></b></center><br/><hr>
			<p>Hint: Similar to Level 3 i.e. Javscript</p><br/>
			<center><form action="" method="post" name="myform">
				Password: <input type="password" name="pwd"><br/><br/>
				<input type="button" value="Check Password" onclick="javascript:a();">
			</form></center>
		</div>
<?php 	$footer=1;
	include '../../footer.php'; 
?>
