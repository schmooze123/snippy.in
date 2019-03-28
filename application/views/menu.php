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
<link href="<?= base_url('assets/css/bootstrap.css') ;?>" rel='stylesheet' type='text/css' />
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
		<?php include('php_includes/header.php');?>
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
		  <h3 class="single">Menu</h3>
            <div class="arrows-two wow slideInDown"  data-wow-duration="1s" data-wow-delay=".5s"><center><img src="<?= base_url('assets/images/border.png') ;?>" /></center></div>
		   <div class="blog-top">
			   <div class="blog-single">
					<div class="single-img">
					<!-- <a href="#">
					  <img src="images/bottom.jpg" alt="">
					</a>-->
                    <div style="width:20%; float:left;">

</div>
<table width="100%" class="table" style="margin-top:2em;"  >
	<tr>
    	<th style="border-top:0;"  rowspan="65" width="25%"  valign="top">
                            <ul class="nav nav-pills nav-stacked wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
  <li class="active"><a href="#">Drinks</a></li>
  <ul class="submenu">
  <li class="active" ><a  href="<?=  base_url('index.php/menu'); ?>">Beer</a></li>
    <li><a href="<?=  base_url('index.php/wine'); ?>">Wine</a></li>
  <li><a href="<?=  base_url('index.php/tequila'); ?>">Tequila</a></li>
  <li><a href="<?=  base_url('index.php/vodka'); ?>">Vodka</a></li>
  <li><a href="<?=  base_url('index.php/whisky'); ?>">Whisky</a></li>
  <li><a href="<?=  base_url('index.php/rum'); ?>">Rum</a></li>
  <li><a href="<?=  base_url('index.php/gin'); ?>">Gin</a></li>
  <li><a href="<?=  base_url('index.php/cider'); ?>">Cider</a></li>

  </ul>
  <li><a href="#">Appetizer</a></li>
  <li><a href="#">Main Course</a></li>
  <li><a href="#">Combo's</a></li>
  
</ul>
        </th>
        

</tr>
<?php
	if(count($menus)):
		foreach($menus as $menu):

?>
<tr>
<td>

        <div class="list-group" style="width:95%; border:0; padding:0; margin-bottom:5px; border-bottom:1px solid #ccc; margin-left:1%" data-wow-duration="1s" data-wow-delay=".3s">
  <a href="#" class="list-group-item " style="border:0; padding:0;" >
    <h4 class="list-group-item-heading" style="font-size:2.5em;"><?=  $menu->drink_name; ?></h4>
    <p class="list-group-item-text"><?=  $menu->drink_desc; ?></p>
  </a>
      
<div style="height:10px;"></div>
</div>
</td>
<td>
<a href="#" class="btn btn-success" style="font-size:16px;">Rs. <?= $menu->price; ?>(650ml)</a>
	<button style="padding:6px 12px; width:45px; border-radius:4px;" onClick="addtocartlist(<?= $menu->id ?>)" class="btn btn-info btn-lg" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="" ><span class="glyphicon glyphicon-shopping-cart"></span> <!--<span class="items">1</span>--></button>

</td>
</tr>

<?php
	endforeach;
	else:
?>
<tr>
<td>

        <div class="list-group" style="width:95%; border:0; padding:0; margin-bottom:5px; border-bottom:1px solid #ccc; margin-left:1%" data-wow-duration="1s" data-wow-delay=".3s">
  <a href="#" class="list-group-item " style="border:0; padding:0;" >
    <h4 class="list-group-item-heading" style="font-size:2.5em;">Empty List</h4>
  
<div style="height:10px;"></div>
</div>
</td>
</tr>

<?php
	endif;
?>
</table>
				</div>
				
		   </div>

		</div>
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