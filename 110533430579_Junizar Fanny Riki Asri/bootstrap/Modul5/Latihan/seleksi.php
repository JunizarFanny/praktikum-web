<!DOCTYPE HTML>
<html>
<head>
<title>Tambah Data</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<body>
<?php
// File : seleksi.php

require_once './koneksi.php';

$sql = 'SELECT * FROM mahasiswa';
$res = mysql_query($sql);
if($res){
        if(mysql_num_rows($res)){ ?>        
        <table class="table" align="center">
<tr class="success">
        <th width="50">NO</th>
<th width="100">NIM</th>
<th width="150">Nama</th>
<th>Alamat</th>
</tr>
<?php
         $i = 1;
         while($row = mysql_fetch_row($res)) { ?>
<tr>
        <td>
        <?php echo $i;?>
</td>
<td>
        <?php echo $row[0];?>
</td>
<td>
        <?php echo $row[1];?>
</td>
<td>
        <?php echo $row[2];?>
</td>
</tr>
<?php
      $i++;
        }
         ?>
</table>
<?php
   }else{
   echo 'Data Tidak ditemukan';
   }
   }
?>
</body>
</head>
</html>