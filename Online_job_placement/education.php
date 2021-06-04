<!--href="http://www.w3schools.com/lib/w3.css">-->
<!DOCTYPE html>
<html lang="en">
<?php
   session_start();
   ?>
<head>


<title>Education</title>
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
	 height:530px;
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
	 top:30px;
	 left:30px;
	 font-family:"Canela Deck Bold";
	 color:black;
	 font-size:23px;
	 font-weight:bold;
	 letter-spacing:1px;
 }
  .mytextneww{
	 top:40px;
	 left:30px;
	 font-family:"Canela Deck Bold";
	 color:black;
	 font-size:21px;
	 font-weight:bold;
	 letter-spacing:1px;
 }
 .mytextnew2{
	 top:20px;
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
   .educationbtn{
      outline: none;
       padding-left:20px;
     padding:5px;
     margin-left: 25px;
     border:1px solid #d1d1d1;
     border-radius:35px;
     background-color:white;
     width:200px;
     color:green;
     letter-spacing:1px;
     font-size:18px;
     font-family:Gotham SSm;
     font-weight:bold;
 }
 .educationbtn:hover{
     background-color:#f9f9f9;
     cursor:pointer;
   }
   .educationbtn:focus{
     border:1px solid #d1d1d1;
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
	position: absolute;
	background-color: #f9f9f9;
	width:100%;
	height: 18%;
	bottom: 0px;
  /*margin-top:-20px;*/

}
.firstcontainer{
  background-color: #f9f9f9;
  width:100%;
  height: 24%;
  margin-top: 0px;
}
input[type="text"]{
	width: 100%;
	padding: 10px;
	border:1px solid #d1d1d1;
	padding-left: 20px;
	text-indent: 10px;
	border-radius: 5px;
	outline:none;
}
input[type="text"]:hover{
	/*box-shadow:20px 20px 10px 10px pink inset; */
	outline:none;
		border-color:#7AD7F0;
		box-shadow:0 0 8px #719ECE inset;
}
input[type="text"]:focus{
	/*box-shadow:20px 20px 10px 10px pink inset; */
	outline:none;
		border-color:#7AD7F0;
		box-shadow:0 0 8px #719ECE inset;
}
 .listbox{
	  
	   padding:7px;
	   width:50%;
	   text-indent:2.5em;
	   outline:none;
	   border-width:1px;
	   border-color:#e0e0e0;
	   border-radius:5px;
	   background-color:white;
	   overflow-x: scroll;
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
#istyle{
	border: 2px solid gray;
	border-radius: 50px;
	padding: 5px;
}
#istyle:hover{
	background-color: #f1f2f4;
	cursor: pointer;
}
/*.select-box label {
  cursor: pointer;
  display: block;
  padding: 12px 24px;
}*/
</style>
<script type="text/javascript">
	  function ifun(){
	  	document.getElementById("id02").style.display="block";
	  }

	  function deletemodelfun(){
	  	document.getElementById('id').style.display='block';
	  }

	  function remove()
	  {
	  	location.href="removeeducation.php";
	  }
	  function jobfeed(){
	  	alert("es");
	  	window.location.href="expertiselevel.php";
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
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
 <link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>
<body style="background-color:#f1f2f4;width:100%;" class="w3-container">


	
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
  
 <div class="w3-container">
 
 <!--  <button onclick="document.getElementById('id').style.display='block'" class="w3-button w3-black">Open Modal</button>
 -->
  <div id="id" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p style="text-align: center;font-weight: bold;font-size: 20px">Remove Education</p>
        <p style="text-align: center;font-weight: bold;font-size: 16px;color: black">Are You sure you want to remove Education from your profile? </p>
         
         <input type="submit" name="Next" class="nextbtn" value="Remove" style="margin-bottom: 20px;margin-left: 390px" onclick="remove()">
      </div>
    </div>
  </div>
</div>
            
 
  
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
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:7px;color: green"></i>
       </div>
	   
	   <div style="margin-bottom:15px">
	      <i class="fa fa-bar-chart fa-lg" style="margin-left:10px;color:black;"></i>
		  <a id="mya" href="#" style="margin-top:-10px;padding: 5px;color:black">Expertise Level</a>
	      <i class="fa fa-check-circle" style="right:20px;position:absolute;margin-top:4px;color:green"></i>
       </div>
   
      <div style="margin-bottom:15px;width:95%;background-color: #f9f9f9;padding:5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border:1px solid #f9f9f9;border-radius: 2px;border-left:4px solid green;">
	      <i class="fas fa-graduation-cap" style="margin-left:5px;color:green;font-size:16px"></i>
		  <a id="mya" href="#" style="margin-top:0px;color:green">Education</a>
	      <i class="fa fa-check-circle" style="right:8px;position:absolute;margin-top:5px"></i>
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
	          <div class="mytextnew" >Education</div><br/>
	        
		        <div class="mytextnew2" style="color:gray;font-size:14px;">5 of 12</div><br>
		          <?php
	              $myname= $_SESSION["name"].'<br>';  
	          ?>
            <hr style="margin-top:27px">
        </div>
		 
		  
		  <div class="mytextneww">Add the schools you attended ,areas of study, and degrees earned.</div><br><br><br>

		  <!--  <button  class="educationbtn" value="Add Education">Add Education
		    <i class="fas fa-plus" style="margin-left:0px;color:green;font-size:16px"></i></button>
 -->
<div id="info" style="color: black;margin-left: 30px">
 			<?php
 			  $school=$_POST['school'];
 			  $area=$_POST['area'];
 			  $degree=$_POST['degree'];
 			  $datefrom=$_POST['datefrom'];
 			  $dateto=$_POST['platform'];
 			  $desc=$_POST['desc'];
 			   
 			  $conn=mysqli_connect("localhost","root","","jobplacement");
 			   $sql="SELECT * FROM  education";
 			   $result=mysqli_query($conn,$sql);
 			   while($row=mysqli_fetch_array($result)){
 			   	  echo $row['school'];
 			   	  echo '<i id="istyle" class="fa fa-edit" style="right:100px;position:absolute;color:black;font-size:17px" onclick="ifun()"></i>';	
 			   	  echo '<i id="istyle" class="fa fa-trash" data-toggle="modal" data-target="#myModal" onclick="deletemodelfun()" style="right:60px;position:absolute;color:black;font-size:17px;"></i>'.'<br>';
 			   	  echo $row['Deg'].'  '.$row['in'].' '.$row['areaofstudy'].'<br>';
 			   	  echo $row['datefrom'].' '.$row['dash'].' '.$row['dateto'].$row['expected'].'<br><br>';
 			   	  echo $row['Description'];
 			   }
 			  mysqli_close($conn);

 			  // echo $school;
 			  // echo '<i id="istyle" class="fa fa-edit" style="right:100px;position:absolute;color:black;font-size:17px" onclick="ifun()"></i>	
 			  //       <i id="istyle" class="fa fa-trash" style="right:60px;position:absolute;color:black;font-size:17px"></i>'.'<br>';
 			  // echo $degree.'  '.'in'.' '.$area.'<br>';
 			  // echo $datefrom.' '.'-'.' '.$dateto.'(Expected)'.'<br><br>';
 			 
 			  // echo $desc;
 			?>
 		</div> 
 		<script type="text/javascript">
			function displayfun()
			{
		         document.getElementById("info").style.display="block";
		    }
        </script>
 			<br>

 			<button onclick="document.getElementById('id01').style.display='block'" class="educationbtn" style="outline: none">Add Education <i class="fas fa-plus" style="margin-left:0px;color:green;font-size:16px"></i></button>

			<div id="id01" class="w3-modal">

			  <div class="w3-modal-content w3-animate-opacity w3-card-8">

			    <header class="w3-container " style="margin-top: -70px"> 

				      <span onclick="document.getElementById('id01').style.display='none'" 
				      class="w3-closebtn">&times;</span>

				      <h2 style="margin-left: 30px;margin-top: 10px">Add Education</h2>
				      <hr/>
			    </header>

			    <div class="w3-container" style="margin-left: 30px;margin-right: 30px">

					    
			    		<form method="POST" action="eductioninsert.php">
					      <h6><b>School</b></h6>
					      <input type="text" name="school" placeholder="Ex.Northwestern University" style="padding-left: 10px" />

					      <h6 style="margin-top: 30px"><b>Area Of study(optional)</b></h6>
					      <input type="text" name="area" placeholder="Ex.Computer Science" style="padding-left: 10px" />

					       <h6 style="margin-top: 30px"><b>Degree(optional)</b></h6>
					      <input type="text" name="degree" placeholder="Ex.Bachelor's" style="padding-left: 10px" />

					       <h6 style="margin-top: 30px"><b>Dates Attended(optional)</b></h6>
					          <div class="container" style="margin-top: -25px;margin-left: -30px">

						      
						      <div class="select-box">
						        <div class="options-container">
						          <div class="option">
						            <input
						              type="radio"
						              class="radio"
						              id="automobiles"
						              name="datefrom"
						              value="2021"
						            />
						            <label for="automobiles">2021</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="film" name="datefrom" value="2020" />
						            <label for="film">2020</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="science" name="datefrom" value="2019" />
						            <label for="science">2019</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="art" name="datefrom" value="2018"/>
						            <label for="art">2018</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="music" name="datefrom" value="2017"/>
						            <label for="music">2017</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="travel" name="datefrom" value="2016" />
						            <label for="travel">2015</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="sports" name="datefrom" value="2014"/>
						            <label for="sports">2014</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="news" name="datefrom" value="2013"/>
						            <label for="news">2013</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="tutorials" name="datefrom" value="2012"/>
						            <label for="tutorials">2012</label>
						          </div>
						        </div>

						        <div class="selected">
						          From
						        </div>

						        <div class="search-box">
						          <input type="text" placeholder="Start Typing..." />
						        </div>
						      </div>



						     <div class="select-box" style="margin-top: -53px;margin-left: 420px">
						        <div class="options-container">
						          <div class="option">
						            <input
						              type="radio"
						              class="radio"
						              id="youtube"
						              name="platform"
						              value="2028"
						            />
						            <label for="youtube">2028</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="facebook" name="platform" value="2027"/>
						            <label for="facebook">2027</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="vimeo" name="platform" value="2026" />
						            <label for="vimeo">2026</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="2025" name="platform" value="2025" />
						            <label for="2025">2025</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="2024" name="platform" value="2024" />
						            <label for="2024">2024</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="2023" name="platform" value="2023" />
						            <label for="2023">2023</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="2022" name="platform" value="2022" />
						            <label for="2022">2022</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="2021" name="platform" value="2021" />
						            <label for="2021">2021</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="2020" name="platform" value="2020" />
						            <label for="2020">2020</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="2019" name="platform" value="2019" />
						            <label for="2019">2019</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="2018" name="platform" value="2018" />
						            <label for="2018">2018</label>
						          </div>

						          <div class="option">
						            <input type="radio" class="radio" id="2017" name="platform" value="2017" />
						            <label for="2017">2017</label>
						          </div>
						        </div>

						        <div class="selected">
						         To (or expected graduation year)
						        </div>

						        <div class="search-box">
						          <input type="text" placeholder="Start Typing..." />
						        </div>
						      </div>

						        <div class="search-box">
						          <input type="text" placeholder="Start Typing..." />
						        </div>
						      </div>
						    

						    <script src="main.js"></script>
              
          			 		<h6 style="margin-top: -10px"><b>Descrption(optional)</b></h6>
			 				 <input type="text" name="desc" placeholder="Describe your studies,awards,etc." style="padding-left: 10px" />	
			    </div>
			    <footer class="w3-container" style="margin-bottom: 100px;padding-bottom: 50px;padding-top: 50px">
                       <input type="submit" name="save" class="nextbtn"  value="Save" style="margin-left: 390px" onclick="displayfun()">
			    </footer>
			     </form>
			  </div>
			</div>
        
			<?php
			   $myname=$_SESSION["myname"];
				$conn=mysqli_connect("localhost","root","","jobplacement");
				$sql="select *from education where name='$myname'";
				$result=mysqli_query($conn,$sql);
				while ($row=mysqli_fetch_array($result)) {
			?>
			<div id="id02" class="w3-modal">

			  <div class="w3-modal-content w3-animate-opacity w3-card-8">

			    <header class="w3-container " style="margin-top: -70px"> 

				      <span onclick="document.getElementById('id02').style.display='none'" 
				      class="w3-closebtn">&times;</span>

				      <h2 style="margin-left: 30px;margin-top: 10px">Add Education</h2>
				      <hr/>
			    </header>

			    <div class="w3-container" style="margin-left: 30px;margin-right: 30px">

					    
			    		<form method="POST" action="editeducation.php">
					      <h6><b>School</b></h6>
					      <input type="text" name="editschool" placeholder="Ex.Northwestern University" style="padding-left: 10px"  value="<?php echo $row['school'];?>"/>

					      <h6 style="margin-top: 30px"><b>Area Of study(optional)</b></h6>
					      <input type="text" name="editarea" placeholder="Ex.Computer Science" style="padding-left: 10px" value="<?php echo $row['areaofstudy'];?>"/>

					       <h6 style="margin-top: 30px"><b>Degree(optional)</b></h6>
					      <input type="text" name="editdegree" placeholder="Ex.Bachelor's" style="padding-left: 10px"  value="<?php echo $row['Deg'];?>"/>

					       <h6 style="margin-top: 30px"><b>Dates Attended(optional)</b></h6>
					        <input type="text" name="editdatefrom" placeholder="Ex.Bachelor's" style="padding-left: 10px;width: 46%;float: left"  value="<?php echo $row['datefrom'];?>"/>
					         <input type="text" name="editdateto" placeholder="Ex.Bachelor's" style="padding-left: 10px;width: 47%;margin-left: 50px"  value="<?php echo $row['dateto'];?>"/>
					      

						    <script src="main.js"></script>
              
          			 		<h6 style="margin-top: 30px"><b>Descrption(optional)</b></h6>
			 				 <input type="text" name="editdesc" placeholder="Describe your studies,awards,etc." style="padding-left: 10px"  value="<?php echo $row['Description'];?>" />	
			    </div>
			    <footer class="w3-container" style="margin-bottom: 100px;padding-bottom: 50px;padding-top: 50px">
                       <input type="submit" name="save" class="nextbtn"  value="Save" style="margin-left: 390px">
			    </footer>
			     </form>
			  </div>
			</div>
        
				<?php
			       }
			       mysqli_close($conn);
				?>
			
			
			
		  
        
		    <hr style="position: absolute;top:250px"/>
             <div class="lastcontainer">
            <form>
                <button name="Back" class="backbtn" value="Back" >Back</button>
                <input type="submit" name="Next" class="nextbtn" value="Next" formaction="employment.php" >
            </form>
             </div>    
                 
           
        
       
		   
				  
        
	
     </div>		

		  
		  
		  
		  
		  
		  


 
   
 





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