<?php if(!isset($title) || !isset($prefix))
		die("Go Away!!");
?>
<!doctype HTML >
<html>
<head>
	<title><?php echo $title; ?></title>
	<link href="<?php echo $prefix; ?>main.css" type="text/css" rel="stylesheet">
</head>
<?php 
	function Password()
	{	$chars='A0Ba1Cb2Dc3Ed4Fe5Gf6Hg7Ih8Ji9KjLkMlNmOnPoQpRqSrTsUtVuWvXwYxZyz';
		$pass='';
		$len=rand(8,17);
		for($i=0;$i<$len;$i++)
		{	$pass.=$chars[rand(0,strlen($chars)-1)];
		}
		return $pass;
	}
?>
<?php
	echo "<Body";
	if(isset($onload))
		echo " onload='".$onload."'";
	if(isset($alink))
		echo " link='".$alink."'";
	if(isset($bg))
		echo " bg='".$prefix.$bg."'";
	echo ">";  
?>
	<div id="body_container">
		<center><div id="logo">
			<img id= "welcomeimg" src="<?php echo $prefix; ?>images/logo.png"/>
		</div></center>
		<center>