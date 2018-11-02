<?php
include('db.php');
session_start();

if(isset($_POST["submit1"]))
 {
       $_SESSION["getitem"]="bread omlete";
       header("Location:order.php");
}
if(isset($_POST["submit2"]))
{      
       $_SESSION["getitem"]="dosa";
       header("Location:order.php");                                         
}
if(isset($_POST["submit3"]))
{
       $_SESSION["getitem"]="french toast";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit4"]))
{
       $_SESSION["getitem"]="idly";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit5"]))
{
       $_SESSION["getitem"]="masala dosa";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit6"]))
{
       $_SESSION["getitem"]="pancake";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit7"]))
{
       $_SESSION["getitem"]="poori";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit8"]))
{
       $_SESSION["getitem"]="salad";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit9"]))
{
       $_SESSION["getitem"]="sambar idly";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit10"]))
{
       $_SESSION["getitem"]="uthappam";
       header("Location:order.php");                                                           
}
?>
<html>
	<head>
		<title>TIFFINS</title>
		<link href="css/Breakfast.css" rel="stylesheet"/>
	</head>
	<body>
              <div class="slider">
                     <p>DISHES</p>
                     <ul>
                           <a href="Breakfast.php"><li class="highlight">Breakfast</li></a>
                           <a href="Appetizers.php"><li class="nonhighlight">Appetizers</li></a>
                           <a href="Soups.php"><li class="nonhighlight">Soups</li></a>
                           <a href="Biryanis.php"><li class="nonhighlight">Biryanis</li></a>
                           <a href="Pizzas.php"><li class="nonhighlight">pizzas</li></a>
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
                                                 <p>bread omlete</p>
                                                 <img src="img/breakfast/bread omlete.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit1" value=order />
                                                 </form>    
                                       </li>
                                       <li>
                                                 <p>dosa</p>
                                                 <img src="img/breakfast/dosa.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit2" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>french toast</p>
                                                 <img src="img/breakfast/french toast.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit3" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>idly</p>
                                                 <img src="img/breakfast/idly.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit4" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>masala dosa</p>
                                                 <img src="img/breakfast/masala dosa.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit5" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>pancake</p>
                                                 <img src="img/breakfast/pancake.png" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit6" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>poori</p>
                                                 <img src="img/breakfast/poori.png" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit7" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>salad</p>
                                                 <img src="img/breakfast/salad.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit8" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>sambar idly</p>
                                                 <img src="img/breakfast/sambar idly.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit9" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>uthappam</p>
                                                 <img src="img/breakfast/uthappam.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit10" value=order />
                                                 </form>
                                       </li>
                                       <!--<li>
                                                 <p>idli</p>
                                                 <img src="img/8.jpg" />
                                                 <button>order</button>
                                       </li>-->
                                   </ul>
                         </div>
                     </div>
              </div>
	</body>
</html>