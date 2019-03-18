<!DOCTYPE html>
<html lang="en">
<head>

	<?php include 'include/head.php'; ?>
	<title>Shoping Website</title>



	<style type="text/css">
		.playslide {
		    font-size: 50px;
		    position: absolute;
		    z-index: 9999;
		    top: 45%;
		    right: 45%;
		    background: white;
		    padding: 6px 40px;
		    border-radius: 4px;
		    cursor: pointer;

		}

		.logoh{

			   position: absolute;
			   top: 1%;
			   right: 44%;
			   z-index: 999;
		}
		.vidtool {
			display: block;
			position: absolute;
			top: 33%;
			left: 28%;
			background: #e45414;
			color: #ffffff;
			font-size: 20px;
			padding: 7px 20px;
			border-radius: 7px;
		}

	</style>



</head>
<body>


		<?php include 'include/header.php'; ?>

<div class="container">
	<br>
	    <ul class="breadcrumb">
	    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
	    <li><a href="products.html">Jew		llery</a> <span class="divider">/</span></li>
	    <li class="active">Preview</li>
	    </ul>	
		<div class="well well-small">
		<div class="row">
				<div class="col-md-5">
				<div id="myCarousel" class="carousel slide cntr">
	                <div class="carousel-inner">
	                  <video id="p-video" class="pvideo" width="100%" height="418" poster="https://kinclimg5.bluestone.com/f_webp,c_scale,w_418,b_rgb:f0f0f0/giproduct/BIDG0413R19-POSTER-28640.jpg" loop controls muted autoplay> <source src='https://kinvid0.bluestone.com/output/mp4/BIDG0413R19-VIDEO-28640.mp4/BIDG0413R19-VIDEO-28640.mp4' type='video/mp4'> </video> 
	                </div>
	                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
	            </div>
				</div>
				<div class="col-md-7">
					<h3>Name of the Item [$140.00]</h3>
					<hr class="soft"/>
					
					<form class="form-horizontal qtyFrm">
					  <div class="input-group">
						<label class="control-label"><span>$140.00</span></label>
						<div class="controls">
						<input type="number" class="form-control" placeholder="Qty.">
						</div>
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
					  </div>
					  <h4>100 items in stock</h4>
					  <p>Nowadays the lingerie industry is one of the most successful business spheres.
					  Nowadays the lingerie industry is one of ...
					  <p>
					  <button type="submit" class="atcf shopBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>
					</form>
				</div>
				</div>
					<hr class="softn clr"/>


	            <ul id="productDetail" class="nav nav-tabs">
	              <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
	              <li class=""><a href="#profile" data-toggle="tab">Related Products </a></li>
	             
	             
	            </ul>
	            <div id="myTabContent" class="tab-content tabWrapper">
	            <div class="tab-pane fade active in" id="home">
				  <h4>Product Information</h4>
	                <table class="table table-striped">
					<tbody>
					<tr class="techSpecRow"><td class="techSpecTD1">Color:</td><td class="techSpecTD2">Black</td></tr>
					<tr class="techSpecRow"><td class="techSpecTD1">Style:</td><td class="techSpecTD2">Apparel,Sports</td></tr>
					<tr class="techSpecRow"><td class="techSpecTD1">Season:</td><td class="techSpecTD2">spring/summer</td></tr>
					<tr class="techSpecRow"><td class="techSpecTD1">Usage:</td><td class="techSpecTD2">fitness</td></tr>
					<tr class="techSpecRow"><td class="techSpecTD1">Sport:</td><td class="techSpecTD2">122855031</td></tr>
					<tr class="techSpecRow"><td class="techSpecTD1">Brand:</td><td class="techSpecTD2">Shock Absorber</td></tr>
					</tbody>
					</table>
					<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>

				</div>
				<div class="tab-pane fade" id="profile">
				<div class="row">	  
				<div class="col-md-2">
				<a class="vidtool viewf " href="product_detail.php" title="add to cart"><span class="icon-play"></span> </a>
					<img height="150" src="assets/img/d.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h5>Product Name </h5>
					<p>
					Nowadays the lingerie industry is one of the most successful business spheres.
					We always stay in touch with the latest fashion tendencies - 
					that is why our goods are so popular..
					</p>
				</div>
				<div class="col-md-4 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
			<br>
				<div class="btn-group">
				  <a href="product_details.html" class="atcf defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
				  <a href="product_details.html" class="viewf shopBtn">VIEW</a>
				 </div>
					</form>
				</div>
			</div>
				<hr class="soft">
				<div class="row">	  
				<div class="col-md-2">
				<a class="vidtool viewf " href="product_detail.php" title="add to cart"><span class="icon-play"></span> </a>
					<img height="150" src="assets/img/d.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h5>Product Name </h5>
					<p>
					Nowadays the lingerie industry is one of the most successful business spheres.
					We always stay in touch with the latest fashion tendencies - 
					that is why our goods are so popular..
					</p>
				</div>
				<div class="col-md-4 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
			<br>
				<div class="btn-group">
				  <a href="product_details.html" class="atcf defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
				  <a href="product_details.html" class="viewf shopBtn">VIEW</a>
				 </div>
					</form>
				</div>
			</div>
				<hr class="soft">
				<div class="row">	  
				<div class="col-md-2">
				<a class="vidtool viewf " href="product_detail.php" title="add to cart"><span class="icon-play"></span> </a>
					<img height="150" src="assets/img/d.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h5>Product Name </h5>
					<p>
					Nowadays the lingerie industry is one of the most successful business spheres.
					We always stay in touch with the latest fashion tendencies - 
					that is why our goods are so popular..
					</p>
				</div>
				<div class="col-md-4 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
			<br>
				<div class="btn-group">
				  <a href="product_details.html" class="atcf defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
				  <a href="product_details.html" class="viewf shopBtn">VIEW</a>
				 </div>
					</form>
				</div>
			</div>
				<hr class="soft">
				<div class="row">	  
				<div class="col-md-2">
				<a class="vidtool viewf " href="product_detail.php" title="add to cart"><span class="icon-play"></span> </a>
					<img height="150" src="assets/img/d.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h5>Product Name </h5>
					<p>
					Nowadays the lingerie industry is one of the most successful business spheres.
					We always stay in touch with the latest fashion tendencies - 
					that is why our goods are so popular..
					</p>
				</div>
				<div class="col-md-4 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
			<br>
				<div class="btn-group">
				  <a href="product_details.html" class="atcf defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
				  <a href="product_details.html" class="viewf shopBtn">VIEW</a>
				 </div>
					</form>
				</div>
			</div>
				<hr class="soft">
				<div class="row">	  
				<div class="col-md-2">
				<a class="vidtool viewf " href="product_detail.php" title="add to cart"><span class="icon-play"></span> </a>
					<img height="150" src="assets/img/d.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h5>Product Name </h5>
					<p>
					Nowadays the lingerie industry is one of the most successful business spheres.
					We always stay in touch with the latest fashion tendencies - 
					that is why our goods are so popular..
					</p>
				</div>
				<div class="col-md-4 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
			<br>
				<div class="btn-group">
				  <a href="product_details.html" class="atcf defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
				  <a href="product_details.html" class="viewf shopBtn">VIEW</a>
				 </div>
					</form>
				</div>
			</div>
				<hr class="soft">
				<div class="row">	  
				<div class="col-md-2">
				<a class="vidtool viewf " href="product_detail.php" title="add to cart"><span class="icon-play"></span> </a>
					<img height="150" src="assets/img/d.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h5>Product Name </h5>
					<p>
					Nowadays the lingerie industry is one of the most successful business spheres.
					We always stay in touch with the latest fashion tendencies - 
					that is why our goods are so popular..
					</p>
				</div>
				<div class="col-md-4 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
			<br>
				<div class="btn-group">
				  <a href="product_details.html" class="atcf defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
				  <a href="product_details.html" class="viewf shopBtn">VIEW</a>
				 </div>
					</form>
				</div>
			</div>
				<hr class="soft">
				<div class="row">	  
				<div class="col-md-2">
				<a class="vidtool viewf " href="product_detail.php" title="add to cart"><span class="icon-play"></span> </a>
					<img height="150" src="assets/img/d.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h5>Product Name </h5>
					<p>
					Nowadays the lingerie industry is one of the most successful business spheres.
					We always stay in touch with the latest fashion tendencies - 
					that is why our goods are so popular..
					</p>
				</div>
				<div class="col-md-4 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
			<br>
				<div class="btn-group">
				  <a href="product_details.html" class="atcf defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
				  <a href="product_details.html" class="viewf shopBtn">VIEW</a>
				 </div>
					</form>
				</div>
			</div>
				<hr class="soft">
				<div class="row">	  
				<div class="col-md-2">
				<a class="vidtool viewf " href="product_detail.php" title="add to cart"><span class="icon-play"></span> </a>
					<img height="150" src="assets/img/d.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h5>Product Name </h5>
					<p>
					Nowadays the lingerie industry is one of the most successful business spheres.
					We always stay in touch with the latest fashion tendencies - 
					that is why our goods are so popular..
					</p>
				</div>
				<div class="col-md-4 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
			<br>
				<div class="btn-group">
				  <a href="product_details.html" class="atcf defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
				  <a href="product_details.html" class="viewf shopBtn">VIEW</a>
				 </div>
					</form>
				</div>
			</div>
				<hr class="soft">
				<div class="row">	  
				<div class="col-md-2">
				<a class="vidtool viewf " href="product_detail.php" title="add to cart"><span class="icon-play"></span> </a>
					<img height="150" src="assets/img/d.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h5>Product Name </h5>
					<p>
					Nowadays the lingerie industry is one of the most successful business spheres.
					We always stay in touch with the latest fashion tendencies - 
					that is why our goods are so popular..
					</p>
				</div>
				<div class="col-md-4 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
			<br>
				<div class="btn-group">
				  <a href="product_details.html" class="atcf defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
				  <a href="product_details.html" class="viewf shopBtn">VIEW</a>
				 </div>
					</form>
				</div>
			</div>
				<hr class="soft">
				<div class="row">	  
				<div class="col-md-2">
				<a class="vidtool viewf " href="product_detail.php" title="add to cart"><span class="icon-play"></span> </a>
					<img height="150" src="assets/img/d.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h5>Product Name </h5>
					<p>
					Nowadays the lingerie industry is one of the most successful business spheres.
					We always stay in touch with the latest fashion tendencies - 
					that is why our goods are so popular..
					</p>
				</div>
				<div class="col-md-4 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
			<br>
				<div class="btn-group">
				  <a href="product_details.html" class="atcf defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
				  <a href="product_details.html" class="viewf shopBtn">VIEW</a>
				 </div>
					</form>
				</div>
			</div>
				<hr class="soft">
				<div class="row">	  
				<div class="col-md-2">
				<a class="vidtool viewf " href="product_detail.php" title="add to cart"><span class="icon-play"></span> </a>
					<img height="150" src="assets/img/d.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h5>Product Name </h5>
					<p>
					Nowadays the lingerie industry is one of the most successful business spheres.
					We always stay in touch with the latest fashion tendencies - 
					that is why our goods are so popular..
					</p>
				</div>
				<div class="col-md-4 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
			<br>
				<div class="btn-group">
				  <a href="product_details.html" class="atcf defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
				  <a href="product_details.html" class="viewf shopBtn">VIEW</a>
				 </div>
					</form>
				</div>
			</div>
				<hr class="soft">
				<div class="row">	  
				<div class="col-md-2">
				<a class="vidtool viewf " href="product_detail.php" title="add to cart"><span class="icon-play"></span> </a>
					<img height="150" src="assets/img/d.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h5>Product Name </h5>
					<p>
					Nowadays the lingerie industry is one of the most successful business spheres.
					We always stay in touch with the latest fashion tendencies - 
					that is why our goods are so popular..
					</p>
				</div>
				<div class="col-md-4 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
			<br>
				<div class="btn-group">
				  <a href="product_details.html" class="atcf defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
				  <a href="product_details.html" class="viewf shopBtn">VIEW</a>
				 </div>
					</form>
				</div>
			</div>
				<hr class="soft">
				<div class="row">	  
				<div class="col-md-2">
				<a class="vidtool viewf " href="product_detail.php" title="add to cart"><span class="icon-play"></span> </a>
					<img height="150" src="assets/img/d.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h5>Product Name </h5>
					<p>
					Nowadays the lingerie industry is one of the most successful business spheres.
					We always stay in touch with the latest fashion tendencies - 
					that is why our goods are so popular..
					</p>
				</div>
				<div class="col-md-4 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
			<br>
				<div class="btn-group">
				  <a href="product_details.html" class="atcf defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
				  <a href="product_details.html" class="viewf shopBtn">VIEW</a>
				 </div>
					</form>
				</div>
			</div>
				<hr class="soft">
				<div class="row">	  
				<div class="col-md-2">
				<a class="vidtool viewf " href="product_detail.php" title="add to cart"><span class="icon-play"></span> </a>
					<img height="150" src="assets/img/d.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h5>Product Name </h5>
					<p>
					Nowadays the lingerie industry is one of the most successful business spheres.
					We always stay in touch with the latest fashion tendencies - 
					that is why our goods are so popular..
					</p>
				</div>
				<div class="col-md-4 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
			<br>
				<div class="btn-group">
				  <a href="product_details.html" class="atcf defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
				  <a href="product_details.html" class="viewf shopBtn">VIEW</a>
				 </div>
					</form>
				</div>
			</div>
				



	</div>

	<div class="container">



</div><!-- /container -->
</div><!-- /container -->
<?php include 'include/footer.php'; ?>



</body>
</html>