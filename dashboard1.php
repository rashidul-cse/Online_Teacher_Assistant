<?php

?>

<?php 
require('db.php');
include("auth1.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Attendence and Class Test</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>This is another secured page.</p>
<p><a href="index1.php">Home</a></p>
<p><a href="attendenceevent1.php">Attendence</a></p>
<a href="ctmarks1.php">Class Test Marks</a> <br> <br>
<a href="logout1.php">Logout</a>
</div>
</body>
</html>
