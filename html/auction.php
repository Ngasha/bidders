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
                       
                       <div class="link-1 link"><a href="index.php">Home</a></div>
                       <div class="link-2 link"><a href="auction.php">Auction</a></div>
                       <div class="link-3 link"><a href="contact.php">Contact</a></li></div>
                       <div class="link-4 link"><a href="cart.php" id="cart"><i class="large material-icons">add_shopping_cart</i>Cart</a></div>
                       <div class="link-5 link"><a href="login.php" id="mybutton"><i class="large material-icons">person</i></a></div><!--trigger to open-->
                </div>
            </div>
    
            <div class="menu-container">
                   
                   <div class="link-1 link"><a href="index.php">Home</a></div>
                   <div class="link-2 link"><a href="auction.php">Auction</a></div>
                   <div class="link-3 link"><a href="contact.php">Contact</a></li></div>
                   <div class="link-4 link"><a href="cart.php" id="cart"><i class="large material-icons">add_shopping_cart</i>Cart</a></div>
                   <div class="link-5 link"><a href="login.php" id="mybutton"><i class="large material-icons">person</i></a></div><!--trigger to open-->
            </div>
            <div class="body-wrapper">
                <div class="slideshow-background back-ground">
                    <h1>Please place your Bid</h1>
                </div>
            </div>
            <div class="display-lap">
                <div class="items">
                    <!--single item-->
                    <div class="item">
                        <img src="../img/acer2.jpg" alt="acer laptop"/>
                        <h2 id="acer-lap">Acer Laptop</h2>
                        <p>Price: <em>ksh.66,800</em></p>
                        <button class="addTo" type="button">BID</button>
                    </div>
                    <div class="item">
                        <img src="../img/dell1.jpg" alt="acer laptop"/>
                        <h2>Dell Desktop</h2>
                        <p>Price: <em>ksh.44,800</em></p>
                        <button class="addTo" type="button">BID</button>
                    </div>
                    <div class="item">
                        <img src="../img/hp1.jpg" alt="acer laptop"/>
                        <h2>Hp Laptop</h2>
                        <p>Price: <em>ksh.47,800</em></p>
                        <button class="addTo" type="button">BID</button>
                    </div>
                    <div class="item">
                        <img src="../img/mac3.jpg" alt="mac laptop"/>
                        <h2>Macbook Air</h2>
                        <p>Price: <em>ksh.62,800</em></p>
                        <button class="addTo" type="button">BID</button>
                    </div>
                </div>
            </div>
            
            <div class="body-wrapper-2">
                <div class="slideshow-back">
                    <p>And the highiest bidder WINS!!</p>
                </div>

            </div>
            <div class="lower-container2">
                <div class="items">
                    <div class="item">
                        <img src="../img/lap1.jpg" alt="acer laptop"/>
                        <h2>Hp Laptop</h2>
                        <p>Price: <em>ksh.47,800</em></p>
                        <p class="bids-count">+24 bids</p>
                        <p class="deadline"></p>
                        <button class="addTo" type="button">BID</button>
                    </div>
                    <div class="item">
                        <img src="../img/lap2.jpg" alt="acer laptop"/>
                        <h2>Toshiba Laptop</h2>
                        <p>Price: <em>ksh.44,000</em></p>
                        <p class="bids-count">+24 bids</p>
                    <p class="deadline"></p>
                        <button class="addTo" type="button">BID</button>
                    </div>
                    <div class="item">
                        <img src="../img/lap3.webp" alt="acer laptop"/>
                        <h2>Hp Laptop</h2>
                        <p>Price: <em>ksh.17,800</em></p>
                        <p class="bids-count">+24 bids</p>
                    <p class="deadline"></p>
                        <button class="addTo" type="button">BID</button>
                    </div>
                    <div class="item">
                        <img src="../img/lenovo1.jpeg" alt="acer laptop"/>
                        <h2>Lenovo Laptop</h2>
                        <p>Price: <em>ksh.47,800</em></p>
                        <p class="bids-count">+24 bids</p>
                    <p class="deadline"></p>
                        <button class="addTo" type="button">BID</button>
                    </div>
                    <div class="item">
                        <img src="../img/dell2.jpg" alt="acer laptop"/>
                        <h2>dell Laptop</h2>
                        <p>Price: <em>ksh.67,100</em></p>
                        <p class="bids-count">+24 bids</p>
                    <p class="deadline"></p>
                        <button class="addTo" type="button">BID</button>
                    </div>
               </div>
            </div>
            
            <div id="myModal" class="modal">
                <!--modal content-->
                <div class="modal-content">
                    <span class="close"> &times; </span>
                    <p>Enter bid amount</p>
                    <input type="text" placeholder="Set bid.." name="uname" required>
                    <button class="place">Place Bid</button>
                </div>
            </div>
            <footer class="main-footer">
                <div class="footer-inner">
                    <span>&copy;2019 Peter Patel school project, <br/>&copy;Copyright.</span>
                </div>
            </footer>
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
        <script src="../js/scripts.js"></script>
    </body>
</html>
