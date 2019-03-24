<!DOCTYPE html>
<html lang="en">
<head>

	<?php include 'include/head.php'; ?>
	<title>Shoping Temp Website</title>

	<?php $link="Null"; ?>



</head>
<body>


	<?php include 'include/header.php'; ?>

	<div class="container">
		<br>



			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
		<div class="well well-small">
					<center>
					<h4>Sign In</h4>
						</center>
					<form action="" method="POST" >
						<div class="form-group">
							<label class="form-label" for="inputEmail">Name</label>
								<input class="form-control"  name="name" type="text" placeholder="Enter Full Name">
						</div>

						<div class="form-group">
							<label class="form-label" for="inputEmail">Email</label>
								<input class="form-control" name="email"  type="text" placeholder="Enter Email">
						</div>
						<div class="form-group">
							<label class="form-label" for="inputPassword">Password</label>

								<input type="password" name="password" class="form-control" placeholder="Enter Password">

						</div>
						<div class="form-group">
							<label class="form-label" for="inputPassword">Confirm Password</label>

								<input type="password" name="cpassword" class="form-control" placeholder="Enter Password Again">

						</div>
						<div class="form-group">
								<button type="submit" name="submit" class="defaultBtn">Sign Up</button>


						</div>
					</form>
					<hr>

								                                <?php

								                                if(isset($_POST['submit'])){

								                                $name = $_POST['name'];

								                                $email = $_POST['email'];
								                                $password = $_POST['password'];
								                                $cpassword = $_POST['cpassword'];

								                                if($password!=$cpassword){
								                                	echo'Passwords Do not Match';
								                                	
								                                }
								                                else{

								            $rows =mysqli_query($con,"SELECT username FROM users where username='$email' " ) or die(mysqli_error($con));
								                      
								               
								                while($row=mysqli_fetch_array($rows)){
								                    
								                    $chkemail = $row['username'];

								                    
								                   }

								                if(!empty($chkemail)){
								                    echo'<h3 style="color:black;">Already used Email.</h3>';
					                    

								                }else{



								                            
								    $data=mysqli_query($con,"INSERT INTO users (name,username,password)VALUES ('$name','$email','$password')")or die( mysql_error() );
								                        
								        echo'<h3 style="color:black;">Account Created Successfully.</h3>';
								        echo'<h3 style="color:black;">Please <a href="login.php"> Login Now...</a></h3>';


								                }

								               }

								}

								 ?>



 					<hr>
					<h5>Already Have Account?</h5>
					<center>
					<a href="login.php" class="btn btn-default">Sign In.</a>
				</center>
				</div>
				</div>

			</div>





	</div><!-- /container -->
	<?php include 'include/footer.php'; ?>



</body>
</html>