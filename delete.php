<?php

$conn = new mysqli('localhost', 'root', '','preschool');
$id=$_GET['id'];
$q=" DELETE FROM info WHERE  id=$id ";
mysqli_query($conn,$q);
header('location:display.php');

?>