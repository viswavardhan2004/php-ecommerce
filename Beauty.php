<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Beauty.css">
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
            <img src="photos/nivieafacewash.avif"> 
        </center>
                <div class="description">
            <p> NIVEA Milk Delight Facewash Rose Sensitive Skin | 100.0 ml</p>
            <h4>₹129</h4>
            <button id="nivieafacewash">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/glitters.avif"> 
        </center>
                <div class="description">
            <p>Better Than Eyeshadow Palette - 00 Light & Glitter</p>
            <h4>₹1,913</h4>
            <button id="glitters">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/ponds.png"> 
        </center>
                <div class="description">
            <p>Super Light Gel Oil Free Moisturiser With Hyaluronic Acid + Vitamin E - 200 ml</p>
            <h4>₹308</h4>
            <button id="ponds">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/trimmers.jpg"> 
        </center>
                <div class="description">
            <p>Beard Trimmer with Hypoallergenic Blades; Zero Trim with 0.5 Mm Precision;</p>
            <h4>₹699</h4>
            <button id="trimmers">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/garnierfacewash.jpg"> 
        </center>
                <div class="description">
            <p>Garnier Men Turbo Bright Double Action Face Wash, Deep Cleansing Anti Pollution Face Wash with Charcoal and Vitamin C, Suitable for all Skin Types, 100g</p>
            <h4>₹181</h4>
            <button id="garnierfacewash">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/braceleteforwomens.webp"> 
        </center>
                <div class="description">
            <p>11940B Crystal-Studded Heart Bracelet</p>
            <h4>₹300</h4>
            <button id="braceleteforwomens">Shop here</button>
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
            <img src="photos/sunglasses.avif">
        </center> 
                <div class="description">
            <p>Women UV Protected Lens Oversized Sunglasses - B80-79</p>
            <h4>₹718</h4>
            <button id="sunglasses">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/niveadeodrant.jpg"> 
        </center>
                <div class="description">
            <p>Nivea Deodorant, Fresh Flower for Women, 150ml</p>
            <h4>₹285</h4>
            <button id="niveadeodrant">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/facemaskforwomens.jpg"> 
        </center>
                <div class="description">
            <p>UrbanGabru Charcoal Peel Off Mask for Men & Women | Removes Blackheads and Whiteheads | Active Cooling Effect | Deep Skin Purifying Cleansing (60 gm)</p>
            <h4> ₹199</h4>
            <button id="facemaskforwomens">Shop here</button>
            </div>
        </div>
    </div>
</section>
<footer class="section-p1  banner" >
    <div class="col">
            <!-- <img src="photos/dealfinderx-high-resolution-logo.jpeg" alt="logo" height="65px"> -->
            <h4>contact</h4>
            <p><strong>Address : </strong>4-48 ,Near Main-road</p>
            <p>Vizianagaram ,Andhra-Pradesh</p>
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
    <script src="Beauty.js"></script>
</body>
</html>