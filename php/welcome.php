<?php
// start the session
session_start();
//  if  user is not logged in,  redirect user to login page
if(!isset($_SESSION['user_name']) && ($_SESSION['user_name']) !== true)
{
	header('location: login.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Welcome back</title>
<meta charset="UTF-8">
<link rel = "stylesheet" type = "text/css" href = "style.css"> 
</head>
<body>
<div class="form-element">
<h1>WELCOME BACK, <strong> <?php echo $_SESSION["user_name"]; ?></strong></h1>
<p> <a href="home.php" role= "button" aria-pressed="true">View Site</p>
<br>
<p> <a href="logout.php" role="button" aria-pressed="true">Log Out</a></p>
</div>
</body>
</html>
