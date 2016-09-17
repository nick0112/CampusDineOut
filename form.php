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
	 
	//Sanitize values received from the form. Prevents SQL injection
	
	$name = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['email']);
	$gender= mysql_real_escape_string($_POST['gender']);
	$restaurant = mysql_real_escape_string($_POST['Restaurant']);
	$comment= mysql_real_escape_string($_POST['comment']);
	$subscribe= mysql_real_escape_string($_POST['subscribe']);
	
	$name = trim($name);
	$email = trim($email);
	$gender = trim($gender);
	$restaurant = trim($restaurant);
	$comment = trim($comment);
    $subscribe = trim($subscribe);


	// email exist or not
	$query = "SELECT * FROM bcitUserInfo WHERE email='$email'";
	$result = mysql_query($query);
	
	
	if($result){
	if(mysql_num_rows($result) == 1){// if email found then submit info
		
		if(mysql_query("INSERT INTO feedBack(username, email, gender, restaurant, comments, subscribe) VALUES('$name','$email','$gender','$restaurant','$comment','$subscribe')"))
		{    
			header("location: submit.html");
			
			exit();
		}
		else
		{
			?>
			<script>alert('submit failed');
			window.location="form.html";</script>
			<?php
		}		
	}
	else{
			?>
			<script>alert('you are not our member yet,go signUp ...');
			window.location="form.html";
			</script>
			<?php
			
			
	}
   }else{
	   die("Query failed");
   }
?>
