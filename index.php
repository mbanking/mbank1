<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<table>
		<tr>
			<td style='width: 30%;'><img class = 'newappIcon' src='images/newapp-icon.png'>
			</td>
			<td>
				<h1 id = "message"><?php echo "Hello world!"; ?>
</h1>
				<p class='description'></p> Thanks for creating a <span class="blue">PHP Starter Application</span>. Get started by reading our <a
				href="https://www.ng.bluemix.net/docs/#runtimes/php/index.html">documentation</a>
				or use the Start Coding guide under your app in your dashboard.
			</td>
		</tr>
	</table>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
 <script type="text/javascript">
  
      function validate1()
      {
      
         if( document.myForm.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
         return false;  
         }
		  if( document.myForm.password.value == "" )
         {
            alert( "Enter password" );
            document.myForm.password.focus() ;
         return false;  
         }
         
         if( document.myForm.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
	return false;  
         }
	if(!(emailValidate(document.myForm.email.value)))
	{ 	
	alert("Please Enter the valid email id");
	return false;
	}
         if( document.myForm.telephone.value == "" ||
         isNaN( document.myForm.telephone.value ) ||
         document.myForm.telephone.value.length != 10 )
         {
            alert( "Please provide a mobile no in the format ##########." );
            document.myForm.telephone.focus() ;
          return false; 
         }
       if(document.myForm.email.value!="")
	{
	var str=document.validation.emailcheck.value
	var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
	if (!filter.test(str))
	alert("Please input a valid email address!")
	return false;
	}
	alert("finished");
      }
function emailValidate(ema)
{
var em=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(em.test(ema))
{
	return true;
}
else
	return false;
}
function pass()
{
	var p="document.myForm.password.value";
	var pp="document.myForm.ppassword.value";
	if(p!=pp)
	{
		alert("check your password");
	}
}
</script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Mobile banking</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body background="mobile.jpg">
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
				
				<form action="mlogin.php"name="myForm"onsubmit="return validate1()" method="post">
<center>
 
<h1><u> Create profile </u></h1>
<br><br><br>
Full Name : <input type="varchar" placeholder="name" name="name"><br><br>
<label for='password' >Password</label>
<input type='password' name='password'placeholder="*********" id='password' maxlength="50" /><br></br>
Confirmation password<input type='password' name='ppassword'onblur="return pass()" onplaceholder="*********" id='password' maxlength="50" /><br></br>
Enter Email id: <input type="text" placeholder="someone@abc.com" name="email" ><br><br><br>
Enter Phone Number: <input type="int" placeholder="919999999999" name="telephone" ><br><br><br>
Enter Account no: <input type="varchar" placeholder="xxxxxxxxx05674" name="accno"><br><br><br>

<input type ="submit" value = "create">
</center> 
</form>			</div>
			<div id="sidebar">
				<ul>
					<li>
						<h2>Banking online</h2>
					</li>
					<li>
						<ul>
							<li><a href="">Mobile banking</a></li>
							<li><a href="">Internet banking</a></li>
							<li><a href="">Banking online</a></li>
							
						</ul>
					</li>
					<li>
						<h2>Bank details</h2>
						<ul>
							<li><a href=""></a></li>
							<li><a href=""></a></li>
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
