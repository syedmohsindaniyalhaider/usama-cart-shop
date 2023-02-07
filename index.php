<?php // <--- do NOT put anything before this PHP tag
include('functions.php');
$cookieMessage = getCookieMessage();
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="./css/shopstyle.css">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="shopstyle.css" />

</head>

<body>
	<?php
	// display any cookie messages. TODO style this message so that it is noticeable.
	echo $cookieMessage;
	?>
	<!-- 
			// TODO put a search box here and a submit button.
			
			// TODO the rest of this page is your choice, but you must not leave it blank.
			
			Possible ideas:
			•	List the 10 most recently purchased products.
			•	Use a CSS Animated Slider.
			•	Display any sales or promotions (using an image)

		-->
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
	<div class="wrapper">
		<div class="search-container">
			<form role="search" method="get" class="search-form form" action="">
				<label>
					<input type="search" class="search-field" placeholder="Type something..." value="" name="s" title="" />
				</label>
			</form>
		</div>
	</div>

	<div class="gallery-wrapper">
		<h1>Popular Products</h1>
		<div class="gallery-container">
			<div class="horizontal"><img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt=""></div>
			<div class="vertical"><img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(32).jpg" alt=""></div>
			<div><img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg" alt=""></div>
			<div class="big"><img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt=""></div>
			<div class="vertical"><img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(32).jpg" alt=""></div>
			<div class="horizontal"><img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt=""></div>
			<div><img src="https://picsum.photos/200/220" alt=""></div>
			<div class="horizontal"><img src="https://picsum.photos/450/200" alt=""></div>
			<div><img src="https://picsum.photos/220/250" alt=""></div>
			<div><img src="https://picsum.photos/250/200" alt=""></div>
		</div>
	</div>

</body>

</html>