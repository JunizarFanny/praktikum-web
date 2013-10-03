<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns = "http://www.w3.org/1999/xhtml" xml : lang="en" lang="en">
<head>
	<title>Demo Variabel</title>
</head>

<body>

<?php

// Dumping informasi mengenai variabel
$bil = 3;
var_dump($bil);
//Output: int(3)

$var = "";
var_dump($var);
//Output:string(0)

$var = null;
var_dump($var);
//Output: NULL

print_r($bil);

echo $bil;

?>

</body>
</html>