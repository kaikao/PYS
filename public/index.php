<?php 
unset($_COOKIE['is_remembered']);
if (isset($_COOKIE['is_remembered']) && $_COOKIE['is_remembered'] == true) {
    //header('Location: http://tw.yahoo.com');
}
    // save cookie for 2 hrs
    //setcookie('cookie_'.CC::CITY, $VARS[CC::CITY], time()+60*60*2);
?>


<!DOCTYPE html>
<html>
	<title>Index</title>
	<head>
	<style type="text/css">
	body
	{
		margin : 0;
		padding: 0;
		padding-top : 10px; 
		text-align: centerl;
		
	}
	
	h1
	{
		font-size: 50px;
	    font-style:italic;
	}
	#centered
	{
		width:1000px ;
		text-align :left ;
		margin:0 auto ;
	}
	</style>
	</head>
	
<body bgcolor="F5EBFF">

<div id="centered">	
 <h1>Plan Your Self</h1> 
 <hr noshade>
 <br />
 <br />


  <div id="Menu" style="height:400px;width:600px;float:left">
    <b><font size=6>Welcome to project PYS</font></b><br />
    <b><font size=6>Register now to enjoy the following features</font></b><br />
    <br/>
    <font size=5 face="Courier New">
     &or; Increase your productivity<br />
     &or; Plan your life<br />
     &or; Monitor your personal schedule</div></font>

  <div id="content" style="height:400px;width:400px;float:left;" >
    <center>
    <form>
	<fieldset>
     <p>Account<br /><input type=text></p>
     <p>Password<br /> <input type=text ></p>
	 <input type=button style="height:30px;width:180px" value="Login"> <br />
	 <input type=button style="height:30px;width:180px" value="Create Account Now"><br />
	 <input type=button style="height:30px;width:180px" value="Forgot password?"><br />
	 </fieldset>
	</form>
	</center>
	</div>
	
<hr noshade>

 <div id="footer" style="height:50px;width:1000px;background-color:pink " align="center">
 	<font color="#9291FF"><b>
 		<a href="...">HOME</a>|
 		<a href="...">ABOUT US</a>|
 		<a href="...">SUPPORT</a>|
 		<a href="...">DOWNLOAD</a>|
 		<a href="...">CONTACT US</a></b></font>
 		<font size=2 style="float:right"> &copy; Copy right by Wesley, Kai, James</style></font>
 		</div>
 		v1.0

	
</div>	


</body>
</html>
