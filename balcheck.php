<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
				
				<li><a href="employeeregister.html">Signin</a></li>
				<li><a href="pppp.html"target="_blank">login</a></li>
				<li class="current_page_item"><a href="#">balance enquiry</a></li>
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
	<h1 style="color:blue">Balance checking</h1>
	</marquee>
</div>


<center>
<div background="phones.jpg">
<br></br>
<br></br>
<label for='username' >Account number:  </label>

<?php
include_once("conn.php");
   $ins=mysql_query("select * from details,acc where details.accountno=acc.accno ",$con);
$row = mysql_fetch_array($ins);   
echo $row['accno'];
?><br></br>
<label for='password' >Balance: Rs </label><?php echo $row['bal'];?>
</br><br></br>
<label for='captacha' >Recent Transaction:</label><?php 
print(Date("l F d, Y"));
?>
</br><br></br>
<input type='submit' name='submit' value='Print Receipt' /><a href="loginsuccess.php">	
<input type='submit' name='submit' value='Back To Home Page' />	
</div>	
</center>		
<div id="sidebar">
				<ul>
					<li>
						<h2></h2>
					</li>
					<li>
						<ul>
							<li><a href="third.php">Third party detail</a></li>
							<li><a href="balcheck.php">Balance enquiry</a></li>
							<li><a href="payment.php">payment transaction</a></li>
							
						
							<li><a href="history.php">History of payment</a></li>
							<li><a href="#"></a></li>
						
						</ul>
					</li>
				</ul>
			</div>

		
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
</div>
</body>
</html>
<?php
	
?>