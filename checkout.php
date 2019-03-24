<!DOCTYPE html>
<html lang="en">
<head>

	<?php include 'include/head.php'; ?>
	<title>Shoping Temp Website</title>


	<?php $link="Null"; ?>

	<?php 
	
	for ($i=0; $i < 100 ; $i++) { 

	  if(isset($_POST['rem'.$i])){
	    $msg="Unsuccessful" ;

	    $id=$_POST['rem'.$i];
	
	    $sql = "DELETE FROM orders WHERE id=$id ";


	    mysqli_query($con, $sql) ;
	    ($msg=mysqli_error($con));

	    if(empty($msg))  $msg=" Deleted";


	  }

	}


	 ?>


</head>
<body>


	<?php include 'include/header.php'; ?>

	<div class="container">
		<br>



		<div class="well well-small">


		  <h1>Shopping Cart</h1>

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





	</div><!-- /container -->
	<?php include 'include/footer.php'; ?>



	<script type="text/javascript">
	  /* Set rates + misc */
	  var taxRate = 0;
	  var shippingRate = 150.00; 
	  var fadeTime = 300;


	  /* Assign actions */
	  $('.product-quantity input').keyup( function() {
	    updateQuantity(this);
	  });
 	 $('.product-quantity input').change( function() {
	    updateQuantity(this);
	  });

	  $('.product-removal button').click( function() {
	    removeItem(this);
	  });


	  /* Recalculate cart */
	  function recalculateCart()
	  {
	    var subtotal = 0;
	    
	    /* Sum up row totals */
	    $('.product').each(function () {
	      subtotal += parseFloat($(this).children('.product-line-price').text());
	    });
	    
	    /* Calculate totals */
	    var tax = subtotal * taxRate;
	    var shipping = (subtotal > 0 ? shippingRate : 0);
	    var total = subtotal + tax + shipping;
	    
	    /* Update totals display */
	    $('.totals-value').fadeOut(fadeTime, function() {
	      $('#cart-subtotal').html(subtotal.toFixed(2));
	      $('#cart-tax').html(tax.toFixed(2));
	      $('#cart-shipping').html(shipping.toFixed(2));
	      $('#cart-total').html(total.toFixed(2));
	      if(total == 0){
	        $('.checkout').fadeOut(fadeTime);
	      }else{
	        $('.checkout').fadeIn(fadeTime);
	      }
	      $('.totals-value').fadeIn(fadeTime);
	    });
	  }


	  /* Update quantity */
	  function updateQuantity(quantityInput)
	  {
	    /* Calculate line price */
	    var productRow = $(quantityInput).parent().parent();
	    var price = parseFloat(productRow.children('.product-price').text());
	    var quantity = $(quantityInput).val();
	    var linePrice = price * quantity;
	    
	    /* Update line price display and recalc cart totals */
	    productRow.children('.product-line-price').each(function () {
	      $(this).fadeOut(fadeTime, function() {
	        $(this).text(linePrice.toFixed(2));
	        recalculateCart();
	        $(this).fadeIn(fadeTime);
	      });
	    });  
	  }


	  /* Remove item from cart */
	  function removeItem(removeButton)
	  {
	    /* Remove row from DOM and recalc cart total */
	    var productRow = $(removeButton).parent().parent();
	    productRow.slideUp(fadeTime, function() {
	      productRow.remove();
	      recalculateCart();
	    });
	  }
	</script>

</body>
</html>