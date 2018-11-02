<?php
include('db.php');
session_start();

if(isset($_POST["submit1"]))
 {
       $_SESSION["getitem"]="almond biryani";
       header("Location:order.php");
}
if(isset($_POST["submit2"]))
{      
       $_SESSION["getitem"]="special chicken biryani";
       header("Location:order.php");                                         
}
if(isset($_POST["submit3"]))
{
       $_SESSION["getitem"]="chicken dum biryani";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit4"]))
{
       $_SESSION["getitem"]="chicken tandoori biryani";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit5"]))
{
       $_SESSION["getitem"]="kabuli chana biryani";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit6"]))
{
       $_SESSION["getitem"]="korma biryani";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit7"]))
{
       $_SESSION["getitem"]="layered bread kofta biryani";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit8"]))
{
       $_SESSION["getitem"]="masoor and tomato biryani";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit9"]))
{
       $_SESSION["getitem"]="mughalai biryani";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit10"]))
{
       $_SESSION["getitem"]="mutton keema biryani";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit11"]))
{
       $_SESSION["getitem"]="paneer mutter biryani";
       header("Location:order.php");                                                           
}
if(isset($_POST["submit12"]))
{
       $_SESSION["getitem"]="prawn biryani";
       header("Location:order.php");                                                           
}
?>
<html>
	<head>
		<title>TIFFINS</title>
		<link href="css/Biryanis.css" rel="stylesheet"/>
	</head>
	<body>
              <div class="slider">
                     <p>DISHES</p>
                     <ul>
                           <a href="Breakfast.php"><li class="nonhighlight">Breakfast</li></a>
                           <a href="Appetizers.php"><li class="nonhighlight">Appetizers</li></a>
                           <a href="Soups.php"><li class="nonhighlight">Soups</li></a>
                           <a href="Biryanis.php"><li class="highlight">Biryanis</li></a>
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
                                                 <p>almond biryani</p>
                                                 <img src="img/biryani/almond biryani.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit1" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>special chicken biryani</p>
                                                 <img src="img/biryani/special chicken biryani.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit2" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>chicken dum biryani</p>
                                                 <img src="img/biryani/chicken dum biryani.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit3" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>chicken tandoori biryani</p>
                                                 <img src="img/biryani/chicken tandoori biryani.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit4" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>kabuli chana biryani</p>
                                                 <img src="img/biryani/kabuli chana biryani.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit5" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>korma biryani</p>
                                                 <img src="img/biryani/korma biryani.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit6" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>layered bread kofta biryani</p>
                                                 <img src="img/biryani/layered bread kofta biryani.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit7" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>masoor and tomato biryani</p>
                                                 <img src="img/biryani/masoor and tomato biryani.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit8" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>mughalai biryani</p>
                                                 <img src="img/biryani/mughalai biryani.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit9" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>mutton keema biryani</p>
                                                 <img src="img/biryani/mutton keema biryani.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit10" value=order />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>paneer mutter biryani</p>
                                                 <img src="img/biryani/paneer mutter biryani.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit11" value=order />
                                                 </form>
                                       </li>
                                        <li>
                                                 <p>prawn biryani</p>
                                                 <img src="img/biryani/prawn biryani.jpg" />
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