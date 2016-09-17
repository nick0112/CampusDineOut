<?php
	require_once('config.php');

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect");
	mysql_select_db(DB_DATABASE)or die("cannot select DB");
	$tbl_name="topic"; // Table name


	$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
	// ORDER BY id DESC is order result by descending
	$result=mysql_query($sql);
?>
<head>
<meta charset="utf-8">
		<title>Campus Dine out</title>
		<link href="forum.css" rel="stylesheet" type="test/css">
	    <link href="buttons.css" rel="stylesheet" type="test/css">

</head>
<body>

<div class = "CSSTableGenerator">
<table align="center" cellpadding="3" cellspacing="1" >

<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){ // Start looping table row
?>

<tr>
<td ><?php echo $rows['id']; ?></td>
<td ><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td ><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection
}
mysql_close();
?>
<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="add_topic_form.php"><font size="3"><strong>Create New Topic</strong> </font> </a></td>
</tr>

</table>

</div>

<br>
<div id="button-box">

    		<a href="index.php" class="button">Return Home</a>

    	</div>
</body>

