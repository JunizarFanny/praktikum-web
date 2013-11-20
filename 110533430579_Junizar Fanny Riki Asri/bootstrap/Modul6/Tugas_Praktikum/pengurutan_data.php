<html>
<head>
<title>Pengurutan</title>
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
<body>
<h2>Pengurutan Data</h2>
<table class="table">
<?php
require_once './koneksi.php';

$sql = "SELECT * FROM mahasiswa order by nama";

$pola='asc';
$polabaru='asc';
if(isset($_GET['orderby'])){
        $orderby=$_GET['orderby'];
        $pola=$_GET['pola'];
        
        $sql = "SELECT * FROM mahasiswa order by $orderby $pola";
        if($pola=='asc'){
                $polabaru='desc';
        }else{
                $polabaru='asc';
        }
}
?>        
<th>
        <td>NIM</td>
<td><a href='Pengurutan_Data.php?orderby=nama&pola=<?=$polabaru;?>'>Nama</a></td>
<td>Alamat</td>
</th>
<?php
        //query database
        $result=mysql_query($sql) or die(mysql_error());
        $no=1; //penomoran
        while($rows=mysql_fetch_object($result)){
      ?>
<tr>
<td><?php echo $no
        ?></td>
<td><?php echo $rows -> nim;?></td>
<td><?php echo $rows -> nama;?></td>
<td><?php echo $rows -> alamat;?></td>
</tr>
<?php
        $no++;
        }?>
</table>
</body>
</head>
</html>