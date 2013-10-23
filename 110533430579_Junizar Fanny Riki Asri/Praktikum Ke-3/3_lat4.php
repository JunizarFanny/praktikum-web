<html>
<head> 
  <title>Set Session</title> 
</head> 
<body> 
 
<?php 
session_start(); 
if (!isset($_SESSION['test']))
{ 
	$_SESSION['test'] = 'value'; 
}
else
{ 
	echo 'Session di-set <br />'; 
	// Mencetak nilai session test 
	echo 'Nilai: ' . $_SESSION['test'] . '<br />'; 
	print_r($_SESSION); 
} 
?>
<p> 
Tekan Refresh (F5); 
 
</body> 
</html>