<?php 	session_start();
	$level="Level 7";
	$level_id=7;
	if(!isset($_SESSION['level']))
	{	header("Location: ../../");
	}
	else if($_SESSION['level']!=$level_id)
	{	$loc="Location: ../lvl".$_SESSION['level']."/";
		header($loc);
	}
?>
<?php	
	$user="zadmin";
	$pwd="stebbins";
	if('POST' == $_SERVER['REQUEST_METHOD'])
	{	if(isset($_POST['pwd']) && isset($_POST['user']) && strcmp($_POST['user'],$user)==0 && strcmp($_POST['pwd'],$pwd)==0)
		{	$next=$level_id+1;
			$_SESSION['level']=$next;
			header( 'Location: ../lvl'.$next.'/' );
		}
	}
?>
<?php 	$title=$level;
	$prefix="../../";
	$bg="images/bg.png";
	include '../../header.php';
?>
			<div id="stage_left">
				<center><br/><b><?php echo $level; ?></b></center><br/><hr>
				<center>
						<form action="" method="post" autocomplete="off">
							Username: <input type="text" name="user"><br/>
							Password: <input type="password" name="pwd"><br/><br/>
							<input type="submit" value="Check">
						</form>
				</center>
			</div>
<?php 	$footer=1;
	include '../../footer.php'; 
?>
