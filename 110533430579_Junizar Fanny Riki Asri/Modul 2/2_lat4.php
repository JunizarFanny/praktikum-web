<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"html://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Data Seleksi</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Pekerjaan <br />
<select name="job">
	<option value="Mahasiswa">Mahasiswa
	<option value="ABRI">ABRI
	<option value="PNS">PNS
	<option value="Swasta">Swasta
</select> <br />

<input type="submit" value="Ok" /> 
</form>

<?php
	if (isset($_POST['job']))
	{
		echo $_POST['job'];
	}
?>

</body>
</html>
