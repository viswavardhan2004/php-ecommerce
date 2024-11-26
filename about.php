<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="about.css">
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


    <!-- about section starts  -->
    <section class="about" id="about">
        <h1 class="heading" style="font-size: 2rem; color: white; background-color: #333; padding: 10px; justify-content: center;;"><span>about</span> us</h1>
  
        <div class="row">
          <div class="image">
            <img src="photos/about.jpg" alt="" />
          </div>
  
          <div class="content">
            <h3>your occasion deserves our careful planning</h3>
            <p>
              Where Dreams Meet Reality And Celebrations Become Unforgettable Moments. We Are A Passionate Team Of Event Planners Dedicated To Crafting Extraordinary Experiences Tailored To Your Unique Vision. With Years Of Experience In The Industry, We've Orchestrated A Wide Range Of Events, From Weddings And Corporate Functions To Milestone Celebrations And Community Festivals.
            </p>
            <p>
              What Sets Us Apart Is Our Commitment To Personalized Service. We Take The Time To Understand Your Individual Preferences, Style, And Budget Friendly.
            </p>
            <a href="#" class="btn">reach us</a>
          </div>
        </div>
      </section>

      
  <!-- <h2 style="text-align:center">Our Head</h2> -->
  <div class="founder-image">
        
    </div>
        <div class="container" style="font-size: 15px";>
          <!-- <h2>Viswa Vardhan Kandula</h2>
          <p class="title">CEO & Founder</p>
          <p>I'm Viswa, and I started this with passion to make finding event planners to organise your events easier for you. Together, let's make plan your event successfully. -->
          <p><a href="contact.php"><button class="button">Contact</button></a></p>
        </div>
</body>
<footer class="section-p1  banner" >
    <div class="col" style="font-size: 15px;">
            <h4>contact</h4>
            <p><strong>Address : </strong>2-14 ,Near Main-road</p>
            <p>Gokavarm,Andhra Pradesh</p>
            <p><strong>Phone : </strong>9121345262</p>
            <p><strong>Instagram:</strong>Deal FinderX</p>
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
    <div class="col" style="font-size: 15px;">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Privacy policy</a>
        <a href="#">Terms & Conditions</a>
        
    </div>
</footer>
</html>