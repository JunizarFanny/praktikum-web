<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Metode GET</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
Nama
<input type="teks" name="nama" /> <br />

<input type="submit" value="Ok" /> 
</form>

<?php
	if (isset($_GET['nama']))
	{
		echo 'Hallo, ' . $_GET['nama'];
	}
?>

</body>
</html>
