<?php 
$account = filter_input(INPUT_POST, 'account');
if ($account) {
	// connect to database
    $mysqli = new mysqli('localhost', 'imigisco_kai', 'kaikao', 'imigisco_kai');
	if (mysqli_connect_errno()) {
    	printf("Connect failed: %s\n", mysqli_connect_error());
    	exit;
	}
	
	// check is this account already exist
    $query = 'SELECT * FROM `member` WHERE `account` = "' . $account . '"';
    $result = $mysqli->query($query);
	$resultArray = mysqli_fetch_assoc($result);
	
	// if already exist, alert and redirect to last page
	if ($resultArray) {
		$result->free();
		$mysqli->close();
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
		echo "<script>alert('This account already exist! Change other accounts'); history.back();</script>";
		exit;
	}
	
	// get now datetime
	$cdate = new DateTime();
	$cdate = $cdate->format('Y-m-d H:i:s');
	
	// insert member data
	$query = 'INSERT INTO `imigisco_kai`.`member` (';
	$query .= '`account`, `password`, `name`, `tel`, `email`, `cdate`)';
	$query .= 'VALUES ("' . $account . '","' . $_REQUEST['password'] . '","' . $_REQUEST['name'] . '","' . $_REQUEST['tel'] . '","' . $_REQUEST['email'] . '","' . $cdate . '");';
	
	$result = $mysqli->query($query);
	$insertId = mysqli_insert_id($mysqli);
	
	// get member data
	$query = 'SELECT * FROM `member` WHERE `id` = ' . $insertId;
	$result = $mysqli->query($query);
	$member = mysqli_fetch_assoc($result);
	
	// check exception
	if ($insertId < 1 || !$member) {
		$result->free();
		$mysqli->close();
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
		echo "<script>alert('Insert Faield!'); history.back();</script>";
		exit;
	}
	
	// free connection
	$result->free();
	$mysqli->close();
}

?>

<html>
    <head>
        <title>Plan YourSelf - 加入會員</title>
        <link href="../css/navigation.css" rel="stylesheet" type="text/css" />
        <link href="../css/sign_up.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    	<ul class="navigation">
		    <li class="current"><a href="../index.php"><em class="home"></em><strong>Home</strong></a></li>
		    <li><a href="../add_plan.php"><em class="tutorials"></em><strong>Plan YourSelf</strong></a></li>
		    <li><a href="../check_plan.php"><em class="psd"></em><strong>Check Your Plan</strong></a></li>
		    <!--<li><a href="http://www.hv-designs.co.uk/hv_shop"><em class="templates"></em><strong>CSS Templates</strong></a></li>-->
		    <li><a href="../contact.php"><em class="contact"></em><strong>Contact Me</strong></a></li>
		</ul>
        <div id="stylized" class="myform">
                <center><h1>Congratulation!!</h1>
                <h2><span style="color: Red; font-weight:bold;"><?php echo $member['name'];?></span>, You Are Our Member Now!</h2>
                <h2>Let's start plan yourself</h2>
                </center>
                
                <button type="submit">Start Plan YourSelf</button>
        </div>
        
        <script type="text/javascript" src="../js/lib/jquery-1.7.2.min.js"></script>
    </body>
</html>