<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

<title>Mobile banking</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body background-color="yellow">
<div id="header-wrapper">
	<div id="header">
		<div id="menu">
			<ul>
				<h1>
				
				<li><a href="ppp.html" class="first">Home</a></li>
				
				
				<li><a href="pppp.html"target="_blank">login</a></li>
				<li class="current_page_item"><a href="#">History of payment</a></li>
				</h1>
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
	<marquee>
	<h1 style="color:blue">History of payment</h1>
	</marquee>
</div>
<center>
<div>
<br></br>
<br></br>
<form id='submit' action='his.php' method='post' accept-charset='UTF-8'>
<label for='username' >select mode</label>
<select name="select mode">
<option value="By-party">Transaction History</option>
<option value="By-party"></option>
</select><br></br>
<input type='submit' name='submit' value='submit' />	
<input type='submit' name='submit' value='Back To Home Page' />
</form>	
</div>	
</center>		
<div id="sidebar">
				<ul>
					<li>
						<h2></h2>
					</li>
					<li>
						<ul>
							<li><a href="third.html">Third party detail</a></li>
							<li><a href="balcheck.html">Balance enquiry</a></li>
							<li><a href="payment.html">payment transaction</a></li>
							
						
							<li><a href="history.html">History of payment</a></li>
							<li><a href="#"></a></li>
						
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

$d=mysql_query("select * from cust",$con);
$row = mysql_fetch_array($d);   
$temp=$row["cdate"];
echo $temp;
?>