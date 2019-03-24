<!DOCTYPE html>


<head>

	<?php include 'include/head.php'; ?>
	<title>Shoping Website</title>

	
	<!-- LOAD JQUERY LIBRARY -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>


	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="assets/css/slidersettings.css">


	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="sliderjs/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="sliderjs/jquery.themepunch.revolution.min.js"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
	<script type="text/javascript" src="sliderjs/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="sliderjs/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="sliderjs/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="sliderjs/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="sliderjs/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="sliderjs/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="sliderjs/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="sliderjs/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="sliderjs/extensions/revolution.extension.video.min.js"></script>


	<style type="text/css">

	.rev_slider li.tp-revslider-slidesli {
		position: absolute !important;
		border-radius: 2% !important;
		height: 500px !important;
	}

	li.tp-revslider-slidesli:not(.active-revslide) {
	 

	 border-radius: 4% !important;

	}



	.tp-tabs, .tp-thumbs {

	    display: none;
	}
	.fullwidthbanner-container .fullwidthabanner {
	    width: 100%;
	    position: relative;
	    height: 550px !important;
	    top: 20px;
	}

	.tparrows.tp-rightarrow:before {
	    content: ">";
	}

	.tparrows.tp-leftarrow:before {
	    content: "<";
	}


	

</style>

<script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", "http://localhost/ashop2/index.php");
    }
</script>



</head>
<body>

	<?php $link="home"; ?>


	<?php include 'include/header.php'; ?>



		<div id="rev_slider_5_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="ashop" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<!-- START REVOLUTION SLIDER 5.4.7.2 fullwidth mode -->
			<div id="rev_slider_5_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7.2">
				<ul>	





					<?php

					$rows =mysqli_query($con,"SELECT * FROM slider  ORDER BY ordr" ) or die(mysqli_error($con));
					$n=0;

					while($row=mysqli_fetch_array($rows)){

					  $name = $row['name']; 
					  $vid = $row['vid']; 
					  $ordr = $row['ordr']; 
					  $id = $row['id']; 


					  ?>

					<!-- SLIDE  -->
					<li>

						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $vid ?>?autoplay=1&mute=1&showinfo=0&controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


					</li>

					<?php } ?>

				</ul>



			</div><!-- END REVOLUTION SLIDER -->




		<div class="container">


			<div class="row">
				<div id="sidebar" class="col-md-3">
					<div class="well well-small">
						<ul class="nav nav-list">
								<?php

								$rowsx =mysqli_query($con,"SELECT name,slug FROM jewelrycat  ORDER BY ordr" ) or die(mysqli_error($con));
								          
								  while($rowx=mysqli_fetch_array($rowsx)){
								    
								    $slug = $rowx['slug']; 
								    $name = $rowx['name']; 	

								    ?>

								<li><a href="jewelry.php?page_name=<?php echo $slug ?>"><span class="icon-chevron-right"></span><?php echo $name ?></a></li>

							<?php } ?>
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


					<div class="well well-small" ><a href="#"><img class="form-control" style="height: 100px;" src="assets/img/paypal.jpg" alt="payment method paypal"></a></div>

					<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
					<br>
					<br>
					<ul class="nav nav-list promowrapper">
						<?php

						$rows =mysqli_query($con,"SELECT * FROM jewelry where feat=1  ORDER BY rand() LIMIT 1" ) or die(mysqli_error($con));
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
								<a class="vidtool viewf " href="djewelry.php?page_name=<?php echo $slug ?>" title="add to cart"><span class="icon-play"></span> </a>
								<img src="images/products/<?php echo $img ?>" alt="<?php echo $name ?>">
								<div class="caption">
									<h4><a class="defaultBtn" href="djewelry.php?page_name=<?php echo $slug ?>">VIEW</a> <span class="pull-right">Rs. <?php echo number_format($price) ?></span></h4>
								</div>
							</div>
						</li>
						<?php } ?>

<?php

						$rows =mysqli_query($con,"SELECT * FROM makeup where feat=1  ORDER BY rand() LIMIT 1" ) or die(mysqli_error($con));
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
								<img src="images/products/<?php echo $img ?>" alt="<?php echo $name ?>">
								<div class="caption">
									<h4><a class="defaultBtn" href="dmakeup.php?page_name=<?php echo $slug ?>">VIEW</a> <span class="pull-right">Rs. <?php echo number_format($price) ?></span></h4>
								</div>
							</div>
						</li>
						<?php } ?>



					</ul>

				</div>
				<div class="col-md-9">


					<div class="well well-small">
						<h3>New Arrivals </h3>
						<hr class="soften"/>
						<div class="row-fluid">
							<div id="newProductCar" class="carousel slide">
								<div class="carousel-inner">

									<div class="item active">

										<div class="thumbnails">

											<?php

											$rows =mysqli_query($con,"SELECT * FROM jewelry ORDER BY id  LIMIT 4" ) or die(mysqli_error($con));
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


											  ?>
											<div class="col-md-3">

												<div class="thumbnail">
													<a class="vidtool viewf " href="djewelry.php?page_name=<?php echo $slug ?>" title="add to cart"><span class="icon-play"></span> </a>
													<a href="#" class="tag"></a>
													<a href="djewelry.php?page_name=<?php echo $slug ?>" id="xyz"><img style="height: 150px" src="images/products/<?php echo $img ?>" alt="bootstrap-ring"></a>


												</div>
											</div>

										<?php } ?>
											
										</div>
									</div>
								</div>
								<a class="left carousel-control" href="#newProductCar" data-sdivde="prev">&lsaquo;</a>
								<a class="right carousel-control" href="#newProductCar" data-sdivde="next">&rsaquo;</a>
							</div>
						</div>

					</div>




					<div class="well well-small">
						Best Makeup Products 
					</div><div class="row">
						<div class="thumbnails">

							
							<?php

							$rows =mysqli_query($con,"SELECT * FROM makeup  ORDER BY ordr LIMIT 4" ) or die(mysqli_error($con));
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

							<div class="col-md-3">
								<div class="thumbnail">
									<a class="vidtool viewf" href="dmakeup.php?page_name=<?php echo $slug ?>" title="add to cart"><span class="icon-play"></span> </a>
									<a href="dmakeup.php?page_name=<?php echo $slug ?>"><img style="height: 200px;" src="images/products/<?php echo $img ?>" alt=""></a>
									<div class="caption cntr">
										<p><?php echo $name ?></p>
										<p><strong>Rs. <?php echo number_format($price) ?></strong></p>
										<h4><button class="shopBtn atcm" name="addcart" value="<?php echo $slug ?>"> Add to cart </button></h4>
										<input style="display: none" name="type" value="makeup" name="type"> 
										


									</div>
								</div>
							</div>
							</form>

						<?php } ?>





						</div>
					</div>



					<div class="well well-small">
						Featured Jewelry Products 
					</div><div class="row">
						<div class="thumbnails">

							
							<?php

							$rows =mysqli_query($con,"SELECT * FROM jewelry  ORDER BY ordr LIMIT 4" ) or die(mysqli_error($con));
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

							<div class="col-md-3">
								<div class="thumbnail">
									<a class="vidtool viewf" href="jewelry.php?page_name=<?php echo $slug ?>" title="add to cart"><span class="icon-play"></span> </a>
									<a href="jewelry.php?page_name=<?php echo $slug ?>"><img style="height: 200px;" src="images/products/<?php echo $img ?>" alt=""></a>
									<div class="caption cntr">
										<p><?php echo $name ?></p>
										<p><strong>Rs. <?php echo number_format($price) ?></strong></p>
										<h4><button class="shopBtn atcm" name="addcart" value="<?php echo $slug ?>"> Add to cart </button></h4>

										<input style="display: none" name="type" value="jewelry" name="type"> 



									</div>
								</div>
							</div>
							</form>

						<?php } ?>





						</div>
					</div>


					<!--

					<div class="well well-small">
						Discount Products 
					</div>
					<div class="row">
						<div class="thumbnails">



							<div class="col-md-3">
								<div class="thumbnail">
									<a class="vidtool viewf" href="product_detail.php" title="add to cart"><span class="icon-play"></span> </a>
									<a href="product_detail.php"><img src="assets/img/e.jpg" alt=""></a>
									<div class="caption cntr">
										<p>Item Name</p>
										<p style="text-decoration:line-through;"><strong> $22.00</strong></p>
										<p><strong> $20.00</strong></p>
										<h4><a class="shopBtn atcm" href="#" title="add to cart"> Add to cart </a></h4>



									</div>
								</div>
							</div>





						</div>
					</div>
-->

					<div class="well well-small">
						Under Rs. 9,999/- Products 
					</div>
					<div class="row">
						<div class="thumbnails">

							
								
								<?php

								$rows =mysqli_query($con,"SELECT * FROM jewelry where price<10000  ORDER BY rand() LIMIT 2" ) or die(mysqli_error($con));
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

								<div class="col-md-3">
									<div class="thumbnail">
										<a class="vidtool viewf" href="jewelry.php?page_name=<?php echo $slug ?>" title="add to cart"><span class="icon-play"></span> </a>
										<a href="jewelry.php?page_name=<?php echo $slug ?>"><img style="height: 200px;" src="images/products/<?php echo $img ?>" alt=""></a>
										<div class="caption cntr">
											<p><?php echo $name ?></p>
											<p><strong>Rs. <?php echo number_format($price) ?></strong></p>
										<h4><button class="shopBtn atcm" name="addcart" value="<?php echo $slug ?>"> Add to cart </button></h4>

										<input style="display: none" name="type" value="jewelry" name="type"> 



										</div>
									</div>
								</div>

							</form>

							<?php } ?>





								<?php

								$rows =mysqli_query($con,"SELECT * FROM makeup where price<10000  ORDER BY rand() LIMIT 2" ) or die(mysqli_error($con));
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

								<div class="col-md-3">
									<div class="thumbnail">
										<a class="vidtool viewf" href="makeup.php?page_name=<?php echo $slug ?>" title="add to cart"><span class="icon-play"></span> </a>
										<a href="makeup.php?page_name=<?php echo $slug ?>"><img style="height: 200px;" src="images/products/<?php echo $img ?>" alt=""></a>
										<div class="caption cntr">
											<p><?php echo $name ?></p>
											<p><strong>Rs. <?php echo number_format($price) ?></strong></p>
										<h4><button class="shopBtn atcm" name="addcart" value="<?php echo $slug ?>"> Add to cart </button></h4>
										<input style="display: none" name="type" value="makeup" name="type"> 



										</div>
									</div>
								</div>
							</form>

							<?php } ?>








						</div>
					</div>

				</div>
			</div>





			<script type="text/javascript">
				var revapi5,
				tpj;	
				(function() {			
					if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();	
					function onLoad() {				
						if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
						if(tpj("#rev_slider_5_1").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_5_1");
						}else{
							revapi5 = tpj("#rev_slider_5_1").show().revolution({
								sliderType:"carousel",
								jsFileLocation:"//insideweb.com.pk/wp-content/plugins/revslider/public/assets/sliderjs/",
								sliderLayout:"fullwidth",
								dottedOverlay:"none",
								delay:1500,
								navigation: {
									keyboardNavigation:"on",
									keyboard_direction: "horizontal",
									mouseScrollNavigation:"off",
									mouseScrollReverse:"default",
									onHoverStop:"off",
									touch:{
										touchenabled:"on",
										touchOnDesktop:"on",
										swipe_threshold: 75,
										swipe_min_touches: 50,
										swipe_direction: "horizontal",
										drag_block_vertical: false
									}
									,
									arrows: {
										style:"hesperiden",
										enable:true,
										hide_onmobile:false,
										hide_onleave:false,
										tmp:'',
										left: {
											h_align:"left",
											v_align:"center",
											h_offset:30,
											v_offset:0
										},
										right: {
											h_align:"right",
											v_align:"center",
											h_offset:30,
											v_offset:0
										}
									}
									,
									thumbnails: {
										style:"hades",
										enable:true,
										width:60,
										height:60,
										min_width:60,
										wrapper_padding:20,
										wrapper_color:"rgb(0,0,0)",
										tmp:'<span class="tp-thumb-img-wrap">  <span class="tp-thumb-image"></span></span>',
										visibleAmount:9,
										hide_onmobile:false,
										hide_onleave:false,
										direction:"horizontal",
										span:true,
										position:"inner",
										space:10,
										h_align:"center",
										v_align:"bottom",
										h_offset:0,
										v_offset:0
									}
								},
								carousel: {
									border_radius: "50%",
									minScale: 55,
									vary_scale: "off",
									horizontal_align: "center",
									vertical_align: "center",
									fadeout: "on",
									vary_fade: "on",
									maxVisibleItems: 5,
									infinity: "on",
									space: -150,
									stretch: "off",
									showLayersAllTime: "off",
									easing: "Power3.easeInOut",
									speed: "800"
								},
								visibilityLevels:[1240,1024,778,480],
								gridwidth:800,
								gridheight:800,
								lazyType:"smart",
								parallax: {
									type:"mouse",
									origo:"slidercenter",
									speed:2000,
									speedbg:0,
									speedls:0,
									levels:[2,3,4,5,6,7,12,16,10,50,47,48,49,50,51,55],
								},
								shadow:0,
								spinner:"off",
								stopLoop:"on",
								stopAfterLoops:0,
								shuffle:"off",
								autoHeight:"off",
								hideThumbsOnMobile:"off",
								hideSliderAtLimit:0,
								hideCaptionAtLimit:0,
								hideAllCaptionAtLilmit:0,
								debugMode:false,
								fallbacks: {
									simplifyAll:"off",
									nextSlideOnWindowFocus:"off",
									disableFocusListener:false,
								}
							});
						}; /* END OF revapi call */

					}; /* END OF ON LOAD FUNCTION */
				}()); /* END OF WRAPPING FUNCTION */
			</script>


		</div>


		
		<?php include 'include/bottombar.php'; ?>



	</body>
	</html>
