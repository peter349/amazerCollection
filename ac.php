<?php
 $db = mysqli_connect('localhost','root','','product')
 or die('Error connecting to MySQL server.');
 $var_value = $_GET['varname'];
 $query = "SELECT * FROM final_prod WHERE prod_id=$var_value";
 mysqli_query($db, $query) or die('Error querying database.');
 $result = mysqli_query($db, $query);
 $row = mysqli_fetch_assoc($result);


 
 
 ?>
<html lang="en">
  <head>
    <title>Amazer Collection</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="mensss.css">

    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <script src="js/mensblack.js"></script>
    <link type="text/css" href="magnifier.css" rel="stylesheet">

<script type="text/javascript" src="magnifier.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> 011-23845374, 9811133272, 011-43108631</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> amazercollection1@gmail.com</a>
						</p>
						
							
						</div>
					</div>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
			    		
            
					</div>
				</div>
			</div>
		</div>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
          <a class="navbar-brand" href="index.html">Amazer <span>Collection</span></a>
	      <div class="order-lg-last btn-group">
          <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          	<span class="flaticon-shopping-bag"></span>
          	<div class="d-flex justify-content-center align-items-center"><small>3</small></div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
				    <div class="dropdown-item d-flex align-items-start" href="#">
				    	<div class="img" style="background-image: url(images/prod-1.jpg);"></div>
				    	<div class="text pl-3">
				    		<h4>Men's Black Twill Extra Slim Fit Suit With Two Front Buttons</h4>
				    		<p class="mb-0"><a href="#" class="price">$25.99</a><span class="quantity ml-3">Quantity: 01</span></p>
				    	</div>
				    </div>
				    <div class="dropdown-item d-flex align-items-start" href="#">
				    	<div class="img" style="background-image: url(images/prod-2.jpg);"></div>
				    	<div class="text pl-3">
				    		<h4>Jim Beam Kentucky Straight</h4>
				    		<p class="mb-0"><a href="#" class="price">$30.89</a><span class="quantity ml-3">Quantity: 02</span></p>
				    	</div>
				    </div>
				    <div class="dropdown-item d-flex align-items-start" href="#">
				    	<div class="img" style="background-image: url(images/prod-3.jpg);"></div>
				    	<div class="text pl-3">
				    		<h4>Citadelle</h4>
				    		<p class="mb-0"><a href="#" class="price">$22.50</a><span class="quantity ml-3">Quantity: 01</span></p>
				    	</div>
				    </div>
				    <a class="dropdown-item text-center btn-link d-block w-100" href="cart.html">
				    	View All
				    	<span class="ion-ios-arrow-round-forward"></span>
				    </a>
				  </div>
        </div>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore Bespoke Clothing</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="index.php?category_id=8">Men's Suits</a>
				<a class="dropdown-item" href="index.php?category_id=7">Men's Blazer</a>
				<a class="dropdown-item" href="index.php?category_id=5">Safari Suits</a>
				<a class="dropdown-item" href="index.php?category_id=6">Women Workwear</a>
				<a class="dropdown-item" href="index.php?category_id=1">Wedding Collection</a>
                <a class="dropdown-item" href="index.php?category_id=2">Ethnic Wear</a>
                <a class="dropdown-item" href="index.php?category_id=4">Trousers</a>
                <a class="dropdown-item" href="index.php?category_id=3">Shirts</a>
              </div>
            </li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Explore Bespoke Clothing <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread"> <?php echo $row['category_name'];?></h2>
          </div>
		</div>
          </section>
          
      <section class="ftco-section">   
      <div class="containerr">
      <div class="col-lg-6 mb-5 ftco-animate">
      <div class="col-lg-6 product-details pl-md-5 ftco-animate">
      <h1><?php echo $row['name'] ?> </h1> 
      <p><?php echo $row['uni_id'];?></p>
								<h2><a href="#" class="mr-2" style="color: #000;"> <span style="color:   #e60000;">How It Works!</span></a>
</h>
						</div>
    				<p class="price"></p>
    				<p>*View Our Inspiration Gallery For Ideas/Design. (These Images Are Just For Reference.) Or Show Us Your Design And We Will Custimize It For You As Per The Fabric. </p>
	              	<p>*Choose From A Wide Range Of Fabrics For Your Bespoke Garment.(Choose Upto 3 Fabric Samples During Home Visit) </p>
	              	<p>*We Provide Doorstep Services For Your Stitching Needs And We Send Our Consultants To Your Home Or Office. They'll Help You With Choosing Design Of A Garment, Taking Measurements And Show Fabric Samples To You. Post Which The Stitching Happens At Our Workshop And Then We Get It Delivered To You </p>
	              	<p>*Add Further Personalisation To Your Garment With A MONOGRAM! </p>
                  <p>*Get A Complimentary MATCHING FACE MASK With Every Purchase. </p>
                            	<p><a href="cart.html" class="btn btn-primary py-3 px-5 mr-2">fill the form</a><a href="cart.html" class="btn btn-primary py-3 px-5">Explore Fabrics</a></p>

    </div>
        <div class="image-viewer">
          <div class="main-image">
            <img src="images/wedding/<?php echo $row['img_1'];  ?> "alt=""  >

          </div>
          <div class="secondary-images">
            <div class="secondary-image">
            <img src="images/wedding/<?php echo $row['img_2'];  ?> "alt=""  >
            </div>
            <div class="secondary-image">
            <img src="images/wedding/<?php echo $row['img_3'];  ?> "alt=""  >
            </div>
            <div class="secondary-image">
            <img src="images/wedding/<?php echo $row['img_4'];  ?> "alt=""  >
            </div>
            <div class="secondary-image">
            <img src="images/wedding/<?php echo $row['img_5'];  ?> "alt=""  >
            </div>
            

            
    </div>
    <div class="lightbox" id="lightbox">
      <img src="http://placehold.it/650x650"/>
      <div class="lightbox-controls">
        <div class="lightbox-controls-close">
          <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <div class="lightbox-controls-previous">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        <div class="lightbox-controls-next">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
      </div>
    </div>
    <!-- partial -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src=".js/mensss.js"></script>
    
    <style>/* styles for magnifier image pairs */

/* style for the DIV that holds the image pair */
@import url("https://fonts.googleapis.com/css?family=Amaranth|Quicksand");
/* Coolors Exported Palette - coolors.co/efeeda-c5f4e0-c2eaba-a7c4a0-8f8389 */
/* HSL */
/* RGB */

.containerr {
  padding: 25px;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-around;
}

.btn {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  font-family: 'Quicksand', sans-serif;
  background-color: #efeeda;
  color: #4d4d4d;
  border: 1px solid #4d4d4d;
  padding: 12.5px;
  cursor: pointer;
}
.btn:hover {
  background-color: #4d4d4d;
  color: #efeeda;
}
.btn:focus {
  outline: none;
}
.btn:active {
  -webkit-transition: all 0.1s ease-in-out;
  transition: all 0.1s ease-in-out;
  background-color: #efeeda;
  color: #4d4d4d;
}

.image-viewer {
  margin: 25px;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-pack: start;
          justify-content: flex-start;
}
.image-viewer .main-image {
  max-width: 75%;
  max-height: 75%;
  align-self: center;
  text-align: center;
  display: flex;
  -webkit-box-pack: center;
          justify-content: center;
  -webkit-box-align: center;
          align-items: center;
          
        }
.image-viewer .main-image img {
  cursor: -webkit-zoom-in;
  cursor: zoom-in;
  max-width: 85%;
  max-height: 85%;
  width: 480px;
  height: 480px;
}
.image-viewer .secondary-images {
  align-self: center;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
  flex-wrap: nowrap;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: justify;
          justify-content: space-between;
}
.image-viewer .secondary-images .secondary-image {
  padding: .5px;
  height: 100px;
  object-fit: contain;
  border: 10px solid transparent;
  margin: 10px;
  border-image: url(images/borderrrr.png) 30 round !important;
}
.image-viewer .secondary-images .secondary-image img {
  cursor: pointer;
  max-width: 100%;
  max-height: 100%;
}

.section, .pricing, .detail {
  padding: 12.5px;
}

.pricing {
  width: 15%;
  padding: 12.5px;
}
.pricing-price {
  text-align: right;
  margin: 12.5px 0;
  font-size: 3em;
}
.pricing-btn {
  width: 100%;
}

.detail {
  width: 30%;
}
.detail .detail-short-description {
  margin-top: 2em;
}
.detail .detail-long-description {
  margin-top: 3em;
  font-size: 0.8rem;
}

.lightbox {
  -webkit-transition: all 0.5s 0s ease-in-out;
  transition: all 0.5s 0s ease-in-out;
  position: fixed;
  top: -100%;
  bottom: 100%;
  left: 0;
  right: 0;
  background: rgba(208, 205, 147, 0.9);
  z-index: 501;
  opacity: 0;
}
.lightbox img {
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  max-width: 0%;
  max-height: 0%;
}
.lightbox .lightbox-controls {
  position: relative;
  height: 100vh;
}
.lightbox .lightbox-controls .lightbox-control, .lightbox .lightbox-controls .lightbox-controls-close, .lightbox .lightbox-controls .lightbox-controls-previous, .lightbox .lightbox-controls .lightbox-controls-next, .lightbox.show .lightbox-controls .lightbox-controls-previous, .lightbox.show .lightbox-controls .lightbox-controls-next {
  height: 70px;
  width: 70px;
  position: absolute;
  z-index: 502;
  background: rgba(177, 172, 76, 0.9);
  color: white;
  font-size: 3em;
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: center;
          justify-content: center;
  -webkit-box-align: center;
          align-items: center;
  cursor: pointer;
}
.lightbox .lightbox-controls .lightbox-controls-close {
  position: absolute;
  top: 0%;
  right: 0%;
}
.lightbox .lightbox-controls .lightbox-controls-previous {
  position: absolute;
  top: 50%;
  left: -20%;
  -webkit-transition: all 0.5s 0s ease-in-out;
  transition: all 0.5s 0s ease-in-out;
}
.lightbox .lightbox-controls .lightbox-controls-next {
  position: absolute;
  top: 50%;
  right: -20%;
  -webkit-transition: all 0.5s 0s ease-in-out;
  transition: all 0.5s 0s ease-in-out;
}

.lightbox.show {
  -webkit-transition: all 0.5s 0s ease-in-out;
  transition: all 0.5s 0s ease-in-out;
  top: 0%;
  bottom: 0%;
  opacity: 1;
}
.lightbox.show img {
  -webkit-transition: all 0.5s 0.5s ease-in-out;
  transition: all 0.5s 0.5s ease-in-out;
  max-width: 100%;
  max-height: 100%;
}
.lightbox.show .lightbox-controls .lightbox-controls-previous {
  position: absolute;
  top: 50%;
  left: 0%;
  -webkit-transition: all 0.5s 0.75s ease-in-out;
  transition: all 0.5s 0.75s ease-in-out;
}
.lightbox.show .lightbox-controls .lightbox-controls-next {
  position: absolute;
  top: 50%;
  right: 0%;
  -webkit-transition: all 0.5s 0.75s ease-in-out;
  transition: all 0.5s 0.75s ease-in-out;
}
</style>


<script>// Original source: http://webdeveloper.earthweb.com/repository/javascripts/2005/03/660841/vergrootglas.html
// 
class ImageViewer {
    constructor(selector) {
      this.selector = selector;
      $(this.secondaryImages).click(() => this.setMainImage(event));
      $(this.mainImage).click(() => this.showLightbox(event));
      $(this.lightboxClose).click(() => this.hideLightbox(event));
    }
  
    get secondaryImageSelector() {
      return '.secondary-image';
    }
  
    get mainImageSelector() {
      return '.main-image';
    }
  
    get lightboxImageSelector() {
      return '.lightbox';
    }
  
    get lightboxClose() {
      return '.lightbox-controls-close';
    }
  
    get secondaryImages() {
      var secondaryImages = $(this.selector).find(this.secondaryImageSelector).find('img');
      return secondaryImages;
    }
  
    get mainImage() {
      var mainImage = $(this.selector).find(this.mainImageSelector);
      return mainImage;
    }
  
    get lightboxImage() {
      var lightboxImage = $(this.lightboxImageSelector);
      return lightboxImage;
    }
  
    setLightboxImage(event) {
      var src = this.getEventSrc(event);
      this.setSrc(this.lightboxImage, src);
    }
  
    setMainImage(event) {
      var src = this.getEventSrc(event);
      this.setSrc(this.mainImage, src);
    }
  
    getSrc(node) {
      var image = $(node).find('img');
    }
  
    setSrc(node, src) {
      var image = $(node).find('img')[0];
      image.src = src;
    }
  
    getEventSrc(event) {
      return event.target.src;
    }
  
    showLightbox(event) {
      this.setLightboxImage(event);
      $(this.lightboxImageSelector).addClass('show');
    }
  
    hideLightbox() {
      $(this.lightboxImageSelector).removeClass('show');
    }}
  
  
  new ImageViewer('.image-viewer');
</script>




    

	

      <aside>
        <div class= "fabric-box">
          
        </div>
        </div>
      </aside>
	
            
        </div>
	<script type="text/javascript" src="script.js" ></script>

        <script type="text/javascript">
            let thumbnails = document.getElementsByClassName('thumbnail')
    
            let activeImages = document.getElementsByClassName('active')
    
            for (var i=0; i < thumbnails.length; i++){
    
                thumbnails[i].addEventListener('mouseover', function(){
                    console.log(activeImages)
                    
                    if (activeImages.length > 0){
                        activeImages[0].classList.remove('active')
                    }
                    
    
                    this.classList.add('active')
                    document.getElementById('featured').src = this.src
                })
            }
    
    
            let buttonRight = document.getElementById('slideRight');
            let buttonLeft = document.getElementById('slideLeft');
    
            buttonLeft.addEventListener('click', function(){
                document.getElementById('slider').scrollLeft -= 180
            })
    
            buttonRight.addEventListener('click', function(){
                document.getElementById('slider').scrollLeft += 180
            })
    
    
        </script>






    		<div class="row mt-5">
          <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">How it works</a>



            </div>
          </div>
          <div class="col-md-12 tab-wrap">
            
            <div class="tab-content bg-light" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
              	<div class="p-4" style= "color: teal;">    
	              	<p>*View our Inspiration Gallery for Ideas/Design. (These images are just for reference.) Or Show us your Design and we will custimise it for you as per the fabric. </p>
	              	<p>*Choose from a wide range of fabrics for your bespoke garment.(Choose upto 3 Fabric Samples during home visit) </p>
	              	<p>*We provide doorstep services for your stitching needs and we send our consultants to your home or office. They'll help you with choosing design of a garment, taking measurements and show fabric samples to you. Post which the stitching happens at our workshop and then we get it delivered to you </p>
	              	<p>*Add further personalisation to your garment with a MONOGRAM! </p>
	              	<p>*Get a Complimentary MATCHING FACE MASK with every purchase. </p>
              	</div>
              </div>

             
              

						   	</div>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
               <h2 class="ftco-heading-2 logo"><a href="#">Amazer <span>Collection</span></a></h2>
              <p>The true strength of AMAZER COLLECTION is the co-creation of the dress together with the customer, who can choose every detail through a dedicated catalogue. Moreover the continuous research of fabrics allows to create unique garments and limited editions.</p>
              <ul class="ftco-footer-social list-unstyled mt-2">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">My Accounts</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>My Account</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Register</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Log In</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>My Order</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About us</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Catalog</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact us</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Term &amp; Conditions</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Quick Link</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>New User</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Help Center</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Report Spam</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Faq's</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map marker"></span><span class="text">25-E Kamla Nagar</span></li>
					<li><span <span class="text">New Delhi- 110007</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">011-23845374, 01143108631, 9811133272</span></a></li>
	                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">amazercollection1@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0 py-5 bg-black">
      	<div class="container">
      		<div class="row">
	          <div class="col-md-12">
		
	            <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  Designed by <i class="fa fa-heart color-danger" aria-hidden="true"></i> VS!</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	          </div>
	        </div>
      	</div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  <script src="js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html> 