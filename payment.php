<?php
include('db.php');
session_start();
?>
<html>
       <head>
           <meta charset="utf-8">
           <title>PAYMENT</title>
           <link href="css/payment.css" rel="stylesheet">
           <link rel="stylesheet" href="rating.css">
           <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
           <?php 
                     $row=$_SESSION['order'];
                     $name=$row['name'];
                     $image=$row['image'];
                     $price=$row['price'];
                     $type=$row['type'];
                     $rating=$row['total_rating'];
                     $usersrated=$row['rated_members'];
                     $total_price=$_SESSION['quant'];
                     $quantity=$total_price/$price;
                     $amount=$total_price-($total_price*5)/100;   
                     
                     if(isset($_POST['rate']))
                     {
                            $check=$_POST['star'];
                            $total=$rating*$usersrated;
                            $a=$total+$check;
                            $b=$usersrated+1;
                            $a=round($a/$b,2);
                            $sql="update items set total_rating='$a',rated_members='$b' where name='$name'";
                            $updaterating=mysqli_query($my,$sql);
                            header("Location:dashboard.php");
                     }
           ?>
       </head>
       <body>
             <div class="border">
                     <div class="top">
                           <p>PAYMENT</p>
                           <a href="dashboard.php"><button class="dash" type="submit">DASHBOARD</button></a>
                     </div>
                     <div class="margin">
                         <div class="account">
                                   <form method="post">
                                                 <p class="heading">Select payment method</p>
                                                 <p class="type"># Only Debit Card Accepted at present</p>
                                                 <p class="warning">@ DON'T REFRESH YOUR PAGE</p>
                                                 <p class="acc">ACCOUNT NO :</p>
                                                 <input class="no" name="no" type=text placeholder="ENTER CARD NUMBER" required />
                                                 <p class="expiry">EXPIRY DATE :</p>
                                                 <select class="month" name="month">
                                                               <option>01</option>
                                                               <option>02</option>
                                                               <option>03</option>
                                                               <option>04</option>
                                                               <option>05</option>
                                                               <option>06</option>
                                                               <option>07</option>
                                                               <option>08</option>
                                                               <option>09</option>
                                                               <option>10</option>
                                                               <option>11</option>
                                                               <option>12</option>
                                                 </select>
                                                 <select class="year" name="year">
                                                               <option>2018</option>
                                                               <option>2019</option>
                                                               <option>2020</option>
                                                               <option>2021</option>
                                                               <option>2022</option>
                                                               <option>2023</option>
                                                               <option>2024</option>
                                                               <option>2025</option>
                                                               <option>2026</option>
                                                               <option>2027</option>
                                                 </select>
                                                 <p class="pcvv">ENTER CVV :</p>
                                                 <input class="cvv" name="cvv" type=password min=100 max=999 placeholder=CVV required/>
                                                 <input class="order" type="submit" name="submit" value="ORDER" />
                                   </form>
                            </div>    
                         <div class="bill">
                                   <p class="name">JUSTEAT.COM</p>
                                   <img class="image" src="<?php  echo $image ?>" />
                                   <p class="title"><?php echo $name; ?></p>
                                   <p class="type"><?php echo $type; ?></p>
                                   <div class="pass1">
                                                 <p>Price</p>
                                                 <p>Quantity</p>
                                                 <hr>
                                                 <p>Total Price</p>
                                                 <p>Discount</p>
                                                 <hr>
                                                 <p>Amount</p>
                                   </div>
                                   <div class="pass2">
                                                 <p><?php echo "$  "; echo $price; ?></p>
                                                 <p><?php echo "    $quantity"; ?></p>
                                                 <hr>
                                                 <p><?php echo "$  ";      echo $total_price; ?></p>
                                                 <p><?php echo "    5%"; ?></p>
                                                 <hr>
                                                 <p><?php echo "$  "; echo $amount; ?></p>
                                   </div>
                         </div>
                         <?php
                     if(isset($_POST['submit']))
                     {
                          $row=$_SESSION['order'];
                          $item=$row['name'];
                          $desc=$row['description'];
                          $image=$row['image'];
                          $rating=$row['total_rating'];
                          $usersrated=$row['rated_members'];
                          $price=$row['price'];
                          $time=$row['delivery_time'];
                          $type=$row['type'];
                          $total_price=$_SESSION['quant'];
                          $quantity=$total_price/$price;
                          $amount=$total_price-($total_price*5)/100;
       
                          $email=$_SESSION['welcome'];
                          $extract=mysqli_query($my,"select * from users where email='$email'");
                          $welcome=mysqli_fetch_assoc($extract);
                          $name=$welcome["firstname"];
                          $id=$welcome["id"];
                          
                          $h=floor($time/60);
                          $m=floor($time%60);
                          $s='00';
                          $f=':';
                          $interval="$h$f$m$f$s";
                          $addition=mysqli_query($my,"SELECT addtime(LOCALTIMESTAMP(),'$interval') as addi");
                          
                          $timeout=mysqli_fetch_assoc($addition);
                          $sol=$timeout['addi'];
                          
                          $sql="insert into orders(firstname,email,item,type,image,delivery_time,ordered_time,dispatch,price,quantity,discount,total_price,location_id) values('$name','$email','$item','$type','$image','$time',localtimestamp(),'$sol','$price','$quantity',5,'$amount','$id')";
                          $set=mysqli_query($my,$sql);
                          
                          ?>
                                   <div class="thanks">
                                             <p>ORDER PLACED SUCCESSFULLY</p>
                                             <img src="img/thanks.gif" />    
                                             <form method="post">
                                                 <div class="rating">
                                                     <input type="radio" name="star" id="star1" value="5">
                                                     <label for="star1"></label>
                                   
                                                     <input type="radio" name="star" id="star2" value="4">
                                                     <label for="star2"></label>
                                   
                                                     <input type="radio" name="star" id="star3" value="3">
                                                     <label for="star3"></label>
                                       
                                                     <input type="radio" name="star" id="star4" value="2">
                                                     <label for="star4"></label>
                                   
                                                     <input type="radio" name="star" id="star5" value="1">
                                                     <label for="star5"></label>
                                                 </div>
                                                     <input class="rate" type=submit name="rate" value="RATE" />
                                             </form>
                                   </div>
                          <?php
                     }
                     ?>
                     </div>
             </div>
       </body>
</html>