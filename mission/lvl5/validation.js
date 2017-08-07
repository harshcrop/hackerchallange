function a()
{	var x=document.body.link;
	var pwd=document.forms[0].pwd.value;
	if(x==pwd)
	{	
		document.forms[0].submit();
	}
}