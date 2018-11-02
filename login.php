<?php
include('db.php'); 
session_start();
?>

<html>
       <head>
           <title>REGISTRATION</title>
           <link href="css/login.css" rel="stylesheet"/>
       </head>
       
       <body>
           <div class="header">
             <img src="img/login.jpg" width=100% height=100% />
             <img class="tag" src="img/maintag.jpg" />
              <div class="background">
              </div>
              <div class="login">
                   <p class="logintext">Login to your account</p></br>
                   <form action="login.php" method="post" >
                            <input class="email" name="email" type=email placeholder="    EMAIL" required ></br>
                            <input class="password"  name="password" type=password placeholder="    PASSWORD" required ></br>
                            <input class="submit" type=submit name="submit" value="Sign in" />
                   </form>
                   <div  class="linkregister">
                   <a href="register.php">Don't have an account ? Sign up</a>
                   </div>
              </div>
              <div>
                     <img class="userlogo" src="img/user.png">
                     <img class="locklogo" src="img/lock1.jpg">
              </div>
              <?php
                        if(isset($_POST["submit"]))
                        {
                            $email=$_POST['email'];
                            $password=$_POST['password'];
                            $_SESSION['welcome']=$email;
                            $check=mysqli_query($my,"select * from users where email='$email' and pass='$password'");
                            $num=mysqli_num_rows($check);
                            if($num==0)
                            {
                                  ?>
                                  <embed src="tone.mp3" autostart="true" loop="false" width="0" height="0">
                                   <div class="error">
                                               <div class="up">
                                                     <p>Message from webpage</p>
                                                     <a href="login.php"><button type="submit">x</button></a>
                                               </div>
                                               <div class="message">
                                                        <img src="img/noti.jpg" width=40px height=40px/>
                                                        <p>INVALID LOGIN OR PASSWORD. PLEASE TRY AGAIN</p>
                                               </div>
                                               <div class="down">
                                                 <a href="login.php"><button type="submit">OK</button></a>
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
                                                 <a href="dashboard.php"><button type="submit">x</button></a>
                                          </div>
                                          <div class="message">
                                                 <img src="img/tick.png" width=40px height=40px/>
                                                 <p>WOULD YOU LIKE TO SAVE YOUR PASSWORD</p>
                                          </div>
                                          <div class="down">
                                                        <a class="bt1" href="dashboard.php"><button type="submit">SAVE</button></a>
                                                        <a class="bt2" href="dashboard.php"><button type="submit">NO</button></a>
                                          </div>
                                   </div>
                            <?php
                            }
                       }
                   ?>  
           </div>
       
       
       </body>
</html>