<form action="" method="get">
<table>
	<tr>
		<td>Nama</td>
		<td><input type="Text" name="name" value="<?php echo isset($_GET['name'])?>"></td>
	</tr>
	<tr>
		<td><input type="submit" name="Ok" value="ok"></td>
	</tr>
</table>
</form>
<?php
	if(isset($_GET['name']))
	{
		echo $_GET['name'];
	}
?>