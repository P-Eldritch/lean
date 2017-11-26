<?php
 

$conn = new mysqli("localhost","root","","testing"); //xampp local server
$name    = $conn->real_escape_string($_POST['fullname']);
$phone    = $conn->real_escape_string($_POST['phone']);
$email   = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);
$query   = "INSERT INTO test(fullname,phone,email,message) VALUES('$name','$phone','$email','$message')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
  
$conn->close();
 
?>