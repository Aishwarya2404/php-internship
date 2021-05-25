<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<style>

   .cont{
	   background-color:white;
	    width:520px;
	   height:660px;
	   margin-left:420px;
	   margin-top:80px;
	   border:1px solid #f1f2f4;
	   border-radius:10px;
	   margin-bottom:450px;
	   align:center;
   }
   .log{
	   text-align:center;
	   margin-top:50px;
	   margin-bottom:50px;
	   color:#222;
	   font-size:32px;
	   font-family:Gotham SSm;
	   font-weight:bold;
	   letter-spacing:2px;
   }
   .textbox{
	   margin-left:100px;
	   padding:7px;
	   width:320px;
	   text-indent:2.5em;
	   outline:none;
	   border-width:1px;
	   border-color:#e0e0e0;
	   border-radius:3px;
	   background-color:white;
   }
   .textbox:hover{
	   border-color:#008329;
	   border-width:2px;
   }
    .textbox:focus{
	   border-color:#008329;
	   border-width:2px;
   }
   .input-icons i {
         position: absolute;
    }
     .mybtn{
	   margin-left:100px;
	   margin-top:15px;
	   padding:7px;
	   width:320px;
	   font-family:Gotham SSm;
	   font-weight:bold;
	   letter-spacing:1px;
	   outline:none;
	   border-width:1px;
	   border-color:#e0e0e0;
	   border-radius:7px;
	   background-color:#5bbc2e;
	   color:white;
	   font-size:18px;
	   text-align:center;
	 }	
     .mybtn:hover{
         background-color:#008329;
		 cursor:pointer;
	 }
    .input-icons {
        width: 200%;
        margin-bottom: 10px;
		position:relative;
    }
    .icon {
            padding: 10px;
			margin-left:-320px;
			margin-top:2px;
			color:gray;
        }
 ::placeholder{
   color:black;
   padding:0px;
    letter-spacing:1px;
   }
   .line{
	   
	   border-bottom:1px solid #e0e0e0;
	   margin-top:35px;
	   margin-left:100px;
	   margin-right:265px;
   }
   .line2{
	   
	   border-bottom:1px solid #e0e0e0;
	   margin-top:0px;
	   margin-left:280px;
	   margin-right:100px;
   }
    .line3{
	   
	   border-bottom:1px solid gray;
	   margin-top:35px;
	   margin-left:100px;
	   margin-right:340px;
   }
    .line4{ 
	   border-bottom:1px solid gray;
	   margin-top:-10px;
	   margin-left:340px;
	   margin-right:100px;
	   letter-spacing:1px;
   }
   .ortxt{
	   margin-left:160px;
	   color:gray;
	   margin-bottom:-10px;
   }
    .acctxt{
	   margin-left:185px;
	   color:gray;
	   margin-top:-10px;
	   letter-spacing:0.5px;
   }
   
   .googlebtn{
	   margin-left:100px;
	   margin-top:35px;
	   padding:7px;
	   width:320px;
	   font-family:Gotham SSm;
	   font-weight:bold;
	   letter-spacing:1px;
	   outline:none;
	   border-width:1px;
	   border-color:#e0e0e0;
	   border-radius:7px;
	   background-color:#4285f4;
	   color:white;
	   font-size:18px;
	   text-align:center;
	   image-width:1px;
	   image-height:3px;
	 }	
	 .googlebtn:hover{
		 cursor:pointer;
	 }
	 img{
		position:absolute;
		left:103px;
		top:37px;
		border:1px solid white;
		border-radius:5px;
	 }
	 .applebtn{
	   margin-left:100px;
	   margin-top:25px;
	   padding:7px;
	   width:320px;
	   font-family:Gotham SSm;
	   font-weight:bold;
	   letter-spacing:1px;
	   outline:none;
	   border-width:1px;
	   border-color:black;
	   border-radius:7px;
	   background-color:white;
	   color:black;
	   font-size:18px;
	   text-align:center;
	   image-width:1px;
	   image-height:3px;
	 }	
	 .signupbtn{
		 padding-left:20px;
		 padding:10px;
		 margin-left:190px;
		 margin-right:160px;
		 border:1px solid #a0a0a0;
		 border-radius:5px;
		 background-color:white;
		 margin-top:30px;
		 width:150px;
		 color:green;
		 letter-spacing:1px;
		 font-size:18px;
		 font-family:Gotham SSm;
		 font-weight:bold;
	 }
	 .signupbtn:hover{
		  background-color:#f2f2f2;
		  cursor:pointer;
	 }
	  
	 html,body{
		  width:100%;
		  margin:0;
		  height:100%;
	 }
	
</style>
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
</head>
<body style="background-color:#f1f2f4;width:100%;height:calc(200%-225px)">


	
	<!-- Header -->

	<header class="header" style="position:static;width:100%;height:calc(100%-125px);">
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



<div class="cont">
   <div class="log">Sign In </div>
     <div class="input-icons">
	    <input type="text" class="textbox" name="text" placeholder="Username or Email">
		<i class="fa fa-user icon"></i>
	 </div>
	  <button class="mybtn" type="submit" name="submit" value="Continue with Email" onclick="window.location.href='createprofile.php'">Continue with Email</button>
	  <div class="line">
	     <div class="ortxt">or</div>
	  </div>
	  <div class="line2"></div>
	  <div class="mystyle">
        <input class="googlebtn" type="submit" name="submit" value="Continue with Google"/>
	   <img src="images/google.png" width="38px" height="38px"></img>
	  </div>
      <input class="applebtn" type="submit" name="submit" value="Continue with Apple"/>
	     <img src="images/apple.png" width="15px" height="15px" style="position:absolute;
		left:150px;
		top:417px;
		border:1px solid white;
		border-radius:5px;"></img>
	 <br>
	 <br>
	 <br>
	 <hr/>
	 <?php
	      $_SESSION['myname']="Aishwarya";
	 ?>
	 <div class="line3"></div>
	   <div class="acctxt">Don't have an account?</div>
	  <div class="line4"></div> 
	  <button class="signupbtn"  name="submit" onclick="window.location.href='signup.php'">Sign UP</button>
	

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