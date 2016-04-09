<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
  
      function validate1()
      {
      
         if( document.myForm.username.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.username.focus() ;
         return false;  
         }
		 if( document.myForm.password.value == "" )
         {
            alert( "Invalid password" );
            document.myForm.password.focus() ;
         return false;  
         }
 }
 </script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>mobile banking</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="header-wrapper">
	<div id="header">
		<div id="menu">
			<ul>
				<li><a href="backup  of index.html" class="first">Home</a></li>
				<li class="current_page_item"><a href="ppp.html">Login</a></li>
				
				
			</ul>
		</div>
		
		<div id="search">
			<form method="get" action="http://www.google.com.html">
				<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
				<input type="submit" id="search-submit" value="GO" />
				</fieldset>
			</form>
		</div>
		
	</div>
</div>
<div id="logo">
	<h1><a href="#">RUBY BANK </a></h1>
	<p> <a href="">mobile banking</a></p>
</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<div id="content">
<form id='login' action='loginsuccess.php'name="myForm"onsubmit="return validate1()" method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>

<label for='username' >UserName*:</label>
<input type='text' name='username' id='username'  maxlength="50" />

<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />

<input type='submit' name='Submit' value='Submit' />

</fieldset>
</form>

</body>
</html>
<?php
include_once("conn.php");
$a = $_POST['name'];
$d = $_POST['password'];
$e = $_POST['email'];
$f = $_POST['telephone'];
$g = $_POST['accno'];

$i="insert into acc values('$a','$d','$e',$f,$g)";
 
    $ins=mysql_query("insert into acc values('$a','$d','$e',$f,$g)",$con);
?>
