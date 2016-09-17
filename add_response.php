<?php
session_start();
require_once('config.php');

// Connect to server and select database.
mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect");
mysql_select_db(DB_DATABASE)or die("cannot select DB");
$tbl_name="response"; // Table name

// Get value of id that sent from hidden field
$id=$_POST['id'];

// get values that sent from form
$response=$_POST['response'];
$member_name=$_SESSION['user'];

$datetime=date("d/m/y H:i:s"); // create date and time

// Insert answer
$sql2="INSERT INTO $tbl_name(topic_id, member_name, response, datetime)VALUES('$id', '$member_name','$response', '$datetime')";
$result2=mysql_query($sql2);

if($result2)
	header('Location: view_topic.php?id='.$id);
else {
	echo "ERROR".mysql_error();
}

mysql_close();
?>

