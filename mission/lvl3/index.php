<?php 	session_start();
	$level="Level 3";
	$level_id=3;
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
	<script>
		function a()
		{	var x=document.forms[0]['pwd'].value;
			if(x=="<?php echo $pwd; ?>")
			{	document.forms[0].submit();
			}
			else
			{	alert('try again');
			}
		}
	</script>
		<div id="stage_left">
			<center><br/><b><?php echo $level; ?></b></center><br/><hr>
			<p>Don't be so confident that was just a warm up test, find the password again, but this time it's little difficult.</p><br/>
			<center><form action="" method="post" name="myform">
				Password: <input type="password" name="pwd"><br/><br/>
				<input type="button" value="Check Password" onclick="javascript:a();">
			</form></center>
		</div>
<?php 	$footer=1;
	include '../../footer.php'; 
?>
