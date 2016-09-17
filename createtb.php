<?php
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

  //$sql = "DROP TABLE response";

/*$sql = "CREATE TABLE bcitUserInfo( ".
       "user_id INT NOT NULL AUTO_INCREMENT, ".
       "username VARCHAR(100) NOT NULL, ".
       "email VARCHAR(40) NOT NULL, ".
       "passwd VARCHAR(40) NOT NULL, ".
       "PRIMARY KEY ( user_id )); "; 
*/

/*$sql = "CREATE TABLE feedBack( ".
       "user_id INT NOT NULL AUTO_INCREMENT, ".
       "username VARCHAR(100) NOT NULL, ".
       "email VARCHAR(40) NOT NULL, ".
	   "gender VARCHAR(10) NOT NULL, ".
	   "restaurant VARCHAR(50) NOT NULL, ".
	   "comments VARCHAR(200) DEFAULT NULL, ".
	   "subscribe VARCHAR(10) DEFAULT NULL, ".
       "PRIMARY KEY (user_id)); "; 	 
	   
	   */
	   
  /* $sql= "CREATE TABLE topic ( ".
     "id INTEGER NOT NULL auto_increment, ".
     " member_id INTEGER NOT NULL, ".
     "topic varchar(255) default '' NOT NULL , ".
     " detail longtext NOT NULL, ".
     "datetime varchar(25) NOT NULL default '', ".
     " PRIMARY KEY (id), ".
     "FOREIGN KEY (member_id) REFERENCES members(id) ON DELETE CASCADE ".
     ") ENGINE=MyISAM; "; */
    
    $sql= "CREATE TABLE response ( ".
      "id INTEGER NOT NULL auto_increment, ".
      "topic_id INTEGER NOT NULL, ".
      "member_name VARCHAR(100) NOT NULL, ".
      "response longtext NOT NULL, ".
      "datetime varchar(25) NOT NULL default '', ".
      "PRIMARY KEY (id), ".
      "FOREIGN KEY (topic_id) REFERENCES topic(id) ON DELETE CASCADE, ".
      "FOREIGN KEY (member_name) REFERENCES bcitUserInfo(username) ON DELETE CASCADE ".
      ") ENGINE=MyISAM; "; 
	   
  $retval = mysql_query($sql);
	 if(!$retval)
	 {
		 die('Could not create table: ' . mysql_error());
	 }
	?>