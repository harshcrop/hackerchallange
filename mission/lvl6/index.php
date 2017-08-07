<?php 	session_start();
	$level="Level 6";
	$level_id=6;
	if(!isset($_SESSION['level']))
	{	header("Location: ../../");
	}
	else if($_SESSION['level']!=$level_id)
	{	$loc="Location: ../lvl".$_SESSION['level']."/";
		header($loc);
	}
?>
<?php	
	$pwd="n38f298hsjf";
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
	include '../../header.php';
?>
			<div id="stage_left">
				<center><br/><b><?php echo $level; ?></b></center><br/><hr>
				<p>This is a advance level, you have to find the password in this image.</p><br/>
				<center><img src="../../images/pwd.bmp" style="width:400px; height:400px;" /><br/><br/>
						<form action="" method="post" autocomplete="off">
							Password: <input type="password" name="pwd"><br/><br/>
							<input type="submit" value="Check Password">
						</form>
				</center>
				<p>Hint: Image Processing, Steganography</p>
			</div>
<?php 	$footer=1;
	include '../../footer.php'; 
?>
