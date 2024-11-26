<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section id="header">
        <a href="#"><img src="photos/dealfinderx-high-resolution-logo.jpeg" class="logo" alt="Logo" height="100px"></a>
        <div class="searchbar" style="height: 34px; width:280px; background-color: white;">
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

    <section id="main">
        <div class="container">
            <span class="big-circle"></span>
            <img src="photos/shape.png" class="square" alt="" />
            <div class="form">
              <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                    This website is always active in any time.It is providing the best offers under best prices on electronic gadgets, home appliances, dresscodes, utensils what not every thing. My suggestion is always stay tuned for exicting offers and rewards to grab. Hope always these embracing offers are waiting for you . Thank you!!! visit again
                </p>
      
                <div class="info">
                  <div class="information">
                    <img src="photos/location.png" class="icon" alt="" />
                    <p>vizanagaram,ap,535579</p>
                  </div>
                  <div class="information">
                    <img src="photos/email.png" class="icon" alt="" />
                    <p>dealfinderx@gmail.com</p>
                  </div>
                  <div class="information">
                    <img src="photos/phone.png" class="icon" alt="" />
                    <p>9121345262</p>
                  </div>
                </div>
      
                <div class="social-media">
                  <p>Connect with us :</p>
                  <div class="social-icons">
                    <a href="#">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </div>
                </div>
              </div>
      
              <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>
      
                <form action="index.html" autocomplete="off">
                  <h3 class="title">Contact us</h3>
                  <div class="input-container">
                    <input type="text" name="name" class="input" />
                    <label for="">Username</label>
                    <span>Username</span>
                  </div>
                  <div class="input-container">
                    <input type="email" name="email" class="input" />
                    <label for="">Email</label>
                    <span>Email</span>
                  </div>
                  <div class="input-container">
                    <input type="tel" name="phone" class="input" />
                    <label for="">Phone</label>
                    <span>Phone</span>
                  </div>
                  <div class="input-container textarea">
                    <textarea name="message" class="input"></textarea>
                    <label for="">Message</label>
                    <span>Message</span>
                  </div>
                  <input type="submit" value="Send" class="btn" />
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>
    <section>
        <div class="address">
                <div class="address-info">
                    <div class="location-icon">
                        <h4><i class="fa-solid fa-location-dot"></i> Address</h4>
                    </div>
                    <p>4-48 , Ramabhadrapuram</p>
                    <p>vizianagaram</p>
                    <p>535579</p>
                    <p>Andhra Pradesh</p>
                </div>
                <div class="contact-info">
                    <h4> <i class="fa-solid fa-phone"></i> Contact here</h4>
                    <p>Time : 10am to 5pm</p>
                    <div class="contact-icon">
                        <p>+91 9676336741</p>
                        <p>+91 7719534267</p>
                    </div>
                </div>
                <div class="map">
                        <p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7567.623104411258!2d83.2788631!3d18.4921933!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3b978f34215ab3%3A0xf82e281d8b4492cf!2sZP%20High%20School%2C%20Ramabhadrapuram%2C%20Andhra%20Pradesh%20535579!5e0!3m2!1sen!2sin!4v1712726812141!5m2!1sen!2sin" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </p>
                </div>
        </div>
    </section>
</body>
</html> -->






<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables for form data
$name = $email = $phone = $message = "";
$successMessage = "";
$errorMessage = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contact (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    // Execute the statement
    if ($stmt->execute()) {
        $successMessage = " ";
        // Clear form fields after successful submission
        $name = $email = $phone = $message = "";
    } else {
        $errorMessage = "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<section id="header">
    <a href="#"><img src="photos/dealfinderx-high-resolution-logo.jpeg" class="logo" alt="Logo" height="100px"></a>
    <div class="searchbar" style="height: 34px; width:280px; background-color: white;">
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

<section id="main">
    <div class="container">
        <span class="big-circle"></span>
        <img src="photos/shape.png" class="square" alt="" />
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                    This website is always active at any time. It provides the best offers under best prices on electronic gadgets, home appliances, dress codes, utensils, and much more. Stay tuned for exciting offers and rewards! Thank you for visiting!
                </p>

                <!-- Contact Information -->
                <div class="info">
                    <div class="information">
                        <img src="photos/location.png" class="icon" alt="" />
                        <p>Vizanagaram, AP, 535579</p>
                    </div>
                    <div class="information">
                        <img src="photos/email.png" class="icon" alt="" />
                        <p>dealfinderx@gmail.com</p>
                    </div>
                    <div class="information">
                        <img src="photos/phone.png" class="icon" alt="" />
                        <p>9121345262</p>
                    </div>
                </div>

                <!-- Social Media Links -->
                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <?php if (!empty($successMessage)): ?>
                    <p style='color: green;'><?php echo $successMessage; ?></p>
                <?php endif; ?>
                <?php if (!empty($errorMessage)): ?>
                    <p style='color: red;'><?php echo $errorMessage; ?></p>
                <?php endif; ?>

                <!-- Form -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                    <h3 class="title">Contact us</h3>

                    <!-- Name Input -->
                    <div class="input-container">
                        <input type="text" name="name" class="input" value="<?php echo htmlspecialchars($name); ?>" required />
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>

                    <!-- Email Input -->
                    <div class="input-container">
                        <input type="email" name="email" class="input" value="<?php echo htmlspecialchars($email); ?>" required />
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>

                    <!-- Phone Input -->
                    <div class="input-container">
                        <input type="tel" name="phone" class="input" value="<?php echo htmlspecialchars($phone); ?>" required />
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>

                    <!-- Message Textarea -->
                    <div class="input-container textarea">
                        <textarea name="message" class="input" required><?php echo htmlspecialchars($message); ?></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>

                    <!-- Submit Button -->
                    <input type="submit" value="Send" class="btn" />
                </form>
            </div>

        </div> 
    </div> 
</section>

<!-- Additional Address Information -->
<section>
        <div class="address">
                <div class="address-info">
                    <div class="location-icon">
                        <h4><i class="fa-solid fa-location-dot"></i> Address</h4>
                    </div>
                    <p>4-48 , Ramabhadrapuram</p>
                    <p>vizianagaram</p>
                    <p>535579</p>
                    <p>Andhra Pradesh</p>
                </div>
                <div class="contact-info">
                    <h4> <i class="fa-solid fa-phone"></i> Contact here</h4>
                    <p>Time : 10am to 5pm</p>
                    <div class="contact-icon">
                        <p>+91 9676336741</p>
                        <p>+91 7719534267</p>
                    </div>
                </div>
                <div class="map">
                        <p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7567.623104411258!2d83.2788631!3d18.4921933!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3b978f34215ab3%3A0xf82e281d8b4492cf!2sZP%20High%20School%2C%20Ramabhadrapuram%2C%20Andhra%20Pradesh%20535579!5e0!3m2!1sen!2sin!4v1712726812141!5m2!1sen!2sin" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </p>
                </div>
        </div>
    </section>

</body>
</html>
