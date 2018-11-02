<?php
include("db.php");
session_start();
?>
<html>
	<head>
		<title>LOCATION</title>
		<link href="css/location.css" rel="stylesheet"/>
              <script>
                     function myFunction() 
                     {
                         var x = document.getElementById("snackbar");
                         x.className = "show";
                         setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                     }
              </script>
              <?php
                     $getlocation=$_SESSION['welcome'];
                     $answer=mysqli_query($my,"select * from location where email='$getlocation'");
                     $getrow=mysqli_fetch_assoc($answer);
                     $variable1=$getrow["doorno"];
                     $variable2=$getrow["street"];
                     $variable3=$getrow["city"];
                     $variable4=$getrow["pincode"];
                     $variable5=$getrow["district"];
                     $variable6=$getrow["state"];
                     $variable7=$getrow["phone"];
                      if(isset($_POST["update"]))
                                   {
                                          $variable1=$_POST["Door-No"];
                                          $variable2=$_POST["street"];
                                          $variable3=$_POST["city"];
                                          $variable4=$_POST["pincode"];
                                          $variable5=$_POST["district"];
                                          $variable6=$_POST["state"];
                                          $variable7=$_POST["phone"];
                                          if(mysqli_query($my,"update location set doorno='$variable1',street='$variable2',city='$variable3',pincode='$variable4',district='$variable5',state='$variable6',phone='$variable7' where email='$getlocation'"))
                                          {
                                                 ?>
                                                     <script>myFunction();</script>
                                                 <?php
                                          }
                                   }
              ?>
	</head>

	<body>
              <div id="snackbar">Location updated successfully.....</div>
		<div class="image">
			<img src="img/location_back.jpg" width=100% height=100% opacity=0.8 filter=alpha(opacity(100))/>
                     <div class="menu">
                         <div class="header">
                           <a href="Dashboard.php"><button class="dash" type=submit>DASHBOARD</button></a>
                           <a href="cart.php"><button class="cart" type=submit><img src="img/cart.png" width=100% /></button></a>
                           <a href="login.php"><button class="out" type=submit>Sign out</button></a>
	              	    </div>
                     </div>
			<div class="register">
				<p class="heading">Update / Save Your Location</p>
				           <form method="post">
                                       <ul>
                                       <li class="hi">
                                                 <ul>
                                                     <li><p class="text">Door-no*</p></li>
                                                     <li><p class="text">Street name*</p></li>
                                                     <li><p class="text">City*</p></li>
                                                     <li><p class="text">Pincode*</p></li>
                                                     <li><p class="text">District*</p></li>
                                                     <li><p class="text">State*</p></li>
                                                     <li><p class="text">Phone number*</p></li>
                                                 </ul>
					              
                                       </li>  
                                       <li>
                                                 <ul>
                                                     <li><input class="box" name="Door-No"  type=text value=<?php echo $variable1; ?> ></li>
					                  <li><input class="box" name="street" type=text value=<?php echo $variable2; ?> ></li>
					                  <li><input class="box" name="city" type=text value=<?php echo $variable3; ?> ></li>
                                                     <li><input class="box" name="pincode" type=text value=<?php echo $variable4; ?> ></li>
                                                     <li><input class="box" name="district" type=text value=<?php echo $variable5; ?>  ></li>
                                                     <li><input class="box" name="state" type=text value=<?php echo $variable6; ?> ></li>
                                                     <li><input class="box" name="phone" type=text value=<?php echo $variable7; ?> ></li>
                                                     <li><input class="submit" name="update" type=submit value=UPDATE/SAVE /></li>
                                                 </ul>
                                       </li>
                                   </ul>
					
				</form>
			</div>
		</div>
	</body>
</html>
