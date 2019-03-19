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
       
         <li class="active"><a href="index.php">Home	</a></li>
       
         <li class="dropdown "><a href="products.php">Jewllery <b class="caret"></b></a>
         	<ul class="dropdown-menu">
       	  <li class=""><a href="products.php">Jewllery Category 1</a></li>
       	  <li class=""><a href="products.php">Jewllery Category 2</a></li>
       	  <li class=""><a href="products.php">Jewllery Category 3</a></li>
         	</ul>
          </li>
         <li class="dropdown"><a href="products.php">Makeup  <b class="caret"></b></a>
         	<ul class="dropdown-menu">
       	  <li class=""><a href="products.php">Makeup Category 1</a></li>
       	  <li class=""><a href="products.php">Makeup Category 2</a></li>
       	  <li class=""><a href="products.php">Makeup Category 3</a></li>
         	</ul>
          </li>
       	

         <li class=""><a href="general.html">Manufacturers</a></li>
         <li class=""><a href="contact.php">Customer Care</a></li>
       </ul>
       
       <ul class="nav pull-right">
       <li class="dropdown">
        <a data-toggle="dropdown" style="color:#e46128;margin-top: 15px" class="dropdown-toggle" href="#"><span class="icon-shopping-cart"></span> Cart <b class="caret"></b></a>
        <div class="dropdown-menu">
          <div class="" style="padding: 10px 25px">
        <table class="table " style="min-width: 300px;">
          <tr><th>Product</th><th>Price</th></tr>
          <tr><td>Product 1 </td><td style="width: 100px">Rs. 1000/-</td></tr>
          <tr><td>Product 2 </td><td style="width: 100px">Rs. 8000/-</td></tr>


        </table>
        <div  style="float: right;">
        <h3>Total : Rs. 9000/-</h3>
        <a href="checkout.php" class="btn btn-primary">Checkout</a>
       </div>
        </div>
        </div>
       </li>
   </ul>
       <ul class="nav pull-right">
       <li class="dropdown">
       	<a data-toggle="dropdown" style="color:#e46128;margin-top: 15px" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
       	<div class="dropdown-menu">
          <div class="" style="padding: 10px 15px">
          <input type="text" placeholder="Username" class="search-query form-control" style="    min-width: 200px;margin-top: 15px;">
          <input type="text" placeholder="Password" class="search-query form-control" style="    min-width: 200px;margin-top: 15px;">
          <br>
         <a href="login.php" class="btn btn-primary" >Sign In</a>

       


        <a href="signup.php" class="btn btn-default" style="float: right">Sign Up?</a>

        </div>
       	</div>
       </li>
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