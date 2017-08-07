<?php 	session_start();
	$level="Level 8";
	$level_id=8;
	if(!isset($_SESSION['level']))
	{	header("Location: ../../");
	}
    else if($_SESSION['level']==-1)
	{	header( 'Location: ../complete/' );
        exit();
	}
	else if($_SESSION['level']!=$level_id)
	{	$loc="Location: ../lvl".$_SESSION['level']."/";
		header($loc);
	}
?>
<?php	
	if('POST' == $_SERVER['REQUEST_METHOD'])
	{	if(isset($_POST['pwd']))
		{	$len=strlen($_POST['pwd']);
			if($len>200)
			{	$_SESSION['level']=-1;
				header( 'Location: ../complete/' );
			}
		}
	}
?>
<?php 	$title=$level;
	$prefix="../../";
	include '../../header.php';
?>
			<div id="stage_left">
				<center><br/><b><?php echo $level; ?></b></center><br/><hr>
				<p>You have to give input to a C program which gives you the length of the string. How would you crash it?
<br/>here is the function: </p>
<pre>void blah(char *str)
{	char lol[200];
	strcpy(lol,str);
}
</pre>

				<center>
						<form action="" method="post" autocomplete="off">
							Input: <input type="text" name="pwd" maxlength="255"><br/><br/>
							<input type="submit" value="Check">
						</form>
				</center>
			</div>
<?php 	$footer=1;
	include '../../footer.php'; 
?>
