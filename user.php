<?php 
include 'connection.php';
  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $message=$_POST['message']; 

    $sql="INSERT INTO crudtb (name,email,mobile,message)VALUES('$name','$email','$mobile','$message')";
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
 					 		<input type="text" class="form-control" name="name" placeholder="Enter a Name" required>
 					 </div>
 					  <div class="col-md-6">
 					 	<input type="email" class="form-control" name="email" placeholder="Enter a Valid Email" required>
 					 </div>
 					  <div class="col-md-12">
 					 		<input type="tel"  min="10" class="form-control" name="mobile" placeholder="Enter Mobile Number" required>
 					 </div>
 					  <div class="col-md-12">
 					 <textarea style="text" id="message" class="form-control" name="message" placeholder="Write something.." required></textarea>
 					 </div>
 					  <div class="col-md-12">
 					    <input type="submit" name="submit" class="btn btn-success" value="Submit">
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

