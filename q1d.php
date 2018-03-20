<?php
session_start();
echo "User Name : ";
echo $_SESSION['username'];
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "root";
 $dbname = "project";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

$course =$conn->real_escape_string($_POST['course']);
$qual =$conn->real_escape_string($_POST['qual']);
$interest =$conn->real_escape_string($_POST['interest']);

$query ="UPDATE  info SET course = '$course', qualification = '$qual', interest = '$interest' WHERE userid = '".$_SESSION['username']."';";
$result = $conn->query($query);

if (!($result)) 
	{
		 die("Couldn't enter data: ".$conn->error);
	} 
$conn->close();

include 'homepage.php';

?>