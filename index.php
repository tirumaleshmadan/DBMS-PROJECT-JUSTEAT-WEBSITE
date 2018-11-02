<!DOCTYPE html>
<html>
       <head>
           <meta name="viewport" content="width=device-width, initial-scale=1">
           <style>
           * {
                     box-sizing: border-box;
             }
             body {
                     background-color:gold;
                     font-family: Verdana, sans-serif;
             }
             .slideshow-container {
                     background-color:white;
                     width: 90%;
                     max-height:600px;
                     position: relative;
                     margin:auto;
             }
             .numbertext {
                     color: #f2f2f2;
                     font-size: 12px;
                     padding: 8px 12px;
                     position: absolute;
                     top: 0;
             }
             .slideshow-container .logo{
                    position:absolute;
                    top:20%;
                    left:10%;
                    width:100px;
                    height:100px;
             }
             .slideshow-container img {
                     max-height:700px;
                     vertical-align: middle;
             }
             .slideshow-container p{
                    position:absolute;
                    color:red;
                    top:0%;
                    left:57%;
                    font-size:110px;
                    font-weight:bold;
             }
             a .explore{
                    position:absolute;
                    top:65%;
                    left:44.5%;
                    width:150px;
                    height:50px;
                    background-color:#005fff;
                    color:white;
                    border:1px solid blue;
                    font-size:20px;
                    font-weight:bold;
             }
             a .explore:hover{
                    background-color:blue;
                    font-size:23px;
             }
             .text {
                     color: yellow;
                     font-size: 20px;
                     padding: 8px 12px;
                     position: absolute;
                     bottom: 8px;
                     width: 100%;
                     text-align: center;
                     font-weight:bold;
             }
             .dot {
                     height: 15px;
                     width: 15px;
                     margin: 0 2px;
                     background-color: gold;
                     border-radius: 50%;
                     display: inline-block;
                     transition: background-color 0.9s ease;
             }
             .active {
                     background-color: #717171;
             }
             .fade {
                     -webkit-animation-name: fade;
                     -webkit-animation-duration: 1.5s;
                     animation-name: fade;
                     animation-duration: 1.5s;
             }
             @-webkit-keyframes fade {
                     from {
                     opacity: .4
                     } 
                     to {
                     opacity: 1
                         }
             }
            @keyframes fade {
                     from {
                     opacity: .4
                     } 
                     to {
                     opacity: 1
                     }
             }
           @media only screen and (max-width: 300px) {
                     .text {
                     font-size: 11px
                     }
             }
           </style>
       </head>
       <body>
           <div class="slideshow-container">
                     <div class="mySlides fade">
                         <div class="numbertext">1 / 3</div>
                         <img class="logo" src="img/logo.png" />
                         <p>JUSTEAT</p>
                         <a href="login.php"><button class="explore" type="submit" >EXPLORE</button></a>
                         <img src="img/breakfast/idly.jpg" style="width:100%">
                         <div class="text">SPICY</div>
                     </div>
                     <div class="mySlides fade">
                         <div class="numbertext">2 / 3</div>
                         <img class="logo" src="img/logo.png" />
                         <p>JUSTEAT</p>
                         <a href="login.php"><button class="explore" type="submit" >EXPLORE</button></a>
                         <img src="img/appetizer/paneer tikka.jpg" style="width:100%">
                         <div class="text">TASTY</div>
                     </div>
                     <div class="mySlides fade">
                         <div class="numbertext">3 / 3</div>
                         <img class="logo" src="img/logo.png" />
                         <p>JUSTEAT</p>
                         <a href="login.php"><button class="explore" type="submit" >EXPLORE</button></a>
                         <img src="img/breakfast/french toast.jpg" style="width:100%">
                         <div class="text">JUICY</div>
                     </div>
           </div>
           <br>
           <div style="text-align:center">
                     <span class="dot"></span> 
                     <span class="dot"></span> 
                     <span class="dot"></span> 
           </div>
       <script>
                     var slideIndex = 0;
                     showSlides();
                     function showSlides() 
                     {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            var dots = document.getElementsByClassName("dot");
                            for (i = 0; i < slides.length; i++) 
                            {
                                   slides[i].style.display = "none";  
                            }
                            slideIndex++;
                           if (slideIndex > slides.length) {slideIndex = 1}    
                           for (i = 0; i < dots.length; i++) 
                           {
                                   dots[i].className = dots[i].className.replace(" active", "");
                           }
                           slides[slideIndex-1].style.display = "block";  
                           dots[slideIndex-1].className += " active";
                           setTimeout(showSlides, 3000); 
                     }
           </script>
       </body>
</html> 
