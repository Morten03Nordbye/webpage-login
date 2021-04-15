<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="welcome.css" rel="stylesheet" type="text/css" media="all" />
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div id="wrapper">
	    <div id="header-wrapper">
		    <div id="header" class="container">
			    <div id="logo">
				    <h1><a href="#">Smart Fitness</a></h1>
			    </div>
		    </div>
	    </div>  
    <div id="tekst1">
        <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Smart Fitness internal</h1>
    </div>
    <p>
    <a href="reset-password.php" class="button">Reset Your Password</a>
    <a href="logout.php" class="button">Sign Out of Your Account</a>
    <a href="index.html" class="button">Go back</a>
    </p>
</body>
</html>
