<!DOCTYPE html>
<html lang="en">
<head>

	<?php include 'include/head.php'; ?>
	<title>Shoping Website</title>


		<?php $link="makeup"; ?>
	    <?php if(!empty( $_GET['page_name'])) $page =$_GET['page_name']; ?>


</head>
<body>


	<?php include 'include/header.php'; ?>

	<?php

	$rows =mysqli_query($con,"SELECT * FROM makeup where slug='$page' ORDER BY ordr " ) or die(mysqli_error($con));
	$n=0;

	while($row=mysqli_fetch_array($rows)){

	  $slug = $row['slug']; 
	  $name = $row['name']; 
	  $metak = $row['metak']; 
	  $metad = $row['metad']; 
	  $img = $row['img']; 
	  $price = $row['price']; 
	  $pslug = $row['pslug']; 
	  $desp = $row['desp']; 
	  $vid = $row['code']; 
	  $ordr = $row['ordr']; 
	  $id = $row['id']; 
	  $feat = $row['feat']; 

	  ?>
	<div class="container">
		<br>
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a> <span class="divider">/</span></li>
			<li><a href="makeup.php">Makeup</a> <span class="divider">/</span></li>
			<li class="active"><?php echo $name ?></li>
		</ul>	
		<div class="well well-small">
			<div class="row">
				<div class="col-md-7">
					<div id="myCarousel" class="carousel slide cntr">
						<div class="carousel-inner">
							<video id="p-video" class="pvideo" width="100%" height="318" loop muted autoplay> <source src='<?php echo $vid ?>' type='video/mp4'> </video> 
							</div>
						
						</div>
					</div>
					<div class="col-md-5">
						<h3><?php echo $name ?></h3>
						<hr class="soft"/>
						

						<form action="" method="get">	
							<div class="input-group">
								<label class="control-label"><span>Rs. <?php echo number_format($price) ?>/-</span></label>
								<br>
								
								<div class="controls">
									<input type="number" class="form-control" name="qty" placeholder="Qty." style="width: 100px;">
								</div>
								<!--
							</div>
							
							<div class="input-group">
								<label class="control-label"><span>Color</span></label>
								<div class="controls">
									<select class="form-control">
										<option>Red</option>
										<option>Purple</option>
										<option>Pink</option>
										<option>Red</option>
									</select>
								</div>
							</div>
							<div class="input-group">
								<label class="control-label"><span>Materials</span></label>
								<div class="controls">
									<select class="form-control">
										<option>Material 1</option>
										<option>Material 2</option>
										<option>Material 3</option>
										<option>Material 4</option>
									</select>
								</div>
							-->

							</div>
							
							<?php echo $desp ?>

				<h4><button class="shopBtn atcm" name="addcart" value="<?php echo $slug ?>"> Add to cart </button></h4>
				<input style="display: none" name="type" value="makeup"> 
				<input style="display: none" name="page_name" value="<?php echo $page ?>"> 
														

							</form>



					</div>
				</div>
				<hr class="softn clr"/>


				<ul id="productDetail" class="nav nav-tabs">
					<li class="active"><a href="#home" data-toggle="tab">Related Product</a></li>
					


				</ul>
				<div id="home" class="tab-content tabWrapper">

					<?php

					$rows =mysqli_query($con,"SELECT * FROM makeup where pslug='$pslug'  ORDER BY RAND()  LIMIT 6" ) or die(mysqli_error($con));
					$n=0;

					while($row=mysqli_fetch_array($rows)){

					  $slug = $row['slug']; 
					  $name = $row['name']; 
					  $metak = $row['metak']; 
					  $metad = $row['metad']; 
					  $img = $row['img']; 
					  $desp = $row['desp']; 
					  $price = $row['price']; 
					  $ordr = $row['ordr']; 
					  $id = $row['id']; 


					  ?>
					
					<div class="row">	  
							<div class="col-md-4">
								<a class="vidtool viewf " href="dmakeup.php?page_name=<?php echo $slug ?>" title="add to cart"><span class="icon-play"></span> </a>
								<img style="height: 100%" class="form-control" src="images/products/<?php echo $img ?>" alt="">
							</div>
							<div class="col-md-4">
								<h5><?php echo $name ?> </h5>
								<?php echo $desp ?>
							</div>
							<div class="col-md-4 alignR">
								<form class="form-horizontal qtyFrm">
									<h3> $140.00</h3>
									<br>
									<div class="btn-group">
										<a href="product_details.html" class="atcf defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
										<a href="dmakeup.php?page_name=<?php echo $slug ?>" class="viewf shopBtn">VIEW</a>
									</div>
								</form>
							</div>
						</div>
						

						<hr class="soft">

					<?php } ?>




					</div>
				</div>


			</div>
		</div>

<?php } ?>



	</div><!-- /container -->
	<?php include 'include/footer.php'; ?>



</body>
</html>