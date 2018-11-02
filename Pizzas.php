<?php
include('db.php');
session_start();

if(isset($_POST["submit1"]))
 {
       $_SESSION["getitem"]="5 pepper";
       header("Location:order.php");
}
if(isset($_POST["submit2"]))
{      
       $_SESSION["getitem"]="vegextravaganza";
       header("Location:order.php");                                         
}
if(isset($_POST["submit3"]))
{
       $_SESSION["getitem"]="veggie paradise";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit4"]))
{
       $_SESSION["getitem"]="mexican green wave";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit5"]))
{
       $_SESSION["getitem"]="cheese n corn";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit6"]))
{
       $_SESSION["getitem"]="peppy paneer";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit7"]))
{
       $_SESSION["getitem"]="chicken dominator";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit8"]))
{
       $_SESSION["getitem"]="chicken pepperoni ";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit9"]))
{
       $_SESSION["getitem"]="non veg supreme";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit10"]))
{
       $_SESSION["getitem"]="chicken fiesta";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit11"]))
{
       $_SESSION["getitem"]="chicken golden delight";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit12"]))
{
       $_SESSION["getitem"]="pepper barbeque chicken";
       header("Location:order.php");                                                           
}
?>
<html>
	<head>
		<title>TIFFINS</title>
		<link href="css/Pizzas.css" rel="stylesheet"/>
	</head>
	<body>
              <div class="slider">
                     <p>DISHES</p>
                     <ul>
                           <a href="Breakfast.php"><li class="nonhighlight">Breakfast</li></a>
                           <a href="Appetizers.php"><li class="nonhighlight">Appetizers</li></a>
                           <a href="Soups.php"><li class="nonhighlight">Soups</li></a>
                           <a href="Biryanis.php"><li class="nonhighlight">Biryanis</li></a>
                           <a href="Pizzas.php"><li class="highlight">pizzas</li></a>
                           <a href="Burgers.php"><li class="nonhighlight">Burgers</li></a>
                           <a href="Fastfoods.php"><li class="nonhighlight">Fastfoods</li></a>
                           <a href="Desserts.php"><li class="nonhighlight">Desserts</li></a>
                           <a href="Snacks.php"><li class="nonhighlight">Snacks</li></a>
                           <a href="Milkshakes.php"><li class="nonhighlight">Milkshakes</li></a>
                     </ul>
              </div>
              <div class="menu">
		       <div class="header">
                        <a href="Dashboard.php"><button class="dash" type=submit>DASHBOARD</button></a>
                         <a href="location.php"><button class="location" type=submit><img src="img/location.jpg" width=100% /></button></a>
                          <a href="cart.php"><button class="cart" type=submit><img src="img/cart.png" width=100% /></button></a>
                         <a href="login.php"><button class="out" type=submit>Sign out</button></a>
	              	</div>
                     <div class="menuitems">
                         <img src="img/dashboard_background.jpg" />
                          <div class="background">
                          
                          </div>
                         <div class="front">
                                   <ul>
                                       <li>
                                                 <p>5 pepper</p>
                                                 <img src="img/pizza/5 pepper.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit1" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>vegextravaganza</p>
                                                 <img src="img/pizza/vegextravaganza.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit2" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>veggie paradise</p>
                                                 <img src="img/pizza/veggie paradise.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit3" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>mexican green wave</p>
                                                 <img src="img/pizza/mexican green wave.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit4" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>cheese n corn</p>
                                                 <img src="img/pizza/cheese n corn.png" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit5" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>peppy paneer</p>
                                                 <img src="img/pizza/peppy paneer.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit6" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>chicken dominator</p>
                                                 <img src="img/pizza/chicken dominator.gif" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit7" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>chicken pepperoni</p>
                                                 <img src="img/pizza/chicken pepperoni.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit8" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>non veg supreme</p>
                                                 <img src="img/pizza/non veg supreme.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit9" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>chicken fiesta</p>
                                                 <img src="img/pizza/chicken fiesta.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit10" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>chicken golden delight</p>
                                                 <img src="img/pizza/chicken golden delight.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit11" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>pepper barbeque chicken</p>
                                                 <img src="img/pizza/pepper barbeque chicken.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit12" value=order />
                                                 </form>
                                       </li>
                                   </ul>
                         </div>
                     </div>
              </div>
	</body>
</html>