<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pencarian Data</title>
 <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #F5F5F5;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
</head>

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="get" class="search-query">
Nama <input type="text" name="nama" size=40 class="input-medium search-query"/>
<input type="submit" value="CARI" class="btn-primary"/>
</form>

<?php
if(isset($_GET['nama'])){
        require_once './koneksi.php';
        
        //kata kunci pencarian
        $key = $_GET['nama'];
        
        //variabel $sql berisi pernyataan SQL pencarian
        $sql = "SELECT * FROM mahasiswa WHERE nama LIKE '%$key%'" ;
$res = mysql_query($sql);

if($res){
        $num = mysql_num_rows($res);
        if($num){
                echo 'Ditemukan ' . $num . ' row(s)';?>
<table class="table">
<tr>
        <th>#</th>
<th width="100">NIM</th>
<th width="150">Nama</th>
<th>Alamat</th>
</tr>
<?php
                $i = 1;
                while ($row = mysql_fetch_row($res)){?>
<tr>
        <td><?php echo $i; ?></td>
<td><?php echo $row[0]; ?></td>
<td><?php echo $row[1]; ?></td>
<td><?php echo $row[2]; ?></td>
</tr>
<?php
                $i++;
        }
                ?>
</table>
<?php
                } else {
                        echo 'Data tidak ditemukan';
                }
}
}else{
        echo 'Masukkan kata kunci pencarian';
}
?>
</body>
</html>