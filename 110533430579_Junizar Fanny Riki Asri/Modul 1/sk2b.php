<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Hasil Generate Tabel</title>
</head>
<body>
<div align="center">


<?php $rows = (int) $_POST["baris"]; ?>
<?php $columns = (int) $_POST["kolom"]; ?>

<h3 align="center" class="style1"><font color = "red" size = "14">Hasil Tabel</font></h3>
<strong>Anda Memasukkan</strong> <?php echo $rows; ?> <em>baris</em><br />
<strong>Anda Memasukkan</strong> <?php echo $columns; ?> <em>kolom</em><br />

<br />
<br />
<?php
$width = $columns * 75;
echo "<table width=".$width." border=1>";
for($i=1; $i<=$rows; $i++) //membuat pengulangan baris sebanyak 20
{
echo "<tr>"; //mencetak baris (tag pembuka)

//disini mulai pengulangan kolom
for($j=1; $j<=$columns; $j++) //membuat pengulangan kolom sebanyak 10
{
echo "<td>Baris ke $i<br />Kolom ke $j</td>"; //mencetak kolom tabel
} //akhir pengulangan kolom

echo "</tr>"; //mencetak baris (tag penutup)
}
	echo "</table>";
	?>
</div>
</body>
</html>
