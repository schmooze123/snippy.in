<?php
session_start(); 
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Snippy - Order drinks, snacks, main course and start party at home with free music CD of your selected genre.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Order drinks, snacks, main course and start party at home with free music CD of your selected choice." />
<meta name="description" content="Order drinks, snacks, main course and start party at home with free music CD of your choice." />
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
<!-- swipe box js -->
	<script src="<?= base_url('assets/js/jquery.swipebox.min.js') ;?>"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ;?>"></script>
<!-- //swipe box js -->
<!--animate-->
<link href="<?= base_url('assets/css/animate.css') ;?>" rel="stylesheet" type="text/css" media="all">
<script src="<?= base_url('assets/js/wow.min.js') ;?>"></script>
	<script>
		 new WOW().init();
	</script>

</head>
<body>
<?php echo $this->session->userdata('ffname'); ?>
<!--start-home-->
<?php include('php_includes/header.php');?>
		<div class="banner" id="home">
		<div class="header-bottom wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">
		     <div class="container">
			  <div class="fixed-header">
			      <!--logo-->
			       <div class="logo">
                      <a href="#"><h1>S<span style="text-transform:none;">nippy</span></h1></a>
					  <p>Start party at home now</p>
				   </div>
					<!--//logo-->
					<div class="top-menu">
							<span class="menu"> </span>
							<nav class="link-effect-4" id="link-effect-4">
                              <ul>
								 <li class="active"><a data-hover="Home" href="#">Home</a></li>
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
		<div class="banner-slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider4">
					    <li>
						   <div class="banner-info">
							      <h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Welcome</h3>
								  <p class="wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">TO THE SNIPPY</p>
								     <div class="arrows wow slideInDown"  data-wow-duration="1s" data-wow-delay=".2s"><img src="<?= base_url('assets/images/border.png') ;?>" alt="border"/></div>
								 <span class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">READY TO BE OPENED</span>
							  </div>
						</li>
						<li>
						   <div class="banner-info">
							    <h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">The Real</h3>
								 <p class="wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">MAGICAL DRINKS</p>
								  <div class="arrows wow slideInDown"  data-wow-duration="1s" data-wow-delay=".2s"><img src="<?= base_url('assets/images/border.png') ;?>" alt="border"/></div>
								 <span class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">READY TO BE OPENED</span>
							  </div>
						</li>
						<li>
						   <div class="banner-info">
							      <h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Delicious</h3>
								  <p class="wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">FRESH FOODS</p>
								   <div class="arrows wow slideInDown"  data-wow-duration="1s" data-wow-delay=".2s"><img src="<?= base_url('assets/images/border.png') ;?>" alt="border"/></div>
								   <span class="wow slideInUpslideInLeft"  data-wow-duration="1s" data-wow-delay=".3s">READY TO BE OPENED</span>
						   </div>
					  </li>
					</ul>
			  </div>
		<!--banner Slider starts Here-->
	  	<script src="<?= base_url('assets/js/responsiveslides.min.js') ;?>"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
	      <!--banner Slider starts Here-->
		 </div>

		 <div class="down"><a class="scroll" href="#services"><img src="<?= base_url('assets/images/down.png') ;?>" alt=""></a></div>
	</div>

<!--/products-->
		  <div class="about" id="about">
		     <div class="container">
			 <!--/about-section-->
			   <div class="about-section">
				<div class="col-md-7 ab-left">
				  <div class="grid">
			        <div class="h-f wow slideInLeft"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
					<img src="<?= base_url('assets/images/s1.jpg') ;?>" alt="img25"/>
						<figcaption>
							<h4>Crazy <span>Drinks</span></h4>
							<p>When Jazz starts to chase cars, the whole world stands still.</p>
							
						</figcaption>			
					</figure>
					
				 </div>
				 <div class="h-f wow slideInLeft"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
						<img src="<?= base_url('assets/images/s2.jpg') ;?>" alt="img25"/>
						<figcaption>
							<h4>Honest <span>Food</span></h4>
							<p>When Jazz starts to chase cars, the whole world stands still.</p>
							
						</figcaption>			
					</figure>
					
				 </div>
				 <div class="clearfix"> </div>
				 </div>
			   </div>
			   <div class="col-md-5 ab-text">
			             <h3 class="tittle wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">Welcome</h3>
						  <div class="arrows-two wow slideInDown"  data-wow-duration="1s" data-wow-delay=".5s"><img src="<?= base_url('assets/images/border.png') ;?>" alt="border"/></div>
						  <p class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Lorem ipsum Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.Lorem Ipsum has been the industry's standard dummy text ever since.</p>
						  <div class="start wow flipInX"  data-wow-duration="1s" data-wow-delay=".3s">
						     <a href="single.html" class="hvr-bounce-to-bottom">Get Started</a>
						  </div>

					</div>
					<div class="clearfix"> </div>
			 </div>
			  <!--//about-section-->
			  <!--/about-section2-->
			   <div class="about-section">
			        <div class="col-md-5 ab-text two">
			             <h3 class="tittle wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">About</h3>
						 <div class="arrows-two wow slideInDown"  data-wow-duration="1s" data-wow-delay=".5s"><img src="<?= base_url('assets/images/border.png') ;?>" alt="border"/></div>
						  <p class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Lorem ipsum Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.Lorem Ipsum has been the industry's standard dummy text ever since.</p>
						 <div class="start wow flipInX"  data-wow-duration="1s" data-wow-delay=".3s">
						     <a href="single.html" class="hvr-bounce-to-bottom">Read more</a>
						  </div>

					</div>
						<div class="col-md-7 ab-left">
				  <div class="grid">
			        <div class="h-f  wow slideInRight"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
					<img src="<?= base_url('assets/images/s4.jpg') ;?>" alt="img25"/>
						<figcaption>
							<h4>Crazy <span>Drinks</span></h4>
							<p>When Jazz starts to chase cars, the whole world stands still.</p>
							
						</figcaption>			
					</figure>
					
				 </div>
				 <div class="h-f  wow slideInRight"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
						<img src="<?= base_url('assets/images/s3.jpg') ;?>" alt="img25"/>
						<figcaption>
							<h4>Honest <span>Food</span></h4>
							<p>When Jazz starts to chase cars, the whole world stands still.</p>
						
						</figcaption>			
					</figure>
					
				 </div>
				 <div class="clearfix"> </div>
				 </div>
			   </div>
					<div class="clearfix"> </div>
			 </div>
			  <!--//about-section2-->
			</div>
	     </div>
<!--//products-->
<!-- service-type-grid -->
	<div class="service" id="services">
		<div class="container">
		    <h3 class="tittle">Our Counters</h3>
			<div class="arrows-serve"><img src="<?= base_url('assets/images/border.png') ;?>" alt="border"></div>
				<div class="inst-grids">
					<div class="col-md-3 services-gd text-center wow slideInLeft"  data-wow-duration="1s" data-wow-delay=".3s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="#" class="hi-icon"><img src="<?= base_url('assets/images/serve1.png') ;?>" alt=" " /></a>
						</div>
						<h4>Bar</h4>
						 <p>Lorem ipsum Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit.</p>
					</div>
					<div class="col-md-3 services-gd text-center wow slideInDown"  data-wow-duration="1s" data-wow-delay=".2s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="#" class="hi-icon"><img src="<?= base_url('assets/images/serve2.png') ;?>" alt=" " /></a>
						</div>
						<h4>Snacks</h4>
						 <p>Lorem ipsum Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit.</p>
					</div>
					<div class="col-md-3 services-gd text-center wow slideInUp"  data-wow-duration="1s" data-wow-delay=".2s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="#" class="hi-icon"><img src="<?= base_url('assets/images/serve3.png') ;?>" alt=" " /></a>
						</div>
						<h4>Main Course</h4>
						 <p>Lorem ipsum Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit.</p>
					</div>
					<div class="col-md-3 services-gd text-center wow slideInRight"  data-wow-duration="1s" data-wow-delay=".3s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="#" class="hi-icon"><img src="<?= base_url('assets/images/serve4.png') ;?>" alt=" " /></a>
						</div>
						<h4>Combo's</h4>
						 <p>Lorem ipsum Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit.</p>
					</div>
					<div class="clearfix"> </div>		
				</div>

		</div>
	</div>
<!-- //service-type-grid -->
 <!--start-services-->
	<div class="team-section" id="team">
	 	  <div class="container">
		  <h3 class="tittle">Our Combo's</h3>
		  <div class="arrows-serve"><img src="<?= base_url('assets/images/border.png') ;?>" alt="border"></div>
	 		<div class="box2">
	 		   <div class="col-md-3 s-1 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s">
			   <a href="#">
	 		   	<div class="view view-fifth">
                    <img src="<?= base_url('assets/images/combo2.jpg'); ?>" alt="chef">
                    <div class="mask">
                        <h4>Vivamus moles tie gravida turpis</h4>
                        <p>A wonderful serenity has taken possession of my entire soul,  I enjoy with my whole heart.</p>
                         <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p>
                     </div>
                   
				    </div>
				  </a>
			<h3>Wilson</h3>
				</div>
		<div class="col-md-3 s-2 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s">
		<a href="#">
	 		   	<div class="view view-fifth">
                      <img src="<?= base_url('assets/images/img_16.jpg'); ?>." alt="chef">
                       <div class="mask">
                        <h4>Vivamus moles tie gravida turpis</h4>
                        <p>A wonderful serenity has taken possession of my entire soul,  I enjoy with my whole heart.</p>
                         <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p>
                     </div>
               
				    </div>
				  </a>
				<h3>Victoria</h3>
				</div>
			  <div class="col-md-3 s-3 wow slideInRight" data-wow-duration="1s" data-wow-delay=".3s">
			  <a href="#">
	 		   	<div class="view view-fifth">
                     <img src="<?= base_url('assets/images/OB+Hot+Combo+Meal+Poster.png'); ?>" alt="chef">
                    <div class="mask">
                        <h4>Vivamus moles tie gravida turpis</h4>
                        <p>A wonderful serenity has taken possession of my entire soul,  I enjoy with my whole heart.</p>
                         <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p>
                     </div>
                  
				    </div>
				  </a>
					<h3>Mr.jazz</h3>
				</div>
				<div class="col-md-3 s-4 wow slideInRight" data-wow-duration="1s" data-wow-delay=".3s">
				 <a href="#">
	 		   	 <div class="view view-fifth">
                      <img src="<?= base_url('assets/images/tyson-k-12-brunch-for-lunch-food.jpg'); ?>" alt="chef">
                    <div class="mask">
                        <h4>Vivamus moles tie gravida turpis</h4>
                        <p>A wonderful serenity has taken possession of my entire soul,  I enjoy with my whole heart.</p>
                         <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p>
                     </div>
                   
				    </div>
				  </a>
					<h3>Ms. Rosie</h3>
				</div>
				<div class="clearfix"></div>
		     </div>
	 	    </div>
	 	</div>
	<!--end-team-->

<!--start-banner-bottom-->
   <!--/reviews-->
	<div id="review" class="reviews">
			   <div class="col-md-6 test-left-img">
			   </div>
				<div class="col-md-6 test-monials">
					<h3 class="tittle">Testimonials</h3>
					<div class="arrows-serve test"><img src="<?= base_url('assets/images/border.png') ;?>" alt="border"></div>
				<!--//screen-gallery-->
						<div class="sreen-gallery-cursual">
							 <!-- required-js-files-->
							<link href="<?= base_url('assets/css/owl.carousel.css') ;?>" rel="stylesheet">
							    <script src="<?= base_url('assets/js/owl.carousel.js') ;?>"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
								 <!--//required-js-files-->
						       <div id="owl-demo" class="owl-carousel">
					                 <div class="item-owl">
					                		<div class="test-review">
											   <p class="wow fadeInUp"  data-wow-duration=".8s" data-wow-delay=".4s"><img src="<?= base_url('assets/images/left-quotes.png'); ?>" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <img src="<?= base_url('assets/images/right-quotes.png'); ?>" alt=""></p>
						                	  <img src="<?= base_url('assets/images/t3.jpg'); ?>" class="img-responsive" alt=""/>
											  <h5 class="wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s">Martin H. Joseph</h5>
					                	    </div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review">
										 <p class="wow fadeInUp"  data-wow-duration=".8s" data-wow-delay=".4s"> <img src="<?= base_url('assets/images/left-quotes.png'); ?>" alt="">Polite sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<img src="<?= base_url('assets/images/right-quotes.png'); ?>" alt=""></p>
						                	<img src="<?= base_url('assets/images/t2.jpg'); ?>" class="img-responsive" alt=""/>
											 <h5 class="wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s">Dennis Pal,</h5>
					                	</div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review">
										     <p class="wow fadeInUp"  data-wow-duration=".8s" data-wow-delay=".4s"><img src="<?= base_url('assets/images/left-quotes.png'); ?>" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <img src="<?= base_url('assets/images/right-quotes.png'); ?>" alt=""></p>
						                	<img src="<?= base_url('assets/images/t1.jpg'); ?>" class="img-responsive" alt=""/>
											 <h5 class="wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s">Martin H.Wilson</h5>
					                	</div>
					                </div>
				              </div>
						<!--//screen-gallery-->
					</div>
				</div>
				<div class="clearfix"> </div>
		</div>
<!--//reviews-->
<!--reservation-->
	<div class="reservation" id="reservation">
		<div class="container">
		<div class="reservation-info">
		  <h3 class="tittle reserve">Make a <br>
			Request</h3>
			 <div class="arrows-reserve"><img src="<?= base_url('assets/images/border.png'); ?>" alt="border"></div>
				<div class="book-reservation wow slideInUp" data-wow-duration="1s" data-wow-delay=".5s">
					<form>
					 <div class="col-md-4 form-left">
						<label><i class="glyphicon glyphicon-calendar"></i> Date :</label>
						<input type="date">
						</div>
						<div class="col-md-4 form-left">
							<label><i class="glyphicon glyphicon-user"></i> No.of People :</label>
							<select class="form-control">
								<option>1 Person</option>
								<option>2 People</option>
								<option>3 People</option>
								<option>4 People</option>
								<option>5 People</option>
								<option>More</option>
							</select>
						</div>
						<div class="col-md-4 form-right">
							<label><i class="glyphicon glyphicon-time"></i> Time :</label>
							<input type="time">
						</div>
						<div class="clearfix"> </div>
						<div class="make wow shake" data-wow-duration="1s" data-wow-delay=".5s">
						  <input type="submit" value="Make a Request">
						</div>
					</form>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!--//reservation-->

<!--Gallery-->
<div class="gallery" id="gallery">
	<div class="container">
		<h3 class="tittle">Gallery</h3>
		<div class="arrows-serve"><img src="<?= base_url('assets/images/border.png'); ?>" alt="border"></div>
				<div class="gallery-grids">
					<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="images/g1.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?= base_url('assets/images/g1.jpg'); ?>" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Honest Food</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
						<a href="images/g2.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?= base_url('assets/images/ebb861_ac9ffe3474fa46e2bca98a8fe3afaa03.jpg'); ?>" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Honest Food</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="images/c1.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?= base_url('assets/images/g1.jpg'); ?>" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Honest Food</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
						<a href="images/c2.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?= base_url('assets/images/g2.jpg'); ?>" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Honest Food</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="images/c3.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?= base_url('assets/images/c3.jpg'); ?>" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Honest Food</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
						<a href="images/c4.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?= base_url('assets/images/c4.jpg'); ?>" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Honest Food</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="images/g7.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?= base_url('assets/images/g7.jpg'); ?>" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Honest Food</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
						<a href="images/g8.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?= base_url('assets/images/g8.jpg'); ?>" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Honest Food</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
<!-- //gallery -->

  <!--bottom-->
	    <div class="bottom">
		<div class="container">
		       <div class="bottom-top">
			    <h3 class=" wow flipInX"  data-wow-duration="1s" data-wow-delay=".3s">We Are Sharing</h3>
				<span>DELICIOUS TREATS</span>
				   <p class="wow slideInDown" data-wow-duration="1s" data-wow-delay=".5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since, Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
				   <div class="start wow flipInX"  data-wow-duration="1s" data-wow-delay=".3s">
						     <a href="single.html" class="hvr-bounce-to-bottom">Read More</a>
						  </div>
			   </div>
		</div>
	</div>

	 <!--/contact-->
	 <div class="section-contact" id="contact">
	    <div class="container">
           <div class="contact-main">
				    <div class="col-md-6 contact-grid wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">
					<h3 class="tittle wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s">Contact Us</h3>
						<div class="arrows-three"><img src="<?= base_url('assets/images/border.png'); ?>" alt="border"></div>
							<p class="wel-text wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".4s">Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
						    <form id="filldetails">
					  <div class="field name-box">
							<input type="text" id="name" placeholder="Who Are You?" required/>
							<label for="name">Name</label>
							<span class="ss-icon">check</span>
					  </div>
					  
					  <div class="field email-box">
							<input type="text" id="email" placeholder="example@email.com" required/>
							<label for="email">Email</label>
							<span class="ss-icon">check</span>
					  </div>
					  
					  <div class="field phonenum-box">
							<input type="text" id="email" placeholder="Phone Number" required/>
							<label for="email">Phone</label>
							<span class="ss-icon">check</span>
					  </div>

					  <div class="field msg-box">
							<textarea id="msg" rows="4" placeholder="Your message goes here..." required/ ></textarea>
							<label for="msg">Message</label>
							<span class="ss-icon">check</span>
					  </div>
						<div class="send wow shake"  data-wow-duration="1s" data-wow-delay=".3s">
											<input type="submit" value="Send" >
										</div>
					 
			  </form>

					   </div>
					<div class="col-md-6 contact-in wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
						<h4 class="info">Our Info </h4>
						<p class="para1">Lorem ipsum dolor sit amet. Ut enim ad minim veniam.Sunt in culpa qui officia deserunt mollit anim id est laborum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature. </p>
						<div class="con-top">
							<h4>Pune</h4>
								<ul>
								 
								<li>Ph: 8959 363 338 </li>
								<li>Call Centre Time : 1pm to 1am</li>
								<li><a href="mailto:info@example.com">mail@snippy.in</a></li>
							  </ul>
						</div>
						<div class="con-top two">
							<!--<h4>Hawaii</h4>
							<ul>
								<li>4th Floor dolor sit amet,</li> 
								<li># Grand Hyatt New York Road,</li>   
								<li>Opp. adipiscing elit,</li> 
								<li>Hawaii - 96815</li>
								<li>Ph:3698521475 </li>
								<li>Call Centre Time : 7am to 11pm</li>	
								<li><a href="mailto:info@example.com">mail@example.com</a></li>
							</ul>-->								
						</div>
					</div>
					
						<div class="clearfix"> </div>
			      </div>
				   <!--map--
				    <div class="map wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".5s">
					  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1675115.8258740564!2d-98.4671417929578!3d34.91371150021706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1434956093308"></iframe>
					</div>
				<!--//map-->
			 </div>
		</div>
		<!--//contact-->
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