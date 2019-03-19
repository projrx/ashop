<!DOCTYPE html>
<html lang="en">
<head>

	<?php include 'include/head.php'; ?>
	<title>Shoping Temp Website</title>




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
					<form>
						<div class="form-group">
							<label class="form-label" for="inputEmail">Name</label>
								<input class="form-control"  type="text" placeholder="Enter Full Name">
						</div>

						<div class="form-group">
							<label class="form-label" for="inputEmail">Email</label>
								<input class="form-control"  type="text" placeholder="Enter Email">
						</div>
						<div class="form-group">
							<label class="form-label" for="inputPassword">Password</label>

								<input type="password" class="form-control" placeholder="Enter Password">

						</div>
						<div class="form-group">
							<label class="form-label" for="inputPassword">Confirm Password</label>

								<input type="password" class="form-control" placeholder="Enter Password Again">

						</div>
						<div class="form-group">
								<button type="submit" class="defaultBtn">Sign Up</button>


						</div>
					</form>
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