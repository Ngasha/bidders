<?php
//session_start();
include('../server.php');
?>
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

        <div class="container-reg">
            <form class="formal" action="registration.php" method="POST">
            <h2 class="head-reg">Register</h2>
            
                <!--validation errors display-->
           
                    <!-- <div class="imgContainer">
                            <img src="../img/patel.jpg" alt="avatar" class="avatar">

                        </div>-->
                        
                        <div class="container-1">
        
                            <label for="userName"><b>Username</b></label><br/>
                            <input type="text" placeholder="Enter username..." name="username" value="<?php echo $username?>"><br/>

                            <label for="email"><b>Email</b></label><br/>
                            <input type="email" placeholder="email..." name="email" value="<?php echo $email?>"required><br/>

                            <label for="psw"><b>Password</b></label><br/>
                            <input type="password" placeholder="password..." name="password_1"><br/>

                            <label for="psw"><b>Confirm password</b></label><br/>
                            <input type="password" placeholder="password..." name="password_2"><br/>

                            <button type="submit" name="register" class="log-btn">Submit</button><br/>
                            <label>
                            <span class="psw-1">Already have an account? <a href="login.php">Login</a></span>
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