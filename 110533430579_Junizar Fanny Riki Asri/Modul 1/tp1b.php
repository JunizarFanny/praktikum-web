<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Pass By Reference</title>
  
</head>
<body>
<p><font color = "red" size = "3">Contoh program yang menggunakan fungsi pass by reference</font></p>
<?php
function jumlah(&$nilai) {
    $nilai++;
}

$input=5;
jumlah($input);
echo $input;
?>
</body>
</html>