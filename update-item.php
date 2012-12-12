<!DOCTYPE html>
<html>
<head>
	<title>Edit item</title>
	<link rel="stylesheet" href="css/main.css" type="text/css" />
</head>

<body>
<div id="wrap">
	<div id="header">
	</div>
	
	<div id="content">
		<div id="main">
			<form action="update-item-run.php" method="post">
				Update Item: <input type="text" name="UpdateItem" value="<?php echo $_GET["name"]; ?>">
				<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
				<input type="submit" />
			</form>
			
			
			<!-- add these to the end of each record
			<p><a href="#">Edit Item</a></p>
			<p><a href="#">Delete Item</a></p> 
			
			Format nicely, use a stylized table, use seperate php pages for edit delete
			php redirect back to index.php 	
			-->
		</div>
	</div>
</body>

</html>

<!-- Table markup-->


