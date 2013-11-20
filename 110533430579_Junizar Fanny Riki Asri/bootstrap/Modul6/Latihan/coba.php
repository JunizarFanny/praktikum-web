<!DOCTYPE HTML>
<html>
<head>
        <title>Tambah Data</title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #F5F5F5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">

<h1>Tambah Data Mahasiswa</h1>
 
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<table class="table">
        <tr>
            <td>NIM</td>
        <td><input type="text" placeholder="NIM" name="nim"></td>
     </tr>
     <tr>
             <td>Nama</td>
        <td><input type="text" placeholder="Nama Lengkap" name="nama"></td>
     </tr>
      <tr>
             <td>Alamat</td>
        <td><input type="text" placeholder="Alamat" name="alamat"></td>
     </tr>
     <tr>
     <td></td>
     <td><input type="submit" value="Simpan" class="btn-primary"> <input type="button" value="Batal" onClick="history.go(-1)" class="btn-warning"></td>
     </tr>
</table>
</form>
</div>
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
                mysql_close($res);
        }else{
                echo 'Gagal Menambah Data <br/>';
                echo mysql_error();
        }
}
echo '<hr />';
//Memanfaatkan script pengambilan data untuk menampilkan hasil
require_once './seleksi.php';
?>
</div>
</body>

</html>