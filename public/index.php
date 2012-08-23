<?php 
unset($_COOKIE['is_remembered']);
if (isset($_COOKIE['is_remembered']) && $_COOKIE['is_remembered'] == true) {
    //header('Location: http://tw.yahoo.com');
}
    // save cookie for 2 hrs
    //setcookie('cookie_'.CC::CITY, $VARS[CC::CITY], time()+60*60*2);
?>


<HTML>
    <head>
    
    </head>
    <BODY bgcolor="C991FF" >
    <Center>
    </br>
    </br>
    </br>
    </br>
    </br>
    <H1>Login Page</H1>
    <form>
    Username </br><input type="text" name=NAME VALUE="" size=20 maxlength=10></br>
    </br>
    Password  </br><input type="text" name=NAME VALUE="" size=20 maxlength=10></br>
    </br>
        <input type="checkbox" name="reminder">Remember Me</br>
    </br>
        <input type="button" style="width:100px; height:30px" value="Login">
    <a href="sign_up.php" target="_self">
    	<input type="button" style="width:100px; height:30px" value="Sign up"> </br>
    </a> 
    </br>
    <input type="button" style="width:200px; height:30px" value="Forget Password?">
    </form>
    
    </Center>
    </BODY>
</HTML>
