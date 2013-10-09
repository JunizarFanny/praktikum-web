<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>data seleksi</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Hobby
	<select name="hobby">
		<option value="Membaca"
		<?php
			if($_POST['hobby'] == 'Membaca')
			{
				echo 'selected="seleted"';
			}
		?>
		/>Membaca
		
		<option value="Menggambar"
		<?php
			if($_POST['hobby'] == 'Menggambar')
			{
				echo 'selected="seleted"';
			}
		?>
		/>Menggambar
		
		<option value="Menyanyi"
		<?php
			if($_POST['hobby'] == 'Menyanyi')
			{
				echo 'selected="seleted"';
			}
		?>
		/>Menyanyi
 
		<option value="Olahraga"
		<?php
			if($_POST['hobby'] == 'Olahraga')
			{
				echo 'selected="seleted"';
			}
		?>
		/>Olahraga
		
		<option value="Touring"
		<?php
			if($_POST['hobby'] == 'Touring')
			{
				echo 'selected="seleted"';
			}
		?>
		/>Touring
	 </select> <br>
	 
	 <input type="submit" value="OK" >
</form>

<?php
	if(isset($_POST['hobby']))
	{
		echo $_POST['hobby'];
	}
?>

</body>
</html>