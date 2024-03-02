<?php 
include "db_conn.php";

if(isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `users`(`id`, `full_name`, `email`, `age`, `gender`)
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
    <!--animate -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
  </head>
  <body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5 animate__animated animate__backInRight animate__slow	2s" style="background-color:black; color:white;">
   APPLICATION TO ADD USERS IN OUR COMPANY
   </nav>

<div class="container animate__animated animate__backInRight animate__delay-2s animate__slower	2s">
    <?php 
    if(isset($_GET['msg'])){
        $msg = $_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        '.$msg.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <a href="add_new.php"class="btn btn-dark mb-3">Add New</a>
    <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FULL NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">AGE</th>
      <th scope="col">GENDER</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql ="SELECT *FROM `user`";
    $result =mysqli_query($conn, $sql);
    while($row =mysqli_fetch_assoc($result)){
        ?>
              <tr>
      <th><?php echo $row['id'] ?></th>
      <td><?php echo $row['full_name']  ?></td>
      <td><?php echo $row['email']  ?></td>
      <td><?php echo $row['age']  ?></td>
      <td><?php echo $row['gender']  ?></td>
      <td>
        <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
        <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
      </td>
    </tr>
        <?php
    }
    ?>
  
  </tbody>
</table>
</div>

    <!-- boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>