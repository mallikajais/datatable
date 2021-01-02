
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Preschool Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
</head>

<script>
$document.ready(function(){
    $('#search').DataTable();
});
</script>

<body>
    <div class="container">
        <div class="col-lg-12">
            <h2 class="text-primary text-center ">Preschool Form Data</h2>
            <div class="form-group form-inline text-center ">
            <label for="">search</label>
            <input type="searchbox"name="search"  class="form-control">
            </div>
            
        
            <table class=" table table-striped table-hover table-border" id="search">
                <tr class="bg-dark text-white text-center">
                    <th>Id</th>
                    <th>Parent Name</th>
                    <th>Email Address</th>
                    <th>Student Name</th>
                    <th>Student Gender</th>
                    <th>Student Birthday</th>
                    <th>Contact Number</th>
                    <th>Receive Message</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Zip Code</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            <?php
                $conn = new mysqli('localhost', 'root', '','preschool');
                $q="select*from info";
                $query=mysqli_query($conn,$q);
                while($result=mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $result['id'];?></td>
                    <td><?php echo $result['parentname'];?></td>
                    <td><?php echo $result['email'];?></td>
                    <td><?php echo $result['studentname'];?></td>
                    <td><?php echo $result['gender'];?></td>
                    <td><?php echo $result['birthday'];?></td>
                    <td><?php echo $result['mobile'];?></td>
                    <td><?php echo $result['yes'];?></td>
                    <td><?php echo $result['address'];?></td>
                    <td><?php echo $result['city'];?></td>
                    <td><?php echo $result['code'];?></td>
                    
                    <td><button class="btn btn-danger" > <a class="text-white" href="delete.php?id=<?php echo $result['id'];?>"> Delete</a></button></td>
                    <td><button class="btn btn-success"> <a class="text-white" href="update.php?id=<?php echo $result['id'];?>"> Update</a></button></td>
                </tr>

            <?php 
                }
            ?>
            </table>
        </div>
    </div>
</body>
</html>