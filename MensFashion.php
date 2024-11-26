<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="MensFashion.css">
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
            <img src="photos/Snitch-Shirt.avif"> 
        </center>
                <div class="description">
            <p>SNITCH Knitted Shirt with Short Sleeves</p>
            <h4>₹719</h4>
            <button id="Snitch-Shirt">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/uspolo_Shoes.png"> 
        </center>
                <div class="description">
            <p>U.S. Polo Assn. Men White Clarkin Sneakers</p>
            <h4>₹1799</h4>
            <button id="uspolo_Shoes">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/amazonPant.jpg"> 
        </center>
                <div class="description">
            <p>Lymio Men Cargo || Men Cargo Pants || Men Cargo Pants Cotton || Cargos for Men (Cargo-09-12)</p>
            <h4>₹699</h4>
            <button id="amazonPant">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/mens_necklace.png"> 
        </center>
                <div class="description">
            <p>Men And Women Black Onyx Octagon Inlay Square Pendant Amulet Silver Agate Stainless Steel Pendant</p>
            <h4>₹82</h4>
            <button id="mens_necklace">Shop here</button>
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
            <img src="photos/black_cap.webp"> 
        </center>
                <div class="description">
            <p>PUMA Men ESS Running Cap</p>
            <h4>₹288</h4>
            <button id="black_cap">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/wallet.avif"> 
        </center>
                <div class="description">
            <p>VAN HEUSEN Men Bi-Folds Wallet</p>
            <h4>₹150</h4>
            <button id="wallet">Shop here</button>
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
            <img src="photos/sweatshirts.png"> 
        </center>
                <div class="description">
            <p>Roadster Men Solid Hooded Sweatshirt</p>
            <h4>₹749</h4>
            <button id="sweatshirts">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/parkavenue.jpg"> 
        </center>
                <div class="description">
            <p>Park Avenue Voyage & Neo Signature Collection | Deodorant for Men | Fresh Long-lasting Aroma | 150ml each (Pack of 3)</p>
            <h4>₹435</h4>
            <button id="parkavenue">Shop here</button>
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
    <script src="MensFahion.js"></script>
</body>
</html>