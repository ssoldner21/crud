<?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db("crud", $con);

	$sqlInsert="INSERT INTO item (id, name) VALUES ('', '$_POST[NewItem]')";
	
	if (!mysql_query($sqlInsert,$con))
	{
		die('Error: ' . mysql_error());
	}
	echo "1 record added";
	
	mysql_close($con);
	
	header( 'Location: http://localhost/crud/index.php' );
?>