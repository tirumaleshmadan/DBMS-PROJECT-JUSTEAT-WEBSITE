<?php
       include('db.php');
       session_start();
       $name=$_SESSION['welcome'];
?>
<html>
       <head>
           <title>MY CART</title>
           <link href="css/cart.css" rel="stylesheet" />
           <meta name="viewport" content="width=device-width, initial-scale=1">
           
           <script>
                     function timedown(ti,id)
                     {
                            var countDownDate = new Date(ti).getTime();
                            var x = setInterval(function() 
                            {
                                   var now = new Date().getTime();
                                   var distance = countDownDate - now;
                                   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                   var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
                                  document.getElementById(id).innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
         
                                  if (distance < 0) {
                                  clearInterval(x);
                                  document.getElementById(id).innerHTML ="DELIVERED";
                                  }
                           }, 1000);
                     }
          </script>
                     
       </head>
       <body>
                     <div class="back1">
                         <div class="header">
                           <p class="head">CART PAGE</p>
                           <a href="Dashboard.php"><button class="dash" type=submit>DASHBOARD</button></a>
                           <a href="location.php"><button class="location" type=submit><img src="img/location.jpg" width=100% /></button></a>
                           <a href="login.php"><button class="out" type=submit>Sign out</button></a>
	              	    </div>
                     </div>
                     <div class="back">
                            <div class="wish">
                                       <div class="scrolla">
                                                 <div class="main">
                                                          <ul>
                                                                      <?php
                                                                             $favour=mysqli_query($my,"select * from favour where email='$name'");
                                                                             while($row=mysqli_fetch_assoc($favour))
                                                                             {
                                                                                 $itemname=$row['item'];
                                                                                 $list=mysqli_query($my,"select * from items where name='$itemname'");
                                                                                 $listrow=mysqli_fetch_assoc($list);
                                                                                 ?>
                                                                                 <li>
                                                                                   <img src="<?php echo $listrow['image'] ?>" />
                                                                                   <p class="name"><?php echo $row['item'] ?></p>
                                                                                   <p class="type"><?php echo $listrow['type'] ?></p>
                                                                                 </li>
                                                                             <?php
                                                                             }
                                                                      ?>
                                                          </ul>
                                                 </div>
                                       </div>
                                       <div class="headerin">
                                                 <p>FAVOURITES BAG</p>
                                       </div>
                            </div>
                            <div class="order">
                                       <div class="scrollb">
                                                 <div class="main">
                                                          <ul>
                                                                <?php
                                                                   $result=mysqli_query($my,"select * from orders where email='$name' order by order_id desc");
                                                                   while($row=mysqli_fetch_assoc($result))
                                                                   {
                                                                             $dispatch=$row['dispatch'];
                                                                             $get=mysqli_query($my,"SELECT DATE_FORMAT('$dispatch','%d %b,%Y %H:%i:%s') as result");
                                                                             $gettime=mysqli_fetch_assoc($get);
                                                                             $answer=$gettime['result'];
                                                                          ?>
                                                                          <script>
                                                                                           timedown("<?php echo $answer ?>","<?php echo $row['order_id'] ?>");
                                                                          </script>
                                                                          <li>
                                                                             <p class="id"><?php echo "ID : ";echo $row['order_id'] ?></p>
                                                                             <p class="time"><?php echo $row['ordered_time'] ?></p>
                                                                             <p class="line">.</p>
                                                                             <hr>
                                                                             <img src="<?php echo $row['image'] ?>" />
                                                                             <p class="name"><?php echo $row['item'] ?></p>
                                                                             <p class="type"><?php echo $row['type'] ?></p>
                                                                             <p class="quant"><?php echo "quantity : ";echo $row['quantity'] ?></p>
                                                                             <p class="amount"><?php echo "total_amount : ";echo $row['total_price'] ?></p>
                                                                             <div class="timer">
                                                                                 <p class="timeleft">TIMESPAN</p>
                                                                                 <p class="span" id="<?php echo $row['order_id'] ?>"></p>
                                                                             </div>
                                                                         </li>
                                                                         <?php
                                                                   }
                                                                   ?>
                                                          </ul>
                                                 </div>
                                       </div>
                                       <div class="headerin">
                                                           <p>ORDERS BAG</p>
                                       </div>
                            </div>
                     </div>
       </body>
</html>