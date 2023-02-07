<?php // <--- do NOT put anything before this PHP tag

include('functions.php');

// get the cookieMessage, this must be done before any HTML is sent to the browser.
$cookieMessage = getCookieMessage();

?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8" />
	<title>View Cart Page</title>
	<link rel="stylesheet" type="text/css" href="./css/shopstyle.css" />
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


	<div class="shopping-cart" style="margin-top:100px">
		<div class="column-labels">
			<label class="products-image">Image</label>
			<label class="product-details">Product</label>
			<label class="product-price">Price</label>
			<label class="product-line-price">Total</label>
		</div>

		<div class="product">
			<div class="products-image">
				<img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(32).jpg">
			</div>
			<div class="product-details">
				<div class="product-title">Wrist Watch</div>
				<p class="product-description">The similarities to Rolex’s Cosmograph Daytona were much-remarked upon when it came out last year, but if you’re going to be compared to one watch, it may as well be that. Rolex’s icon with the ceramic bezel and panda dial is one of the best-looking designs ever made. Plus, Zenith equipped its new Chronomaster with its proprietary “El Primero” movement</p>
			</div>
			<div class="product-price">12.99</div>
			<div class="product-line-price">25.98</div>
		</div>
		<button class="checkout">Checkout</button>
	</div>
	<?php
	// does the user have items in the shopping cart?
	if (isset($_COOKIE['ShoppingCart']) && $_COOKIE['ShoppingCart'] != '') {
		// the shopping cart cookie contains a list of productIDs separated by commas
		// we need to split this string into an array by exploding it.
		$productID_list = explode(",", $_COOKIE['ShoppingCart']);

		// remove any duplicate items from the cart. although this should never happen we 
		// must make absolutely sure because if we don't we might get a primary key violation.
		$productID_list = array_unique($productID_list);

		$dbh = connectToDatabase();

		// create a SQL statement to select the product and brand info about a given ProductID
		// this SQL statement will be very similar to the one in ViewProduct.php
		$statement = $dbh->prepare('
			
			--TODO PUT YOUR SQL HERE--
			
		');

		$totalPrice = 0;

		// loop over the productIDs that were in the shopping cart.
		foreach ($productID_list as $productID) {
			// great thing about prepared statements is that we can use them multiple times.
			// bind the first question mark to the productID in the shopping cart.
			$statement->bindValue(1, $productID);
			$statement->execute();

			// did we find a match?
			if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				//TODO Output information about the product. including pictures, description, brand etc.				
				//TODO add the price of this item to the $totalPrice
			}
		}

		// TODO: output the $totalPrice.

		// if we have any error messages echo them now. TODO style this message so that it is noticeable.
		echo "$cookieMessage";

		// you are allowed to stop and start the PHP tags so you don't need to use lots of echo statements.
	?>
		<form action='ProcessOrder.php' method='POST'>

			<!-- TODO put a text input here so the user can type in their UserName.
					 this input tag MUST have its name attribute set to 'UserName' -->

			<!-- TODO put a submit button so the user can submit the form -->

		</form>

		<form action='EmptyCart.php' method='POST'>
			<input type='submit' name='EmptyCart' value='Empty Shopping Cart' id='EmptyCart' />
		</form>
	<?php
	} else {
		// if we have any error messages echo them now. TODO style this message so that it is noticeable.
		echo "$cookieMessage <br/>";

		// echo "You Have no items in your cart!";
	}
	?>
</body>

</html>