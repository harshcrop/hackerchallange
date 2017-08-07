<?php 	session_start();
	$level="Level 1";
	$level_id=1;
	if(!isset($_SESSION['level']))
		$_SESSION['level']=1;
	else if($_SESSION['level']!=$level_id)
	{	$loc="Location: ../lvl".$_SESSION['level']."/";
		header($loc);
	}	
?>
<?php 	$title=$level;
	$prefix="../../";
	include '../../header.php';
?>
<?php
	if(!isset($_SESSION['once']))
	{	$_SESSION['pwd']=password();
		$_SESSION['once']=1;
		$pwd=$_SESSION['pwd'];
	}
	else
		$pwd=$_SESSION['pwd'];
	if('POST' == $_SERVER['REQUEST_METHOD'])
	{	if(isset($_POST['pwd']) && strcmp($_POST['pwd'],$pwd)==0)
		{	$next=$level_id+1;
			unset($_SESSION['pwd']);
			unset($_SESSION['once']);
			$_SESSION['level']=$next;
			header( 'Location: ../lvl'.$next.'/' ) ;
		}
	}
?>
		<div id="stage_left">
			<center><br/><b><?php echo $level; ?></b></center><br/><hr>
			<p>The warm up test, find the password. Don't go begging to someone else for the answer, thats one way to get you hated/made fun of. Enter the password and you can continue.</p><br/>
			<center><form action="" method="post">
				Password: <input type="password" name="pwd"><br/><br/>
				<input type="submit" value="Check Password">
			</form><p>If you have no idea what to do, you must learn HTML. Viewing source code of website is best way to learn HTML.</p></center>
		</div>
<?php 	$footer=1;
	include '../../footer.php' ?>
<?php	for($i=0;$i<800;$i++)
		echo "\n"; 
?>
<!-- the first few levels are extremely easy: password is <?php echo $pwd; ?> -->