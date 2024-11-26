<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section id="header">
            <a href="#"><img src="photos/dealfinderx-high-resolution-logo.jpeg" class="logo" alt="Logo" height="100px"></a>
            <div class="searchbar">
                <input type="text" placeholder="search here" class="searcharea">
                <i class="fa-solid fa-magnifying-glass"></i>
                
            </div>
            <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="categories.php">Categories</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php if (isset($_SESSION["user"])): ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
            </div>
    </section>

    <section id="hero">
        <!-- <h4>Trade-in-offer</h4>
        <h2>Super Value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off!</p> -->
    </section>
    <hr>

    <section id="product1" class="section-p1" class="section-m1">
        <h2>Featured Products</h2>
        <p>All collections in best prices</p>
        <div class="pro-container">
            <div class="pro">
                    <img src="photos/iphone.webp" alt="iphone">
                    <div class="des">
                        <span>Apple iPhone 15 Pro Max (256 GB) - Black Titanium</span>
                        <h4>₹1,48,900</h4>
                        <button id="amazonButton">Shop now</button>
                    </div>
            </div>
            <div class="pro">
            <img src="photos/bluetooth-earPhones.jpg" alt="ear-phones">
            <div class="des">
                <span>Boat Rockers 255 Pro+ Bluetooth Wireless in Ear Earphones with Upto 60 Hours Playback.</span>
                <h4>₹999</h4>
                <button id="amazonButton-bluetooth">Shop now</button>
            </div>
        </div>

        <div class="pro">
            <img src="photos/tshirt.webp" alt="T-Shirt">
            <div class="des">
                <span>Men Printed, Typography Round Neck Cotton Blend Black T-Shirt  </span>
                <h4>₹315</h4>
                <button id="flipkart-tshirt">Shop now</button>
            </div>
        </div>

        <div class="pro">
            <img src="photos/cycles.webp" alt="cycles">
            <div class="des">
                <span>VESCO Super Girl 20T Pink Kids cycle with Balance Wheel 20 T BMX Cycle  (Single Speed, Pink)</span>
                <h4>₹3,699</h4>
                <button id="flipkart-cycle">Shop now</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/kittens.avif" alt="Womens-kittens">
            <div class="des">
                <span>Black Pointed Toe Textured Kitten Pumps With Bows</span>
                <h4>₹799</h4>
                <button id="myntra-kittens">Shop now</button>
            </div>
        </div>
        

        <div class="pro">
            <img src="photos/cricketbat.webp" alt="cricketbat">
            <div class="des">
                <span>MRF Wooden Kashmir Poplar Willow Bat-size Full Poplar Willow Cricket Bat </span>
                <h4>₹399</h4>
                <button id="flipkart-bat">Shop now</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/cargos.avif" alt="cargos">
            <div class="des">
                <span>Women Panel Detail Cotton Twill Oversized Cargos</span>
                <h4>₹1,221</h4>
                <button id="ajio-cargo">Shop now</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/watch.jfif" alt="watch">
            <div class="des">
                <span>CASIO VINTAGE Unisex Watch D131 A168WA-1WDF</span>
                <h4>₹2,156</h4>
                <button id="myntra-watch">Shop now</button>
            </div>
        </div>
        
        </div>
    </section>

    <section id="news-letter">
        <div class="newstext"> 
                <h4>Sign up for newsletters</h4>
                <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
                <input type="text" placeholder="your email address">
                <button>Sign Up</button>
        </div>
    </section>


    <footer class="banner" >
        <div class="col">
                <h4>contact</h4>
                <p><strong>Address : </strong>4-48 ,Near Main-road</p>
                <p>vizianagaram ,Andhra Pradesh</p>
                <p><strong>Phone : </strong>9676336741</p>
                <div class="follow">
                    <h4>Follow us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-pinterest-p"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Privacy policy</a>
            <a href="#">Terms & Conditions</a>
            
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>