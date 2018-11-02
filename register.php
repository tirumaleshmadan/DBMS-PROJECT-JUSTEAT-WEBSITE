<?php
include("db.php");
session_start();
?>
<html>
	<head>
		<title>REGISTER</title>
		<link href="css/register.css" rel="stylesheet"/>
	</head>

	<body>
		<div class="image">
			<img src="img/register_back.jpg" width=100% height=100% opacity=0.8 filter=alpha(opacity(100))/>
			<div class="register">
				<p class="heading">Create an account</p>
				<form method="post">
					<input class="box" name="firstname"  type=username  placeholder="    firstname*" required /></br>
					<input class="box" name="lastname" type=username placeholder="    lastname" required /></br>
					<input class="box" name="email" type=email placeholder="    email*" required /></br>
					<input class="box" name="password" type=password placeholder="    password" required /></br>
					<p class="sel">GENDER :</p>
                                   <select class="gender" name="gender">
                                                 <option>--SELECT--</option>
                                                 <option>MALE</option>
                                                 <option>FEMALE</option>
                                                 <option>OTHER</option>
                                   </select>
					<input class="submit" name="submit" type=submit value=REGISTER  /></br>
				</form>
                            <?php
                                   if(isset($_POST["submit"]))
                                   {
                                          $firstname=$_POST["firstname"];
                                          $lastname=$_POST["lastname"];
                                          $email=$_POST["email"];
                                          $_SESSION['welcome']=$email;
                                          $password=$_POST["password"];
                                          $gender=$_POST['gender'];
                                          $check=mysqli_query($my,"select * from users where email='$email'");
                                          $num=mysqli_num_rows($check);
                                          if($num==0)
                                          {
                                          mysqli_query($my,"insert into users(firstname,lastname,email,pass,gender) value('$firstname','$lastname','$email','$password','$gender')");
                                          ?>
                                          <embed src="tone.mp3" autostart="true" loop="false" width="0" height="0">
                                          <div class="error">
                                                     <div class="up">
                                                     <p>Message from webpage</p>
                                                     </div>
                                                     <div class="message">
                                                               <img src="img/tick.png" width=40px height=40px/>
                                                               <p>SUCCESSFULLY REGISTERED KEEP YOU LOGGED IN</p>
                                                     </div>
                                                      <div class="down">
                                                               <a class="bt1" href="dashboard.php"><button type="submit">YES</button></a>
                                                               <a class="bt2" href="login.php"><button type="submit">NO</button></a>
                                                      </div>
                                                 </div>
                                                 <?php
                                          }
                                          else
                                          {
                                          ?>
                                          <embed src="tone.mp3" autostart="true" loop="false" width="0" height="0">
                                                 <div class="error">
                                                     <div class="up">
                                                     <p>Message from webpage</p>
                                                     <a href="register.php"><button type="submit">x</button></a>
                                                     </div>
                                                     <div class="message">
                                                               <img src="img/noti.jpg" width=40px height=40px/>
                                                               <p>EMAIL IS ALREADY IN USE , USE ANOTHER ONE</p>
                                                     </div>
                                                      <div class="down">
                                                               <a href="register.php"><button type="submit">OK</button></a>
                                                      </div>
                                                 </div>
                                                 <?php
                                          }
                                   }
                            ?>
			</div>
		</div>
	</body>
</html>
