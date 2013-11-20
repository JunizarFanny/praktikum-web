<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Limitasi Data</title>
 <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
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

        <form method="post" action="" name="frm_select">
    Tampilkan
    <select name="row_page"
    onchange="document.forms.frm_select.submit();">
        <option> -- Pilih -- </option>
    <option value="5">5</option>
    <option value="10">10</option>
        <option value="20">20</option>
    <option value="50">50</option>
    <option value="100">100</option>
    </select> baris per halaman
    </form>
    
<?php
if(isset($_POST['row_page']) && $_POST['row_page']) {
        require_once './koneksi.php';
        
        //batas baris data
        $rowsPerPage = $_POST['row_page'];
        $tablename="mahasiswa";
        //nilai pertama
        $pageNum = 1;
        if(!empty($_GET['page']))
        {
                $pageNum = $_GET['page'];
        }
        $offset = ($pageNum - 1) * $rowsPerPage;
        // query database
        $sql = "SELECT * FROM $tablename ORDER by nim asc LIMIT $offset, $rowsPerPage";
        $result = mysql_query($sql) or die('Error, query failed. ' . mysql_error());

//LENGKAPI
// Variabel $sql berisi pernyataan SQL retrieve dg limitasi
//$sql = 'SELECT * FROM Mahasiswa LIMIT 0 , 10';

if($result){
        if(mysql_num_rows($result)) { ?>
<table class="table">
<tr>
        <th>#</th>
<th width="100">NIM</th>
<th width="150">Nama</th>
<th>Alamat</th>
</tr>
<?php
    $i = 1;
        while ($row = mysql_fetch_row($result)) { ?>
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
        echo 'Data Tidak Ditemukan';
  }

 }

}
?>

</body>
</html>