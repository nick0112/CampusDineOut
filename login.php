<?php
	//Start session
	session_start();
	
	if(isset($_SESSION['user'])!="")
{
	header("Location: index.php");
}
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the REQUEST values - parameters may come from GET or POST
	$email = clean($_REQUEST['email']);
	$password = clean($_REQUEST['password']);
	
	
	
	/*$email = mysql_real_escape_string($_POST['email']);
	$password = md5(mysql_real_escape_string($_POST['password']));
	
	$name = trim($name);
	$email = trim($email);
	$password = trim($password); */
	
	
	//Input Validations
	if($email == '') {
		$errmsg_arr[] = 'Login email missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		?>
        <script>alert('Seems Wrong !');</script>
        <?php
		//header("location: login.html");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM bcitUserInfo WHERE email='$email' AND passwd='$password'";
	$result=mysql_query($qry);
	$user=mysql_fetch_assoc($result);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1 ) {
			//Login Successful
			$_SESSION['user'] = $user['username'];
			header("location: ".HOMEURL);
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'Login failed';
			$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
			
		?>
        <script>alert('Username / Password Seems Wrong ! please enter again');
		window.location="login.html";
		</script>
        <?php

		}
	}else {
		die("Query failed");
	}
?>
