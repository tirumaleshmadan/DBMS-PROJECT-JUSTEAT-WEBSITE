<?php
include('db.php');
session_start();

if(isset($_POST["submit1"]))
 {
       $_SESSION["getitem"]="veg maharaja";
       header("Location:order.php");
}
if(isset($_POST["submit2"]))
{      
       $_SESSION["getitem"]="paneer burger";
       header("Location:order.php");                                         
}
if(isset($_POST["submit3"]))
{
       $_SESSION["getitem"]="american cheese supreme veg";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit4"]))
{
       $_SESSION["getitem"]="veggie burger";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit5"]))
{
       $_SESSION["getitem"]="mexican aloo tikka burger";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit6"]))
{
       $_SESSION["getitem"]="chicken maharaja";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit7"]))
{
       $_SESSION["getitem"]="chicken burger";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit8"]))
{
       $_SESSION["getitem"]="filet-o-fish burger";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit9"]))
{
       $_SESSION["getitem"]="american cheese supreme chicken";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit10"]))
{
       $_SESSION["getitem"]="egg burger";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit11"]))
{
       $_SESSION["getitem"]="big spicy chicken wrap";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit12"]))
{
       $_SESSION["getitem"]="mexican aloo wrap";
       header("Location:order.php");                                                           
}
?>
<html>
	<head>
		<title>TIFFINS</title>
		<link href="css/Burgers.css" rel="stylesheet"/>
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
                           <a href="Burgers.php"><li class="highlight">Burgers</li></a>
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
                                                 <p>veg maharaja</p>
                                                 <img src="img/burger/veg maharaja.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit1" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>paneer burger</p>
                                                 <img src="img/burger/paneer burger.gif" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit2" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>american cheese supreme veg</p>
                                                 <img src="img/burger/american cheese supreme veg.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit3" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>veggie burger</p>
                                                 <img src="img/burger/veggie burger.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit4" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>mexican aloo tikka burger</p>
                                                 <img src="img/burger/mexican aloo tikka burger.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit5" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>chicken maharaja</p>
                                                 <img src="img/burger/chicken maharaja.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit6" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>chicken burger</p>
                                                 <img src="img/burger/chicken burger.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit7" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>filet-o-fish burger</p>
                                                 <img src="img/burger/filet-o-fish burger.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit8" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>american cheese supreme chicken</p>
                                                 <img src="img/burger/american cheese supreme chicken.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit9" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>egg burger</p>
                                                 <img src="img/burger/egg burger.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit10" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>big spicy chicken wrap</p>
                                                 <img src="img/burger/big spicy chicken wrap.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit11" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>mexican aloo wrap</p>
                                                 <img src="img/burger/mexican aloo wrap.jpg" />
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