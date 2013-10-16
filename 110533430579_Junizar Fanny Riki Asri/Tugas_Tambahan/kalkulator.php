<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>KALKULATOR</title>
</head>

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" name="bilangan1" value="<?php echo isset($_POST['bilangan1'])? $_POST['bilangan1']:'';?>"/>

<select name="operator">
	<option value="+"<?php
		if ($_POST['operator']== '+')
		{
			echo 'selected="selected"';
			$_POST['hasil']=$_POST['bilangan1'] + $_POST['bilangan2'];
		}
		?>>+
		
	<option value="-"<?php
		if ($_POST['operator']== '-')
		{
			echo 'selected="selected"';
			$_POST['hasil']=$_POST['bilangan1'] - $_POST['bilangan2'];
		}
		?>>-
		
	<option value="x"<?php
		if ($_POST['operator']== 'x')
		{
			echo 'selected="selected"';
			$_POST['hasil']=$_POST['bilangan1'] * $_POST['bilangan2'];
		}
		?>>x
		
	<option value="/"<?php
		if ($_POST['operator']== '/')
		{
			echo 'selected="selected"';
			$_POST['hasil']=$_POST['bilangan1'] / $_POST['bilangan2'];
		}
		?>>/
</select>

<input type="text" name="bilangan2" value="<?php echo isset($_POST['bilangan2'])? $_POST['bilangan2']:'';	?>"/>

<input type="submit" value="=" />

<input type="text" name="hasil" value="<?php echo $_POST['hasil'];?>"/>
	
</form>

</body>
</html>
