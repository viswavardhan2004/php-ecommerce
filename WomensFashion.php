<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="WomensFashion.css">
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
            <img src="photos/womescap.avif"> 
                <div class="description">
            <p>Vintage Brand Mark Cord Cap</p>
            <h4>₹1,485</h4>
            <button id="womenscap">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/womensFashion.png"> 
                <div class="description">
            <p>Women Mauve Ethnic Motifs Printed Regular Kurta with Palazzos & With Dupatta</p>
            <h4>₹1799</h4>
            <button id="womensFashion">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/womensShoes.jpg"> 
                <div class="description">
            <p>Nike Womens WMNS Air Winflo 9 Running Shoes</p>
            <h4>₹8339</h4>
            <button id="womensShoes">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/hairStraighner.avif"> 
                <div class="description">
            <p>Ultimate Shine Hair Straightener - Black Gold | 800.0</p>
            <h4>₹82</h4>
            <button id="hairStraighner">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/jumka.png"> 
                <div class="description">
            <p>The Pari Rhodium Plated Jumkas</p>
            <h4>₹329</h4>
            <button id="jumka">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/braceleteforwomens.webp"> 
                <div class="description">
            <p>11940B Crystal-Studded Heart Bracelet</p>
            <h4>₹300</h4>
            <button id="braceleteforwomens">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/handbags.png"> 
                <div class="description">
            <p>Black Women Sling Bag</p>
            <h4>₹359</h4>
            <button id="handbags">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/perfume.jpg"> 
                <div class="description">
            <p>Ustraa Base Camp Cologne - 100 ml - Perfume for Men | Cool, Crisp Fragrance of the Mountains | Long-lasting | Zingy, Aquatic Notes with Fresh Masculine Fragrance</p>
            <h4>₹400</h4>
            <button id="perfume">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/bracelet.avif"> 
                <div class="description">
            <p>FASHION FRILL Stainless Steel Link Bracelet</p>
            <h4>₹849</h4>
            <button id="bracelet">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/sunglasses.avif"> 
                <div class="description">
            <p>Women UV Protected Lens Oversized Sunglasses - B80-79</p>
            <h4>₹718</h4>
            <button id="sunglasses">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/niveadeodrant.jpg"> 
                <div class="description">
            <p>Nivea Deodorant, Fresh Flower for Women, 150ml</p>
            <h4>₹285</h4>
            <button id="niveadeodrant">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/womensweatshirts.jpg"> 
                <div class="description">
            <p>Status Apparels Combo Cotton Sweatshirts for Women Pack of 2 | Blessed and Friends Printed Stylish Full Sleeves Outfit</p>
            <h4>₹564.63</h4>
            <button id="womensweatshirts">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/wallclocks.jpg"> 
                <div class="description">
            <p>Amazon Brand - Solimo 8-inch Plastic Wall Clock/Table Clock - Map Dial (Black Frame, Quartz Movement)</p>
            <h4>₹849</h4>
            <button id="wallclocks">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/mobilepouch.webp"> 
                <div class="description">
            <p>MACMERISE Mickey Glass Case for iPhone 11</p>
            <h4>₹274</h4>
            <button id="mobilepouch">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/earphones.webp"> 
                <div class="description">
            <p>Boult Z40 with Zen ENC Mic, 60H Battery Life, Low Latency Gaming, Made In India, 5.3 Bluetooth Headset  (Blue, In the Ear)</p>
            <h4>₹1,299</h4>
            <button id="earphones">Shop here</button>
            </div>
        </div>
        <div class="pro">
            <img src="photos/youcan.webp"> 
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
    <script src="WomensFahion.js"></script>
</body>
</html>