<?php
include('db.php');
session_start();

if(isset($_POST["submit1"]))
 {
       $_SESSION["getitem"]="apollo fish";
       header("Location:order.php");
}
if(isset($_POST["submit2"]))
{      
       $_SESSION["getitem"]="chicken lollipop";
       header("Location:order.php");                                         
}
if(isset($_POST["submit3"]))
{
       $_SESSION["getitem"]="chicken wings";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit4"]))
{
       $_SESSION["getitem"]="chilly chicken";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit5"]))
{
       $_SESSION["getitem"]="crispy nuggets";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit6"]))
{
       $_SESSION["getitem"]="french fries";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit7"]))
{
       $_SESSION["getitem"]="kalmi kabab";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit8"]))
{
       $_SESSION["getitem"]="loose prawns";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit9"]))
{
       $_SESSION["getitem"]="mutton sheekh";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit10"]))
{
       $_SESSION["getitem"]="panner tikka";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit11"]))
{
       $_SESSION["getitem"]="veg frankie";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit12"]))
{
       $_SESSION["getitem"]="veg manchuria";
       header("Location:order.php");                                                           
}
?>
<html>
	<head>
		<title>TIFFINS</title>
		<link href="css/Milkshakes.css" rel="stylesheet"/>
	</head>
	<body>
              <div class="slider">
                     <p>DISHES</p>
                     <ul>
                           <a href="Breakfast.php"><li class="nonhighlight">Breakfast</li></a>
                           <a href="Appetizers.php"><li class="nonhighlight">Appetizers</li></a>
                           <a href="Soups.php"><li class="nonhighlight">Soups</li></a>
                           <a href="Biryanis.php"><li class="nonhighlight">Biryanis</li></a>
                           <a href="Pizzas.php"><li class="nonhighlight">pizzas</li></a>
                           <a href="Burgers.php"><li class="nonhighlight">Burgers</li></a>
                           <a href="Fastfoods.php"><li class="nonhighlight">Fastfoods</li></a>
                           <a href="Desserts.php"><li class="nonhighlight">Desserts</li></a>
                           <a href="Snacks.php"><li class="nonhighlight">Snacks</li></a>
                           <a href="Milkshakes.php"><li class="highlight">Milkshakes</li></a>
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
                                                 <p>apollo fish</p>
                                                 <img src="img/appetizer/apollo fish.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit1" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>chicken lollipop</p>
                                                 <img src="img/appetizer/chicken lollipop.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit2" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>chicken wings</p>
                                                 <img src="img/appetizer/chicken wings.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit3" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>chilly chicken</p>
                                                 <img src="img/appetizer/chilly chicken.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit4" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>crispy nuggets</p>
                                                 <img src="img/appetizer/crispy nuggets.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit5" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>french fries</p>
                                                 <img src="img/appetizer/french fries.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit6" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>kalmi kabab</p>
                                                 <img src="img/appetizer/kalmi kabab.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit7" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>loose prawns</p>
                                                 <img src="img/appetizer/loose prawns.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit8" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>mutton sheekh kabab</p>
                                                 <img src="img/appetizer/mutton sheekh.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit9" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>paneer tikka</p>
                                                 <img src="img/appetizer/paneer tikka.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit10" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>veg frankie</p>
                                                 <img src="img/appetizer/veg frankie.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit11" value=order />
                                                 </form>
                                       </li>
                                        <li>
                                                 <p>veg manchuria</p>
                                                 <img src="img/appetizer/veg manchuria.jpg" />
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