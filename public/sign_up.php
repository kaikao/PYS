<?php 
unset($_COOKIE['is_remembered']);
if (isset($_COOKIE['is_remembered']) && $_COOKIE['is_remembered'] == true) {
    //header('Location: http://tw.yahoo.com');
}
    // save cookie for 2 hrs
    //setcookie('cookie_'.CC::CITY, $VARS[CC::CITY], time()+60*60*2);

var_dump("handsomeme");



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Plan YourSelf - Registration</title>
        <link href="css/sign_up.css" rel="stylesheet" type="text/css" />
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
        <div id="stylized" class="myform">
            <form id="sign_up_form" name="form" method="post" action="control/add_member.php">
                <h1>Sign-up Now</h1>
                <p>Let us create your awesome account!!</p>
                
                <label>Account
                    <span class="small">create your account</span>
                </label>
                <input type="text" name="account" id="account" />
                
                <label>Password
                    <span class="small">Min. size 6 chars</span>
                </label>
                <input type="password" name="password" id="password" />
                
                <label>Verify Password
                    <span class="small">input password again</span>
                </label>
                <input type="password" name="verify_password" id="verify_password" />
                
                <label>Name
                    <span class="small">Add your name</span>
                </label>
                <input type="text" name="name" id="name" />
                
                <label>Tel
                    <span class="small">Add a valid number</span>
                </label>
                <input type="text" name="tel" id="tel" />
                
                <label>Email
                    <span class="small">Add a valid address</span>
                </label>
                <input type="text" name="email" id="email" />
                
                <button type="submit">Sign-up</button>
                <div class="spacer"></div>
                
            </form>
        </div>
        
        <script type="text/javascript" src="js/lib/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/sign_up.inc.js"></script>
    </body>

</html>