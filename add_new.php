<?php 
include "db_conn.php";

if(isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `user`(`id`, `full_name`, `email`, `age`, `gender`)
     VALUES (null,'$full_name','$email','$age','$gender')";

     $result = mysqli_query($conn,$sql);

     if($result){
        header("location: index.php?msg=New record created successfully");
     }
     else{
        echo"Failed: " .mysqli_error($conn);
     }
}




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APPLICATION ADD USERS</title>

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:black; color:white;">
   APPLICATION TO ADD USERS IN OUR COMPANY
   </nav>

   <div class="contaire">
    <div class="text-center mb-4">
        <h3>Add New User</h3>
        <p class="text-muted">Complete the form below to add a new user</p>
    </div>


    <div class="container d-flex justify-content-center">
    <form action="" method="post" style="width:50vw;min-width:300px;">
        <div class="row">
            <div class="col">
                <label class="form-label" for="">Full Name:</label>
                <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
            </div>
            <div class="col">
                <label class="form-label" for="">Email:</label>
                <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
            </div><br><br><br>
            <div class="mb-3">
                <label class="form-label" for="">Age:</label>
                <input type="number" name="age" class="form-control" placeholder="Age" required>
            </div>
        </div>

        <div class="form-group mb-3">
            <label >Gender:</label>  &nbsp;
            <input type="radio" name="gender" class="form-check-input" id="male" value="male" required>
            <label for="male" class="form-input-label">Male</label>
                &nbsp;
            <input type="radio" name="gender" class="form-check-input" id="female" value="female" required>
            <label for="female" class="form-input-label">Female</label>
        </div>

        <div>
            <button type="submit" class="btn btn-success" name="submit">Save</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
    </form>
    </div>
   </div>

    <!-- boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>