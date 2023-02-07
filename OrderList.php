<?php // <--- do NOT put anything before this PHP tag
include('functions.php');
$cookieMessage = getCookieMessage();
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/shopstyle.css">
    <title>TODO put title here</title>
    <link rel="stylesheet" type="text/css" href="shopstyle.css" />

</head>

<body>
    <div style="margin-bottom:150px;overflow:hidden">
        <nav class="navbar">
            <div class="navbar-container ">
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
    </div>
    <h1 style="text-align:center;margin-bottom:30px">Order List</h1>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-column="First Name"> <img width="230px;height:180px" src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(32).jpg" alt="Product Name" class="product-image"></td>
                <td data-column="Last Name">Ahmed Ali</td>
                <td data-column="Job Title">Rawalpindi Pakistan</td>
                <td data-column="Twitter">@ahmed.gmail.com</td>
                <td data-column="Twitter"><button style="padding:5px 10px;color:#fff">checkout</button></td>
            </tr>
            <tr>
                <td data-column="First Name"> <img width="230px;height:180px" src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="Product Name" class="product-image"></td>
                <td data-column="Last Name">Mehmood Khan</td>
                <td data-column="Job Title">Karachi Pakistan</td>
                <td data-column="Twitter">@mehmood.gmail.com</td>
                <td data-column="Twitter"><button style="padding:5px 10px;color:#fff">checkout</button></td>
            </tr>
        </tbody>
    </table>
</body>

</html>