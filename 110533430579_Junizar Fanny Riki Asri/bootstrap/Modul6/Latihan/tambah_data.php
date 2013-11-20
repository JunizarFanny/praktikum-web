<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Data</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<table>
        <tr>
            <td>NIM</td>
        <td><input type="text" name="nim" /></td>
     </tr>
     <tr>
             <td>Nama</td>
        <td><input type="text" name="nama" size=40/></td>
     </tr>
      <tr>
             <td>Alamat</td>
        <td><input type="text" name="alamat" size=60/></td>
     </tr>
     <tr>
     <td></td>
     <td><input type="submit" value="simpan" /></td>
     </tr>
</table>
</form>

<?php
require_once './koneksi.php';
//Jika field nim dan nama diisi lalu disubmit
if(isset($_POST['nim']) && isset($_POST['nama'])){
        $nim        = $_POST['nim'];
        $nama        = $_POST['nama'];
        $alamat        = $_POST['alamat'];
        
        //Tambahkan data baru ke tabel
        $sql = "INSERT INTO mahasiswa
                        VALUES ('" .$nim. "', '".$nama."','".$alamat."')";
        
        $res=mysql_query($sql);
        if($res){
                echo 'Data Berhasil ditambahkan';
        }else{
                echo 'Gagal Menambah Data <br/>';
                echo mysql_error();
        }
}
echo '<hr />';
//Memanfaatkan script pengambilan data untuk menampilkan hasil
require_once './seleksi.php';
?>
</body>
</html>