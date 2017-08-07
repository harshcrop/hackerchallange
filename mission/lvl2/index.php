<?php 	session_start();
	$level="Level 2";
	$level_id=2;
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
<?php
	if(!isset($_SESSION['once']))
	{	$_SESSION['pwd']=password();
		$_SESSION['once']=1;
		$pwd=$_SESSION['pwd'];
	}
	else
		$pwd=$_SESSION['pwd'];
	if('POST' == $_SERVER['REQUEST_METHOD'])
	{	
		if(isset($_POST['pwd']) && strcmp($_POST['pwd'],$pwd)==0)
		{	$next=$level_id+1;
			unset($_SESSION['pwd']);
			unset($_SESSION['once']);
			$_SESSION['level']=$next;
			header( 'Location: ../lvl'.$next.'/' );	
		}
	}
?>
		<div id="stage_left">
			<center><br/><b><?php echo $level; ?></b></center><br/><hr>
			<p>So you know little HTML... show more of your skills in HTML. Password is somewhere on the page. Enter it and continue.</p><br/>
			<center><form action="" method="post">
				Password: <input type="password" name="pwd"><br/><br/>
				<input type="submit" value="Check Password">
			</form></center>
		</div>
<?php
	echo "<div id='footer'>";
	for($i=0;$i<strlen($pwd);$i++)
		echo "<span style='color:#000000;text-shadow:0px 0px 0px #000000;text-decoration:none'>".$pwd[$i]."</span>";
	echo "</div>";
?>
<?php 	$footer=1;
	include '../../footer.php' ?>
<?php	for($i=0;$i<800;$i++)
		echo "\n"; 
?>
<!-- Nothing Here this time... Look somewhere else -->