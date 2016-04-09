<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<title> Database Interaction </title>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ultimate online jobsite</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="header-wrapper">
	<div id="header">
		<div id="menu">
			<ul>
				
				<li><a href="backup  of index.php" class="first">Home</a></li>
				<li class="current_page_item"><a href="ppp.php" >Logout</a></li>
				
				<li><a href="pppp.html"target="_blank">Employee login</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<!-- end #menu -->
		<div id="search">
			<form method="get" action="http://www.google.com.html">
				<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
				<input type="submit" id="search-submit" value="GO" />
				</fieldset>
			</form>
		</div>
		<!-- end #search -->
	</div>
</div>
<!-- end #header -->
<!-- end #header-wrapper -->
<div id="logo">
	<h1><a href="#">Welcome to onlinejobs </a></h1>
	<p> <a href="">search jobs</a></p>
	
</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content">
				
				<center> 
<form action="employeeregister.php" method="post">

<input type='submit' name='Submit' value='CLIK HERE TO APPLY JOB!!!!!!' />
</form>

<div id="sidebar">
				<ul>
					<li>
						<h2>search by jobs</h2>
					</li>
					<li>
						<ul>
							<li><a href="http://jobsearch.jobsahead.com/searchresult.html?mne=o;mxe=1">Fresher Jobs</a></li>
							<li><a href="http://jobsearch.jobsahead.com/category/categories.html?id=2">Banking Jobs</a></li>
							<li><a href="http://jobsearch.jobsahead.com/category/marketing.html">Marketing Jobs</a></li>
							
						</ul>
					</li>
					<li>
						<h2>search job by place</h2>
						<ul>
							<li><a href="#">job in delhi</a></li>
							<li><a href="#">job in chennai</a></li>
							<li><a href="#">job in kolkata</a></li>
						
						</ul>
					</li>
				</ul>
			</div>
			

</body>
</html>


<?php
include_once("conn.php");
$a = $_POST['name'];
$b = $_POST['age'];
$c = $_POST['gender'];
$d = $_POST['email'];
$e = $_POST['phone'];
$f = $_POST['inst'];
$g = $_POST['status'];


//$mysql=mysql_connect("mysql","spanhealth","spanhealthcare");

//$use=mysql_query("use site_span",$mysql);
 
    $ins=mysql_query("insert into profile values('$a',$b,'$c','$d',$e,'$f', '$g')",$con);
	//if($ins === false) {
  //echo 'Entered Phone Number already exists in our database!';
//}
 //else
//echo ' Thank you for Registering with us !!!';
?>

