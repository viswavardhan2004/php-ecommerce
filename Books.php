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
            <img src="photos/bhagvathGeetha.webp"> 
        </center>
                <div class="description">
            <p>Shrimad Bhagwat Gita Yatharoop  (Hardcover, Hindi, A.C BHAKTIVEDANT SWAMI SHRILA PRABHUPAD)</p>
            <h4>₹125</h4>
            <button id="bhagvathGeetha">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/upscbook.webp"> 
        </center>
                <div class="description">
            <p>UPPSC-CSE Toppers Notes-General Studies (Pre & Mains) -Latest Hindi Edition  (Paperback, Hindi, ToppersNotes)</p>
            <h4>₹4,382</h4>
            <button id="upscBook">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/youcan.webp"> 
        </center>
                <div class="description">
            <p>Energize Your Mind: Learn the Art of Mastering Your Thoughts, Feelings and Emotions</p>
            <h4>₹196</h4>
            <button id="energizeyoumind">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/gateBooks.webp"> 
        </center>
                <div class="description">
            <p>Gate Electronics Engg. Papers 2021 Edition  (English, Paperback, Board RPH Editorial)</p>
            <h4>₹290 </h4>
            <button id="gateBooks">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/richdad-poordad.webp"> 
        </center>
                <div class="description">
            <p>Rich Dad Poor Dad: 25th Anniversary Edit Paperback  (Paperback, Robert Kiyosaki)</p>
            <h4>₹128</h4>
            <button id="richdad-poordad">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/ncert10thmaths.webp"> 
        </center>
                <div class="description">
            <p>NCERT Mathematics Books Set Class 6 To 10 (English Medium) [Hardcover] NCERT  (Hardcover, NCERT)</p>
            <h4>₹169</h4>
            <button id="ncert10thmaths">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/comedybooks.webp">
        </center> 
                <div class="description">
            <p>Comedy Dreams  (English, Paperback, Das Shubham)</p>
            <h4>₹150</h4>
            <button id="comedybooks">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/life-without-limits-original-imagg6njph5hstnv.webp"> 
        </center>
                <div class="description">
            <p>Life Without Limits  (English, Paperback, Vujicic Nick)</p>
            <h4>₹399</h4>
            <button id="nickvijuic">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/believeyourself.webp"> 
        </center>
                <div class="description">
            <p>Pocket FM Believe In Yourself (Hindi Audiobook) | By Joseph Murphy | Android Devices Only | Vocational & Personal Development (Audio) Vocational & Personal Development  (Audio)</p>
            <h4>₹149 </h4>
            <button id="believeinyourself">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/you _are_born.webp"> 
        </center>
                <div class="description">
            <p>You are Born to Blossom  (English, Paperback, Kalam Apj Abdul)</p>
            <h4>₹274</h4>
            <button id="born-to-bloosm">Shop here</button>
            </div>
        </div>
        <div class="pro">
        <center>
            <img src="photos/onedaylifewillchange.webp"> 
        </center>
                <div class="description">
            <p>ONE DAY LIFE WILL CHANGE  (Paperback, Neelam Gupta)Be the first to Review this product</p>
            <h4>₹280</h4>
            <button id="onedaylifewillchange">Shop here</button>
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
    <script src="books.js"></script>
</body>
</html>