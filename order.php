<?php
include('db.php');
session_start();
if(isset($_POST['submit']))
{
       $_SESSION['quant']=$_POST["product"];
       if($_POST['product']!=0)
       {
              header("Location:payment.php");
       }
}  
?>
<html>
       <head>
           <title>YOUR ORDER</title>
           <link href="css/order.css" rel="stylesheet">
           <?php
                     $email=$_SESSION['welcome'];
                     $item=$_SESSION["getitem"];
                     $result=mysqli_query($my,"select * from items where name='$item'");
                     $row=mysqli_fetch_assoc($result);
                     $_SESSION['order']=$row;
                     $name=$row['name'];
                     $desc=$row['description'];
                     $image=$row['image'];
                     $usersrated=$row['rated_members'];
                     $rating=$row['total_rating'];
                     $price=$row['price'];
                     $time=$row['delivery_time'];
                     $type=$row['type'];
                     $top=mysqli_query($my,"SELECT * FROM items WHERE type='$type' and name!='$name' ORDER BY total_rating desc LIMIT 2;");
                     $first=mysqli_fetch_assoc($top);
                     $firstname=$first['name'];
                     $firsttype=$first['type'];
                     $firstimage=$first['image'];  
                     $firstusersrated=$first['rated_members'];
                     $firstrate=$first['total_rating'];
                       
                     $second=mysqli_fetch_assoc($top);
                     $secondname=$second['name'];
                     $secondtype=$second['type'];
                     $secondimage=$second['image'];  
                     $secondusersrated=$first['rated_members'];
                     
                     $secondrate=$second['total_rating'];   
                     if(isset($_POST["submit1"]))
                     {
                         $_SESSION["getitem"]=$firstname;
                         header("Location:order.php");
                     }
                     else if(isset($_POST["submit2"]))
                     {      
                          $_SESSION["getitem"]=$secondname;
                           header("Location:order.php");                                         
                     } 
                     
                     $heart=mysqli_query($my,"select * from favour where email='$email' and item='$name'");
                     $countheart=mysqli_num_rows($heart);
                     if($countheart==1)
                     {
                            $updateheart="checked";                             
                     }      
                     else
                     {
                            $updateheart="unchecked"; 
                     }
                     if(isset($_POST["favour"]))
                     {
                           if(empty($_POST['heart']))
                           {
                                   $sub=mysqli_query($my,"select * from favour where email='$email' and item='$name'");
                                   $countsub=mysqli_num_rows($sub);
                                   if($countsub==1)
                                   {
                                          $delete=mysqli_query($my,"delete from favour where email='$email' and item='$name'");
                                   }
                                   header("Location:order.php");
                           }
                           else
                           {
                                   $add=mysqli_query($my,"select * from favour where email='$email' and item='$name'");
                                   $countadd=mysqli_num_rows($add);
                                   if($countadd==0)
                                   {
                                         $insert=mysqli_query($my,"insert into favour values('$email','$item')");
                                   }
                                   header("Location:order.php");
                           }
                     }   
           ?>
            <script type="text/javascript">
                         var extra=<?php echo $price; ?>;
                         function increment()
                         {
                                var value=parseInt(document.getElementById('number').value,10);
                                if(value<10)
                                {
                                       value++;
                                }
                                document.getElementById('number').value=value;
                                document.getElementById('cost').value=value*extra;
                                document.getElementById('totalcost').value=value*extra;
                         }
                         function decrement()
                         {
                                var value=parseInt(document.getElementById('number').value,10);
                                if(value>0)
                                {
                                       value--;
                                }
                                document.getElementById('number').value=value;
                                document.getElementById('cost').value=value*extra;
                                document.getElementById('totalcost').value=value*extra;
                         }
           </script>
       </head>
       <body>
              <div class="header">
                   <a href="Dashboard.php"><button class="dash" type=submit>DASHBOARD</button></a>
                     <ul>
                         <li><a href="location.php"><button class="location" type=submit><img src="img/location.jpg" width=100% /></button></a>
                         <li><a href="cart.php"><button class="cart" type=submit><img src="img/cart.png" width=100% /></button></a></li>
                         <li><a href="login.php"><button class="out" type=submit>Sign out</button></a></li>
                     </ul>
	       </div>
              <div class="base">
                     <img class="image" src=" <?php echo $image ?> "; width=100% height=100% />
                     <div class="div1">
                         <label class="name"><?php echo $name; ?></label>
                         <p><?php echo $desc;?></p>
                     </div>
                     <div class="details">
                         <ul>
                           <li class="first">
                                   <p class="one"><?php echo "@ ";echo $rating; ?></p>
                                   <p class="two"><?php echo $usersrated;echo' +ratings'; ?></p>
                           </li>
                           <li class="first">
                                   <p class="one"><?php echo $time;echo " min"; ?></p>
                                   <p class="two">Delivery Dime</p>
                           </li>
                           <li class="last">
                                   <p class="one"><?php echo "$  ";echo $price; ?></p>
                                   <p class="two">For Each One</p>
                           </li>
                         </ul>
                     </div>
                           <form method="post">
                                   <input id="heart" type="checkbox" name="heart" value=1 <?php echo $updateheart ?> />
                                   <label for="heart">❤</label>
                                   <input class="favour" name="favour" type=submit value="ADD/REMOVE">
                           </form>
              </div>
              <div class="lower">
                 <div class="recommend">
                      <p class="big">Recommended</p>
                      <p class="small">2 ITEMS</p>
                      <div class="front">
                      <ul>
                         <li>
                                   <img class="hello"  src="<?php echo $firstimage ?>" />
                                   <img class="imagetag" src="img/tag1.png" />
                         </li>
                         <li>
                                   <img class="hello" src="<?php echo $secondimage ?>" />
                                   <img class="imagetag" src="img/tag2.jpg" />
                         </li>
                      </ul>
                      </div>
                      <div class="titles">
                         <ul>
                           <li>
                                   <p class="heavy"><?php echo $firstname; ?></p>
                                   <p class="light"><?php echo $firsttype; ?></p>
                                   <p class="light"><?php echo '@ ';echo $firstrate; ?></p>
                                   <form method="post">
                                                        <input class="submit" type=submit name="submit1" value=order />
                                   </form>
                           </li>
                           <li>
                                   <p class="heavy"><?php echo $secondname; ?></p>
                                   <p class="light"><?php echo $secondtype; ?></p>
                                   <p class="light"><?php echo '@ '; echo $secondrate; ?></p>
                                   <form method="post">
                                                        <input class="submit" type=submit name="submit2" value=order />
                                   </form>
                           </li>
                         </ul>
                      </div>
                 </div>
                 <div class="cart">
                         <p class="big">Order</p>
                         <hr>
                         <div class="count">
                                   <ul>
                                       <li>
                                          <p><?php echo '#';echo $name; ?></p>
                                       </li>
                                       <li>
                                                 <div class="sum">
                                                     <button id="sub" onclick="decrement()" >-</button>
                                                     <input class="display" type=text min="0" max="10" value="0" id="number" />
                                                     <button id="add" onclick="increment()" >+</button>
                                                 </div>
                                       </li>
                                       <li>
                                                 <p class="p">$</p>
                                                 <input class="product" type=label value="0" id="cost" />
                                       </li>
                                   </ul>
                         
                         </div>
                         <form method="post">
                         <div class="price">
                                   <p class="p">TOTAL AMOUNT</p>
                                   <p class="s">$</p>
                                   <input class="product" name="product" type=label value="0" id="totalcost" />
                         </div>
                         <input class="submit" type=submit name=submit value="CHECKOUT ---)" />
                         </form>
                 </div>
              </div>
       </body>
</html>