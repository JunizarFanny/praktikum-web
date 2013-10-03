<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Demo Time</title>
</head>
<body>

<?php

function tampil($data)

{

$jumlah=count($data);

$met=$data[rand(0,$jumlah)];

return ($met);

}

function salam()

{

$pagi=array("Selamat Pagi!"," Pagi!"," Good Morning!"," Morning!");

$siang=array("Selamat Siang!"," Siang!"," Good Afternoon!");

$malam=array("Selamat Malam!"," Malam!"," Good Evening!");

$kosong=array("");

$greet=date();

if ($greet>=0 && $greet<10)
{
	echo tampil($pagi);
}

elseif ($greet>=10 && $greet<18)
{
	echo tampil($siang);
}

elseif ($greet>=18 && $greet<=24)
{
	echo tampil($malam);
}

else
{
	echo tampil($kosong);
}

}

?>

<html>

<head>

<title>MENAMPILKAN SALAM</title>

</head>

<body>

<h1><?php salam(); ?></h1>

</body>

</html>