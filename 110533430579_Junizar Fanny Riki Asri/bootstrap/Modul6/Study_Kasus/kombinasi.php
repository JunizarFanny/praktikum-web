<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Kombinasi Data</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
     <link href="assets/css/css-inti.css" rel="stylesheet" media="screen">
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

        <form method="post" action="" name="frm_select" class="pagination">
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
<th width="100">NIM</th>
<th width="150">Nama</th>
<th>Alamat</th>
</tr>
<?php
    $i = 1;
        while ($row = mysql_fetch_row($result)) { ?>
<tr>
<td><?php echo $row[0]; ?></td>
<td><?php echo $row[1]; ?></td>
<td><?php echo $row[2]; ?></td>
</tr>
        <?php
   }
        ?>
</table>

<?php
        $query = "SELECT COUNT(nim) AS numrows FROM $tablename";
        $result = mysql_query($query) or die('Error, query failed. ' . mysql_error());
        $row = mysql_fetch_array($result, MYSQL_ASSOC);
        $numrows = $row['numrows'];
        $maxPage = ceil($numrows/$rowsPerPage);
        $nextLink = '&nbsp;';
        if($maxPage >1)
        {
                $self = $_SERVER['PHP_SELF'];
                $nextLink = array();
                for($page = 1; $page <= $maxPage; $page++)
                {
                        $nextLink[] = "<a href=\"".$baselink."?page=$page\">$page</a>";
                }
                $nextLink = "<p>Halaman : </p>" . implode(' ', $nextLink);
        }
        echo '<div id="navpage">'.$nextLink.'</div>';
        mysql_free_result($result);
?>

<?php
  } else {
        echo 'Data Tidak Ditemukan';
  }

 }

}
?>

</body>
</html>