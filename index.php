<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>ROG</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Gamers are welcome.</h1>
                       
                       <a href="products.php" class="btn btn-danger">Shop Now</a>                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/camera.jpeg" alt="Camera">                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Laptop</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/watch.jpeg" alt="Watch">                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Keyboard</p>
                                    <p>Original keyboard for the best Gaming Experience.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/shirt.jpeg" alt="Shirt">                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Mouse</p>
                                   <p>Our Best collection of mouse.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="https://asusrog.com">ROG</a> Store. All Rights Reserved.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>