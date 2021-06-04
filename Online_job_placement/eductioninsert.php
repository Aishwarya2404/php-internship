 <?php
 			 session_start();
 			  $school=$_POST['school'];
 			  $area=$_POST['area'];
 			  
 			  $datefrom=$_POST['datefrom'];
 			  $dateto=$_POST['platform'];
 			  $desc=$_POST['desc'];
 			  $myname=$_SESSION["myname"];
 			  $conn=mysqli_connect("localhost","root","","jobplacement");
 			  if(!$conn){
 			  	echo "not connected";
 			  }
 			  // else{
 			  // 	echo "connected";
 			  // }
 			  $degree= mysqli_real_escape_string($conn , $_REQUEST['degree']);
 			  
 			  $sql="INSERT INTO education (school,areaofstudy,Description,Deg,datefrom,dateto,name) VALUES ('$school','$area','$desc','$degree','$datefrom','$dateto','$myname')";
 			  $result=mysqli_query($conn,$sql);
 			  if($result){
 			  	echo "yes";
 			  }
 			  // else{
 			  // 	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
 			  // }
 			  mysqli_close($conn);
 			  echo "<script>location.href='education.php'</script>";

 			  echo $school;
 			  echo '<i id="istyle" class="fa fa-edit" style="right:100px;position:absolute;color:black;font-size:17px" onclick="ifun()"></i>	
 			        <i id="istyle" class="fa fa-trash" style="right:60px;position:absolute;color:black;font-size:17px"></i>'.'<br>';
 			  echo $degree.'  '.'in'.' '.$area.'<br>';
 			  echo $datefrom.' '.'-'.' '.$dateto.'(Expected)'.'<br><br>';
 			 
 			  echo $desc;
 			?>