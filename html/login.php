<?php include('../server.php');?>
<!DOCTYPE html>
<html>
    <head>
     <title>Auction</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../css/styles.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php

        ?>
            <span class="open-nav" onclick="openNav()"><i class="fa fa-bars" style="font-size:20px;"></i></span>
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closeebtn" onclick="closeNav()">&times;</a>
    
                <div class="overlay-content">
                       
                   <div class="link-1 link"><a href="../index.php">Home</a></div>
                   <div class="link-2 link"><a href="auction.php">Auction</a></div>
                   <div class="link-3 link"><a href="contact.php">Contact</a></li></div>
                   <div class="link-4 link"><a href="cart.php" id="cart"><i class="large material-icons">add_shopping_cart</i>Cart</a></div>
                   <div class="link-5 link"><a href="login.php" id="mybutton"><i class="large material-icons">person</i></a></div><!--trigger to open-->
                </div>
            </div>
    
            <div class="menu-container">
                   
                   <div class="link-1 link"><a href="../index.php">Home</a></div>
                   <div class="link-2 link"><a href="auction.php">Auction</a></div>
                   <div class="link-3 link"><a href="contact.php">Contact</a></li></div>
                   <div class="link-4 link"><a href="cart.php" id="cart"><i class="large material-icons">add_shopping_cart</i>Cart</a></div>
                   <div class="link-5 link"><a href="login.php" id="mybutton"><i class="large material-icons">person</i></a></div><!--trigger to open-->
            </div>

              <!--form elements-->
            <div id="myForm" class="form-content">
                <!--form content-->
                <form class="formal" method="POST" action="index.php">
                    <?php include('../errors.php');?>
                    <div class="imgContainer">
                        <img src="../img/patel.jpg" alt="avatar" class="avatar">
                    </div>
                    <div class="container-1">
                        <label for="userName"><b>Username</b></label><br/>
                        <input type="text" placeholder="Enter username..." name="username" required><br/>

                        <label for="psw"><b>Password</b></label><br/>
                        <input type="password" placeholder="password..." name="password" required><br/>

                        <button type="submit" name="login" class="log-btn">Login</button><br/>
                        <label>
                        <input type="checkbox" checked="checked" name="remember">Remember me
                        </label>
                    </div>
                    <div class="container-1">
                        <button type="reset" name="register" class="cancelbtn">Cancel</button>
                        <!--<span class="psw"><a href="#">Forgot password</a></span>-->
                        <span class="psw-1"><a href="registration.php">Sign up</a></span>
                    </div>
                </form>
            </div>

            <footer class="main-footer">
                <div class="footer-inner">
                    <span>&copy;<?php echo date('Y');?> Peter Ng'ang'a school project, <br/>&copy;Copyright.</span>
                </div>
            </footer>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
            <script src="../js/scripts.js"></script>
    </body>
</html>
