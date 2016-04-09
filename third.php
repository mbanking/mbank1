<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Mobile banking</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body bgcolor="blue" background="mobile.jpg">
<script>
function validate1()
      {
      
         if( document.myForm.pname.value == "" )
         {
            alert( "Please provide name of third party!" );
            document.myForm.pname.focus() ;
         return false;  
         }
		 if( document.myForm.accno.value == "" )
         {
            alert( "Please enter account number" );
            document.myForm.accno.focus() ;
         return false;  
         }
		 if( document.myForm.ifsc.value == "" ||
         isNaN( document.myForm.ifsc.value ) ||
         document.myForm.ifsc.value.length != 5 )
         {
            alert( "check your ifsc code" );
            document.myForm.ifsc.focus() ;
          return false; 
         }
		 if( document.myForm.bname.value == "" )
         {
            alert( "Please branch name" );
            document.myForm.bname.focus() ;
         return false;  
         }
		if( document.myForm.pno.value == "" ||
         isNaN( document.myForm.pno.value ) ||
         document.myForm.pno.value.length != 10 )
         {
            alert( "Please provide a mobile no in the format ##########." );
            document.myForm.pno.focus() ;
          return false; 
         }
	  }
		
</script>
<div id="header-wrapper">
	<div id="header">
		<div id="menu">
			<ul>
				
				<li class="current_page_item"><a href="#">Home</a></li>
				<li><a href="ppp.html" class="first">Login</a></li>
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
				
				<form action="upthird.php" target="_blank" name="myForm"onsubmit="return validate1()" method="post">

<center>
<div>
<label for='username' >Payee name</label>
<input type='text' name='pname' id='username'  maxlength="50" /></br><br></br>
<label for='username' >Account no</label>
<input type='text' name='accno' id='username'  maxlength="50" /></br><br></br>
<label for='username' >Reenter Account no</label>
<input type='text' name='aaccno' id='username'  maxlength="50" /></br><br></br>

<label for='username' >Branch name</label>
<select name="bname">
<option value="By-party">chennai</option>
<option value="By-party">madurai</option>
<option value="By-party">nagercoil</option>
</select><br></br>
<label>Phone no</label>
<input type='text' name='pno' id='username'  maxlength="50" /></br><br></br>
<a href="upthird.php" target="_blank"><input type='submit' name='submit' value='SUBMIT' /><a href="loginsuccess.php">	
<input type='submit' name='submit' value='CANCEL' />	
</center> 
</form>			</div>
			<div id="sidebar">
					
					<li>
						<ul>
							<li><a href="third.php">Third party detail</a></li>
							<li><a href="balcheck.php">Balance enquiry</a></li>
							<li><a href="transaction.php">payment transaction</a></li>
							<li><a href="history.php">History of payment</a></li>
							<li><a href=""></a></li>
						
						</ul>
					</li>
								
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
</body>
</html>
