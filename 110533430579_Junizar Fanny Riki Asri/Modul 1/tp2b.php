<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Hasil Tabel</title>
</head>
<body>
<div align="center">
<?php
$columns = 1;
$cells = 1;
?>

<?php $columns = (int) $_POST["kolom"]; ?>
<?php $cells = (int) $_POST["cell"]; ?>

<h3 align="center" class="style1"><font color = "red" size = "14">Pembuatan Tabel Fleksibel</font></h3>
<strong>Anda Memasukkan</strong> <?php echo $columns; ?> <em>kolom,</em><br />
<strong>Anda Memasukkan</strong> <?php echo $cells; ?> <em>sel,</em><br />
<br />
<br />
<?php
$width = $columns * 75;
echo "<table width=".$width." border=1>";
$cel = 1;
while ($cel <= $cells)
{
	echo "<tr>"; //cetak baris
	$cl = 0;
	while ($cl < $columns)
	{
		if ($cel <= $cells)
		{
		echo "<td><div align=center>".$cel."</div></td>"; //cetak kolom
		$cel++;
		}
	$cl++;
	}
	echo "</tr>";
}
echo "</table>";
?>
</div>
</body>
</html>
