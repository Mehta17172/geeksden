<?php

session_start();
$_SESSION['userid']=$_POST['id'];


$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "root";
 $dbname = "project";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);


$email =$conn->real_escape_string($_POST['id']);
$password =$conn->real_escape_string($_POST['password']);
$query ="SELECT * FROM user_info WHERE userid ='".$email."' AND password = '".$password."';";
$query1="SELECT name FROM user_info WHERE userid = '$email';";
$res = mysqli_query($conn,$query);
$rows = mysqli_num_rows($res);
    if ($rows==1) 
    {
        include 'q1.php';
    }
    else 
    {
        echo "user name and password not found";

    }

$result = $conn->query($query1);

if ($result->num_rows > 0) 
	{
        while($row = $result->fetch_assoc()) 
        {
         $_SESSION['username']= $row["name"];
    }}



$conn->close();


    ?>