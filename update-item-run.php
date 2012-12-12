<?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db("crud", $con);

	$sqlUpdate="UPDATE item 
				SET name='$_POST[UpdateItem]'
				WHERE id='$_POST[id]';";
	
	if (!mysql_query($sqlUpdate,$con))
	{
		die('Error: ' . mysql_error());
	}
	echo "1 record added";
	
	mysql_close($con);
	
	header( 'Location: http://localhost/crud/index.php' );
?>