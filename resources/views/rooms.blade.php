<!DOCTYPE html>
 <html lang="en">
 
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HOTEL BHK</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

        <!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/owl.carousel.min.css">
            <link rel="stylesheet" href="css/gijgo.css">
            <link rel="stylesheet" href="css/slicknav.css">
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/fontawesome-all.min.css">
            <link rel="stylesheet" href="css/themify-icons.css">
            <link rel="stylesheet" href="css/slick.css">
            <link rel="stylesheet" href="css/nice-select.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/responsive.css">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
</head>

	<div class="header">
	@section('header')
	
		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		  <!-- Brand -->
		  <a class="navbar-brand" href="/">Home</a>

		  <!-- Toggler/collapsibe Button -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <!-- Navbar links -->
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="/register">Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/gallery">Gallery</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/rooms">Rooms</a>
		      </li>
			  <li class="nav-item">
		        <a class="nav-link" href="/feedback">Feedback</a>
		      </li>
			  <li class="nav-item">
		        <a class="nav-link" href="/contact">Contact</a>
		      </li>
			  
		    </ul>
		  </div>
		</nav>
	@show

<!-- Gallery img Start-->
<div class="gallery-area g-padding fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-active owl-carousel">
                            <div class="gallery-img">
                                <a href="#"><img src="img/gallery/gallery1.jpg" alt="">this room is ac**</a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="img/gallery/gallery2.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="img/gallery/gallery3.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>




                
            
        



<!--key_exists
priyanka
asker-->







                </div>
            </div>
        </div>
        <!-- Gallery img End-->

    <footer>
       <!-- Footer Start-->
       <div class="footer-area black-bg footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-30">
                         <!-- logo -->
                         <div class="footer-logo">
                           <a href="/#"><img src="img/logo/logo2.png" alt=""></a>
                         </div>
                         
                         <div class="footer-pera">
                              <p>
   This Hotel KBH is made with <i class="ti-heart" aria-hidden="true"></i>Hema</><i class="ti-heart" aria-hidden="true"></i>Bharat</>
  <i class="ti-heart" aria-hidden="true"></i>Khushbu</></p>
                         </div>
                      </div>
                   </div>
                  
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Reservations</h4>
                               <ul>
                                   <li><a href="#">Tel: 90542 08997</a></li>
                                   <li><a href="#">Name: HOTEL KBH</a></li>
                                   <li><a href="#">Mail: kbh.hotel@gmail.com</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4  col-sm-4">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Our Location</h4>
                               <ul>
                                   <li><a href="#">Veraval Bus stand opp.</a></li>
                                   <li><a href="#">Ta.Veraval Dist.Gir Somnath</a></li>
                               </ul>
                               
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

   </footer>

   <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./js/owl.carousel.min.js"></script>
        <script src="./js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./js/gijgo.min.js"></script>
		<!-- One Page, animated-HeadLin -->
        <script src="./js/wow.min.js"></script>
		<script src="./js/animated.headline.js"></script>
        <script src="./js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./js/jquery.scrollUp.min.js"></script>
        <script src="./js/jquery.nice-select.min.js"></script>
		<script src="./js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./js/contact.js"></script>
        <script src="./js/jquery.form.js"></script>
        <script src="./js/jquery.validate.min.js"></script>
        <script src="./js/mail-script.js"></script>
        <script src="./js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./js/plugins.js"></script>
        <script src="./js/main.js"></script>
<!--div class="page-footer">
	@section('footer')
	
	<div class="footer-copyright text-center py-3">© 2020 Copyright:
		<a href="https://www.veravaleducationsociety.org/"> www.v4u.com</a>
  </div>


	@show

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



</div-->


</html>