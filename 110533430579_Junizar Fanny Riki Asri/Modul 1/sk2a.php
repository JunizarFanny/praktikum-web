<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Generate Table</title>
<style type="text/css">

</style>
</head>
<body>
<form method="post" action="sk2b.php">
<h3 align="center" class="style1"><font color = "red" size = "14">Masukkan Jumlah Baris dan Kolom</font></h3>
<div align="center">
<table width="327" border="1" bgcolor = "aqua">
<tr>
<td width="121" style="text-align:center"><font color = "purple">Jumlah Baris</font></td>
<td width="196"><strong>= </strong>
<input name="baris" type="text" id="baris" onKeyUp="getmax();" onfocus="this.select();"></td>
</tr>
<tr>
<td style="text-align:center"><label><font color = "purple">Jumlah Kolom</font></label></td>
<td><strong>= </strong>
<input name="kolom" type="text" id="kolom" onKeyUp="getmax();" onfocus="this.select();"></td>
</tr>

</table>
</div>
<div id="sk1">
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
<script language="JavaScript" type="text/javascript">
function getmax() {
var R = parseInt(document.getElementById('baris').value);
var C = parseInt(document.getElementById('kolom').value);

}

</script>
</html>