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
    <link href="css/index.css" type="text/css" rel="stylesheet"  />
	</head>
	
<body>

<div id="content">	
 <h1>Plan Your Self</h1> 
 <hr noshade>


  <div id="menu">
    <h2>Welcome to project PYS<h2>
    <p>Register now to enjoy the following features</p>
   
    <font size=5 face="Courier New">
    	<ul>
    	<li>Increase your productivity</li>	
        <li>Plan your life </li>
        <li>Monitor your personal schedule</li>
    </ul>
     </div></font>

  <div id="login" >
    
    <form>
	<fieldset>
	
	<label for="account">Account</label> 
	<input id="account" name="account" />
	<label for="password">Password</label> 
	<input id="password" name="password" />
	
     <ul>
     	<li>
	       <input type="button" value="Login" />
	     </li>
	     <li>
	 	   <input type="button" value="create account" />
	 	 </li> 
	 </ul>
	 	 	 <a href="#">Forgot password? </a>
	</fieldset>
	</form>
		</div>
	
<hr noshade>

<footer>
	&copy All rights reserved by Wesley, Kai, James
</footer>

	
</div>	


</body>
</html>

