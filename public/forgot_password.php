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
  <head>
 		<title>Forgot_password</title>
        <link href="css/Forgot_Password.css" rel="stylesheet" type="text/css" />
        <link href="css/navigation.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    	<ul class="navigation">
		    <li class="current"><a href="index.php"><em class="home"></em><strong>Home</strong></a></li>
		    <li><a href="add_plan.php"><em class="tutorials"></em><strong>Plan YourSelf</strong></a></li>
		    <li><a href="check_plan.php"><em class="psd"></em><strong>Check Your Plan</strong></a></li>
		    <!--<li><a href="http://www.hv-designs.co.uk/hv_shop"><em class="templates"></em><strong>CSS Templates</strong></a></li>-->
		    <li><a href="contact.php"><em class="contact"></em><strong>Contact Me</strong></a></li>
		</ul>
  	<div id="style" class="form1">
  		<form action="">
  		<h1>Forgot your password? </h1> 
  		
  		<p>Enter your Username as registered</p>
  		<table cellpadding="15">
  			<tr>
  		<td><label>Username</td><td><input type="text" name="Username"></label></td> 
  		</tr>
  		    <tr>
  	    <td><label>Email Address</td><td><input type="text" name="Email_Address"></label></td>
  	    </tr>
  	       </table>
  	    </br>
  	    </br>
  		<button>Send me password now</button>
  		</form>
  		
  		
  		
  		
  		</div>
  	
  	</body>
  	
  </head>
  	
	</html>
		
