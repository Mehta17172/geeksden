<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "project";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

$fname = $conn->real_escape_string($_POST['fname']);
$lname = $conn->real_escape_string($_POST['lname']);
$name =  $fname." ".$lname;
$email = $conn->real_escape_string($_POST['e_id']);
$gender = $conn->real_escape_string($_POST['gender']);
$p_no = $conn->real_escape_string($_POST['p_no']);
$password_1 = $conn->real_escape_string($_POST['password_1']);
$password_2 = $conn->real_escape_string($_POST['password_2']);

	
if  ($password_1 != $password_2 )
	{
		echo  "The two passwords do not match";
	}

$query ="INSERT INTO user_info VALUES ('$email','$fname','$lname','$password_1','$gender','$p_no','$name');";
$query1 ="INSERT INTO info (userid) VALUES ('".$email."');";
$query1 ="INSERT INTO timeline (userid) VALUES ('".$email."');";
$result = $conn->query($query);
$result1 = $conn->query($query1);
if (!($result)) 
	{
		 die("Couldn't enter data: ".$conn->error);
	} 
if (!($result1)) 
	{
		 die("Couldn't enter data: ".$conn->error);
	} 
$conn->close();

include 'Login.php';

?>