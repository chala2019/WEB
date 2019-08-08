<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "about";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $name= $_post['name'];
 $tele= $_post['TEL'];
 $email= $_post['EMAIL'];
 $say= $_post['SAY'];


$sql = "INSERT INTO INFO (nme, contact, email,say)VALUES('$name','$tele','$email','$say')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>