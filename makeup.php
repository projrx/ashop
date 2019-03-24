<!DOCTYPE html>
<html lang="en">
<head>

	<?php include 'include/head.php'; ?>
	<title>Shoping Website</title>



	<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>

<style type="text/css">
	
	.form-controlk{
		padding: 6px 12px;
		font-size: 14px;
		color: #555;
		background-color: #fff;
		background-image: none;
		border: 1px solid #ccc;
		border-radius: 4px;
	}
</style>
<script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", "http://localhost/ashop2/makup.php");
    }
</script>

</head>
<body>

	<?php $link="makeup"; ?>
    <?php if(!empty( $_GET['page_name'])) $page =$_GET['page_name']; ?>


	<?php include 'include/header.php'; ?>

	
		<?php if(empty($page)){ ?>

		<div class="well well-small">
			<h2 style="text-align: center;"></span></a> Featured Makeup Products  </h2>
			<br>

			<div class="row">

				<?php

				$rows =mysqli_query($con,"SELECT * FROM makeup where feat=1  ORDER BY ordr  LIMIT 6" ) or die(mysqli_error($con));
				$n=0;

				while($row=mysqli_fetch_array($rows)){

				  $slug = $row['slug']; 
				  $name = $row['name']; 
				  $metak = $row['metak']; 
				  $metad = $row['metad']; 
				  $img = $row['img']; 
				  $price = $row['price']; 
				  $ordr = $row['ordr']; 
				  $id = $row['id']; 
				  $feat = $row['feat']; 

				  ?>
				  <form action="" method="get">
					<div class="col-md-2">
						<div class="thumbnail">
							<a class="vidtool viewf" href="dmakeup.php?page_name=<?php echo $slug ?>" title="add to cart"><span class="icon-play"></span> </a>
							<a  href="dmakeup.php?page_name=<?php echo $slug ?>"><img src="images/products/<?php echo $img ?>" style="height: 200px;" alt=""></a>
							<div class="caption">
								<h5><?php echo $name ?></h5>
								<h4>
									<a class="defaultBtn" href="dmakeup.php?page_name=<?php echo $slug ?>" title="Cdivck to view"><span class="icon-zoom-in"></span></a>
									<button class="shopBtn atcm" name="addcart" value="<?php echo $slug ?>"> <span class="icon-plus"></span></button>

									<span class="pull-right">Rs. <?php echo number_format($price) ?></span>
		  				<input style="display: none" name="type" value="makeup" name="type"> 

								</h4>
							</div>
						</div>
					</div>
				</form>
				<?php } ?>


				</div>	
			</div>
		</div>
	<?php } ?>

		<div class="container">


			<div class="row">
				<div id="sidebar" class="col-md-3">
						<br><br>

					<div class="well well-small">
						<h4>Categories</h4>
						<ul class="nav nav-list">
							<?php

							$rowsx =mysqli_query($con,"SELECT name,slug FROM makeupcat  ORDER BY ordr" ) or die(mysqli_error($con));
							          
							  while($rowx=mysqli_fetch_array($rowsx)){
							    
							    $slug = $rowx['slug']; 
							    $name = $rowx['name']; 	

							    ?>

							<li><a href="makeup.php?page_name=<?php echo $slug ?>"><span class="icon-chevron-right"></span><?php echo $name ?></a></li>

						<?php } ?>
						
						</ul>
					</div>

					<div class="well well-small alert alert-warning cntr">
						<h2>Featured Products</h2>
						<ul class="nav nav-list promowrapper">

							<?php

							$rows =mysqli_query($con,"SELECT * FROM makeup where feat=1  ORDER BY ordr LIMIT 4" ) or die(mysqli_error($con));
							$n=0;

							while($row=mysqli_fetch_array($rows)){

							  $slug = $row['slug']; 
							  $name = $row['name']; 
							  $metak = $row['metak']; 
							  $metad = $row['metad']; 
							  $img = $row['img']; 
							  $price = $row['price']; 
							  $ordr = $row['ordr']; 
							  $id = $row['id']; 
							  $feat = $row['feat']; 

							  ?>

							<li>
								<div class="thumbnail">
									<a class="vidtool viewf " href="dmakeup.php?page_name=<?php echo $slug ?>" title="add to cart"><span class="icon-play"></span> </a>
									<img src="images/products/<?php echo $img ?>" style="height: 300px;" alt="">
									<div class="caption">
										<h4><a class="defaultBtn  viewf" href="dmakeup.php?page_name=<?php echo $slug ?>">VIEW</a> <span class="pull-right">Rs. <?php echo number_format($price) ?></span></h4>
									</div>
								</div>
							</li>

						<?php } ?>

						</ul>
					</div>

					<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
					<br>


				</div>
				<div class="col-md-9">

<?php if (empty($page)) { ?>

	<div  id="users" class="" style="background: white;  padding: 20px 12px;" >
	<div class="well well-small">
		Makeup Products
		<div style="float: right;">
			<input class="search form-controlk" placeholder="Search" />
		  <button class="sort btn" data-sort="name">
		    Sort by name
		  </button>
		  <button class="sort btn" data-sort="price">
		    Sort by price
		  </button>
	</div>
	</div>
	
	
	<div class="row list">

		<?php

		$rows =mysqli_query($con,"SELECT * FROM makeup ORDER BY ordr " ) or die(mysqli_error($con));
		$n=0;

		while($row=mysqli_fetch_array($rows)){

		  $slug = $row['slug']; 
		  $name = $row['name']; 
		  $metak = $row['metak']; 
		  $metad = $row['metad']; 
		  $img = $row['img']; 
		  $price = $row['price']; 
		  $ordr = $row['ordr']; 
		  $id = $row['id']; 
		  $feat = $row['feat']; 

		  ?>
		    <form action="" method="get">

		  	<div class="col-md-4">
		  		<div class="thumbnail">

		  			<a class="vidtool viewf " href="dmakeup.php?page_name=<?php echo $slug ?>" title="add to cart"><span class="icon-play"></span> </a>
		  			<a href="dmakeup.php?page_name=<?php echo $slug ?>"><img style="height: 250px;" src="images/products/<?php echo $img ?>" alt=""></a>
		  			<div class="caption cntr">
		  				<p class="name"><?php echo $name ?></p>
		  				<p class="price">Rs. <?php echo number_format($price) ?>/</p>
		  				<h4><button class="shopBtn atcm" name="addcart" value="<?php echo $slug ?>"> Add to cart </button></h4>
		  				<input style="display: none" name="type" value="makeup" name="type"> 
		  				


		  			</div>
		  		</div>
		  	</div>
		  </form>


		<?php } ?>

		</div>


	<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
	<script type="text/javascript">
		var options = {
		  valueNames: [ 'name', 'price' ]
		};

		var userList = new List('users', options);
	</script>

	<center>View More</center>
	</div>
<?php } else { ?>


	<div  id="users" class="" style="background: white;  padding: 20px 12px;" >
	<div class="well well-small">
		 <span style="text-transform: uppercase;"><?php echo $page ?></span> Makeup Products
		<div style="float: right;">
			<input class="search form-controlk" placeholder="Search" />
		  <button class="sort btn" data-sort="name">
		    Sort by name
		  </button>
		  <button class="sort btn" data-sort="price">
		    Sort by price
		  </button>
	</div>
	</div>
	
	
	<div class="row list">

		<?php

		$rows =mysqli_query($con,"SELECT * FROM makeup where pslug='$page' ORDER BY ordr " ) or die(mysqli_error($con));
		$n=0;

		while($row=mysqli_fetch_array($rows)){

		  $slug = $row['slug']; 
		  $name = $row['name']; 
		  $metak = $row['metak']; 
		  $metad = $row['metad']; 
		  $img = $row['img']; 
		  $price = $row['price']; 
		  $ordr = $row['ordr']; 
		  $id = $row['id']; 
		  $feat = $row['feat']; 

		  ?>
		    <form action="" method="get">

		  	<div class="col-md-4">
		  		<div class="thumbnail">

		  			<a class="vidtool viewf " href="dmakeup.php?page_name=<?php echo $slug ?>" title="add to cart"><span class="icon-play"></span> </a>
		  			<a href="dmakeup.php?page_name=<?php echo $slug ?>"><img style="height: 250px;" src="images/products/<?php echo $img ?>" alt=""></a>
		  			<div class="caption cntr">
		  				<p class="name"><?php echo $name ?></p>
		  				<p class="price">Rs. <?php echo number_format($price) ?>/</p>
		  				<h4><button class="shopBtn atcm" name="addcart" value="<?php echo $slug ?>"> Add to cart </button></h4>
		  				<input style="display: none" name="type" value="makeup" name="type"> 
		  				


		  			</div>
		  		</div>
		  	</div>
		  </form>

		<?php } ?>

		</div>


	<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
	<script type="text/javascript">
		var options = {
		  valueNames: [ 'name', 'price' ]
		};

		var userList = new List('users', options);
	</script>

	<center>View More</center>
	</div>



<?php  } ?>


	</div>

	</div>
	</div>




	</div><!-- /container -->


<?php include 'include/footer.php'; ?>



</body>
</html>