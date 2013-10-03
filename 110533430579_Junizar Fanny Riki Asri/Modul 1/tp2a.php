<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Tabel Fleksibel</title>
<style type="text/css">

</style>
</head>
<body>
<form method="post" action="tp2b.php">
<h3 align="center" class="style1"><font color = "red" size = "14">Pembuatan Tabel Fleksibel</font></h3>
<div align="center">
<table width="327" border="1" bgcolor = "aqua">

<tr>
<td style="text-align:center"><label><font color = "purple">Masukkan Kolom</font></label></td>
<td><strong>= </strong>
<input name="kolom" type="text" id="kolom" onKeyUp="getmax();" onfocus="this.select();"></td>
</tr>
<tr>
<td style="text-align:center"><font color = "blue">Sel Total</font></td>
<td><strong>= </strong>
<input name="cell" type="text" id="cell" onKeyUp="getmax();" onFocus="this.select();"></td>
</tr>

</table>
</div>
<div id="tp2">
<br/>
<br/>
<br/>
<center>
<input type="submit" name="Generate" value="Generate">
<input type="reset" name="Reset" value="Reset">
</center>
</div>
</form>
</body>

</html>