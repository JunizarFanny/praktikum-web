<!DOCTYPE html>
<html>
        <head>
                <title>Halaman Login</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
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
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
   </head>
 <body>
<!-- Algoritma program terdapat pada index.php -->
<?php
        defined('_VALID') or die('not allowed');
        function init_login()
        {
                //Simulasi data account nama dan password
                $nama = 'admin';
                $pass = 'fanny';
                if(isset($_POST['nama']) && isset($_POST['pass']))
                {
                        $n = trim($_POST['nama']);
                        $p = trim($_POST['pass']);
                        if(($n === $nama) && ($p === $pass))
                        {
                                //Jika sama, get cookie
                                $_SESSION['nama'] = $n;
                                //redirect
?>
                                <script type="text/javascript">
                                        document.location.href="./";
                                </script>
<?php
                        }
                        else
                        {
                                echo 'Nama/Password Tidak Sesuai';
                                return false;
                        }
                }
        }

function validate()
{
        if(!isset($_SESSION['nama']))
        {
?>
                <div class="control-group">
                        <form action="" method="post" class="form-signin">
                                <table>
                                        <tr>
                                                <td>Nama</td>
                                                <td><input type="text" name="nama" /></td>
                                        </tr>
                                        <tr>
                                                <td>Password</td>
                                                <td><input type="password" name="pass" /></td>
                                        </tr>
                                        <tr>
                                                <td></td>
                                                <td><input type="submit" value="LOGIN" /></td>
                                        </tr>
                                </table>
                        </form>
                </div>
<?php
                exit;
        }
        if(isset($_GET['m']) && $_GET['m'] == 'logout')
        {
                //Hapus session
                if(isset($_SESSION['nama']))
                {
                        unset($_SESSION['nama']);
                }
                //Redirect
?>
                <script type="text/javascript">
                        document.location.href="./";
                </script>
<?php
        }
}
?>
</body>
</html>