<?php
/**
 * Maintenance mode template that's shown to logged out users.
 *
 * @package   maintenance-mode
 * @copyright Copyright (c) 2023, Ashley Evans
 * @license   GPL2+
 */
?>

	<!DOCTYPE html>
	<html lang="en" >

	  <head>

		<!--- Basic Page Needs
		================================================== -->
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="author" content="">   
	 
		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	   
		<title>CLACCS Associates - Redesign Ongoing!</title>

		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="<?php echo plugins_url( 'assets/images/claccs-favicon.png', dirname( __FILE__ ) ); ?>" >

		<!-- CSS
		================================================== -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.1/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

		<link rel="stylesheet" href="<?php echo plugins_url( 'assets/css/app.css', dirname( __FILE__ ) ); ?>" />
		
	  </head>

	  <body>

		<section class=" white-board ">

		  <div class="overlay-wrapper">

			<header>

			  <!-- logo -->

			  <div class=" container ">

				<section class=" header-wrapper ">

				  <div class=" logo-wrapper ">

					<div class=" icon-logo ">

					  <img src="<?php echo plugins_url( 'assets/images/claccs-white-1.png', dirname( __FILE__ ) ); ?>" alt="CLACCS Associates" title="CLACCS Associates" />             
					
					</div>                   

					<p class=" text-logo ">Claccs&nbsp;<span class="text-alt">Associates</span></p>
					
				  </div>

				  <div class=" header-contact " >
					
					<div class="phone-call">

					  <a href="tel:+23480XXXXXXX" title="080X XXX XXX" alt="tel:+23480XXXXXXX" ><em class=" call-to " >Call Now</em><span class="text-wrapper-2" ><i class="fa fa-phone"></i></span><em class=" contact-label " >+234 (0) 913 444 4630</em></a>
					  
					</div> 
				
				  </div>
				
				</section>

			  </div>

			</header>

			<main>
			  
			  <!-- Main Content-->

			  <div class=" container ">

				<section class=" main-wrap ">

				  <div class=" upper-wrap ">

					<div class= "upper-texts ">

					  <h1 >We are&nbsp;<span>REBUILDING.</span></h1>

					  <p >Please visit some other time. Thank You</p>

					</div>

					<div class="upper-gears">

					  <img src="<?php echo plugins_url( 'assets/images/mechanical-gears-infinite.svg', dirname( __FILE__ ) ); ?>" alt="mechanical-gears" />

					</div>

				  </div>

				</section>

				<section class="lower-main">
				  
				  <div class=" main-card ">
					<div class="card-head">
					  <h1>SECTOR REFORM</h1>
					</div>
					<div class="card-contet"></div>
				  </div>

				  <div class=" main-card ">
					<div class="card-head">
					  <h1>LEGAL & REGULATORY COMPLIANCE</h1>
					</div>
					<div class="card-contet"></div>
				  </div>

				  <div class=" main-card ">
					<div class="card-head">
					  <h1>BUSINESS DEVELOPMENT</h1>
					</div>
					<div class="card-contet"></div>
				  </div>

				</section>
				
			  </div>          
			  
			</main>
						
			<!--footer -->

			<footer>

			  <section class="upper-footer">

				<div class="container">

				  <div class="upper-wrap">
				  
				  <!-- contact -->

					<div class=" contact-header "><h2>CONTACT US</h2></div>

					<div class=" contact-details ">
					  
					  <div  class="contact-card">

						<span class="info-head"><i class="fa fa-home"></i>&nbsp;Office</span>

						<span class=" contact-info ">
						  Suite 11B, Canal House, Abogo Lagema Street                  
						  <br/>Central Business District, Abuja, FCT.
						</span>

					  </div>

					  <div class="contact-card">
						
						<span class="info-head"><i class="fa fa-envelope"></i>&nbsp;eMail</span>
						
						<span class=" contact-info ">
						  <a class=" email-info " href="mailto:info@claccsassociates.com" title="info@claccsassociates.com" alt="mailto:info@claccsassociates.com" >info@claccsassociates.com</a>
						</span>

					  </div>

					  <div class="contact-card">
						
						<span class="info-head"><i class="fa fa-phone"></i>&nbsp;Phone Number</span>
						
						<span class=" contact-info ">
						  <a class=" email-info " href="mailto:info@claccsassociates.com" title="info@claccsassociates.com" alt="mailto:info@claccsassociates.com" >+234 (0) 913 444 4630</a>
						</span>

					  </div>

					</div>

				  </div>

							
				</div>

			  </section>

				<!-- lower-footer -->

				<section class="lower-footer">

				  <div class=" container ">

					<div class="lower-wrap">
					  
					  <!-- copyright -->

					  <p class="copyright">&copy;&nbsp;<span>2023</span>&nbsp;claccs associates</p>

					   <!-- credits -->
					  
					  <p class="credit">Crafted By&nbsp;<span>DuBSHOP</span></p>
					  
					  <p class="photo">Photo by&nbsp;<a href="https://unsplash.com/@giamboscaro?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash" target="_blank" rel="noopener noreferrer" >
						  <span>Giammarco Boscaro</span></a>&nbsp;
						  on&nbsp;<a href="https://unsplash.com/photos/book-lot-on-black-wooden-shelf-zeH-ljawHtg?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash" target="_blank" rel="noopener noreferrer" >
						  <span>Unsplash</span>
						</a>
					  </p>  

					</div>

				  </div>

				</section>

			</footer>

		  </div>

		</section>

	  </body>
	  
	</html>
