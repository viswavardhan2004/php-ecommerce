<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Books.css">
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
                    <li><a href="logout.php">Login</a></li>
                <?php else: ?>
                    <li><a href="login.php">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div>
</section>
<section id="item">
    <div class="category-list">
        <a href="Books.php"><h3>Books</h3></a>
        <a href="Electronics.php"><h3>Electronics</h3></a>
        <a href="MensFashion.php"><h3>Mens Fashion</h3></a>
        <a href="WomensFashion.php"><h3>Womens Fashion</h3></a>
        <a href="Beauty.php"><h3>Beauty</h3></a>
    </div>
    <div class="products">
    

        <div class="pro">
            <center>
            <img src="photos/iphone.webp"> 
        </center>
                <div class="description">
            <p>Apple iPhone 15 Pro Max (256 GB) - Black Titanium</p>
            <h4>₹1,48,900</h4>
            <button id="amazonButton">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <center>
            <img src="photos/bracelet.avif"> 
        </center>
                <div class="description">
            <p>FASHION FRILL Stainless Steel Link Bracelet</p>
            <h4>₹849</h4>
            <button id="bracelet">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/sunscreen.png"> 
        </center>
                <div class="description">
            <p>The Derma Co Sunscreen - SPF 50 PA+ 1% Hyaluronic Sunscreen Aqua Gel Lightweight, No white-cast for Broad Spectrum  (80 g)</p>
            <h4>₹583</h4>
            <button id="sunscreen">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/studylamps.webp"> 
        </center>
                <div class="description">
            <p>MOGADGET Rechargeable Study Lamp, Touch Table Lamp for study room with USB Charging Study Lamp  (36 cm, 3 pocket holder)</p>
            <h4>₹689</h4>
            <button id="studylamps">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/watchInAjio.webp"> 
        </center>
                <div class="description">
            <p>FRENCH CONNECTION F7-C Square Dial Smart Watch</p>
            <h4>₹1,869</h4>
            <button id="watchInAjio">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/facemask.png"> 
        </center>
                <div class="description">
            <p>Globus Naturals Activated Charcoal Peel off Mask For Men Enriched With Vitamin-E, Aloevera,</p>
            <h4>₹146</h4>
            <button id="facemask">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/perfume.jpg"> 
        </center>
                <div class="description">
            <p>Ustraa Base Camp Cologne - 100 ml - Perfume for Men | Cool, Crisp Fragrance of the Mountains | Long-lasting | Zingy, Aquatic Notes with Fresh Masculine Fragrance</p>
            <h4>₹400</h4>
            <button id="perfume">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/kettle.webp"> 
        </center>
                <div class="description">
            <p>Pigeon 14913 Electric Kettle with Bottle  (1.5 L, Silver)</p>
            <h4>₹399</h4>
            <button id="kettle">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/wallclocks.jpg"> 
        </center>
                <div class="description">
            <p>Amazon Brand - Solimo 8-inch Plastic Wall Clock/Table Clock - Map Dial (Black Frame, Quartz Movement)</p>
            <h4>₹849</h4>
            <button id="wallclocks">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/mobilepouch.webp">
        </center> 
                <div class="description">
            <p>MACMERISE Mickey Glass Case for iPhone 11</p>
            <h4>₹274</h4>
            <button id="mobilepouch">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/earphones.webp"> 
        </center>
                <div class="description">
            <p>Boult Z40 with Zen ENC Mic, 60H Battery Life, Low Latency Gaming, Made In India, 5.3 Bluetooth Headset  (Blue, In the Ear)</p>
            <h4>₹1,299</h4>
            <button id="earphones">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/youcan.webp"> 
        </center>
                <div class="description">
            <p>You Can  (English, Paperback, Adams George Matthew)</p>
            <h4>₹86</h4>
            <button id="youCan">Shop here</button>
            </div>
        </div>
    </div>
</section>
<footer class="section-p1  banner" >
    <div class="col">
            <!-- <img src="photos/dealfinderx-high-resolution-logo.jpeg" alt="logo" height="65px"> -->
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
<script src="categories.js"></script>
</body>
</html>