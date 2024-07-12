<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Byeolbit</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

    <header>
    <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <nav>
            <ul class="menu">
                <li class="hover-underline-animation"><a href="#">HOME</a></li>
                <li class="hover-underline-animation"><a href="Products/products.html">PRODUCTS</a></li>
                <li class="hover-underline-animation"><a href="#about-section">ABOUT</a></li>
                <li class="hover-underline-animation"><a href="#">CONTACT US</a></li>
            </ul>
        </nav>
        <div class="actions">
            <div class="search-container">
                <input type="text" id="search-bar" placeholder="Search...">
                <button id="search-button"><image src="search.png"></button></image>
            </div>
            <a class="user-icon" href="/Byeolbit2024/Byeolbit/login.php"> <img src="user.png"></a>
    </div>
            
        </div>
        <div class="menu-toggle">
            <span>Home</span>
            <span>About</span>
            <span>Products</span>
            <span></span>
            <span>
            <div class="search-container">
                <input type="text" id="search-bar" placeholder="Search...">
                <button id="search-button"><image src="search.png"></button></image>
            </div>
            </span>
            <span>
                <img src="user.png" class="user-icon"><a href="#"></a>
        </span>
        <span>
            <img src="shopping-bag.png" class="cart-icon"><a href="#"></a></span>
            <span>
            <div class="language-switch">
            <button id="language-btn"><img src="world.png" alt="Language"></button>
            <div id="language-dropdown" class="dropdown-content">
                <button id="en-btn">EN</button>
                <button id="de-btn">DE</button>
            </div>
        </div>
    </span>
    </span>

        </div>
    </header>
       
    
    
    <section class="hero">
        <div class="hero-content">
            <h2>Lorem ipsum dolor sit amet</h2>
            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <br>
            <br>
            <button>Shop now</button>
        </div>
        <img src="image1.png" alt="Hero Image" class="hero-image">
    </section>
    
    <section class="products">
        <h2>Our Products</h2>
        <div class="product-container">
            <div class="product-box">
                <img src="Products/product1.PNG" alt="Product 1">
                <button class="show-button">SHOW PRODUCT</button>
            </div>
            <div class="product-box">
                <img src="product2.png" alt="Product 2">
                <button class="show-button">SHOW PRODUCT</button>
            </div>
            <div class="product-box">
                <img src="product3.png" alt="Product 3">
                <button class="show-button">SHOW PRODUCT</button>
            </div>
            <div class="product-box">
                <img src="product4.png" alt="Product 4">
                <button class="show-button">SHOW PRODUCT</button>
            </div>
        </div>
        <br>
        <a href="Products/products.html" class="custom-button">Shop More</a>
        </div>

        <section class="about-us" id="about-section">
        <div class="left-column">
            <h1>ABOUT US</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend libero id suscipit pretium. Integer in euismod ipsum. Nulla id ultrices ligula. Pellentesque aliquet lacus quis nisl viverra, et iaculis libero blandit. Maecenas quis volutpat eros, sit amet egestas arcu. Suspendisse aliquet odio eget dapibus egestas. Ut nec metus porttitor, tincidunt eros vel, gravida arcu. Praesent consectetur vel justo vel ornare. Quisque vel tristique justo.</p>
        </div>
        <div class="right-column">
            <img src="/Products/product11.JPG" alt="About Us Image">
            
        </div>
        
    </section>
    
        <script src="script.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </section>
    <div class="container">
        <div class="contact-info">
            <h1>Contact Us</h1>
            <p>Not sure what you need? The team at Square Events will be happy to listen to you and suggest event ideas you hadn't considered</p>
            <p><img src="email.png" alt="Email Icon"> info@squareevents.com</p>
            <p><img src="phone-call.png" alt="Phone Icon"> Support: (+21) 123 456 586</p>
            <div class="social-media">
                
                <a href="#"><img src="social.png" alt="Instagram Icon"></a>
            </div>
        </div>
        <div class="contact-form">
            <h2>We'd love to hear from you! Let's get in touch</h2>
            <form action="submit_form.php" method="post">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
                <label for="company">Company</label>
                <input type="text" id="company" name="company">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone">
                <label for="address">Address</label>
                <input type="text" id="address" name="address">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <footer>
        <p>&copy; 2024 My Website</p>
    </footer>
    
    
</body>
</html>
