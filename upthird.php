<html>
<head>
<h1>
successfully update third party details</h1>
</head>
<body background="b2.jpg" bgcolor="blue">
</body>
<?php
include_once("conn.php");
$a = $_POST['pname'];
$b = $_POST['accno'];
$c = $_POST['bname'];
$d = $_POST['pno'];
   $ins=mysql_query("insert into thirdparty values('".$a."',".$b.",'".$c."',".$d.")",$con);
   
	echo "$ins";
?>
