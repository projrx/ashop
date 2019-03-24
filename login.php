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
 					<form action="access.php" method="post">
 						<div class="form-group">
 							<label class="form-label" for="inputEmail">Email</label>
 								<input class="form-control" name="username"  type="text" placeholder="Email">
 						</div>
 						<div class="form-group">
 							<label class="form-label" for="inputPassword">Password</label>

 								<input type="password" name="password" class="form-control" placeholder="Password">

 						</div>
 						<div class="form-group">
 								<button type="submit" name="login" class="defaultBtn">Sign in</button> <a href="#">Forget password?</a>


 						</div>
 					</form>
 					<hr>
 					<center><span><?php if(!empty($_GET['error'])) echo 'Username or Password is Invalid' ?></span></center>
 					<center><span><?php if(!empty($_GET['success'])) echo 'Account Created. Please Login.' ?></span></center>
 					<hr>



 					<h5>Don't have Account?</h5>
 					<center>
 					<a href="signup.php" class="btn btn-default">Let's Create one Quickly.</a>
 				</center>
 				</div>
 				</div>

 			</div>



 			

 	</div><!-- /container -->
 	<?php include 'include/footer.php'; ?>



 </body>
 </html>