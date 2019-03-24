 <!DOCTYPE html>
 <html lang="en">
 <head>

 	

 	<?php include 'include/head.php'; ?>
 	<title>My Account</title>
<?php 
 	if(!isset($_SESSION['username'])){
 		header("location:login.php");
 	}


 	?>
	<?php $link="Null"; ?>



	    <?php
	      if(isset($_POST['info'])){
	        $msg="Unsuccessful" ;

	        $name=$_POST['name'];
	        $lname=$_POST['lname'];
	        $address=$_POST['address'];
	        $mobile=$_POST['mobile'];
	        $phone=$_POST['phone'];

	  



	        $sql = "UPDATE users SET `name` = '$name',`phone` = '$phone',`mobile` = '$mobile',`address` = '$address',`lname` = '$lname' WHERE `id` =$userid";

	     


	        mysqli_query($con, $sql) ;
	        ($msg=mysqli_error($con));
	        if(empty($msg))  $msg="Saved";
	      }
	?>


	    <?php
	      if(isset($_POST['confirm'])){
	        $msg="Unsuccessful" ;

	        $rows =mysqli_query($con,"SELECT * FROM orders where status='cart' AND actid='$userid'" ) or die(mysqli_error($con));
	        $n=0;
	        $stotal=0;

	        while($row=mysqli_fetch_array($rows)){

	          $oid = $row['id']; 

	          $status ='confirm'; 

	        $sql = "UPDATE orders SET `status` = '$status' WHERE `id` =$oid";

	        mysqli_query($con, $sql) ;

	     }

	     	header('location:myaccount.php?done=1');
	     	
	      }
	?>



 </head>
 <body>


 	<?php include 'include/header.php'; ?>

 	<div class="container">
 		<br>


 		<br>

		<div class="well well-small">
			<H3>My Account Details:</H3>

			<div class="row">

				<?php

				$rows =mysqli_query($con,"SELECT * FROM users where id='$userid' " ) or die(mysqli_error($con));
				$n=0;

				while($row=mysqli_fetch_array($rows)){

				  $name = $row['name']; 
				  $lname = $row['lname']; 
				  $email = $row['username']; 
				  $phone = $row['phone']; 
				  $mobile = $row['mobile'];
				  $address = $row['address'];
				}
				?>
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
				<form action="" method="POST">
					<div class="row">
						<span style="line-height: 2.5" class="col-md-2">First Name: </span><div class="col-md-4"><input type="test" name="name" class="form-control" value="<?php echo $name ?>"></div>
						<span style="line-height: 2.5" class="col-md-2">Last Name: </span><div class="col-md-4"><input type="test" name="lname" class="form-control" value="<?php echo $lname ?>"></div><br></div>
					<br>

					<div class="row">
						<span class="col-md-2">Email:</span><span class="col-md-4"><input type="Email" name="username" class="form-control" readonly="" value="<?php echo $email ?>"></span>
					</div>
					<br>
					<div class="row">
						<span class="col-md-2">Mobile:</span><span class="col-md-4"><input type="text" name="mobile" class="form-control" value="<?php echo $mobile ?>"></span><span class="col-md-2">Phone:</span><span class="col-md-4"><input type="text" name="phone"  value="<?php echo $phone ?>" class="form-control"></span>
					</div>
					<br>
					<div class="row">
						<span class="col-md-2">Shipping Address:</span><span class="col-md-10"><input type="text" name="address" class="form-control" value="<?php echo $address ?>"></span>
					</div>
					<br>
					<center><button class="btn" name="info">Update</button></center>

				</form>

				</div>
			</div>
			<hr>
			<div class="row">

				<?php 

				$rows =mysqli_query($con,"SELECT * FROM orders where status='cart' AND actid='$userid'" ) or die(mysqli_error($con));
				$n=0;
				$stotal=0;

				while($row=mysqli_fetch_array($rows)){

				  $oid = $row['id']; 
				  $proslug = $row['proslug']; 
				  $qty = $row['qty']; 

				  $type = $row['type']; 

				  $rowsx =mysqli_query($con,"SELECT name,price,img FROM $type where slug='$proslug' " ) or die(mysqli_error($con));
				  while($rowx=mysqli_fetch_array($rowsx)){

				    $price = $rowx['price'];  
				    $proname = $rowx['name']; 
				    $img = $rowx['img']; 
				    $total = $qty*$price;
				    $stotal = $stotal+$total;
				}
			}
				  

				  ?>

				  <center>
				  	<h3>Total Bill: Rs.<?php echo number_format($stotal) ?>/-</h3>
				  <br>
				  <form action="" method="post">
				  	<h4>Payment Type:</h4>
				  	<div class="input-group">
				  <input type="radio" name="pay" checked="">Cash On Deleivery
				  <input type="radio" name="pay" style="margin-left: 50px">&nbsp;<img src="images/pay.jpg" height="50px"> 
				</div>

				  <br>
				  <br>
				  <button class="btn btn-primary" name="confirm">Confirm</button>
				  </form>
				  </center>
			</div>



		</div>


 	</div><!-- /container -->
 	<?php include 'include/footer.php'; ?>



 </body>
 </html>