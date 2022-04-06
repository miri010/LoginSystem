<?php

//include auth_session.php file on all user panel pages 
inclued("auth_session.php")



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard - client area </title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

	<div class="form">
		<p>hey ,<?php echo $_SESSION['username'];?></p>
		<p>you are now user dashboard page.</p>
		<p><a href="logout.php">logout</p>
		

	</div>

</body>
</html>