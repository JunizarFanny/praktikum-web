<!DOCTYPE html>
<html>
<!--
Algoritma Program
 1. Mulai
 2. Jika session dengan nama 'nlogin' dan ber-value 'admin' ter-set maka akan tampil halaman simulasi admin
 2. Jika session dengan nama 'nlogin' dan ber-value 'admin' belum ter-set maka akan tampil halaman login
 4. Selesai
-->
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
                <?php
                        //session_start();
                        ini_set('display_errors', 1);
                        //define('_VALID', 1);
                        //include file eksternal
                        include('auth.php');
                        init_login();
                        validate();
                ?>
                <h3>Simulasi Halaman Admin</h3>
                <p>
                        <a href="?m=logout">Logout</a>
                <p>
                Menu-menu admin ada disini
        </body>
</html>