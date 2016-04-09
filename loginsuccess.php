<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Mobile banking</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<div id="header-wrapper" bgcolor='blue'>
	<div id="header">
		<div id="menu">
			<ul>
				
				
				<li><a href="backup of index.html" class="first">Home</a></li>
				<li class="current_page_item"><a href="ppp.html">Login</a></li>
				<!--li><a href=".html">Signin</a></li-->
				
				
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
	<h1 style="color:blue">Welcome to mobile banking</h1>
	
</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />

<div><br></br>
<br></br>

<img src="mobile.jpg" />
		
<div id="sidebar">
				<ul>
					<li>
						<h2></h2>
					</li>
					<li>
						<ul>
							<li><a href="third.php">Third party detail</a></li>
							<li><a href="balcheck.php">Balance enquiry</a></li>
							<li><a href="transaction.php">payment transaction</a></li>
							<li><a href="history.php">History of payment</a></li>
							<li><a href=""></a></li>
						
						</ul>
					</li>
				</ul>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
</body>
</html>
<?php
include_once("conn.php");
$a = $_POST['username'];
$d = $_POST['password'];
$ins=mysql_query("select name,password from acc where name='$a' and password='$d' ",$con);
?>