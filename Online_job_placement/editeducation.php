 <?php
 			 session_start();
 			  $school=$_POST['editschool'];
 			  $area=$_POST['editarea'];
 			  
 			  $datefrom=$_POST['editdatefrom'];
 			  $dateto=$_POST['editdateto'];
 			  $desc=$_POST['editdesc'];
 			  $myname=$_SESSION["myname"];
 			  echo $myname;
 			  $conn=mysqli_connect("localhost","root","","jobplacement");
 			  if(!$conn){
 			  	echo "not connected";
 			  }
 			  else{
 			  	echo "connected";
 			  }
 			 $degree= mysqli_real_escape_string($conn , $_REQUEST['editdegree']);
 			  $sql="UPDATE education SET school='$school',areaofstudy='$area',Deg='$degree',datefrom='$datefrom',dateto='$dateto',Description='$desc' WHERE name='$myname'";
 			 
 			  $result=mysqli_query($conn,$sql);
 			  if($result){
 			  	echo "yes";
 			  }
 			  // else{
 			  // 	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
 			  // }
 			  mysqli_close($conn);
 			   echo "<script>location.href='education.php'</script>";

 			  // echo $school;
 			  // echo '<i id="istyle" class="fa fa-edit" style="right:100px;position:absolute;color:black;font-size:17px" onclick="ifun()"></i>	
 			  //       <i id="istyle" class="fa fa-trash" style="right:60px;position:absolute;color:black;font-size:17px"></i>'.'<br>';
 			  // echo $degree.'  '.'in'.' '.$area.'<br>';
 			  // echo $datefrom.' '.'-'.' '.$dateto.'(Expected)'.'<br><br>';
 			 
 			  // echo $desc;
 			?>