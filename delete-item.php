<?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db("crud", $con);

	mysql_query("DELETE FROM item WHERE id = $_GET[id]");
	
	mysql_close($con);
	
	header( 'Location: http://localhost/crud/index.php' );
?>