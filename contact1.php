<?php require 'include/config.php';?>
<?php include 'include/header.php';?>
<h1>Contact Us</h1>
<?php


if(isset($_POST['submit']))
{//if there's data, show it
	//echo $_POST['FirstName'];
	
	$message = process_post();
	
	safeEmail('cpetri02@seattlecentral.edu', 'test subject',$message);
	echo 'Your Comments Have Been Received!</br>';
	echo 'Thanks for the input!</br>';
	echo 'We\'ll respond via email within 48 hours, if you requested information.</br>';
	
	
}else{//show the form
	echo '
	<form action="contact1.php" method="post">
	<fieldset>
	
	<label for="first name" style="padding-left:20px;display:block; margin-top:10px">First Name:</label>
	<input type="text" name="first_name" required="required" style="margin-left:20px"></br>

	
	<label for="email" style="padding-left:20px;display:block; margin-top:10px">Email:</label>
	<input type="email" name="email" required="required" placeholder="Enter a valid email address" style="margin-left:20px"/></br>
	
	
	<label for="comments" style="margin-left:20px; margin-top:10px; display:block;">Comments:</label>
	<textarea name="comments" style="margin-left:20px" rows="4" cols="50"></textarea></br>
	
	
	
	<input type="submit" value="Click me!" name="submit" style="margin-left:20px; margin-top:10px; margin-bottom:10px"/></br>
	
	</fieldset>
	</form>
	';
}

?>
<?php include 'include/footer.php';?>