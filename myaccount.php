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



 </head>
 <body>


 	<?php include 'include/header.php'; ?>

 	<div class="container">
 		<br>

		<div class="well well-small">


 		<ul class="nav nav-pills">
 		    <li class="active"><a data-toggle="pill" href="#home">Cart</a></li>
 		    <li><a data-toggle="pill" href="#menu2">Confirmed Orders</a></li>
 		    <li><a data-toggle="pill" href="#menu3">Dispatched Orders</a></li>
 		    <li><a data-toggle="pill" href="#menu4">Delivered Orders</a></li>
 		  </ul>
 		  
 		  <div class="tab-content">
 		    <div id="home" class="tab-pane fade in active" style="padding: 30px 20px">
 		  
 		    	<table class="table ">

 		    	  <thead>
 		    	    <th>Image</th>
 		    	    <th>Product</th>
 		    	    <th>Price</th>
 		    	    <th>Quantity</th>
 		    	    <th>Remove</th>
 		    	    <th>Total</th>
 		    	  </thead>
 		    	  <tbody>
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
 		    	  	  

 		    	  	  ?>

 		    	  <tr class="product">
 		    	    <td class="product-image">
 		    	      <img width="50px" src="images/products/<?php echo $img ?>">
 		    	    </td>
 		    	    <td class="product-details">
 		    	      <div class="product-title"><?php echo $proname ?></div>
 		    	      <p class="product-description">The best bones of all time. </p>
 		    	    </td>
 		    	    <td class="product-price"><?php echo $price ?></td>
 		    	    <td class="product-quantity">
 		    	      <div class="product-title"><?php echo $qty ?></div>

 		    	      <input class="form-control" style="max-width: 100px;display: none;"  type="number" value="<?php echo $qty ?>" min="1">
 		    	    </td>
 		    	    <td class="product-removal">
 		    	    <form action="" method="post">
 		    	      <button name="rem<?php echo $n ?>" value="<?php echo $oid ?>" class="remove-product btn btn-danger">
 		    	        Remove
 		    	      </button>
 		    	  </form>
 		    	    </td>
 		    	    <td class="product-line-price"><?php echo $total ?></td>
 		    	  </tr>

 		    	  <?php $n++; } } ?>

 		    	  <tr class="totals">
 		    	  	<td colspan="4" ></td>
 		    	  	<td>
 		    	  		<label>Subtotal</label><br>
 		    	  		<label style="display: none;">Tax (5%)</label>
 		    	  		<label style="display: none;">Shipping</label><br>
 		    			<label style="display: none;">Grand Total</label>


 		    	  	</td>
 		    	    <td class="totals-item">
 		    	      
 		    	      <div class="totals-value" id="cart-subtotal"><?php echo $stotal ?></div>
 		    	      
 		    	     <!-- <div class="totals-value" style="" id="cart-tax">3.60</div>
 		    	      		      
 		    	      <div class="totals-value" id="cart-shipping">150.00</div>
 		    	      
 		    	      <div class="totals-value" id="cart-total"><?php echo $stotal ?></div> -->
 		    	    </td>
 		    	  </tr> 
 		    	  <tr>
		  	<td colspan="5"></td>
		  	<td>
		      <a href="confirm.php" class="checkout btn btn-primary">Checkout</a>
		  </td>
		  </tr>
 		    	  </tbody>
 		    	 </table>	
 		    	








 		    </div>
 		    <div id="menu2" class="tab-pane fade" style="padding: 30px 20px">
 		      

 		      <table class="table ">

 		        <thead>
 		          <th>Image</th>
 		          <th>Product</th>
 		          <th>Price</th>
 		          <th>Quantity</th>
 		          <th>Total</th>
 		        </thead>
 		        <tbody>
 		        	<?php 

 		        	$rows =mysqli_query($con,"SELECT * FROM orders where status='confirm' AND actid='$userid'" ) or die(mysqli_error($con));
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
 		        	  

 		        	  ?>

 		        <tr class="product">
 		          <td class="product-image">
 		            <img width="50px" src="images/products/<?php echo $img ?>">
 		          </td>
 		          <td class="product-details">
 		            <div class="product-title"><?php echo $proname ?></div>
 		            <p class="product-description">The best bones of all time. </p>
 		          </td>
 		          <td class="product-price"><?php echo $price ?></td>
 		          <td class="product-quantity">
 		            <div class="product-title"><?php echo $qty ?></div>

 		            <input class="form-control" style="max-width: 100px;display: none;"  type="number" value="<?php echo $qty ?>" min="1">
 		          </td>
 		         
 		          <td class="product-line-price"><?php echo $total ?></td>
 		        </tr>

 		        <?php $n++; } } ?>

 		        <tr class="totals">
 		        	<td colspan="3" ></td>
 		        	<td>
 		        		<label>Subtotal</label><br>
 		        		<label style="display: none;">Tax (5%)</label>
 		        		<label style="display: none;">Shipping</label><br>
 		      		<label style="display: none;">Grand Total</label>


 		        	</td>
 		          <td class="totals-item">
 		            
 		            <div class="totals-value" id="cart-subtotal"><?php echo $stotal ?></div>
 		            
 		           <!-- <div class="totals-value" style="" id="cart-tax">3.60</div>
 		            		      
 		            <div class="totals-value" id="cart-shipping">150.00</div>
 		            
 		            <div class="totals-value" id="cart-total"><?php echo $stotal ?></div> -->
 		          </td>
 		        </tr>
 		        
 		        </tbody>
 		       </table>	
 		      



 		    </div>

 		    <div id="menu3" class="tab-pane fade" style="padding: 30px 20px">





 		    	<table class="table ">

 		    	  <thead>
 		    	    <th>Image</th>
 		    	    <th>Product</th>
 		    	    <th>Price</th>
 		    	    <th>Quantity</th>
 		    	    <th>Total</th>
 		    	  </thead>
 		    	  <tbody>
 		    	  	<?php 

 		    	  	$rows =mysqli_query($con,"SELECT * FROM orders where status='dispatch' AND actid='$userid'" ) or die(mysqli_error($con));
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
 		    	  	  

 		    	  	  ?>

 		    	  <tr class="product">
 		    	    <td class="product-image">
 		    	      <img width="50px" src="images/products/<?php echo $img ?>">
 		    	    </td>
 		    	    <td class="product-details">
 		    	      <div class="product-title"><?php echo $proname ?></div>
 		    	      <p class="product-description">The best bones of all time. </p>
 		    	    </td>
 		    	    <td class="product-price"><?php echo $price ?></td>
 		    	    <td class="product-quantity">
 		    	      <div class="product-title"><?php echo $qty ?></div>

 		    	      <input class="form-control" style="max-width: 100px;display: none;"  type="number" value="<?php echo $qty ?>" min="1">
 		    	    </td>
 		    	   
 		    	    <td class="product-line-price"><?php echo $total ?></td>
 		    	  </tr>

 		    	  <?php $n++; } } ?>

 		    	  <tr class="totals">
 		    	  	<td colspan="3" ></td>
 		    	  	<td>
 		    	  		<label>Subtotal</label><br>
 		    	  		<label style="display: none;">Tax (5%)</label>
 		    	  		<label style="display: none;">Shipping</label><br>
 		    			<label style="display: none;">Grand Total</label>


 		    	  	</td>
 		    	    <td class="totals-item">
 		    	      
 		    	      <div class="totals-value" id="cart-subtotal"><?php echo $stotal ?></div>
 		    	      
 		    	     <!-- <div class="totals-value" style="" id="cart-tax">3.60</div>
 		    	      		      
 		    	      <div class="totals-value" id="cart-shipping">150.00</div>
 		    	      
 		    	      <div class="totals-value" id="cart-total"><?php echo $stotal ?></div> -->
 		    	    </td>
 		    	  </tr>
 		    	  
 		    	  </tbody>
 		    	 </table>	
 		    	



 		    </div>
 		    <div id="menu4" class="tab-pane fade" style="padding: 30px 20px">
 		     



 		    	<table class="table ">

 		    	  <thead>
 		    	    <th>Image</th>
 		    	    <th>Product</th>
 		    	    <th>Price</th>
 		    	    <th>Quantity</th>
 		    	    <th>Total</th>
 		    	  </thead>
 		    	  <tbody>
 		    	  	<?php 

 		    	  	$rows =mysqli_query($con,"SELECT * FROM orders where status='deliver' AND actid='$userid'" ) or die(mysqli_error($con));
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
 		    	  	  

 		    	  	  ?>

 		    	  <tr class="product">
 		    	    <td class="product-image">
 		    	      <img width="50px" src="images/products/<?php echo $img ?>">
 		    	    </td>
 		    	    <td class="product-details">
 		    	      <div class="product-title"><?php echo $proname ?></div>
 		    	      <p class="product-description">The best bones of all time. </p>
 		    	    </td>
 		    	    <td class="product-price"><?php echo $price ?></td>
 		    	    <td class="product-quantity">
 		    	      <div class="product-title"><?php echo $qty ?></div>

 		    	      <input class="form-control" style="max-width: 100px;display: none;"  type="number" value="<?php echo $qty ?>" min="1">
 		    	    </td>
 		    	   
 		    	    <td class="product-line-price"><?php echo $total ?></td>
 		    	  </tr>

 		    	  <?php $n++; } } ?>

 		    	  <tr class="totals">
 		    	  	<td colspan="3" ></td>
 		    	  	<td>
 		    	  		<label>Subtotal</label><br>
 		    	  		<label style="display: none;">Tax (5%)</label>
 		    	  		<label style="display: none;">Shipping</label><br>
 		    			<label style="display: none;">Grand Total</label>


 		    	  	</td>
 		    	    <td class="totals-item">
 		    	      
 		    	      <div class="totals-value" id="cart-subtotal"><?php echo $stotal ?></div>
 		    	      
 		    	     <!-- <div class="totals-value" style="" id="cart-tax">3.60</div>
 		    	      		      
 		    	      <div class="totals-value" id="cart-shipping">150.00</div>
 		    	      
 		    	      <div class="totals-value" id="cart-total"><?php echo $stotal ?></div> -->
 		    	    </td>
 		    	  </tr>
 		    	  
 		    	  </tbody>
 		    	 </table>	
 		    	



 		    </div>
 		  </div>

 		</div>
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


		</div>


 	</div><!-- /container -->
 	<?php include 'include/footer.php'; ?>



 </body>
 </html>