<?php

session_start();
if (!isset($_SESSION['u_user'])) {
	 header("Location: login.html");
} else {
     '';
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Duel Gaming</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="menu.css">
</head>
<body>
<h1>Main Menu</h1>
<a href="">Duel Room</a>
<a href="">Deck Construct</a>
<a href="">My Profile</a>
<a href="">Profile Viewer</a>
<a href="">Rankings</a>
<a href="">Change Password</a>
<a href="logout.php">Log Out</a>
</body>
</html>