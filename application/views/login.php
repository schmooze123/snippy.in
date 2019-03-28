<!DOCTYPE HTML>
<html>
<head>
<title>Snippy Menu Card - Order drinks, snacks, main course and start party at home with free music CD of your selected genre.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Menu: Order drinks, snacks, main course and start party at home with free music CD of your selected choice." />
<meta name="description" content="Menu: Order drinks, snacks, main course and start party at home with free music CD of your choice." />
<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url('assets/images/51ed97139d6c7339a7d5a647a53d7680.png') ;?>" rel="shortcut icon" />
<link href="<?= base_url('assets/bootstrap.min.css') ;?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?= base_url('assets/css/iconeffects.css') ;?>" rel='stylesheet' type='text/css' />
<link href="<?= base_url('assets/css/style.css') ;?>" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="<?= base_url('assets/css/swipebox.css') ;?>">
<script src="<?= base_url('assets/js/jquery-1.11.1.min.js') ;?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/move-top.js') ;?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/easing.js') ;?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ;?>"></script>

<!--/web-font-->
	<link href='//fonts.googleapis.com/css?family=Italianno' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700' rel='stylesheet' type='text/css'>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--animate-->
<link href="<?= base_url('assets/css/animate.css') ;?>" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
.blog-section .container .blog-top .blog-single .single-img .table tr td {
	border-top:0;
}
.nav-pills > li.active{
	background-color:#5cb85c;
}
.nav-pills li:hover{
	background:#1B242F;
	color:#FFF;
}
.submenu{
	margin-left:15px;
}
.blog-section .container .blog-top .blog-single .single-img .table tr th .nav.nav-pills.nav-stacked.wow.slideInUp .submenu li {
	list-style:none;
	padding:10px 15px;
	margin-top:3px;
}
.submenu li:hover{
	background:#5cb85c;
	color:#FFF;
}
.blog-section .container .blog-top .blog-single .single-img .table tr th .nav.nav-pills.nav-stacked.wow.slideInUp .submenu .active {
	background-color:#5cb85c;
	color:#FFF;
}
 .submenu .active a{
	color:#FFF;
}
</style>
<script src="<?= base_url('assets/js/wow.min.js') ;?>"></script>
	<script>
		 new WOW().init();
	</script>
<!--//animate-->

</head>
<body>
<!--start-home-->

		<div class="banner two" id="home">
		<div class="header-bottom">
		     <div class="container">
			  <div class="fixed-header">
			      <!--logo-->
			       <div class="logo">
                     <a href="#"><h1>S<span style="text-transform:lowercase; margin-left:3px;">nippy</span></h1></a>
					  <p style="text-transform:none;">Start party at home now</p>
				   </div>
					<!--//logo-->
					<div class="top-menu">
							<span class="menu"> </span>
							<nav class="link-effect-4" id="link-effect-4">
                              <ul>
															 <li class="active"><a data-hover="Home" href="../index.php">Home</a></li>
								<li><a data-hover="About" href="#about" class="scroll">About</a></li>
								<li><a data-hover="Menu" href="#services" class="scroll">Menu</a></li>
								<li><a data-hover="Special" href="#team" class="scroll">Special</a></li>
							    <li><a data-hover="Order" href="#reservation" class="scroll">Order</a></li>
							    <li><a data-hover="Drinks" href="#gallery" class="scroll">Drinks</a></li>
								<li><a data-hover="Contact" href="#contact" class="scroll">Contact</a></li>

								</ul>
							</nav>
							</div>
							<!-- script-for-menu -->
								<script>
									$("span.menu").click(function(){
										$(".top-menu ul").slideToggle("slow" , function(){
										});
									});
								</script>
								<!-- script-for-menu -->

				 <div class="clearfix"></div>
					<script>
				$(document).ready(function() {
					 var navoffeset=$(".header-bottom").offset().top;
					 $(window).scroll(function(){
						var scrollpos=$(window).scrollTop(); 
						if(scrollpos >=navoffeset){
							$(".header-bottom").addClass("fixed");
						}else{
							$(".header-bottom").removeClass("fixed");
						}
					 });
					 
				});
				</script>
			 </div>
		</div>
	</div>
		   

		 
	</div>

<!--blog-section-->
      <div class="blog-section">
		<div class="container">
		  <h3 class="single">Login</h3>
            <div class="arrows-two wow slideInDown"  data-wow-duration="1s" data-wow-delay=".5s"><center><img src="<?= base_url('assets/images/border.png') ;?>" /></center></div>
		
			
				<center>	
                   <!--start login system-->
                   <div style="width:40%; margin-top:3em;">
<form action="<?= base_url('index.php/login/userlogin') ;?>" method="post" class="form-horizontal" >
  <fieldset>
    
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <?php echo form_input(['type'=>'text','class'=>'form-control', 'id'=>'inputEmail', 'name'=>'username', 'placeholder'=>'Email', 'value'=>set_value('username')]); ?>
        
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">

       <?php echo form_input(['type'=>'password','class'=>'form-control', 'name'=>'password','id'=>'inputPassword', 'placeholder'=>'Password']); ?>
      </div>
    </div>
      <div class="form-group" >
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Reset</button>
        <?php echo form_submit(['class'=>'btn btn-success', 'value'=>'LogIn']); ?>
        
      </div>
    </div>
  </fieldset>
</form>
<?php echo validation_errors('<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');?>


<!--end login system-->
				
		
		  

		</div>
</center>
	  </div>
	</div>
<!--footer-->
	<div class="footer text-center">
						<div class="container">
							<!--logo2-->
								   <div class="logo2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
									  <a href="index.html"><h2>S<span style="letter-spacing:2px;">nippy</span></h2></a>
									  <p>Start Party At Home Now</p>
								   </div>
					<!--//logo2-->
								<a href="single.html" class="flag_tag2">Where to find us?</a>
									<ul class="social wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
										<li><a href="#" class="tw"></a></li>
										<li><a href="#" class="fb"> </a></li>
										<li><a href="#" class="in"> </a></li>
										<li><a href="#" class="dott"></a></li>
										 <div class="clearfix"></div>
									</ul>
									<p class="copy-right wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">&copy; 2016 Snippy. All rights reserved</p>

					 </div>
	     </div>

		<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
								<!--end-smooth-scrolling-->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>