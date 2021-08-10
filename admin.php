<?php

	session_start();
	
	# if someone is already logged in
	if((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin']==true)) {
		if((isset($_SESSION['admin'])) && ($_SESSION['admin']==true)) {
			echo "You are already logged in.<br />";
			echo '<p><a href="adminpanel.php">Administration panel</a>
				<a href="index.php">Home page</a>
				<a href="logout.php">Log out</a></p>';
		}
		else {
			header("Location: index.php");
		}
		exit();
	}

?>

<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Ideas4learning</title>
</head>

<body>

	<h3 align="left">Log in for this platform</h3>
	<form action="adminlogin.php" method="post">
		E-mail:<br/><input type="text" name="email" /><br/>
		Password:<br/><input type="password" name="pswd" /><br/>
		<br/><input type="submit" value="Log in" />
	</form>

	<br />

	<?php
		# if variable $_SESSION['error'] exists in this session, the warning will be shown below the login form
		if(isset($_SESSION['error'])) {
			echo $_SESSION['error'];
			unset($_SESSION['error']);
		}
	?>

</body>

</html>
