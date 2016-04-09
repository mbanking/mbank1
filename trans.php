<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<script>
function validate1()
      {
		  if( document.myForm.password.value == "" )
         {
            alert( "Enter transaction password" );
            document.myForm.password.focus() ;
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
				
				<li><a href="loginsuccess.php" class="first">Home</a></li>
				
				
				<li><a href="mlogin.php"target="_blank">logout</a></li>
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
<form action="tt.php"name="myForm"onsubmit="return validate1()" method="post">

<!--form id='submit' action='tt.php' name="myform" method='post' onsubmit="return validate1()" accept-charset='UTF-8'-->
<label for='username' >Transaction password</label>
<input type='password' name='password' id='password'  maxlength="50" /></br><br></br>
<input type='submit' name='submit' value='next' />
</form>

<input type='submit' name='submitt' value='cancel' >
<a href="loginsuccess.php"></a>
</input>	
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
<?php
include_once("conn.php");
//$a = $_POST['pname'];
$b = $_POST['tamount'];


$d=mysql_query("select bal from details",$con);
$row = mysql_fetch_array($d);   
$temp=$row["bal"];
$c= $temp-$b;

//echo "$c";
    $ins=mysql_query("UPDATE details SET bal = '$c' ");
	$retval = mysql_query( $ins, $con );
/*if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
*/
	
?>
<?php
$a=$_POST['dlist'];
$cdate=date('Y-m-d');
echo "$cdate";
 $ins=mysql_query("insert into cust values('$a','$cdate')",$con);
mysql_query("insert into details (tdate) values('$cdate')",$con);
?>

