<html>
<body>
<?php
include_once("conn.php");
$a = $_POST['title'];
$d = $_POST['hours'];
$e = $_POST['salary'];
$f = $_POST['experience'];
$g = $_POST['disc'];
$h=$_POST['city'];

//$mysql=mysql_connect("mysql","spanhealth","spanhealthcare");
//$use=mysql_query("use site_span",$mysql);
$sql=mysql_query("insert into postjob values('$a',$d,$e,$f,'$g','$h')",$con);
	

	//if($ins === false) {
  //echo 'Entered Phone Number already exists in our database!';
//}
 //else
echo ' post job sucessfully!!!';
?>
</body>
</html>