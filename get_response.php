<?php 
require_once("connection.php");
$name=mysqli_real_escape_string($con,$_POST['your_name']);
$email=mysqli_real_escape_string($con,$_POST['your_email']);
$phone=mysqli_real_escape_string($con,$_POST['your_phone']);
$comment=mysqli_real_escape_string($con,$_POST['comments']);

	
	$sql="INSERT INTO contact_form_info (name, email, phone, comments) VALUES ('".$name."','".$email."', '".$phone."', '".$comment."')";
	
	if(!$result = $con->query($sql)){
		die('There was an error running the query [' . $conn->error . ']');
	}
	else
	{
		echo "Thank you! We will contact you soon";
	}

?>
