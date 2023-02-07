<?php // <--- do NOT put anything before this PHP tag
include('functions.php');
$cookieMessage = getCookieMessage();
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/productlist.css">
    <link rel="stylesheet" href="./css/shopstyle.css">
    <title>Product List Page</title>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-container">
            <ul class="menu-items">
                <li><a href="./index.php">Homepage</a></li>
                <li><a href="./ProductList.php">ProductList</a></li>
                <li><a href="./ViewCart.php">ViewCart</a></li>
                <li><a href="./CustomerList.php">CustomerList</a></li>
                <li><a href="./OrderList.php">OrderList</a></li>
                <li><a href="./signUp.php">SignUp</a></li>
            </ul>
            <h1 class="main-title">My Store</h1>
        </div>
    </nav>

    <main>
        <h1 style="text-align:center;margin-bottom:50px;margin-top:100px">Product List</h1>
        <div class="drop-down" style="text-align:center;margin-bottom:50px">
            <select>
                <option value="">Populaty</option>
                <option value="">Name: A-Z</option>
                <option value="">Name: Z-A</option>
                <option value="">Low To High</option>
                <option value="">High To Low</option>
            </select>
        </div>
        <div class="product-container">
            <div class="product-card">
                <img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(32).jpg" alt="Product Name" class="product-image">
                <h3 class="product-name">Watches</h3>
                <p class="product-description">It's never too late or too early to get a watch!</p>
                <div class="product-price">$99.99</div>
                <button class="add-to-cart-button">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="Product Name" class="product-image">
                <h3 class="product-name">Watches</h3>
                <p class="product-description">It's never too late or too early to get a watch!</p>
                <div class="product-price">
                    $99.99
                </div>
                <button class="add-to-cart-button">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg" alt="Product Name" class="product-image">
                <h3 class="product-name">Bags</h3>
                <p class="product-description">When you really need to carry extra stuff</p>
                <div class="product-price">$199.99</div>
                <button class="add-to-cart-button">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="Product Name" class="product-image">
                <h3 class="product-name">Sun Glasses</h3>
                <p class="product-description">Super Helpful</p>
                <div class="product-price">
                    $299.99
                </div> <button class="add-to-cart-button">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(32).jpg" alt="Product Name" class="product-image">
                <h3 class="product-name">Watches</h3>
                <p class="product-description">It's never too late or too early to get a watch!</p>
                <div class="product-price">$99.99</div>
                <button class="add-to-cart-button">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="Product Name" class="product-image">
                <h3 class="product-name">Watches</h3>
                <p class="product-description">It's never too late or too early to get a watch!</p>
                <div class="product-price">
                    $99.99
                </div>
                <button class="add-to-cart-button">Add to Cart</button>
            </div>
        </div>
    </main>
</body>

</html>