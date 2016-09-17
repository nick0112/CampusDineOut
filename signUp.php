<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	
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
	
	//Sanitize the POST values
	//$name = clean($_POST['name']);
	//$eamil = clean($_POST['email']);
	//$password = clean($_POST['signUpPassword']);
	
	$name = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['signUpPassword']);
	
	$name = trim($name);
	$email = trim($email);
	$password = trim($password);
	
	// email exist or not
	$query = "SELECT * FROM bcitUserInfo WHERE email='$email'";
	$result = mysql_query($query);
	
	
	if($result){
	if(mysql_num_rows($result) == 0){// if email not found then register
		
		if(mysql_query("INSERT INTO bcitUserInfo(username, email, passwd) VALUES('$name','$email','$password')"))
		{    
			header("location: thanks.html");
			
			exit();
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}		
	}
	else{
			?>
			<script>alert('Sorry Email ID already taken ...');
			window.location="signUp.html";
			</script>
			<?php
			
			
	}
   }else{
	   die("Query failed");
   }
?>
