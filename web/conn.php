<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "consultation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fn= $_post['fname'];
$ln = $_post['lname'];
$email= $_post['email'];
$cont= $_post['cont'];
$msg= $_post['mess'];

 
$sql = "INSERT INTO messeges (firstname,lastname, email,contact,massege)VALUES('$fn','$ln','$email','$cont','$msg')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>