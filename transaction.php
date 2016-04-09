<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<script>function validate()
      {
      
         if( document.myForm.tamount.value == "" )
         {
            alert( "enter the transaction amount" );
            document.myForm.tamount.focus() ;
         return false;  
         }
	  }
</script>

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
				<li class="current_page_item"><a href="#">Payment Transaction</a></li>
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
	<h1 style="color:blue">Transaction</h1>
	</marquee>
</div>
<center>
<div>
<br></br>
<br></br>

		<form action="trans.php"name="myForm"onsubmit="return validate()" method="post">
<label for='username' >select party</label>
<?php
include_once('conn.php');

$query = mysql_query("select * from thirdparty"); 

echo '<select name="dlist">'; 


while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['pname'].'">'.$row['pname'].'</option>';
   }
echo '<option value="'.$row['pname'].'">'.$row['pname'].'</option></select>';
?><br></br>
<label for='username' >Transaction amount</label>
<input type='text' name='tamount' id='username'  maxlength="50" /></br><br></br>

<input type='submit' name='submit' value='next' />	
</form><a href="loginsuccess.php"/>
<input type='submit' name='submit' value='cancel' />	
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
</body>
</html>
