<!DOCTYPE html>
<html lang="en">
<?php
   session_start();
   ?>
<head>
<title>Expertise</title>
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
	 height:585px;
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
     padding:5px;
     margin-left: 380px;
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
  .autocomplete {
  position: relative;
  display: inline-block;
  
}

.autocomplete-items {
	 overflow-y: auto;
	 overflow-x: hidden;
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
	 overflow-y: auto;
	 overflow-x: hidden;
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
	 overflow-y: auto;
	 overflow-x: hidden;
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}

.lastcontainer{
	background-color: #f9f9f9;
	width:100%;
	height: 16%;
  margin-top: -15px;
}
</style>
<script>
   
   
   function nextpage(){
      window.location.href="expertiselevel.php";
      
   }

   function backpage(){
      window.location.href="startedprofile.php";
      
   }


function changeicon1()
{

    if(document.getElementById("plusicon1").style.display=="inline-block")
    {
    	document.getElementById("plusicon1").style.display="none";
    	document.getElementById("gifticon1").style.display="inline-block";	
    	document.getElementById("v1").style.backgroundColor ="#336278";
    	document.getElementById("v1").style.color ="white";
    }
    else{
    	document.getElementById("plusicon1").style.display="inline-block";
    	document.getElementById("gifticon1").style.display="none";	
    	document.getElementById("v1").style.backgroundColor ="#f1f2f4";
    	document.getElementById("v1").style.color ="gray";	
    }
}
 
function changeicon2()
{

    if(document.getElementById("plusicon2").style.display=="inline-block")
    {
    	document.getElementById("plusicon2").style.display="none";
    	document.getElementById("gifticon2").style.display="inline-block";	
    	document.getElementById("v2").style.backgroundColor ="#336278";
    	document.getElementById("v2").style.color ="white";
    }
    else{
    	document.getElementById("plusicon2").style.display="inline-block";
    	document.getElementById("gifticon2").style.display="none";	
    	document.getElementById("v2").style.backgroundColor ="#f1f2f4";
    	document.getElementById("v2").style.color ="gray";	
    }
}  

function changeicon3()
{

    if(document.getElementById("plusicon3").style.display=="inline-block")
    {
    	document.getElementById("plusicon3").style.display="none";
    	document.getElementById("gifticon3").style.display="inline-block";	
    	document.getElementById("v3").style.backgroundColor ="#336278";
    	document.getElementById("v3").style.color ="white";
    }
    else{
    	document.getElementById("plusicon3").style.display="inline-block";
    	document.getElementById("gifticon3").style.display="none";	
    	document.getElementById("v3").style.backgroundColor ="#f1f2f4";
    	document.getElementById("v3").style.color ="gray";	
    }
}
function changeicon4()
{

    if(document.getElementById("plusicon4").style.display=="inline-block")
    {
    	document.getElementById("plusicon4").style.display="none";
    	document.getElementById("gifticon4").style.display="inline-block";	
    	document.getElementById("v4").style.backgroundColor ="#336278";
    	document.getElementById("v4").style.color ="white";
    }
    else{
    	document.getElementById("plusicon4").style.display="inline-block";
    	document.getElementById("gifticon4").style.display="none";	
    	document.getElementById("v4").style.backgroundColor ="#f1f2f4";
    	document.getElementById("v4").style.color ="gray";	
    }
}
function changeicon5()
{

    if(document.getElementById("plusicon5").style.display=="inline-block")
    {
    	document.getElementById("plusicon5").style.display="none";
    	document.getElementById("gifticon5").style.display="inline-block";	
    	document.getElementById("v5").style.backgroundColor ="#336278";
    	document.getElementById("v5").style.color ="white";
    }
    else{
    	document.getElementById("plusicon5").style.display="inline-block";
    	document.getElementById("gifticon5").style.display="none";	
    	document.getElementById("v5").style.backgroundColor ="#f1f2f4";
    	document.getElementById("v5").style.color ="gray";	
    }
}
function changeicon6()
{

    if(document.getElementById("plusicon6").style.display=="inline-block")
    {
    	document.getElementById("plusicon6").style.display="none";
    	document.getElementById("gifticon6").style.display="inline-block";	
    	document.getElementById("v6").style.backgroundColor ="#336278";
    	document.getElementById("v6").style.color ="white";
    }
    else{
    	document.getElementById("plusicon6").style.display="inline-block";
    	document.getElementById("gifticon6").style.display="none";	
    	document.getElementById("v6").style.backgroundColor ="#f1f2f4";
    	document.getElementById("v6").style.color ="gray";	
    }
}

function changeicon7()
{

    if(document.getElementById("plusicon7").style.display=="inline-block")
    {
    	document.getElementById("plusicon7").style.display="none";
    	document.getElementById("gifticon7").style.display="inline-block";	
    	document.getElementById("v7").style.backgroundColor ="#336278";
    	document.getElementById("v7").style.color ="white";
    }
    else{
    	document.getElementById("plusicon7").style.display="inline-block";
    	document.getElementById("gifticon7").style.display="none";	
    	document.getElementById("v7").style.backgroundColor ="#f1f2f4";
    	document.getElementById("v7").style.color ="gray";	
    }
}
function changeicon8()
{

    if(document.getElementById("plusicon8").style.display=="inline-block")
    {
    	document.getElementById("plusicon8").style.display="none";
    	document.getElementById("gifticon8").style.display="inline-block";	
    	document.getElementById("v8").style.backgroundColor ="#336278";
    	document.getElementById("v8").style.color ="white";
    }
    else{
    	document.getElementById("plusicon8").style.display="inline-block";
    	document.getElementById("gifticon8").style.display="none";	
    	document.getElementById("v8").style.backgroundColor ="#f1f2f4";
    	document.getElementById("v8").style.color ="gray";	
    }
}
function changeicon9()
{

    if(document.getElementById("plusicon9").style.display=="inline-block")
    {
    	document.getElementById("plusicon9").style.display="none";
    	document.getElementById("gifticon9").style.display="inline-block";	
    	document.getElementById("v9").style.backgroundColor ="#336278";
    	document.getElementById("v9").style.color ="white";
    }
    else{
    	document.getElementById("plusicon9").style.display="inline-block";
    	document.getElementById("gifticon9").style.display="none";	
    	document.getElementById("v9").style.backgroundColor ="#f1f2f4";
    	document.getElementById("v9").style.color ="gray";	
    }
}
function changeicon10()
{

    if(document.getElementById("plusicon10").style.display=="inline-block")
    {
    	document.getElementById("plusicon10").style.display="none";
    	document.getElementById("gifticon10").style.display="inline-block";	
    	document.getElementById("v10").style.backgroundColor ="#336278";
    	document.getElementById("v10").style.color ="white";
    }
    else{
    	document.getElementById("plusicon10").style.display="inline-block";
    	document.getElementById("gifticon10").style.display="none";	
    	document.getElementById("v10").style.backgroundColor ="#f1f2f4";
    	document.getElementById("v10").style.color ="gray";	
    }
}
function changeicon11()
{

    if(document.getElementById("plusicon11").style.display=="inline-block")
    {
    	document.getElementById("plusicon11").style.display="none";
    	document.getElementById("gifticon11").style.display="inline-block";	
    	document.getElementById("v11").style.backgroundColor ="#336278";
    	document.getElementById("v11").style.color ="white";
    }
    else{
    	document.getElementById("plusicon11").style.display="inline-block";
    	document.getElementById("gifticon11").style.display="none";	
    	document.getElementById("v11").style.backgroundColor ="#f1f2f4";
    	document.getElementById("v11").style.color ="gray";	
    }
}
function changeicon12()
{

    if(document.getElementById("plusicon12").style.display=="inline-block")
    {
    	document.getElementById("plusicon12").style.display="none";
    	document.getElementById("gifticon12").style.display="inline-block";	
    	document.getElementById("v12").style.backgroundColor ="#336278";
    	document.getElementById("v12").style.color ="white";
    }
    else{
    	document.getElementById("plusicon12").style.display="inline-block";
    	document.getElementById("gifticon12").style.display="none";	
    	document.getElementById("v12").style.backgroundColor ="#f1f2f4";
    	document.getElementById("v12").style.color ="gray";	
    }
}
function changeicon13()
{

    if(document.getElementById("plusicon13").style.display=="inline-block")
    {
    	document.getElementById("plusicon13").style.display="none";
    	document.getElementById("gifticon13").style.display="inline-block";	
    	document.getElementById("v13").style.backgroundColor ="#336278";
    	document.getElementById("v13").style.color ="white";
    }
    else{
    	document.getElementById("plusicon13").style.display="inline-block";
    	document.getElementById("gifticon13").style.display="none";	
    	document.getElementById("v13").style.backgroundColor ="#f1f2f4";
    	document.getElementById("v13").style.color ="gray";	
    }
}
function changeicon14()
{

    if(document.getElementById("plusicon14").style.display=="inline-block")
    {
    	document.getElementById("plusicon14").style.display="none";
    	document.getElementById("gifticon14").style.display="inline-block";	
    	document.getElementById("v14").style.backgroundColor ="#336278";
    	document.getElementById("v14").style.color ="white";
    }
    else{
    	document.getElementById("plusicon14").style.display="inline-block";
    	document.getElementById("gifticon14").style.display="none";	
    	document.getElementById("v14").style.backgroundColor ="#f1f2f4";
    	document.getElementById("v14").style.color ="gray";	
    }
}
function changeicon15()
{

    if(document.getElementById("plusicon15").style.display=="inline-block")
    {
    	document.getElementById("plusicon15").style.display="none";
    	document.getElementById("gifticon15").style.display="inline-block";	
    	document.getElementById("v15").style.backgroundColor ="#336278";
    	document.getElementById("v15").style.color ="white";
    }
    else{
    	document.getElementById("plusicon15").style.display="inline-block";
    	document.getElementById("gifticon15").style.display="none";	
    	document.getElementById("v15").style.backgroundColor ="#f1f2f4";
    	document.getElementById("v15").style.color ="gray";	
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

  <?php
     
     $value=$_SESSION['listvalue'];
     // echo $value;
  ?>
  <form name="myform" action="expertiselevel.php">
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
	  
	      <div class="mytextnew" >Expertise </div><br/>
		   <div class="mytextnew2" style="color:gray;font-size:14px;">3 of 12</div>
		 <hr/>
		  
		  <div class="mytextneww">Select your skills</div><br>


		  <div class="skill">
		  	  <?php
				    $conn=mysqli_connect("localhost","root","","jobplacement");

					if($con === false){
					    die("ERROR: Could not connect. " . mysqli_connect_error());
					}
					$sql = "SELECT value FROM categoryvalue where cat_name='$value'";
				    $result = mysqli_query($conn, $sql);
				    if (mysqli_num_rows($result) > 0)
				    {

						  while($row = mysqli_fetch_array($result)) {
		   					$accvalue[]=$row['value'];
		  					}

 

   ?>
		     <!-- <div class="all" id="accbasics">Accounting Basics   <i class='fa fa-plus-circle'></i></div>
 -->
		    <div class="all" id="v1" style="margin-left: 10px" onclick="changeicon1()"><?php echo $accvalue[0]  ?> 
		       <i class='fa fa-plus-circle' id="plusicon1"  style="display: inline-block;"></i>
		       <i class='fa fa-check-circle' id="gifticon1"  style="display: none"></i>
		    </div>
		    <div class="all" id="v2" style="margin-left: 10px" onclick="changeicon2()"><?php echo $accvalue[1]  ?> 
		       <i class='fa fa-plus-circle' id="plusicon2"  style="display: inline-block;"></i>
		       <i class='fa fa-check-circle' id="gifticon2"  style="display: none"></i>
		    </div>
		    <div class="all" id="v3" style="margin-left: 10px" onclick="changeicon3()"><?php echo $accvalue[2]  ?> 
		       <i class='fa fa-plus-circle' id="plusicon3"  style="display: inline-block;"></i>
		       <i class='fa fa-check-circle' id="gifticon3"  style="display: none"></i>
		    </div>
		    <div class="all" id="v4" style="margin-left: 10px" onclick="changeicon4()"><?php echo $accvalue[3]  ?> 
		       <i class='fa fa-plus-circle' id="plusicon4"  style="display: inline-block;"></i>
		       <i class='fa fa-check-circle' id="gifticon4"  style="display: none"></i>
		    </div>
		    <div class="all" id="v5" style="margin-left: 10px" onclick="changeicon5()"><?php echo $accvalue[4]  ?> 
		       <i class='fa fa-plus-circle' id="plusicon5"  style="display: inline-block;"></i>
		       <i class='fa fa-check-circle' id="gifticon5"  style="display: none"></i>
		    </div>
		    <div class="all" id="v6" style="margin-left: 10px" onclick="changeicon6()"><?php echo $accvalue[5]  ?> 
		       <i class='fa fa-plus-circle' id="plusicon6"  style="display: inline-block;"></i>
		       <i class='fa fa-check-circle' id="gifticon6" style="display: none"></i>
		    </div>
		    <div class="all" id="v7" style="margin-left: 10px" onclick="changeicon7()"><?php echo $accvalue[6]  ?> 
		       <i class='fa fa-plus-circle' id="plusicon7"  style="display: inline-block;"></i>
		       <i class='fa fa-check-circle' id="gifticon7" style="display: none"></i>
		    </div>
		    <div class="all" id="v8" style="margin-left: 10px" onclick="changeicon8()"><?php echo $accvalue[7]  ?> 
		       <i class='fa fa-plus-circle' id="plusicon8"  style="display: inline-block;"></i>
		       <i class='fa fa-check-circle' id="gifticon8"  style="display: none"></i>
		    </div>
		    <div class="all" id="v9" style="margin-left: 10px" onclick="changeicon9()"><?php echo $accvalue[8]  ?> 
		       <i class='fa fa-plus-circle' id="plusicon9"  style="display: inline-block;"></i>
		       <i class='fa fa-check-circle' id="gifticon9"  style="display: none"></i>
		    </div>
		    <div class="all" id="v10" style="margin-left: 10px" onclick="changeicon10()"><?php echo $accvalue[9]  ?> 
		       <i class='fa fa-plus-circle' id="plusicon10"  style="display: inline-block;"></i>
		       <i class='fa fa-check-circle' id="gifticon10"  style="display: none"></i>
		    </div>
		    <div class="all" id="v11" style="margin-left: 10px" onclick="changeicon11()"><?php echo $accvalue[10]  ?> 
		       <i class='fa fa-plus-circle' id="plusicon11"  style="display: inline-block;"></i>
		       <i class='fa fa-check-circle' id="gifticon11" style="display: none"></i>
		    </div>
		    <div class="all" id="v12" style="margin-left: 10px" onclick="changeicon12()"><?php echo $accvalue[11]  ?> 
		       <i class='fa fa-plus-circle' id="plusicon12"  style="display: inline-block;"></i>
		       <i class='fa fa-check-circle' id="gifticon12" style="display: none"></i>
		    </div>
		    <div class="all" id="v13" style="margin-left: 10px" onclick="changeicon13()"><?php echo $accvalue[12]  ?> 
		       <i class='fa fa-plus-circle' id="plusicon13"  style="display: inline-block;"></i>
		       <i class='fa fa-check-circle' id="gifticon13" style="display: none"></i>
		    </div>
		    <div class="all" id="v14" style="margin-left: 10px" onclick="changeicon14()"><?php echo $accvalue[13]  ?> 
		       <i class='fa fa-plus-circle' id="plusicon14"  style="display: inline-block;"></i>
		       <i class='fa fa-check-circle' id="gifticon14"  style="display: none"></i>
		    </div>
		    <div class="all" id="v15" style="margin-left: 10px" onclick="changeicon15()"><?php echo $accvalue[14]  ?> 
		       <i class='fa fa-plus-circle' id="plusicon15"  style="display: inline-block;"></i>
		       <i class='fa fa-check-circle' id="gifticon15" style="display: none"></i>
		    </div>
		   <br><br>
		     
		 

		 </div><br/><br/><br><br>

		   <div class="mytextneww" style="margin-top: 80px;font-size: 15px;">Now what are you looking for? 
		   	   <i class='fa fa-question-circle' style="margin-left:10px;color: green"></i>
		   	</div><br/>

		   <form autocomplete="off">
		   	    <div class="autocomplete">
		           <input type="text" id="myInput" class="skilltext" name="myCountry" placeholder="Start typing to search for skills">
		        </div>
		    </form><br><br>

		    <hr>

		    <div class="lastcontainer">
                
              <button name="Back" class="backbtn" value="Back" formaction="category.php">Back</button>
                <input type="submit" name="Next" class="nextbtn" value="Next" formaction="expertiselevel.php">
        </div>

		     <?php
				   }
				   else{
				   
             ?>
             <script type="text/javascript">
               document.getElementById("startedcard").style.height="400px";
             </script>
              <div class="mytextneww" style="margin-top: 20px;font-size: 15px;left:10px">Now what are you looking for?</div><br>

		   <form autocomplete="off">
		   	    <div class="autocomplete">
		           <input type="text" id="myInput" class="skilltext" name="myCountry" placeholder="Start typing to search for skills" style="margin-left: 10px">
		        </div>

        <div class="lastcontainer">
                
              <button name="Back" class="backbtn" value="Back" formaction="expertiseprofile.php">Back</button>
                <input type="submit" name="Next" class="nextbtn" value="Next" formaction="startedprofile.php">
        </div>   

		    </form><br><br>
		    
		     <?php
				   }
				   
				   mysqli_close($conn);
             ?>
             <hr style="margin-left: -20px">
         
         <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["A-parser","A/B Testing","A/Bingo","A2Billing","A51 Active collab","AB Tasty","ADR","ADP Workplace","ADP WorkforceNow","ADO.NET","ADK","ADF Faces","ACiD Pro","B-1","B-2","B2B","B2B Baidu","B2B Marketing","B2C","BAT","BEM","BLE","BLue-CAT","C","C shelll","C change","C#","C++","c++/CLi","C-corporation","C-free","CAD software","CAM","D","D software zephyr","D3.js","DAE","DBMS","DCOM","DIMS","DHTML","DHTMLX","DHCP","E-textiles","E-sourcing tools","E4X","E-commerce Management","F#","F5","FAAC","FAQ","FBML","FAQs compilation","FHTML","FLA","GPS","Gpo","GPRS","GRC","G-cloud","GIF","GIFs"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>
		      

	
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