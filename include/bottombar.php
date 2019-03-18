






<div class="voices" style="display: none;">
<div id="audio-position">
  <audio controls id="atcm">
    <source src="assets/mp3/am.mp3"></source>


  </audio>
</div>

<div id="audio-position">
  <audio controls id="atcf">
    <source src="assets/mp3/af.mp3"></source>

  </audio>
</div>

<div id="audio-position">
  <audio controls id="viewf">
    <source src="assets/mp3/vpf2.mp3"></source>

  </audio>
</div>
</div>

<footer class="footer" style="padding: 0px;">
<div class="row" style="padding: 10px 30px;max-width: 98%;">
<div class="col-md-2">
<h5>Your Account</h5>
<a href="#">YOUR ACCOUNT</a><br>
<a href="#">PERSONAL INFORMATION</a><br>
<a href="#">ADDRESSES</a><br>
<a href="#">DISCOUNT</a><br>
<a href="#">ORDER HISTORY</a><br>
 </div>
<div class="col-md-2">
<h5>Iinformation</h5>
<a href="contact.html">CONTACT</a><br>
<a href="#">SITEMAP</a><br>
<a href="#">LEGAL NOTICE</a><br>
<a href="#">TERMS AND CONDITIONS</a><br>
<a href="#">ABOUT US</a><br>
 </div>
<div class="col-md-2">
<h5>Our Offer</h5>
<a href="#">NEW PRODUCTS</a> <br>
<a href="#">TOP SELLERS</a><br>
<a href="#">SPECIALS</a><br>
<a href="#">MANUFACTURERS</a><br>
<a href="#">SUPPLIERS</a> <br/>
 </div>
 <div class="col-md-6">
<h5>The standard chunk of Lorem</h5>
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
 those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et 
 Malorum" by Cicero are also reproduced in their exact original form, 
accompanied by English versions from the 1914 translation by H. Rackham.
 </div>
 </div>
</footer>


<div class="copyright">
<div class="container">
	<p class="pull-right">
		<a href="#"><img src="assets/img/maestro.png" alt="payment"></a>
		<a href="#"><img src="assets/img/mc.png" alt="payment"></a>
		<a href="#"><img src="assets/img/pp.png" alt="payment"></a>
		<a href="#"><img src="assets/img/visa.png" alt="payment"></a>
		<a href="#"><img src="assets/img/disc.png" alt="payment"></a>
	</p>
	<span>Copyright &copy; 2013 - Online Shopping</span>
</div>
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>




<script type="text/javascript">
	

	//this works

	$(function(){
	  //take id of the audio and make a variable
	var audio = $("#atcf")[0];

	  //eventhandler on hover with play() function
	$(".atcf").mouseenter(function() {
	  audio.play();
	  console.log("it works");
	});

	  
	  //additional eventhandler on button click
	  $("#demo").click(function(){
	    console.log("was clicked");
	    audio.play();
	    console.log(audio);
	  })
	  
	  });



</script>

<script type="text/javascript">
	

	//this works

	$(function(){
	  //take id of the audio and make a variable
	var audio = $("#atcm")[0];

	  //eventhandler on hover with play() function
	$(".atcm").mouseenter(function() {
	  audio.play();
	  console.log("it works");
	});

	  
	  //additional eventhandler on button click
	  $("#demo").click(function(){
	    console.log("was clicked");
	    audio.play();
	    console.log(audio);
	  })
	  
	  });



</script>
<script type="text/javascript">
	

	//this works

	$(function(){
	  //take id of the audio and make a variable
	var audio = $("#viewf")[0];

	  //eventhandler on hover with play() function
	$(".viewf").mouseenter(function() {
	  audio.play();
	  console.log("it works");
	});

	  
	  //additional eventhandler on button click
	  $("#demo").click(function(){
	    console.log("was clicked");
	    audio.play();
	    console.log(audio);
	  })
	  
	  });



</script>



