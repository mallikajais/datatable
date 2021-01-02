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
      <input type="text" class="form-control" id="name" placeholder="Enter Parent Name" name="parentname">
    </div>
    <div class="form-group form-inline">
      <label for="email">Email Address:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email Address" name="email">
    </div>
    <div class="form-group form-inline">
      <label for="name">Student Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Student Name" name="studentname">
    </div>
    
    <div class="form-group form-inline">
      <label for="gender">Student Gender:</label>
      <label><input type="checkbox" name="gender" value="female"> Female</label>
      <label><input type="checkbox" name="gender" value="male"> Male</label>
      <label><input type="checkbox" name="gender" value="other">Other</label>
    </div>
    <div class="form-group form-inline">
      <label >Student Birthday:</label>
      <input type="number" class="form-control"  placeholder="Enter  Birthday" name="birthday">
    </div>
    <div class="form-group form-inline">
      <label >Contact Number:</label>
      <input type="number" class="form-control"  placeholder="Enter Contact Number" name="mobile">
    </div>
    <div class="form-group form-inline">
      <label >Do you recieve text at this number ?</label>
      <label><input type="checkbox" name="yes" value="yes"> yes</label>
      <label><input type="checkbox" name="yes" value="no"> No</label>
      
    </div>
    <div class="form-group form-inline">
      <label >Address:</label>
      <input type="address" class="form-control"  placeholder="Enter address" name="address">
    </div>
    <div class="form-group form-inline">
      <label >City:</label>
      <input type="text" class="form-control"  placeholder="Enter City" name="city">
    </div>
    <div class="form-group form-inline">
      <label>Zip Code:</label>
      <input type="number" class="form-control"  placeholder="Enter Zipcode" name="code">
    </div>
    <button type="submit" class="btn btn-primary ">Submit</button>
  </form>
</div>

</body>
</html>