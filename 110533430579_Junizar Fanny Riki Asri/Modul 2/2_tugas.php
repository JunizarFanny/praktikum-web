<html>
<head>
	<title>Form Login</title>
</head>

<style type="text/css">

*{
	font-family: verdana;
	margin: auto;
	padding:0;
}

#container
{
	margin:  20px auto;
	width: 15%;
	height: auto;
	padding: 10px;
	border: 1px solid brown
}

.textinput
{
	width: 100%;
	height: 30px;
	margin: 5px auto;
}

.btn
{
	width: 100%;
	padding:5px;
	background-color: #FF0000;
	border: none;
	color:white;
	font-weight: 900;
}

.btn:hover
{
	cursor: pointer;
}

a
{
	font-size: 13px;
	color: black;
}

.textinput
{
	background-color: #fafafa;
	border: inset 1px #efefef;
}

.style2 {font-family: Georgia, "Times New Roman", Times, serif}
</style>
<script>

function cekhuruf(huruf)
{
	cek = /^[A-Za-z]{1,}$/;
	return cek.test(huruf);
}

function validateForm()
{
	var username=document.forms["myForm"]["username"].value;
	var pass=document.forms["myForm"]["pass"].value;

	if ((username==null || username=="")||(pass==null|| pass==""))
	{
		alert("Username dan Password Harus Diisi");
		document.getElementById("username").focus();
		return false;
	}
  
	if(cekhuruf(username)=== false ||cekhuruf(pass)===false)
	{
		alert("Username dan password Harus Berupa Huruf");
		document.getElementById("username").focus();
		return false;
	}

	return true;
}
</script>

<body>
<div id="container">
	<span class="style2">LOGIN</span>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="myForm" onSubmit="return validateForm()">
		<input type="text" name="username" class="textinput" id="username" value="username"/>
		<input type="password" name="pass" class="textinput" id="pass" value="password"/>
		<input type="submit" name="submit" value="LOG IN" class="btn"/>
		<input type="checkbox" name="remember" class="checkbox"/>&nbsp;<small>Remember Password</small>
	</form>
</div>

<?php 
if (isset($_POST['submit'])) 
{
	if ((isset($_POST['username'])&&$_POST['username']=='junizar')&&(isset($_POST['pass'])&&$_POST['pass']=='fanny')) 
	{
		echo "<center>WELCOME      ". $_POST['username']."</center>";
	}
	else
	{
		echo "<script>alert('Username atau Password Salah')</script>";
	}
}
?>

</body>
</html>