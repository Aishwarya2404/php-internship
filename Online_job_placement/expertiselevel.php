<!DOCTYPE html>
<html lang="en">
<?php
   session_start();
   ?>
<head>
<title>Expertise Level</title>
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
	 width:710px;
	 height:470px;
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
	 top:30px;
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
     padding:5px;
     margin-left: 460px;
     margin-top: 20px;
     border:1px solid #5bbc2e;
     border-radius:35px;
     background-color:#5bbc2e;
     width:100px;
     color:white;
     letter-spacing:1px;
     font-size:18px;
     font-family:Gotham SSm;
     font-weight:bold;
     float: clear;
 }
 .nextbtn:hover{
         background-color:#008329;
		 cursor:pointer;
	 }
.backbtn{

       padding-left:20px;
     padding:5px;
     margin-left: 25px;
     border:1px solid #d1d1d1;
     border-radius:35px;
     background-color:white;
     width:100px;
     color:green;
     letter-spacing:1px;
     font-size:18px;
     font-family:Gotham SSm;
     font-weight:bold;
 }
 .backbtn:hover{
     background-color:#f9f9f9;
     cursor:pointer;
   }

 .buttons{
 	margin-left: 20px;
 	margin-top: -40px;
 }
  .skill{
  	margin-left: 20px;
  }
  .all{
  	background-color: #f1f2f4;
  	border:1px solid #f1f2f4;
  	border-radius: 50px;
  	color: gray;
  	width:max-content;
  	padding-left: 10px;
  	padding-right: 10px;
  	padding-top: 3px;
  	padding-bottom: 3px;
  	float:left;
  	margin-top: 10px;
  }
  .all:hover{
  	background-color: #f9f9f9;
  	cursor: pointer;
  }
  .skilltext{
  	width: 250%;
  	padding: 10px;
  	margin-left: 30px;
  	margin-right: 20px;
  	border:1px solid #f1f2f4;
  	border-radius: 5px;
  	outline: none;
  }
  .skilltext:hover{
      border:1px solid green;
  }
  

.lastcontainer{
	background-color: #f9f9f9;
	width:100%;
	height: 18%;
  margin-top:-15px;

}
.firstcontainer{
  background-color: #f9f9f9;
  width:100%;
  height: 24%;
  margin-top: 0px;
}
.card1{
  width:195px;
  height: 140px;
  background-color: white;
  border:1px solid #d1d1d1;
  border-radius: 5px;
  margin-left:30px;
  margin-top:30px;
  padding-top: 10px;
  text-align: center;
  float:left;
}
.card2{
  width:195px;
  height: 140px;
  background-color: white;
  border:1px solid #d1d1d1;
  border-radius: 5px;
  margin-left:30px;
  margin-top:30px;
  padding-top: 10px;
  text-align: center;
  float:left;
}
.card3{
  width:195px;
  height: 140px;
  background-color: white;
  border:1px solid #d1d1d1;
  border-radius: 5px;
  margin-left:30px;
  margin-top:30px;
  padding-top: 10px;
  text-align: center;
  float:left;
}
input[type=radio] {
   
    width: 100%;
    height: 1.3em;
    background-color: #e7e6e7;
}
#rad1:hover{
   height: 1.4em;
}
.card1:hover{
  background-color: #f9f9f9;
  cursor: pointer;
}
.card2:hover{
  background-color: #f9f9f9;
  cursor: pointer;
}
.card3:hover{
  background-color: #f9f9f9;
  cursor: pointer;
}

</style>
<script type="text/javascript">
  function checkradio()
  {
    var my=document.getElementById("rad1");
    my.checked="true";
    
  }
   function checkradio2()
  {
    var my=document.getElementById("rad2");
    my.checked="true";
    
  }
   function checkradio3()
  {
    var my=document.getElementById("rad3");
    my.checked="true";
    
  }
  function nextpage()
  {
     alert("yes");
     location.href='expertiseprofile.php';
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

 
  <form name="myform" method="post">
  <div class="left-tab">
      
	  <div style="margin-bottom:15px">
		  <i class="fa fa-arrow-circle-up fa-lg" style="margin-left:10px;color:black;margin-top:7px"></i>
		  <a id="mya" href="#">Getting Started</a>
		  <i id="fid" class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:9px;color:green"></i>
	   </div>
	   <div style="margin-bottom:15px">
	      <i class="material-icons" style="margin-left:10px;color:black;font-size:18px;">assignment</i>
		  <a id="mya" href="#" style="margin-top:-5px;">Categories</a>
	      <i id="sid" class="fa fa-check-circle" style="margin-top:9px;right:20px;position:absolute;color: green"></i>
       </div>
	   
	  <div style="margin-bottom:15px">
	      <i class="material-icons" style="margin-left:10px;color:black;font-size:18px">border_color</i>
		  <a id="mya" href="#" style="margin-top:-5px;">Expertise</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:9px;color: green"></i>
       </div>
	   
	   <div style="margin-bottom:15px;width:95%;background-color: #f9f9f9;padding:5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border:1px solid #f9f9f9;border-radius: 2px;border-left:4px solid green">
	      <i class="fa fa-bar-chart fa-lg" style="margin-left:10px;color:green;"></i>
		  <a id="mya" href="#" style="margin-top:-5px;padding: 5px;color:green">Expertise Level</a>
	      <i class="fa fa-check-circle" style="right:8px;position:absolute;margin-top:4px"></i>
       </div>
   
      <div style="margin-bottom:15px">
	      <i class="fas fa-graduation-cap" style="margin-left:10px;color:black;font-size:16px"></i>
		  <a id="mya" href="#" style="margin-top:-5px;">Education</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:5px"></i>
       </div>
	   
	  <div style="margin-bottom:15px">
	      <i class="fas fa-building" style="margin-left:10px;color:black;font-size:16px"></i>
		  <a id="mya" href="#" style="margin-top:-5px;">Employment</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:5px"></i>
       </div>
	   
	    <div style="margin-bottom:10px">
	      <i class="material-icons" style="margin-left:10px;color:black;font-size:18px">mic</i>
		  <a id="mya" href="#" style="margin-top:-5px;">Languages</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:5px"></i>
       </div>
   
       <div style="margin-bottom:15px">
	      <i class="fa fa-dollar" style="margin-left:14px;color:black;"></i>
		  <a id="mya" href="#" style="margin-top:-5px;">Hourly Rate</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:5px"></i>
       </div>
	   
	   <div style="margin-bottom:15px">
	      <i class="fas fa-user-astronaut" style="margin-left:10px;color:black;font-size:16px"></i>
		  <a id="mya" href="#" style="margin-top:-5px;">Title & Overview</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:5px"></i>
       </div>
	   
	  <div style="margin-bottom:15px">
	      <i class="fas fa-camera" style="margin-left:10px;color:black;font-size:16px"></i>
		  <a id="mya" href="#" style="margin-top:-5px;">Profile Photo</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:5px"></i>
       </div>
	   
	    <div style="margin-bottom:15px">
	      <i class="fas fa-map-marker-alt" style="margin-left:10px;color:black;font-size:16px"></i>
		  <a id="mya" href="#" style="margin-top:-5px;">Location</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:5px"></i>
       </div>

	    <div style="margin-bottom:15px">
	      <i class="fas fa-phone" style="margin-left:10px;color:black;font-size:16px"></i>
		  <a id="mya" href="#" style="margin-top:-5px;">Phone</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:5px"></i>
       </div>
	   
  
 
    <div class="startedcard" id="startedcard">
	  
        <div class="firstcontainer">
	          <div class="mytextnew" >Expertise Level </div><br/>
		        <div class="mytextnew2" style="color:gray;font-size:14px;">4 of 12</div><br>
            <hr/>
        </div>
		 
		  
		    <!--  <?php
			    echo $_SESSION["myname"]="Aish";
			    print_r($_SESSION);
			    ?> -->
		  <div class="mytextneww">What is your level of experience in this field?</div><br>


		    <div class="card1" id="card1" onclick="checkradio()" onfocus="myfocus()">
             <input type="radio" id="rad1" name="radiobtn" style="margin-left: 77px" value="easy">
             <div style="color: black;font-size: 18px;padding-top: 0px;padding-bottom: 10px">Entry Level</div>
            <div style="padding-left:7px;">I am relatively new to this field</div>
        </div>

        <div class="card2" id="card2" onclick="checkradio2()" >
             <input type="radio" id="rad2" name="radiobtn" style="margin-left: 77px" value="mediumm">
             <div style="color: black;font-size: 18px;padding-top: 0px;padding-bottom: 10px">Intermediate</div>
            <div style="padding-left:7px;">I have substantial experience in this field</div>
        </div>

        <div class="card3" id="card3" onclick="checkradio3()">
             <input type="radio" id="rad3" name="radiobtn" style="margin-left: 77px" value="hard">
             <div style="color: black;font-size: 18px;padding-top: 0px;padding-bottom: 10px">Expert Level</div>
            <div style="padding-left:7px;">I have comprehensive and deep expertise in this field</div>
        </div>		
        
		    <hr style="margin-top: 220px">
        
             <div class="lastcontainer">
                
              <button name="Back" class="backbtn" value="Back" formaction="expertiseprofile.php">Back</button>
                <input type="submit" name="Next" class="nextbtn" value="Next" formaction="education.php">
             </div>    
                 
           
        
       
		   
				  
        
	
     </div>		

		  
		  
		  
		  
		  
		  

 </form>  
   
   
 
   
 





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