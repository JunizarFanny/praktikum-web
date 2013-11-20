<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Paging Data</title>
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
<div align="center">
<?php
require_once './koneksi.php';
$tablename="mahasiswa";
$baselink=$_SERVER['PHP_SELF'];
// jumlah data perhalaman
$rowsPerPage = 5;
//nilai pertama
$pageNum = 1;
if(!empty($_GET['page']))
{
        $pageNum = $_GET['page'];
}
$offset = ($pageNum - 1) * $rowsPerPage;
// query database
$query = "SELECT * FROM $tablename ORDER by nim asc LIMIT $offset, $rowsPerPage";
$result = mysql_query($query) or die('Error, query failed. ' . mysql_error());
?>
<h2 class="tengah">DATA MAHASISWA</h2>
<table width="450" border="0" cellpadding="3" cellspacing="1" bgcolor="#999999" class="table-hover">
<tr bgcolor="#E8FDEC">
<th width="149">NIM</th>
<th width="348">NAMA</th>
<th>Alamat</th>
</tr>
<?php
while($row = mysql_fetch_array($result))
{
?>
<tr bgcolor="#fff">
<td><?php echo $row['nim']?></td>
<td><?php echo $row['nama']?></td>
<td><?php echo $row['alamat']?></td>
</tr>
<?php
} //end of while
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
</div>

</body>
</html>