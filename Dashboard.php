<?php
include('db.php');
session_start();
?>
<html>
	<head>
		<title>Dashboard</title>
		<link href="css/Dashboard.css" rel="stylesheet"/>
              <?php
              $forname=$_SESSION['welcome'];
              $extract=mysqli_query($my,"select * from users where email='$forname'");
              $name=mysqli_fetch_assoc($extract);
              $welcome=$name["firstname"];
              ?>
              <embed src="song.mp3" autostart="true" loop="true" width="0" height="0">
	</head>
	<body>
              <div class="slider">
                     <p>DISHES</p>
                     <ul>
                           <a href="Breakfast.php"><li>Breakfast</li></a>
                           <a href="Appetizers.php"><li>Appetizers</li></a>
                           <a href="Soups.php"><li>Soups</li></a>
                           <a href="Biryanis.php"><li>Biryanis</li></a>
                           <a href="Pizzas.php"><li>pizzas</li></a>
                           <a href="Burgers.php"><li>Burgers</li></a>
                           <a href="Fastfoods.php"><li>Fastfoods</li></a>
                           <a href="Desserts.php"><li>Desserts</li></a>
                           <a href="Snacks.php"><li>Snacks</li></a>
                           <a href="Milkshakes.php"><li>Milkshakes</li></a>
                     </ul>
              </div>
              <div class="menu">
		       <div class="header">
                         <div class="upper">
                             <label class=welcome><?php echo "Welcome $welcome"; ?></label>
                         </div>
                         <a href="Dashboard.php"><button class="dash" type=submit>DASHBOARD</button></a>
                         <ul>
                         <li><a href="location.php"><button class="location" type=submit><img src="img/location.jpg" width=100% /></button></a></li>
                         <li><a href="cart.php"><button class="cart" type=submit><img src="img/cart.png" width=100% /></button></a></li>
                         <li><a href="login.php"><button class="out" type=submit>Sign out</button></a></li>
                         </ul>
	              	</div>
                     <div class="menuitems">
                         <img src="img/dashboard_background.jpg" />
                         <div class="background">
                    
                         </div>
                         <div class="scrolltext">
                                   <p>TODAY'S SPECIALS</p>
                         </div>
                         <div class="scroll">
                                   <marquee onmouseover="this.stop();" onmouseout="this.start();">
                                                 <a href="Breakfast.php"><li><img src="img/breakfast/salad.jpg"/></li></a>
                                                 <a href="Breakfast.php"><li><img src="img/breakfast/pancake.png"/></li></a>
                                                 <a href="Biryanis.php"><li><img src="img/biryani/almond biryani.jpg"/></li></a>
                                                 <a href="Appetizer.php"><li><img src="img/appetizer/veg frankie.jpg"/></li></a>
                                   </marquee>
                                   <marquee direction=right onmouseover="this.stop();" onmouseout="this.start();"></a>
                                                 <a href="Appetizer.php"><li><img src="img/appetizer/loose prawns.jpg"/></li></a>
                                                 <a href="Appetizer.php"><li><img src="img/appetizer/paneer tikka.jpg"/></li></a>
                                                 <a href="Breakfast.php"><li><img src="img/breakfast/dosa.jpg"/></li></a>
                                                 <a href="Biryanis.php"><li><img src="img/biryani/korma biryani.jpg"/></li></a>
                                   </marquee>
                                   <marquee onmouseover="this.stop();" onmouseout="this.start();"></a>
                                                 <a href="Biryanis.php"><li><img src="img/biryani/vegetable biryani.jpg"/></li></a>
                                                 <a href="Appetizer.php"><li><img src="img/appetizer/chilly chicken.jpg"/></li></a>
                                                 <a href="Breakfast.php"><li><img src="img/breakfast/poori.png"/></li></a>
                                                 <a href="Breakfast.php"><li><img src="img/breakfast/masala dosa.jpg"/></li></a>
                                   </marquee>
                         </div>
                     </div>
              </div>
	</body>
</html>