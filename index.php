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
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Korean Delight Skincare">
        </div>
        <nav>
            <ul class="menu">
                <li class="hover-underline-animation"><a href="#">HOME</a></li>
                <li class="hover-underline-animation"><a href="Products/products.html">PRODUCTS</a></li>
                <li class="hover-underline-animation"><a href="#">ABOUT</a></li>
                <li class="hover-underline-animation"><a href="#">CONTACT US</a></li>
            </ul>
        </nav>
        <div class="actions">
            <div class="search-container">
                <input type="text" id="search-bar" placeholder="Search...">
                <button id="search-button"><image src="search.png"></button></image>
            </div>
            <a class="user-icon" href="/Byeolbit/login.php"> <img src="user.png"></a>
            <a class="user-icon" href="#"> <img src="shopping-bag.png"></a>
            <select id="language-selector" onchange="changeLanguage()" image src="world.png">
                <option value="en">EN</option>
                <option value="de">DE</option>
                <!-- Add more languages as needed -->
            </select>
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
            <select id="language-selector" onchange="changeLanguage()">
                <option value="en">EN</option>
                <option value="de">DE</option>
                <!-- Add more languages as needed -->
            </select>
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
                <img src="product1.png" alt="Product 1">
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
    
        </div>
        <script src="script.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        
    </section>
    
    <footer>
        <p>&copy; 2024 My Website</p>
    </footer>
    
    
</body>
</html>
