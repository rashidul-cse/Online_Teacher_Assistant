
<!DOCTYPE html>
<html>
<head>
</head>
<body>




<form action="" method="POST">

Your Mail <br/><input type="text" name="email" placeholder="Email" required />  <br/><br/><br/>

<input name="submit" type="submit" value="Submit" />
</form>



<?php
	require('db.php');
	
require 'vendor/autoload.php';
require 'lib/SendGrid.php';

$sendgrid_apikey = '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';
	
	
	$email= $_POST['email'];
	$submit= $_POST['submit'];
	
	
	if($submit){
	$email_check=mysql_query("SELECT * FROM users WHERE Email= '".$email."'  ");
	$count=mysql_num_rows($email_check);
	 
	   if($count!=0){
	   $random=rand(72891,92729);
	   $new_password=$random;
	   $email_password=$new_password;
	   $new_password=($new_password);
	   
	   mysql_query("update users set Password= '".$new_password."' WHERE email = '".$email."' ");
	   
	   
}	   
	 $sendgrid = new SendGrid($sendgrid_apikey);
$email1 = new SendGrid\Email();
$email1
    ->addTo($email)
    ->setFrom('saikat@cse.ruet.com')
    ->setSubject('Demo Email')
    ->setText($new_password);

$result = $sendgrid->send($email1);

if($result->code == 200)
{
    echo "Mail sent!!!" . PHP_EOL;
}
else
{
    echo "not sent!!!" . PHP_EOL;
}
}

?>



</body>
</html>
