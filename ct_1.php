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
		   $ct_1 = $_POST['ct_1'];
		   
		   
	$course_no = stripslashes($course_no);
		$course_no = mysql_real_escape_string($course_no);
		$roll = stripslashes($roll);
		$roll = mysql_real_escape_string($roll);
		$ct_1 = stripslashes($ct_1);
		$ct_1 = mysql_real_escape_string($ct_1);
   
		$query = "INSERT into ctmarks (course_no,Roll,ct_1) VALUES ('$course_no','$roll','$ct_1')";
	$result = mysql_query($query);
	
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/></div>";
	} }
    else{
	



?>


<div class="form">
<h1>CT1 marks</h1>
<form name="registration" action="" method="post">
<input type="text" name="course_no" placeholder="course_no" required />
<input type="roll" name="roll" placeholder="roll" required />
<input type="text" name="ct_1" placeholder="ct_1" required />
<input type="submit" name="submit" value="Submit" />
</form>


<?php	
//on pageload
session_start();
$idletime=60;//after 60 seconds the user gets logged out 
if (time()-$_SESSION['timestamp']>$idletime){
    session_destroy();
    session_unset();
}else{
    $_SESSION['timestamp']=time();
}
//on session creation
$_SESSION['timestamp']=time();

?>

</div>




<?php } ?>




</body>
</html>
