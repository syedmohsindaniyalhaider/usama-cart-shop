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
    <h1 style="text-align:center;margin-bottom:30px">Customer List</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Job Title</th>
                <th>Social Media</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-column="First Name">James</td>
                <td data-column="Last Name">Matman</td>
                <td data-column="Job Title">Chief Sandwich Eater</td>
                <td data-column="Twitter">@james</td>
            </tr>
            <tr>
                <td data-column="First Name">Andor</td>
                <td data-column="Last Name">Nagy</td>
                <td data-column="Job Title">Designer</td>
                <td data-column="Twitter">@andornagy</td>
            </tr>
            <tr>
                <td data-column="First Name">Tamas</td>
                <td data-column="Last Name">Biro</td>
                <td data-column="Job Title">Game Tester</td>
                <td data-column="Twitter">@tamas</td>
            </tr>
            <tr>
                <td data-column="First Name">Zoli</td>
                <td data-column="Last Name">Mastah</td>
                <td data-column="Job Title">Developer</td>
                <td data-column="Twitter">@zoli</td>
            </tr>
            <tr>
                <td data-column="First Name">Szabi</td>
                <td data-column="Last Name">Nagy</td>
                <td data-column="Job Title">Chief Sandwich Eater</td>
                <td data-column="Twitter">@szabi</td>
            </tr>
        </tbody>
    </table>
</body>

</html>