<?php

?>
<html>
<head>
<meta charset="utf-8">
<title>CT Marks</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['course_no'])){
		 $course_no = $_POST['course_no'];
		  $roll = $_POST['roll'];
		   $ct_2 = $_POST['ct_2'];
		   
		   
	$course_no = stripslashes($course_no);
		$course_no = mysql_real_escape_string($course_no);
		$roll = stripslashes($roll);
		$roll = mysql_real_escape_string($roll);
		$ct_2 = stripslashes($ct_2);
		$ct_2 = mysql_real_escape_string($ct_2);
   
		$query = "UPDATE ctmarks SET ct_2='$ct_2' WHERE ctmarks.course_no='$course_no' and ctmarks.roll='$roll' ";                  
	$result = mysql_query($query);
	
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/></div>";
	} }
    else{
?>
<div class="form">
<h1>CT2 marks</h1>
<form name="registration" action="" method="post">
<input type="text" name="course_no" placeholder="course_no" required />
<input type="roll" name="roll" placeholder="roll" required />
<input type="text" name="ct_2" placeholder="Ct_2" required />
<input type="submit" name="submit" value="Submit" />
</form>
</div>
<?php } ?>
</body>
</html>
