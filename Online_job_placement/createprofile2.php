<!DOCTYPE html>
<html lang="en">
<head>
<title>apply profile</title>
<style>
 .left-tab{
	 width:250px;
	 margin-left:200px;
	 margin-top:50px;
	 height:400px;
	 position:relative;
	 margin-bottom:200px;
 }
 img{
	 margin-left:7px;
 }
 #mya{
	 color:black;
	 font-family:"Canela Deck Bold";
	 left:40px;
	 top:3px;
	 font-size:16px;
	 position:absolute;
	 font-weight:bold;
	 
 }
 .card{
	 width:650px;
	 height:550px;
	 background-color:white;
	 margin-left:300px;
	 margin-top:-450px;
	 margin-bottom:50px;
	 position:relative;
 }
  .startedcard{
	 width:650px;
	 height:550px;
	 background-color:white;
	 margin-left:300px;
	 margin-top:-450px;
	 margin-bottom:50px;
	 position:relative;
	 display:none;
 }
 
 
 
 .applyprofile{
	 width:700px;
	 height:490px;
	 background-color:white;
	 margin-left:300px;
	 margin-top:-450px;
	 margin-bottom:50px;
	 position:relative;
	 
 }
 .uppercard{
	 width:650px;
	 height:250px;
	 background-color:rgb(41,81,100);
	 position:absolute;
	 
 }
 .footer{
	 width:100%;
	 height:30px;
	 background-color:rgb(41,81,100);
	 position:relative;
 }
	 
 img{
	 border:1px solid white;
	 border-radius:5px;
	 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 }
 .mytext{
	 top:280px;
	 left:40px;
	 font-family:"Canela Deck Bold";
	 color:black;
	 font-size:20px;
	 font-weight:bold;
 }
 .mytext2{
	 top:280px;
	 left:30px;
	 font-family:"Canela Deck Bold";
	 color:black;
	 font-size:16px;
	  
 }
 
 .mytextnew{
	 top:10px;
	 left:40px;
	 font-family:"Canela Deck Bold";
	 color:black;
	 font-size:21px;
	 font-weight:bold;
	 letter-spacing:1px;
 }
  .mytextneww{
	 
	 left:30px;
	 font-family:"Canela Deck Bold";
	 color:black;
	 font-size:16px;
	 font-weight:bold;
	 letter-spacing:1px;
 }
 .mytextnew2{
	
	 left:30px;
	 font-family:"Canela Deck Bold";
	 color:black;
	 font-size:16px;
	  
 }
 .mytext2 a{
	 color:#5bbc2e;
	  font-weight:bold;
	  letter-spacing:1px;
	  font-size:17px;
	  
 }
 .mytext2 a:hover{
	 color:#008329;
	 cursor:pointer;
	 text-decoration:underline;
 }
 .mybtn{
	     padding-left:20px;
		 padding:7px;
		 margin-left:290px;
		 border:1px solid #5bbc2e;
		 border-radius:5px;
		 background-color:#5bbc2e;
		 
		 width:150px;
		 color:white;
		 letter-spacing:1px;
		 font-size:18px;
		 font-family:Gotham SSm;
		 font-weight:bold;
 }
 .mybtn:hover{
         background-color:#008329;
		 cursor:pointer;
	 }

.mybtncat{
	     padding-left:20px;
		 padding:7px;
		 margin-left:450px;
		 margin-top:30px;
		 border:1px solid #5bbc2e;
		 border-radius:5px;
		 background-color:#5bbc2e;
		 width:200px;
		 color:white;
		 letter-spacing:1px;
		 font-size:18px;
		 font-family:Gotham SSm;
		 font-weight:bold;
 }
 .mybtncat:hover{
         background-color:#008329;
		 cursor:pointer;
	 }
	
</style>
<script>
  function tickcolorchgcat()
  {
	    document.getElementById("fid").style.color="green";
		document.location.href="startedprofile.php";
  }
</script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Confpro template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body style="background-color:#f1f2f4;width:100%;">


	
	<!-- Header -->

	<header class="header" style="position:static;width:100%;height:calc(100%-225px);">
		<div class="header_content d-flex flex-row align-items-center justify-content-start" style="width:100%;height:calc(100%-125px);">
			
			<!-- Logo -->
			<div class="logo">
				<a href="#">
					<span>Job<span>conf</span></span>
					<span>conference</span>
				
					
				</a>
			</div>
		</div>
	</header>


  <div class="left-tab">
      
	  <div style="margin-bottom:15px">
		  <i class="fa fa-arrow-circle-up fa-lg" style="margin-left:10px;color:black;margin-top:7px"></i>
		  <a id="mya" href="#">Getting Started</a>
		  <i id="fid" class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:9px;color:green;"></i>
	   </div>
	   <div style="margin-bottom:15px">
	      <i class="material-icons" style="margin-left:10px;color:black;font-size:18px">assignment</i>
		  <a id="mya" href="#" style="margin-top:-5px;">Categories</a>
	      <i id="sid" class="fa fa-check-circle" style="margin-top:9px;right:20px;position:absolute"></i>
       </div>
	   
	  <div style="margin-bottom:15px">
	      <i class="material-icons" style="margin-left:10px;color:black;font-size:18px">border_color</i>
		  <a id="mya" href="#" style="margin-top:-5px;">Expertise</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:9px"></i>
       </div>
	   
	   <div style="margin-bottom:15px">
	      <i class="fa fa-bar-chart fa-lg" style="margin-left:10px;color:black;"></i>
		  <a id="mya" href="#" style="margin-top:-5px;">Expertise Level</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:9px"></i>
       </div>
   
      <div style="margin-bottom:15px">
	      <i class="fas fa-graduation-cap" style="margin-left:10px;color:black;font-size:16px"></i>
		  <a id="mya" href="#" style="margin-top:-5px;">Education</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:9px"></i>
       </div>
	   
	  <div style="margin-bottom:15px">
	      <i class="fas fa-building" style="margin-left:10px;color:black;font-size:16px"></i>
		  <a id="mya" href="#" style="margin-top:-5px;">Employment</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:9px"></i>
       </div>
	   
	    <div style="margin-bottom:10px">
	      <i class="material-icons" style="margin-left:10px;color:black;font-size:18px">mic</i>
		  <a id="mya" href="#" style="margin-top:-5px;">Languages</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:9px"></i>
       </div>
   
       <div style="margin-bottom:15px">
	      <i class="fa fa-dollar" style="margin-left:14px;color:black;"></i>
		  <a id="mya" href="#" style="margin-top:-5px;">Hourly Rate</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:9px"></i>
       </div>
	   
	   <div style="margin-bottom:15px">
	      <i class="fas fa-user-astronaut" style="margin-left:10px;color:black;font-size:16px"></i>
		  <a id="mya" href="#" style="margin-top:-5px;">Title & Overview</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:9px"></i>
       </div>
	   
	  <div style="margin-bottom:15px">
	      <i class="fas fa-camera" style="margin-left:10px;color:black;font-size:16px"></i>
		  <a id="mya" href="#" style="margin-top:-5px;">Profile Photo</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:9px"></i>
       </div>
	   
	    <div style="margin-bottom:15px">
	      <i class="fas fa-map-marker-alt" style="margin-left:10px;color:black;font-size:16px"></i>
		  <a id="mya" href="#" style="margin-top:-5px;">Location</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:9px"></i>
       </div>

	    <div style="margin-bottom:15px">
	      <i class="fas fa-phone" style="margin-left:10px;color:black;font-size:16px"></i>
		  <a id="mya" href="#" style="margin-top:-5px;">Phone</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:9px"></i>
       </div>

    <div class="applyprofile" id="categorycard">
	  
	      <div class="mytextnew">Fill out your profile to apply</div><hr/>
		  <div class="mytextneww">To provide a high quality experience to all customers,admission to upwork is highly competetive.</div><br>
		  <div class="mytextnew2">Here's how it works.</div>
		  <br><ol><div class="mytextnew2" style="margin-left:25px;">1.Fill out your profile thoroughly and accurately</div>
		  <br><div class="mytextnew2" style="margin-left:25px;">2.submit your profile</div><br>
		  <div class="mytextnew2" style="margin-left:25px;">3.You'll receive an email within 24 hours to let you know if you were accepted</div><br>
		  <div class="mytextnew2">We are currently experiencing a high number of applications.Create a stand-out profile to increase your chances of getting approved.!</div><br>
		  
		     <Button class="mybtncat" onclick="tickcolorchgcat()">Start My Profile</button>
     </div>		  
 </div>
   
   
 
   
  <footer class="footer">
		<div class="footer_container">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-4 footer_col">

						<!-- Logo -->
						<div class="logo">
							<a href="#">
								<span>Job<span>conf</span></span>
								<span>conference</span>
							</a>
						</div>
						<div class="footer_text">
							<p>Find great talent. Build your business.Take your career to the next level,Work with the largest network of independent professionals and get things done—from quick turnarounds to big transformations</p>
						</div>
						<div class="social footer_social">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>

					<!-- Newsletter -->
					<div class="col-lg-4 footer_col">
						<div class="footer_column">
							<div class="footer_title">Newsletter</div>
							<form action="#" class="newsletter_form" id="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="Your email address" required="required">
								<button class="newsletter_button"><span>subscribe<img src="images/arrow.png" alt=""></span></button>
							</form>
						</div>
					</div>
					
					<!-- Gallery -->
					<div class="col-lg-4 footer_col">
						<div class="footer_column">
							<div class="footer_title">Instagram</div>
							<div class="gallery d-flex flex-row align-items-start justify-content-between flex-wrap">
						
								<!-- Gallery Item -->
								<div class="gallery_item">
									<a class="colorbox" href="images/gallery_1_large.jpg"><img src="images/gallery_1.jpg" alt=""></a>
								</div>

								<!-- Gallery Item -->
								<div class="gallery_item">
									<a class="colorbox" href="images/gallery_2_large.jpg"><img src="images/gallery_2.jpg" alt=""></a>
								</div>

								<!-- Gallery Item -->
								<div class="gallery_item">
									<a class="colorbox" href="images/gallery_3_large.jpg"><img src="images/gallery_3.jpg" alt=""></a>
								</div>

								<!-- Gallery Item -->
								<div class="gallery_item">
									<a class="colorbox" href="images/gallery_4_large.jpg"><img src="images/gallery_4.jpg" alt=""></a>
								</div>

								<!-- Gallery Item -->
								<div class="gallery_item">
									<a class="colorbox" href="images/gallery_5_large.jpg"><img src="images/gallery_5.jpg" alt=""></a>
								</div>

								<!-- Gallery Item -->
								<div class="gallery_item">
									<a class="colorbox" href="images/gallery_6_large.jpg"><img src="images/gallery_6.jpg" alt=""></a>
								</div>

								<!-- Gallery Item -->
								<div class="gallery_item">
									<a class="colorbox" href="images/gallery_7_large.jpg"><img src="images/gallery_7.jpg" alt=""></a>
								</div>

								<!-- Gallery Item -->
								<div class="gallery_item">
									<a class="colorbox" href="images/gallery_8_large.jpg"><img src="images/gallery_8.jpg" alt=""></a>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		
	</footer>

     








<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/about.js"></script>
</body>
</html>