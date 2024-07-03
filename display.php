<?php include 'connection.php'; ?>


<!DOCTYPE html>
<html>
<head>
<title> CRUD Oparation </title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
<section class="table-display text-center">
    <div class="container">
        <div class="row">
            <div class="table-btn">
              <a href="user.php"> Add User</a> 
            </div>
               <div class="table">
                   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Message</th>
      <th scope="col">Opertation</th>
    </tr>
  </thead>
  <tbody>

    <?php 

    $sql="SELECT * FROM crudtb";
    $result=mysqli_query($con,$sql);
    if($result)
{
 while($row=mysqli_fetch_assoc($result))
 {
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $message=$row['message'];
    echo '<tr>
    <td>'.$id.'</td>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$mobile.'</td>
    <td>'.$message.'</td>
    <td>
    <button class="btn btn-success"><a href="update.php?updateid='.$id.'" class="text-white"> Update</a></button>
    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-white"> Delete</a></button>
    </td>
    </tr>';
 }

}
    ?>
   

  </tbody>
</table> 
               </div>
        </div>
    </div>
</section>

   
</body>
</html>

