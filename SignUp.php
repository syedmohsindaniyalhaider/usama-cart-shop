<?php // <--- do NOT put anything before this PHP tag
include('functions.php');
$cookieMessage = getCookieMessage();
?>
<!doctype html>
<html>

<head>
	<link rel="stylesheet" href="./css/shopstyle.css">
	<meta charset="UTF-8" />
	<title>Sign Up Page</title>
	<link rel="stylesheet" type="text/css" href="shopstyle.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<?php
	// display any error messages. TODO style this message so that it is noticeable.
	echo $cookieMessage;
	?>

	<div class="container main-container">
		<input type="checkbox" id="flip">
		<div class="cover">
			<div class="back">
			</div>
		</div>
		<form action='TODO' method='TODO'>
			<div class="form-content">
				<div class="login-form">
					<div class="title">
						<h3>Login</h3>
					</div>
					<div class="input-groups">
						<div class="input-box">
							<input type="email" class="input" placeholder="Enter your email" required>
						</div>
					</div>

					<div class="input-groups">
						<div class="input-box">
							<input type="password" class="input" placeholder="Enter your password" required>
						</div>
					</div>

					<div class="form-link pass">
						<a href="#" class="forgetLink">Forget your password?</a>
					</div>

					<div class="input-groups">
						<div class="button input-box">
							<button>Submit</button>
						</div>
					</div>
					<div class="form-link login-text">
						<span class="forgetPassword">Don't have an account? <label class="link login-link" for="flip">
								<br /> Signup
								now</label></span>
					</div>
				</div>

				<div class="sign-form">
					<div class="title">
						<h3>Signup</h3>
					</div>
					<div class="input-groups">
						<div class="input-box">
							<i class="fas fa-user"></i>
							<input type="text" class="input" placeholder="Enter your name" required>
						</div>
					</div>

					<div class="input-groups">
						<div class="input-box">
							<i class="fas fa-envelope"></i>
							<input type="text" class="input" placeholder="Enter your email" required>
						</div>
					</div>

					<div class="input-groups">
						<div class="input-box">
							<input type="password" class="input" placeholder="Enter your password" required>
						</div>
					</div>

					<div class="input-groups">
						<div class="button input-box">
							<!--	<input type="submit" value="Submit">  -->
							<button>Submit</button>
						</div>
					</div>
					<div class="form-link signup-text">
						<span class="forgetPassword">Already have an account? <label class="link login-link" for="flip">Login now
							</label></span>
					</div>
				</div>
			</div>
		</form>
	</div>

</body>

</html>