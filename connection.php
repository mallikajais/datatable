<?php

$parentname=$_POST['parentname'];
$email=$_POST['email'];
$studentname = $_POST['studentname'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$mobile = $_POST['mobile'];
$text = $_POST['yes'];
$address = $_POST['address'];
$city = $_POST['city'];
$code = $_POST['code'];

// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "preschool";

// Create connection
$conn = new mysqli('localhost', 'root', '','preschool');
// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO info (parentname, email,studentname,gender,birthday,
mobile,yes,address,city,code)
VALUES ('$parentname', '$email', '$studentname','$gender','$birthday',
'$mobile','$text','$address','$city','$code')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  header('location:display.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
