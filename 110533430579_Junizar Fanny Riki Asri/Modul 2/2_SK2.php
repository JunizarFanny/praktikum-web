<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Data Check</title> 
</head>

<body>

	<form action="<?php $_SERVER['PHP SELF'];?>" method="post">
	 Pilihan Hobi : 
	 <input type="checkbox" name="hobby[]" value="Membaca"
		<option value="Membaca"
		<?php
			if($_POST['hobby'] == 'Membaca')
			{
				echo 'selected="seleted"';
			}
		?>
		/>Membaca
	 
	 <input type="checkbox" name="hobby[]" value="Menggambar"
	 <option value="Menggambar"
		<?php
			if($_POST['hobby'] == 'Menggambar')
			{
				echo 'selected="seleted"';
			}
		?>
		/>Menggambar
	 
	 <input type="checkbox" name="hobby[]" value="Menyanyi"
	 <option value="Menyanyi"
		<?php
			if($_POST['hobby'] == 'Menyanyi')
			{
				echo 'selected="seleted"';
			}
		?>
		/>Menyanyi
		
	 <input type="submit" value="OK" >
</form>

<?php 
if (isset($_POST['hobby'])) 
{ 
	foreach ($_POST['hobby'] as $key => $val) 
	{ 
		echo $key . ' = ' .$val . '<br />'; 
	}	 
} 
?> 
 
</body> 
 
</html> 