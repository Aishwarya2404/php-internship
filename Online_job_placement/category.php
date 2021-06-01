<!DOCTYPE html>
<html lang="en">
<head>
<title>Categories</title>
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
	 height:350px;
	 background-color:white;
	 margin-left:300px;
	 margin-top:-450px;
	 margin-bottom:50px;
	 position:relative;
 }
 
  .startedcard{
	 width:650px;
	 height:500px;
	 background-color:white;
	 margin-left:300px;
	 margin-top:-450px;
	 margin-bottom:50px;
	 position:relative;
     border:1px solid white;
	 border-radius:5px;
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
	 left:30px;
	 font-family:"Canela Deck Bold";
	 color:black;
	 font-size:23px;
	 font-weight:bold;
	 letter-spacing:1px;
 }
  .mytextneww{
	 
	 left:30px;
	 font-family:"Canela Deck Bold";
	 color:black;
	 font-size:21px;
	 font-weight:bold;
	 letter-spacing:1px;
 }
 .mytextnew2{
	
	 left:30px;
	 font-family:"Canela Deck Bold";
	 color:black;
	 font-size:17px;
	  
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
		 margin-left:150px;
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

.nextbtn{
	     padding-left:20px;
		 padding:7px;
		 margin-left:430px;
		 margin-top:-20px;
		 border:1px solid #5bbc2e;
		 border-radius:5px;
		 background-color:#5bbc2e;
		 width:100px;
		 color:white;
		 letter-spacing:1px;
		 font-size:18px;
		 font-family:Gotham SSm;
		 font-weight:bold;
 }
 .nextbtn:hover{
         background-color:#008329;
		 cursor:pointer;
	 }
.backbtn{
	     padding-left:20px;
		 padding:7px;
		 margin-left:30px;
		 margin-top:100px;
		 border:1px solid #5bbc2e;
		 border-radius:5px;
		 background-color:#5bbc2e;
		 width:100px;
		 color:white;
		 letter-spacing:1px;
		 font-size:18px;
		 font-family:Gotham SSm;
		 font-weight:bold;
 }
 .backbtn:hover{
         background-color:#008329;
		 cursor:pointer;
	 }
 .buttons{
 	margin-left: 20px;
 	margin-top: -25px;
 }
 .listbox{
	   margin-left:50px;
	   padding:7px;
	   width:470px;
	   text-indent:2.5em;
	   outline:none;
	   border-width:1px;
	   border-color:#e0e0e0;
	   border-radius:5px;
	   background-color:white;
	   margin-top:25px;
	   margin-bottom: 10px;
   }
select{
		background: url(images/down.png) no-repeat white;
		background-size:20px 20px;
		-webkit-appearance:none;
		padding-right:5px;
		background-position: 97%;
		
 }
select:hover{
		  cursor:pointer;
	 }
select option:hover{
	cursor:pointer;
}

.listboxdisable{
	   margin-left:50px;
	   padding:7px;
	   width:470px;
	   text-indent:2.5em;
	   outline:none;
	   border-width:1px;
	   border-color:#e0e0e0;
	   border-radius:5px;
	   background-color:white;
	   margin-top:15px;
	   
   }
.listboxdisable:hover{
	cursor: no-drop;
}
</style>
<script>
   
   function nextpage(){
      //window.location.href="categoryinsert.php";
      
   }

   function backpage(){
      window.location.href="startedprofile.php";
      
   }
   	
   

  function dosomething()
  {
  	if(document.myform.list.selectedIndex > 0)
  	{
  		//document.myform.listaccounting.disabled=false;
  		 /*listaccounting
			listadmin
			customerservice
			listdatascience
			listddesign
			listeng
			listit*/

  		var e = document.getElementById("list");
        var strUser = e.options[e.selectedIndex].text;
        if(strUser=="Accounting and Consulting"){
        	document.myform.listaccounting.style.cursor="pointer";
        	document.myform.listaccounting.disabled=false;

        	document.myform.listaccounting.style.display="block";
        	document.myform.listadmin.style.display="none";	
        	document.myform.customerservice.style.display="none";	
        	document.myform.listdatascience.style.display="none";
        	document.myform.listddesign.style.display="none";	
        	document.myform.listeng.style.display="none";
        	document.myform.listit.style.display="none";
        }
        if(strUser=="Admin Support"){
        	document.myform.listaccounting.style.display="none";
        	document.myform.listadmin.style.display="block";
        	document.myform.customerservice.style.display="none";	
        	document.myform.listdatascience.style.display="none";
        	document.myform.listddesign.style.display="none";	
        	document.myform.listeng.style.display="none";
        	document.myform.listit.style.display="none";	
        }
        if(strUser=="customer service"){
        	document.myform.listaccounting.style.display="none";
        	document.myform.listadmin.style.display="none";	
        	document.myform.customerservice.style.display="block";	
        	document.myform.listdatascience.style.display="none";
        	document.myform.listddesign.style.display="none";	
        	document.myform.listeng.style.display="none";
        	document.myform.listit.style.display="none";	
        }
        if(strUser=="Data Sceince and Analytics"){
        	document.myform.listaccounting.style.display="none";
        	document.myform.listadmin.style.display="none";	
        	document.myform.customerservice.style.display="none";	
        	document.myform.listdatascience.style.display="block";	
        	document.myform.listddesign.style.display="none";	
        	document.myform.listeng.style.display="none";
        	document.myform.listit.style.display="none";	
        }
        if(strUser=="Design And Creative"){
        	document.myform.listaccounting.style.display="none";
        	document.myform.listadmin.style.display="none";	
        	document.myform.customerservice.style.display="none";	
        	document.myform.listdatascience.style.display="none";
        	document.myform.listddesign.style.display="block";	
        	document.myform.listeng.style.display="none";
        	document.myform.listit.style.display="none";
        }
         if(strUser=="Engineering and Architecture"){
        	document.myform.listaccounting.style.display="none";
        	document.myform.listadmin.style.display="none";	
        	document.myform.customerservice.style.display="none";	
        	document.myform.listdatascience.style.display="none";
        	document.myform.listddesign.style.display="none";	
        	document.myform.listeng.style.display="block";	
        	document.myform.listit.style.display="none";
        }
         if(strUser=="IT And Networking"){
        	document.myform.listaccounting.style.display="none";
        	document.myform.listadmin.style.display="none";	
        	document.myform.customerservice.style.display="none";	
        	document.myform.listdatascience.style.display="none";
        	document.myform.listddesign.style.display="none";	
        	document.myform.listeng.style.display="none";
        	document.myform.listit.style.display="block";	
        }


  	}

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

  <form name="myform" method="post" action="insert.php">
  <div class="left-tab">
      
	  <div style="margin-bottom:15px">
		  <i class="fa fa-arrow-circle-up fa-lg" style="margin-left:10px;color:black;margin-top:7px"></i>
		  <a id="mya" href="#">Getting Started</a>
		  <i id="fid" class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:9px;color:green"></i>
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
	   
  
   
    <div class="startedcard" id="startedcard">
	  
	      <div class="mytextnew" >Category </div><br/>
		   <div class="mytextnew2" style="color:gray;font-size:14px;">2 of 12</div>
		 <hr/>
		  
		  <div class="mytextneww">Tell us about the work you to</div><br>
		  <div class="mytextnew2">What is the best service you offer?</div>
  
    <form action="insert.php" method="post">
	 <select class="listbox" name="list" id="list" onchange="dosomething()">
	    	<option value="India" selected disabled>Selected Category</option>
	    	<option value="Accounting and Consulting" >Accounting and Consulting</option>
		    <option value="Admin Support">Admin Support</option>
		    <option value="customer service">customer service</option>
		    <option value="Data Sceince and Analytics">Data Sceince and Analytics</option>
		    <option value="Design And Creative">Design And Creative</option>
			<option value="Engineering and Architecture">Engineering and Architecture</option>
			<option value="IT And Networking">IT And Networking</option>
	 </select>
    

	  <select class="listboxdisable" id="listaccounting" name="listaccounting" disabled>
	    	<option value="India" selected disabled>Selected a SubCategory</option>
	    	<option value="Accounting" >Accounting </option>
		    <option value="Financial Planning">Financial Planning</option>
		    <option value="Human Resources">Human Resources</option>
		   <option value="Management Consulting">Management Consulting</option>
	 </select>

	 <select class="listbox" name="listadmin" id="listadmin" style="display: none">
	    	<option value="India" selected disabled>Selected a SubCategory</option>
	    	<option value="Data Entry" >Data Entry </option>
		    <option value="Other- Admin support">Other- Admin support</option>
		    <option value="Personal-Virtual Assistance">Personal-Virtual Assistance</option>
		   <option value="Transcription">Transcription</option>
		   <option value="Web Research">Web Research</option>
	 </select>

	 <select class="listbox" name="customerservice" style="display: none">
	    	<option value="India" selected disabled>Selected a SubCategory</option>
	    	<option value="Customer Service " >Customer Service </option>
		    <option value="Technical Support">Technical Support</option>
	 </select>

	 <select class="listbox" name="listdatascience" style="display: none">
	    	<option value="India" selected disabled>Selected a SubCategory</option>
	    	<option value="A/B Testing" >A/B Testing</option>
		    <option value="Data Extraction/ETL">Data Extraction/ETL</option>
		    <option value="Data Mining And Management">Data Mining And Management</option>
		   <option value="Data Visualization">Data Visualization</option>
		   <option value="Machine Learning">Machine Learning</option>
	 </select>

	  <select class="listbox" name="listddesign" style="display: none">
	    	<option value="India" selected disabled>Selected a SubCategory</option>
	    	<option value="Art & Illustration" >Art & Illustration</option>
		    <option value="Audio & Music Production">Audio & Music Production</option>
		    <option value="Branding">Branding</option>
		   <option value="Gaming & AR/VR">Gaming & AR/VR</option>
		   <option value="Graphic,Editorial & Presentation Design">Graphic,Editorial & Presentation Design</option>
		   <option value="Performing Arts">Performing Arts</option>
		    <option value="Photography">Photography</option>
		    <option value="Product Design">Product Design</option>
		    <option value="Video & Animation">Video & Animation</option>
	 </select>

	 <select class="listbox" name="listeng" style="display: none">
	    	<option value="India" selected disabled>Selected a SubCategory</option>
	    	<option value="3D Modeling & CAD" >3D Modeling & CAD</option>
		    <option value="Architecture">Architecture</option>
		    <option value="Chemical Engineering">Chemical Engineering</option>
		   <option value="Civil & Structural Engineering">Civil & Structural Engineering</option>
		   <option value="Contract Manufacturing">Contract Manufacturing</option>
		   <option value="Electrical Engineering">Electrical Engineering</option>
		    <option value="Interior Design">Interior Design</option>
		    <option value="Mechanical Engieering">Mechanical Engieering</option>
		    <option value="other-Engineering">other-Engineering</option>
	 </select>

	 <select class="listbox" name="listit" style="display: none">
	    	<option value="India" selected disabled>Selected a SubCategory</option>
	    	<option value="Database Administration" >Database Administration</option>
		    <option value="ERP/CRM software">ERP/CRM software</option>
		    <option value="Information security">Information security</option>
		   
		   <option value="Network & System Administration">Network & System Administration</option>
		   <option value="other-IT & networking">other-IT & networking</option>
	 </select>
		 
		   
		       <input type="submit" class="backbtn"  value="Back">
		     <div class="buttons">
		        <input type="submit" class="nextbtn" id="nextbutton"  value="Next">
		    </div>
     </div>		
    </form>
		  
		  
		  
		  
		  
		  
 </div>
 </form>  
   
 
   
 
   
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
					<!-- <div class="col-lg-4 footer_col">
						<div class="footer_column">
							<div class="footer_title">Newsletter</div>
							<form action="#" class="newsletter_form" id="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="Your email address" required="required">
								<button class="newsletter_button"><span>subscribe<img src="images/arrow.png" alt=""></span></button>
							</form>
						</div>
					</div> -->
					
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