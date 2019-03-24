<style type="text/css">
  .navbar-inverse {
      background-color: #fffdfd;
      border-color: #00000000;
      margin-bottom:0px;
  }
  .topNav a {
      color: #ed6b31;
      font-size: 14px;
      font-weight: bold;
      display: inline-block;
      padding: 8px 14px;
  }
  a {
      color: #e86128;
      text-decoration: none;
  }
  .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
      color: #fff;
      background-color: #e46128;
  }
  .dropdown-menu {

      top: 85%;
    }
  .navbar-inverse .navbar-nav>li>a {
      color: #000;
      font-size: 15px;
  }
  .dropdown-menu>li>a {
      display: block;
      padding: 10px 60px 10px 26px;
      clear: both;
      font-weight: 400;
      line-height: 1.42857143;
      
  }
  .navbar-nav>li>a {

      line-height: 40px;
  }
  .navbar-fixed-top {

      line-height: 3;
      font-size: 20px;
  }
  .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
      color: #fff;
      background-color: #e46128;
  }
  .navbar-inverse .navbar-nav>li>a {
      color: #000;
  }


  .navbar-inverse .navbar-nav>li>a:hover {
      color: #e46128;
  }
  .navbar-inverse .navbar-toggle .icon-bar {
      background-color: #e65708;
  }

  .navbar-inverse .navbar-toggle {
      border-color: #ef6d33;
  }

  li{
    display: inline-block;
  }
  .shopBtn {

      background: #ef6d33;

  }

  .carousel-control {
      background: #e46128;
      height: 43px;
      line-height: 34px;
      color: #fff;
      max-width: 50px;
  }

  carousel-control, .carousel-control:hover {
      background: #e46128;
      height: 43px;
      line-height: 34px;
      color: #fff;
      max-width: 50px;
  }

  body {

      background: #e8e8e8;
    }


</style>



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
  .thumbnail>a.vidtool {
    display: block;
    position: absolute;
    top: 33%;
    left: 38%;
    background: #e45414;
    color: #ffffff;
    font-size: 20px;
    padding: 7px 20px;
    border-radius: 7px;
  }
  .thumbnail>a.vidtool:hover {

    opacity:0.4;
    text-decoration: none; 
     }
  .vidtool {
      display: block;
      position: absolute;
      top: 38%;
      left: 38%;
      background: #e45414;
      color: #ffffff;
      font-size: 20px;
      padding: 7px 20px;
      border-radius: 7px;
    }
  .vidtool:hover {
      opacity:0.4;
      text-decoration: none; 
    }
</style>


<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="padding-left: 50px;padding-right: 50px">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

       
        <?php

        $rows =mysqli_query($con,"SELECT name,slug,res FROM pages  ORDER BY ordr" ) or die(mysqli_error($con));
                  
          while($row=mysqli_fetch_array($rows)){
            
            $slug = $row['slug']; 
            $name = $row['name']; 
            $res = $row['res']; 

            ?>
       
        
         <li class=" <?php if($link==$slug) echo'active' ;?> <?php if($slug=='jewelry' OR $slug=='makeup' ) echo'dropdown' ;?> "><a href="<?php if($slug=='home') echo 'index'; else echo $slug; ?>.php"><?php echo $name ?><?php if($slug=='jewelry' OR $slug=='makeup' ) echo'<b class="caret"></b>' ;?>  </a>

          <?php if($slug=='jewelry') { ?>
          <ul class="dropdown-menu">
            <?php

            $rowsx =mysqli_query($con,"SELECT name,slug FROM jewelrycat  ORDER BY ordr" ) or die(mysqli_error($con));
                      
              while($rowx=mysqli_fetch_array($rowsx)){
                
                $slug = $rowx['slug']; 
                $name = $rowx['name']; 

                ?>

          <li class=""><a href="jewelry.php?page_name=<?php echo $slug ?>"><?php echo $name ?></a></li>

        <?php } ?>


          </ul>
         <?php } ?>

         
          <?php if($slug=='makeup') { ?>
         	<ul class="dropdown-menu">
            <?php

            $rowsx =mysqli_query($con,"SELECT name,slug FROM makeupcat  ORDER BY ordr" ) or die(mysqli_error($con));
                      
              while($rowx=mysqli_fetch_array($rowsx)){
                
                $slug = $rowx['slug']; 
                $name = $rowx['name']; 

                ?>

       	  <li class=""><a href="makeup.php?page_name=<?php echo $slug ?>"><?php echo $name ?></a></li>

        <?php } ?>


         	</ul>
         <?php } ?>



          </li>

        <?php } ?>
       

       </ul>
       
       <ul class="nav pull-right">
       <li class="dropdown">
        <a data-toggle="dropdown" style="color:#e46128;margin-top: 15px" class="dropdown-toggle" href="#"><span class="icon-shopping-cart"></span> Cart <b class="caret"></b></a>
        <div class="dropdown-menu">
          <div class="" style="padding: 10px 25px">


        <table class="table " style="min-width: 300px;">
          <tr><th style="min-width: 300px">Product</th><th style="min-width: 100px">Quantity</th><th style="min-width: 200px">Price</th></tr>
          <?php 

          $rows =mysqli_query($con,"SELECT * FROM orders where status='cart' AND actid='$userid'" ) or die(mysqli_error($con));
          $stotal=0;

          while($row=mysqli_fetch_array($rows)){

            $proslug = $row['proslug']; 
            $qty = $row['qty']; 

            $type = $row['type']; 

            $rowsx =mysqli_query($con,"SELECT name,price FROM $type where slug='$proslug' " ) or die(mysqli_error($con));
            while($rowx=mysqli_fetch_array($rowsx)){

              $price = $rowx['price'];  
              $proname = $rowx['name']; 
              $total = $qty*$price;
              $stotal = $stotal+$total;
            

            ?>
          <tr><td><?php echo $proname ?> </td><td><?php echo $qty ?> x </td><td>Rs. <?php echo number_format($price) ?>/-</td></tr>
           

          

        <?php } } ?>
        <tr><td></td><td style="text-align: right;">Total:</td><td>Rs. <?php echo number_format($stotal) ?>/-</td></tr>
        <tr><td></td><td></td><td style="text-align: right;"><a href="Checkout.php" class="btn btn-default">Checkout</a></td></tr>


        </table>




        </div>
        </div>
       </li>
   </ul>
       <ul class="nav pull-right">
        <?php if(isset($uname)){ ?>
          <li  class="dropdown"> 
        <a data-toggle="dropdown" style="color:#e46128;margin-top: 15px" class="dropdown-toggle" href="#"><span class="icon-lock"></span> <?php echo $uname ?> <b class="caret"></b></a>
              <div class="dropdown-menu">
               

                <div class="" style="padding: 10px 15px">
                
                <a href="myaccount.php" class="">My Account</a><br><hr>
                <a href="logout.php" class="">Logout</a>


              </div>

              </div>


          </li>

        <?php } else{?>
       <li class="dropdown">
       	<a data-toggle="dropdown" style="color:#e46128;margin-top: 15px" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
       	<div class="dropdown-menu">
          <form action="access.php" method="post">

          <div class="" style="padding: 10px 15px">
          <input type="username" placeholder="Username" name="username" class="search-query form-control" style="    min-width: 200px;margin-top: 15px;">
          <input type="Password" placeholder="Password" name="password" class="search-query form-control" style="    min-width: 200px;margin-top: 15px;">
          <br>
          <button type="submit" name="login" class="defaultBtn">Sign in</button>


       


        <a href="signup.php" class="btn btn-default" style="float: right">Sign Up?</a>


        </div>
      </form>
       	</div>
       </li>
     <?php } ?>
   </ul>
   <form action="#" class="navbar-search pull-right  ">
          <input type="text" placeholder="Search Products" class="search-query form-control" style="    min-width: 300px;margin-top: 20px;">
   </form>
    </div>
  </div>
</nav>



<!--
Navigation Bar Section 
-->

<style type="text/css">
	.dropdown:hover .dropdown-menu {display: inline-block;}


</style>