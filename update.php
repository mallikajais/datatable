
<?php
$conn = new mysqli('localhost', 'root', '','preschool');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $update=true;
  $record = mysqli_query($conn, "SELECT * FROM info WHERE id=$id");

  if (count($record) == 1 ) {
    $n = mysqli_fetch_array($record);
    $parentname=$n['parentname'];
    $email=$n['email'];
    $studentname = $n['studentname'];
    $gender = $n['gender'];
    $birthday = $n['birthday'];
    $mobile = $n['mobile'];
    $text = $n['yes'];
    $address = $n['address'];
    $city = $n['city'];
    $code = $n['code'];
    
  }

 ?>
 


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .form-group{
        width:70%;
        margin:auto;
        margin-bottom: 15px;
    }
    h1{
      color:#0d47a1;
      margin-top:40px;
      margin-bottom:40px;
    }
    body{
      background-image: linear-gradient(to right, #2196f3a6,#2196f314);
    }
</style>
<body>

<div class="container-fluid text-center">
  <h1>Preschool Package Registration Form</h1>
  <form action="connection.php" method="post" class="text-center">
    <div class="form-group form-inline">
      <label for="name">Parent Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Parent Name" name="parentname" 
      value="<?php echo $parentname; ?>">
    </div>
    <div class="form-group form-inline">
      <label for="email">Email Address:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email Address" name="email" 
      value="<?php echo $email; ?>">
    </div>
    <div class="form-group form-inline">
      <label for="name">Student Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Student Name" 
      name="studentname" value="<?php echo $studentname; ?>">
    </div>
    
    <div class="form-group form-inline">
      <label for="gender">Student Gender:</label>
      <label><input type="checkbox" name="gender" value="<?php echo $gender; ?>"> Female</label>
      <label><input type="checkbox" name="gender" value="<?php echo $gender; ?>"> Male</label>
      <label><input type="checkbox" name="gender" value="<?php echo $gender; ?>">Other</label>
    </div>
    <div class="form-group form-inline">
      <label >Student Birthday:</label>
      <input type="number" class="form-control"  placeholder="Enter  Birthday" 
      value="<?php echo $birthday; ?>" name="birthday">
    </div>
    <div class="form-group form-inline">
      <label >Contact Number:</label>
      <input type="number" class="form-control"  placeholder="Enter Contact Number" 
      value="<?php echo $mobile; ?>" name="mobile">
    </div>
    <div class="form-group form-inline">
      <label >Do you recieve text at this number ?</label>
      <label><input type="checkbox" name="yes" value="yes"> yes</label>
      <label><input type="checkbox" name="yes" value="no"> No</label>
      
    </div>
    <div class="form-group form-inline">
      <label >Address:</label>
      <input type="address" class="form-control"  placeholder="Enter address"
      value="<?php echo $address; ?>" name="address">
    </div>
    <div class="form-group form-inline">
      <label >City:</label>
      <input type="text" class="form-control"  placeholder="Enter City"
      value="<?php echo $city; ?>" name="city">
    </div>
    <div class="form-group form-inline">
      <label>Zip Code:</label>
      <input type="number" class="form-control"  placeholder="Enter Zipcode"
      value="<?php echo $code; ?>" name="code">
    </div>
    <button type="submit" class="btn btn-primary ">Submit</button>
  </form>
</div>

<?php if ($update == true): ?>
	<button class="btn btn-primary" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn btn-primary" type="submit" name="save" >Save</button>
<?php endif ?>
<?php
  }
?>

 <?php

// $conn = new mysqli('localhost', 'root', '','preschool');
// $id=$_GET['id'];
// $parentname=$_POST['parentname'];
// $email=$_POST['email'];
// $studentname = $_POST['studentname'];
// $gender = $_POST['gender'];
// $birthday = $_POST['birthday'];
// $mobile = $_POST['mobile'];
// $text = $_POST['yes'];
// $address = $_POST['address'];
// $city = $_POST['city'];
// $code = $_POST['code'];

// $q = "update  info set id=$id ,parentname='$parentname', email='$email',
// studentname='$studentname',gender='$gender',birthday='$birthday',
// mobile='$mobile',yes='$text',address='$address',city='$city',code='$code' WHERE id=$id ";

                
// $query=mysqli_query($conn,$q);
// header('location:display.php');

?> 

</body>
</html>