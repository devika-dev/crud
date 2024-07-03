<?php 
include 'connection.php';
$id=$_GET['updateid'];

$sql="SELECT * from crudtb where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$message=$row['message'];


  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $message=$_POST['message']; 

    $sql="UPDATE crudtb set id='$id', name='$name', email='$email', mobile='$mobile', message='$message' where id=$id";
    $result=mysqli_query($con,$sql);
    if ($result) {
      
header("location:display.php");

    }else{
        die(mysqli_error($con));
    }
  }


?>



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
 
 <section class="form-crud">
 	<div class="container"> 
 		<div class="valitations">
 			<div>
 				<div class="col-md-8 offset-md-2">
 					<img src="user.png">
 		
 			<form action="" method="POST">
 				<div class="row">
 					<div class="col-md-12">
 						<h5>Enter A User Here!</h5>
 					</div>
 					 <div class="col-md-6">
 					 		<input class="form-control" name="name" placeholder="Enter a Name" value=<?php echo $name; ?> >
 					 </div>
 					  <div class="col-md-6">
 					 	<input class="form-control" name="email" placeholder="Enter a Valid Email" value=<?php echo $email; ?>>
 					 </div>
 					  <div class="col-md-12">
 					 		<input class="form-control" name="mobile" placeholder="Enter Mobile Number" value=<?php echo $mobile; ?>>
 					 </div>
 					  <div class="col-md-12">
 					 <textarea class="form-control" name="message" placeholder="Write something.." value=<?php echo $message; ?>> </textarea>
 					 </div>
 					  <div class="col-md-12">
 					    <input type="submit" name="submit" class="btn btn-success" value="Update">
 					 </div>
 				</div>
 			
 					</div>
 				</div>
 			
 				
 			</form>
 		</div>
 	</div>
 </section>

   
</body>
</html>

