<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"html://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Prefill Data Radio Button</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Jenis Kelamin <br />
<input type="radio" name="sex" value="Pria" checked
<?php
	if($_POST['sex'] == 'Pria')
	{
		echo 'checked="checked"';
	}
?>/>Pria <br />

<input type="radio" name="sex" value="Wanita"
<?php
	if($_POST['sex'] == 'Wanita')
	{
		echo 'checked="checked"';
	}
?>/>Wanita <br />

<input type="submit" value="Ok" /> 
</form>

<?php
	if (isset($_POST['sex']))
	{
		echo $_POST['sex'];
	}
?>

</body>
</html>
