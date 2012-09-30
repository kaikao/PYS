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
 <h1 class="title"></h1> 
   
 <div class="login" >
    <h1>Project  P.Y.S</h1>
    <form>
		
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
	
	</form>
	    
		</div>

  <div class="menu">
    <h1>Welcome to project PYS</h1>
    <p>Register now to enjoy the following features</p>
   
    <font size=5 face="Courier New">
    	<ul>
    	<li>Increase your productivity</li>	
        <li>Plan your life </li>
        <li>Monitor your personal schedule</li>
    </ul>
     </div></font>

 
    <hr noshade>
     <footer><p>&copy All rights reserved by Wesley, Kai, James</p></footer>
    


</div>

</body>
</html>

