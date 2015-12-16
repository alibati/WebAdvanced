<?php

$form=$_REQUEST;

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "alibati";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql = "INSERT INTO contacts (name, email, message,reason)
VALUES ('".$form['name']."','".$form['email']."','".$form['message']."','".$form['reason']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    header("location:contact.php?message=thanks");



?>